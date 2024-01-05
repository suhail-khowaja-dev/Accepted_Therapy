<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NonSecureForm;
use Illuminate\Support\Facades\Mail;

class NonSecureFormController extends Controller
{
    public function non_secure_form(){

        return view('resources_forms.non_secure_release_form');
    }

    public function non_secure_form_store(Request $request){

        $request->validate([
            'signature' => 'required',
            'your_name' => 'required',
            'date_of_birth' => 'required',
            'name' => 'required',
        ]);



        $non_secure_form = new NonSecureForm();
        $non_secure_form->name = $request->name;
        $non_secure_form->date_of_birth = $request->date_of_birth;
        $non_secure_form->your_name = $request->your_name;
        $non_secure_form->non_secure_checkboxes = $request->non_secure_checkboxes != '' ? json_encode($request->non_secure_checkboxes) : '';
        $non_secure_form->signature = $request->signature;
        $non_secure_form->save();

        $email = 'nikki@acceptedtherapy.com';
        $data = [];
        $data['email'] =  $email;
        $data['client_name'] = $non_secure_form->name;
        $data  = NonSecureForm::where('id', $non_secure_form->id)->first();

        Mail::send('resource_form_email_template.non_secure_release_form', ['data'=>true,'new_data'=>$data], function ($messages) use ($email) {
            $messages->to($email);
            $messages->subject('Non-Secure Release Form');
        });

        return back()->with('non_secure_form_success','Your form submitted successfully!');

     }




    public function non_secure_release_form_form_index(){
        $non_secure_form_details = NonSecureForm::whereIsActive(1)->get();
        return view('admin.resources_forms.non_secure_release_form.index', get_defined_vars());
    }

    public function show_non_secure_release_form_details(Request $request, $non_secure_form_id){
       $non_secure_form_detail = NonSecureForm::find($non_secure_form_id);
    //    return $non_secure_form_detail;
       return view('admin.resources_forms.non_secure_release_form.show_non_secure_release_form_details', get_defined_vars());
    }

    public function non_secure_release_form_delete(Request $request,$non_secure_form_id)
    {
        $delete = NonSecureForm::find($non_secure_form_id);
        $delete->delete();

        return back()->with('non_secure_delete', 'Non Secure Relaese Form Deleted suceessfuly!');
    }



}
