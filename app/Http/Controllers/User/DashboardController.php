<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact_inquiry_model;
use App\Models\Content;
use App\Models\Article_moldel;
use App\Models\Dynamic_page;
use App\Mail\ContactMail;
use App\Models\Configuration;
use App\Models\Location;
use Mail;
use Config;
class DashboardController extends Controller
{
    //
    public function contact(){
    
       return view('web.contact');
    }

    public function about(){
          $content_id_1=Content::findorfail(1);
             $content_id_2=Content::findorfail(2);
             $content_id_6=Content::findorfail(6);
            $client_list=Article_moldel::where('status', '!=' , 0)->orderBy('id', 'DESC')->get();
    	 return view('web.about',compact('content_id_1','content_id_2','content_id_6','client_list'));
    }


     public function policy(){
        $content_id_7=Content::findorfail(7);
    	 return view('web.policy',compact('content_id_7'));
    }


    public function quote(){
    	 return view('web.quote');
    }

     public function location(){
        $locations=Location::where('status', '!=' , 0)->orderBy('id', 'DESC')->get();
    	 return view('web.location',compact('locations'));
    }
        public function dashboard(){
             $content_id_1=Content::findorfail(1);
             $content_id_2=Content::findorfail(2);
             $content_id_3=Content::findorfail(3);
             $content_id_4=Content::findorfail(4);
             $content_id_5=Content::findorfail(5);
             $client_list=Article_moldel::where('status', '!=' , 0)->orderBy('id', 'DESC')->get();
             
           $service_warehouse=Dynamic_page::where('status', '!=' , 0)->where('type', '=' , 1)->take(4)->orderBy('id', 'ASC')->get();
$service_warehouse2=Dynamic_page::where('status', '!=' , 0)->where('type', '=' , 1)->skip(4)->take(2)->orderBy('id', 'ASC')->get();
$service_delivery=Dynamic_page::where('status', '!=' , 0)->where('type', '=' , 2)->take(4)->orderBy('id', 'ASC')->get();
$service_delivery2=Dynamic_page::where('status', '!=' , 0)->where('type', '=' , 2)->skip(4)->take(3)->orderBy('id', 'ASC')->get();
    	 return view('web.index',compact('content_id_1','content_id_2','content_id_3','content_id_4','content_id_5','client_list','service_warehouse','service_delivery','service_warehouse2','service_delivery2'));
    }

       public function contact_inquiry(request $request){

//return "a";
// $useremail =User::where('email', $request->email)->first();
// if($useremail==$request->email){

//   return back()->with('Email_exist','your email is exist');
// }
        $this->validate($request,[
                'name' => 'required|min:3|max:20',
                'email' => 'required',
                'phone_number' => 'required|min:13|max:13',
              // 'subject'=>'required',
                'description'=>'required'
          ]);
         $contact_inquiry = new Contact_inquiry_model();
         $contact_inquiry->full_name =request ('name');
         $contact_inquiry ->email = request('email');
         $contact_inquiry ->phone_number = request('phone_number');
        // $contact_inquiry ->subject = request('subject');
        $contact_inquiry ->discription = request('description');
        $contact_inquiry ->save();
        $contact_detail=$request->all();
        $configuration = Configuration::first();
        Config::set('mail.from.address', $configuration->email);
Mail::to($contact_inquiry->email)->send(new ContactMail($contact_detail));
Mail::to($configuration->admin_email)->send(new ContactMail($contact_detail));


            return back()->with('message_success','Inquiry successfully submitted, we will contact you shortly!');
    }

    public function warehouse(Request $request){

 $content_id_8=Content::findorfail(8);
return view('web.warehouse',compact('content_id_8'));

    }

     public function delivery(Request $request){

$content_id_9=Content::findorfail(9);
return view('web.delivery',compact('content_id_9'));

    }
}
