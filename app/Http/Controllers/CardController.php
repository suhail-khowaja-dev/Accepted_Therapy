<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Pusher\Pusher;

class CardController extends Controller
{
    public function index(Request $request, $link){


        return view("card_login", compact('link'));
    }

    public function login_card(Request $request){
        
        

        $validator = Validator::make($request->all(), [
            'password' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['status'=>400, 'errors'=>$validator->errors()->toArray()]);
        }

        $user_card = UserLink::where('generated_link',$request->link)->first();
        
        if(Hash::check($request->password, $user_card->password)){
            
            // check login count avalability
            if($user_card->link_used_count == 0){

                return response()->json([
                    'status' => 401,
                    'message'=>'Your Link Has been expired please contact your agent'
                ]);

            }


            // count reduce
            UserLink::find($user_card->id)->decrement('link_used_count');
            
            session()->put('card_session_acive',$request->link);

            $user_check_availability = UserLink::where('generated_link',$request->link)->first();
            if($user_check_availability->link_used_count == 0){

                $user_check_availability->password = null;
                $user_check_availability->actual_password = null;
                $user_check_availability->request_for_password = null;
                $user_check_availability->used_status = null;
                $user_check_availability->save();

            }

            return response()->json([
                'status' => 200,
                'message'=>'You have successfully login in',
                'session_active_link'=> route('show_card', ['link'=> session()->get('card_session_acive')]),
            ]);

        }else{

            return response()->json([
                'status' => 404,
                'message'=>'Password mismached please try again.'
            ]);

        }

        
    }

    public function show_card(Request $request, $link){
        $active_link = $link;
        return view("card", get_defined_vars());
    }



    public function sendPrivateMessage(Request $request, User $user){
        $input = $request->all();
        $input['reciever_id'] = $user->id;
        $message = auth()->user()->messages()->create($input);
        $options = array(
                        'cluster' => env('PUSHER_APP_CLUSTER'),
                        'encrypted' => true
                        );
        $pusher = new Pusher(
                            env('PUSHER_APP_KEY'),
                            env('PUSHER_APP_SECRET'),
                            env('PUSHER_APP_ID'), 
                            $options
                        );

        $data['message'] = $input['reciever_id'];
        $data['card_id']=$message->message;
        $pusher->trigger('notify-channel', 'App\\Events\\Notify', $data);

    }
}
