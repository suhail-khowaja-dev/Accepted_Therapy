<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReleaseInfoForm;
use Illuminate\Support\Facades\Mail;

class ReleaseInfoFormController extends Controller
{
    public function index(){

        return view('resources_forms.release_info_form');
    }

    public function release_info_form_store(Request $request){

        $request->validate([
            'signature' => 'required',
            // 'reason' => 'required',
            'person_or_agency_name' => 'required',
            'date' => 'required',
            'your_name' => 'required',
        ]);


        $non_secure_form = new ReleaseInfoForm();
        $non_secure_form->your_name = $request->your_name;
        $non_secure_form->date = $request->date;
        $non_secure_form->person_or_agency_name = $request->person_or_agency_name;
        $non_secure_form->release_of_info_checkboxes = $request->release_of_info_checkboxes != '' ? json_encode($request->release_of_info_checkboxes) : '';
        $non_secure_form->other_symtoms = $request->other_symtoms;
        $non_secure_form->reason = $request->reason;
        $non_secure_form->signature = $request->signature;
        $non_secure_form->save();

        $email = 'nikki@acceptedtherapy.com';
        $data = [];
        $data['email'] =  $email;
        $data['client_name'] = $non_secure_form->your_name;

        $data = ReleaseInfoForm::where('id',$non_secure_form->id)->first();

        Mail::send('resource_form_email_template.release_information_form', ['data'=>true,'new_data'=>$data], function ($messages) use ($email) {
            $messages->to($email);
            $messages->subject('Release Of Information Form');
        });

        return back()->with('release_info_form_success','Your form submitted successfully!');

     }




     public function release_of_information_form_index(){
        $release_info_form_details = ReleaseInfoForm::whereIsActive(1)->get();

        return view('admin.resources_forms.release_of_info_form.index', get_defined_vars());
    }

    public function show_release_of_information_form_details(Request $request, $release_info_form_id){
       $release_info_form_detail = ReleaseInfoForm::find($release_info_form_id);
    //    return $release_info_form_detail;
       return view('admin.resources_forms.release_of_info_form.show_release_of_information_form_details', get_defined_vars());
    }

    public function release_of_information_form_delete(Request $request,$release_info_form_id)
    {
        $delete = ReleaseInfoForm::find($release_info_form_id);
        $delete->delete();

        return back()->with('release_info_delete', 'Release of Information Form Deleted suceessfuly!');
    }


}
