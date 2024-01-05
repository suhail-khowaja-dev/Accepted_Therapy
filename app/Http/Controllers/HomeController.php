<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use App\Models\User;
use App\Models\Content;
use App\Models\Location;
use App\Models\Speciality;
use Illuminate\Support\Str;
use App\Models\Configuration;
use Illuminate\Http\Request;
use App\Models\TeamManagement;
use App\Models\ScheduleManagement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact_inquiry_model;
use App\Models\Faq;
use Illuminate\Support\Carbon;
use App\Models\FaqType;
use App\Models\TeamManagement_Location;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Models\Package;

class HomeController extends Controller
{
    public function index(){
        $packages = Package::where('status',1)->get();
        // return $packages;
        $cms_contents = Content::all();
        $teams = TeamManagement::where('status',1)->with('therapist_specialities')->get();
        $locations = Location::where('status',1)->get();

        return view('index', compact('teams','cms_contents','locations','packages'));
    }

    public function sign_in_form(Request $request){


        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                ['status' => 404, 'errors' => $validator->errors()->toArray()]
            );
        }else{



        $email = $request->email;
        $password = $request->password;


        $user = User::where('email',$email)->whereStatus(0)->first();

        if($user){
            return response()->json([
                'status' => 400,
                'message' => 'Your account has been pending, Please Contact with admin'
            ]);
        }

        $admin = User::where('email',$email)->where('role',1)->first();
        if(!empty($admin)){
            return response()->json([
                'admin' => 'admin',
            ]);
        }

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return response()->json([
                'status' => 200,
                'message' => 'You have Logged in'
            ]);
        }else{
            return response()->json([
                'status' => 400,
                'message' => 'Email or password invalid'
            ]);
        }

    }

    }

    public function sign_up_view(){

        return view('signup');
    }

    public function sign_up_form(Request $request){

        $validator = Validator::make($request->all(), [
            'password' =>  ['required', Password::min(8)->mixedCase()->numbers()->symbols()],
            'email' => 'required|email|unique:users',
            'name' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(
                ['status' => 400, 'errors' => $validator->errors()->toArray()]
            );
        }else{
            $validated = $validator->validated();
            $validated['password'] = $request->password;
            $validated['role'] = '2';
            // $validated['status'] = '0';


            session()->put('user_signup',$validated);

            // $user = User::create($validated);


            // $email = $request->email;

            // Mail::send('email_templates.sign_up', ['user'=>$email], function ($messages) use ($email) {
            //     $messages->to($email);
            //     $messages->subject('Customer Contact');
            // });

            // return response()->json(['status' => 200,'message' => 'Your account has been pending, Please buy plan and active your account.']);

            return response()->json(['status' => 200]);

        }




    }


    public function forget_password(){
        return view('forget_password');
    }
    public function update_password(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->toArray()]);
        }

        $user = User::where('email',$request->email)->first();
        if(empty($user)){
            return response()->json([
                'status' => 404,
                'message'=>'Email does not exist'
            ]);
        }
        $email= $request->email;
        $token = uniqid(Str::random(32));
        Mail::send('email_templates.forget_password', ['data'=>true,'user'=>$email, 'token' => $token], function ($messages) use ($email) {
            $messages->to($email);
            $messages->subject('Password Reset');
        });




        $user = User::where('email',$email)->first();
        if($user){

            $user->remember_token = $token;
            $user->update();

        }

        return response()->json([
            'status' => 200,
            'message'=>'Please check your email address.'
        ]);

    }


    public function reset_password(){
        return view('reset_password');
    }


    public function password_change(Request $request, $token){

        $request->validate([
            'password' => 'required',
        ]);


        $user = User::where('remember_token',$token)->first();
        if($user){
            $user->password = Hash::make($request->password);
            $user->remember_token = null;
            $user->update();
            return redirect()->route('home')->with('password_reset' , 'Password has been changed successfully!');
        }else {
            return redirect()->route('home')->with('password_error' , 'Invalid User!');
        }

    }


    public function contact_us(){
        $locations = Location::where('status',1)->get();
        return view('contact', get_defined_vars());
    }

    public function contact(Request $request){

          
        $validator = Validator::make($request->all(), [
            'message' => 'required',
            'email' => 'required|email',
            'name' => 'required',
        ]);

        if(!$validator->passes()){

            return response()->json(['status' => 0,'error' => $validator->errors()->toArray()]);

        }else{
            $values = [
                'full_name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'location' => $request->location,
                'created_at' => Carbon::now()
            ];
            $email = $request->email;
            $query = DB::table('contact_inquiry_models')->insert($values);
            
            if($query){
                Mail::send('email_templates.contact_us', ['data'=>true,'customer'=>$email], function ($messages) use ($email) {
                    $messages->to($email);
                    $messages->subject('Customer Contact');
                });
          
                    //  Mail::send('email_templates.admin_contact', ['data' => $values], function($message) {
                    //     $message->subject("A new Member has been Registered" );
                    //     $message->from('sales@designprosusa.com', 'Your application title');
                    //     $message->to('fredaston49@gmail.com');
                    // });
                    
                // $email_admin ='nikki@acceptedtherapy.com';
                // Mail::send('email_templates.admin_contact', ['data' => $values], function ($messages) use ($email_admin) {
                //     return $email_admin;
                //     $messages->to($email_admin);
                //     $messages->subject('Customer Contact');
                // });
                
                
                    $email_admin = 'nikki@acceptedtherapy.com';
                    //  $data = [];
                    // $data['email'] =  $email_admin;
        
                    Mail::send('email_templates.admin_contact', ['data' => $values], function ($messages) use ($email_admin) {
                        $messages->to($email_admin);
                        $messages->subject('Customer Contac');
                    });


                return response()->json(['status' => 1,'message' => 'Thank You for contacting us']);
            }

        }

        // return view('contact');
    }

    public function resources(){

        return view('resources');
    }


    public function schedule(Request $request, $id = null){

        $therapists = TeamManagement::whereStatus(true)->get();

        if(!empty($id)){
            $preferred_therapist = TeamManagement::whereSlug($id)->first();
        }

        return view('scheduling',get_defined_vars());
    }

    public function schedule_store(Request $request){
        // return $request->all();
        $validated = $request->validate([
            'schedule_insurance' => 'required',
            'location' => 'required',
            'schedule_message' => 'required',
            'schedule_phone' => 'required',
            'schedule_email' => 'required|email',
            'schedule_name' => 'required',
            'team_management_id' => 'required',
        ]);
        // return $request->all();

        // return $request->schedule_email;
        $ScheduleManagement = ScheduleManagement::create($validated);
        if($ScheduleManagement){

            if($request->team_management_id != 0){
                $preferred_therapist = TeamManagement::find($request->team_management_id);

                // return $request->team_management_id;
                // $email = $preferred_therapist->email;
                // $email = '';
                // return $request->team_management_id;
                    $email =  $preferred_therapist->email;
                    Mail::send('email_templates.preffered_therapist', ['data'=>true,'user_inputs' => $validated,'new_data'=>$preferred_therapist], function ($messages) use ($email) {
                        $messages->to($email);
                        $messages->subject('Client Schedule');
                    });

                // $email_to = $validated['schedule_email'];
                //     Mail::send('email_templates.preffered_therapist', ['user_inputs' => $validated,'data'=>$preferred_therapist], function ($messages) use ($email_to) {
                //     $messages->to($email_to);
                //     $messages->subject('Client Schedule');
                // });
            }

            else  {
                $preferred_therapist = TeamManagement::find($request->team_management_id);
                $email = 'nikki@acceptedtherapy.com';
                Mail::send('email_templates.preffered_therapist', ['data'=>true,'user_inputs' => $validated,'new_data'=>$preferred_therapist], function ($messages) use ($email) {
                    $messages->to($email);
                    $messages->subject('Client Schedule');
                });
            }
            
            // $email = 'fredaston49@gmail.com';
            // $data = [];
            // $data['email'] =  $request->schedule_email;
            // $data['client_name'] = $request->schedule_name;
            // $data['location'] = $request->location;
            // $data['schedule_phone'] = $request->schedule_phone;
            // $data['schedule_insurance'] =  $request->schedule_insurance;
            // $data['schedule_message'] =  $request->schedule_message;

            // Mail::send('resource_form_email_template.scheduling_form', ['data'=>true, 'new_data'=>$data], function ($messages) use ($email) {
            //     $messages->to($email);
            //     $messages->subject('Scheduling Form');
            // });
            
            return back()->with('schedule_created','Schedule created successfully');
        }else{
            return back()->with('schedule_error','Schedule Fail');
        }
    }


    public function therapist(Request $request, $slug){
        $team = TeamManagement::where('slug',$slug)->with('therapist_specialities')->first();
        if(empty($team)){
            return view('404');
        }
        return view('therapist',compact('team'));
    }

    public function faq_view(){
        $faqs = FaqType::where('status',1)->with('get_type_name')->get();
        return view('faq', get_defined_vars());
    }

    public function location(){

        return view('location');
    }

    public function payment_cards(){

        return view('payment_card');
    }

    public function intake_form(){

        return view('resources_forms.intake_form');
    }

    public function referral_form(){

        return view('resources_forms.referral');
    }


    public function location_details(Request $request, $id){
        $location = Location::find($id);

        $therapists = TeamManagement_Location::where('location_id',$id)->with('related_location_therapist')->has('related_location_therapist','!=','')->get();
        // return $therapists->toArray();
        return view('location',compact('location','therapists'));
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }


    public function pusher_event(){

        event(new MyEvent ('working'));
        return "pusher event has been fired!";
    }


}
