<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\PackageSubscriber;
use App\Models\Pdf;
use App\Models\User;
use App\Models\UserLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){





        $user_links = UserLink::where('user_id',Auth::id())->get();
        if(count($user_links) == 0){
            $packgeSubscriber = PackageSubscriber::where('user_id',Auth::id())->latest()->first();
            if(empty($packgeSubscriber->package_id)){
                $notification = array('message' => 'Please Purchase Package to Login', 'alert-type' => 'error');
                return redirect()->back()->with($notification);
            }
            // return $packgeSubscriber;
            if(!empty($packgeSubscriber->package_id) == 1){
                $this->linkGenrateByPackage(1);
            }
            if(!empty($packgeSubscriber->package_id)  == 2){
                $this->linkGenrateByPackage(4);
            }
            if(!empty($packgeSubscriber->package_id)  == 3){
                $this->linkGenrateByPackage(4);
            }
        }

        return view('user.index');
    }

    public function user_profile(){
        return view('user.profile.index');
    }

    public function user_profile_update(Request $request, $id){
        // return request()->all();
       $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        // $data['role'] = 2;
        $data['password'] = Hash::make($request->password);
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['state'] = $request->state;
        $data['country'] = $request->country;
        $data['zip'] = $request->zip;

        if($request->profile_image){
            $imageName = time() . '.' . $request->profile_image->extension();
            $request->profile_image->move('uploads/agency_member/', $imageName);
            $data['profile_image']   = $imageName;
        }

        unset($data['confirm_password']);

        $user = User::where('id', $id)->update($data);
        if($user){

            return back()->with('user_updated','User Profile Updated Successfully!');
        }else{
            return back()->with('user_error','Something Went Wrong, Please Try Again!');
        }
    }

    public function user_password_show(){
        return view('user.profile.change_password');
    }



    public function user_change_password(Request $request, $id){

        $data = $request->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        // $data['role'] = 2;
        $data['password'] = Hash::make($request->password);

        unset($data['confirm_password']);

        $user = User::where('id', $id)->update($data);
        if($user){

            return back()->with('password_updated','Password Updated Successfully!');
        }else{
            return back()->with('password_error','Something Went Wrong, Please Try Again!');
        }
    }

    public function link_generate(){
        $user_links = User::where('id', Auth::id())->has('get_user_links')->get();
        return view('user.link_generate', get_defined_vars());
    }

    public function request_password(Request $request){

        $validator = Validator::make($request->all(), [
            'write_note' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(
                ['status' => 400, 'errors' => $validator->errors()->toArray()]
            );
        }


        $req_password = UserLink::find($request->request_password_id);
        $req_password->request_for_password = $request->write_note;
        $req_password->save();

        if($req_password){

            $email = 'nikki@acceptedtherapy.com';

            $data = array(
                'name' =>Auth::user()->name,
                'email'=> Auth::user()->email,
                'id'=>$request->request_password_id,
                'message'=> $request->write_note
            );

            Mail::send('user.email_templates.user_password_request', ['data'=>true,'new_data'=>$data], function ($messages) use ($email) {
                $messages->to($email);
                $messages->subject('Request For Password');
            });

            return response()->json(
                ['status' => 200, 'message' => 'Your request submitted successfully!']
            );
        }

    }

    public function prepare_link(Request $request){

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        $length = 35;

        // link
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $randomPassword = '';
        $length = 15;

        // Password
        for ($i = 0; $i < $length; $i++) {
            $randomPassword .= $characters[rand(0, $charactersLength - 1)];
        }

       return response()->json(['link' => $randomString,'password'=> $randomPassword]);

    }



    public function regenerate_password(Request $request){

        $get_user = UserLink::find($request->id);

        if($get_user->link_used_count == 0){

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomPassword = '';
            $length = 15;

            // Password
            for ($i = 0; $i < $length; $i++) {
                $randomPassword .= $characters[rand(0, $charactersLength - 1)];
            }

            return response()->json([
                'status' => 200,
                'get_user' => $get_user,
                'password'=> $randomPassword
            ]);
        }else{

            return response()->json(['status'=> 404]);


        }




    }

    public function regenerate_password_store(Request $request){

        $get_user = UserLink::find($request->regenerate_password_id);
        $get_user->password = Hash::make($request->password);
        $get_user->actual_password = $request->password;
        $get_user->save();
        if($get_user){

            return response()->json([
                'status' => 200,
                'message' => 'Password has been regenrated successfully',
            ]);
        }else{

            return response()->json([
                'status' => 404,
                'message' => 'Sorry something went wrong, Please try again!',
            ]);


        }

    }





    public function link_store(Request $request){



        $validator = Validator::make($request->all(), [
            'link_generate' => 'required',
            // 'email' => 'required'
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(
                ['status' => 400, 'errors' => $validator->errors()->toArray()]
            );

        }else{



        $link = $request->link_generate;
        // $email = $request->email;



        $user = User::where('id',Auth::id())->where('link_expire_count','!=',null)->whereStatus(1)->first();

        if(empty($user)){
            return response()->json([
                'status' => 404,
                'message' => 'Sorry you can not generate link until purchase plan, becuase you have used all'
            ]);
        }else{


            // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            // $charactersLength = strlen($characters);
            // $randomPassword = '';
            // $length = 15;

            // // link
            // for ($i = 0; $i < $length; $i++) {
            //     $randomPassword .= $characters[rand(0, $charactersLength - 1)];
            // }

            $newLink = new UserLink();
            $newLink->user_id = Auth::id();
            // $newLink->email = $email;
            $newLink->password = Hash::make($request->password);
            $newLink->actual_password = $request->password;
            $newLink->generated_link = $link;
            $newLink->link_used_count = 2;
            $newLink->status = 1;
            $newLink->save();

            User::find(Auth::id())->decrement('link_expire_count');

            // Mail::send('user.email_templates.user_share_credentials', ['email'=>$email, 'password'=>$randomPassword,'link'=>$link], function ($messages) use ($email) {
            //     $messages->to($email);
            //     $messages->subject('Username and Password Link');
            // });

            return response()->json([
                'status' => 200,
                'message' => 'You have generated link successfully!'
            ]);

        }

    }



    }




    public function link_delete(Request $request){

        $userlink = UserLink::find($request->id);
        $userlink->delete();
        if($userlink){
            return response()->json([
                'status' => 200,
                'message' => 'You have Deleted link successfully!'
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Sorry Something went wrong!'
            ]);
        }

    }


    public function linkGenrateByPackage($package_count){

        $dispatch = User::where('agent_link',auth()->id())->get();
        $idsToKeep = $dispatch->pluck('id')->toArray();

        foreach ($dispatch as $route) {
            $route->delete();
        }


        for ($x = 0; $x < $package_count; $x++) {


            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            $length = 35;

            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $randomPassword = '';
            $lengthPassword = 15;

            // Password
            for ($i = 0; $i < $lengthPassword; $i++) {
                $randomPassword .= $characters[rand(0, $charactersLength - 1)];
            }





            $userlink = new UserLink;
            $userlink->user_id = Auth::id();
            $userlink->password = Hash::make($randomPassword);
            $userlink->actual_password = $randomPassword;
            $userlink->generated_link = $randomString;
            $userlink->link_used_count = 2;
            $userlink->status = 1;
            $userlink->save();

            $count = 2;
            for ($j = 1; $j <= $count; $j++) {
                $user = new User;
                $user->name = '';
                $user->role = '';
                $user->email = $randomString.$j.'@gmail.com';
                $user->password = Hash::make($randomPassword);
                $user->actual_password = $randomPassword;
                $user->agent_link = Auth::id();
                $user->link_id = $userlink->id;
                $user->login_checkpoint = 1;
                $user->status = 1;
                $user->save();
            }

        }

    }




    public function password_genrate(Request $request, $id){

        $user_link = UserLink::find($id);
        // return $user_link;

        // UserLink::find($id)->with('for_user_links')->get();

        if($user_link->link_used_count == 0){

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomPassword = '';
            $length = 15;

            // Password
            for ($i = 0; $i < $length; $i++) {
                $randomPassword .= $characters[rand(0, $charactersLength - 1)];
            }

            $user_link->password = Hash::make($randomPassword);
            $user_link->actual_password = $randomPassword;
            $user_link->link_used_count = 2;
            $user_link->used_status = 1;
            $user_link->save();

            $user = User::find($user_link->user_id);
            $email = $user->email;
            $data = array(
                'link' => $user_link->generated_link,
                'password' => $randomPassword,
                'name' => $user->name,
                'email' => $user->email
            );


            $update_password = User::where('link_id',$id)->with('for_user_links')->get();
            foreach($update_password as $up){
                // $pass_update = User::where('link_id',$id)->with('for_user_links')->get();
                $up->name = '';
                $up->role = '';
                $up->password = Hash::make($randomPassword);
                $up->actual_password = $randomPassword;
                $up->login_checkpoint = 1;
                $up->status = 1;
                $up->save();
            }



            Mail::send('admin.email_templates.password_generated',['data'=>true,'new_data'=>$data], function($messages) use ($email) {
            $messages->to($email);
            $messages->subject('Password Generated Notification');
            });

            return back()->with('user_password_success', 'Password has been generated');
        }else{

            return back()->with('user_password_fail','Password is not generate, something went wrong!');


        }

    }

    public function update_plan(){
        $packages = Package::where('status',1)->take(3)->get();
        // $agetn_package = PackageSubscriber::where('user_id', Auth::id())->orderBy('id','desc')->first();
        return view("user.package.update_plan",get_defined_vars());
    }

    public function agent_pay_amount(){
        return view("user.package.pay_amount");
    }

    public function pdf_download(){
        $pdf = Pdf::get();
        return view('user.pdf_download',compact('pdf'));
    }



}
