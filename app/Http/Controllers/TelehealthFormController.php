<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TelehealthForm;
use Illuminate\Support\Facades\Mail;

class TelehealthFormController extends Controller
{
    public function index(){

        return view('resources_forms.telehealth_treatment_form');
    }

    public function telehealth_treatment_store(Request $request){
        // return ;
        $request->validate([
            'client_understanding_checkboxes' => 'required',
            'signature' => 'required',
            'your_name' => 'required',
        ]);

          if(count($request->client_understanding_checkboxes) < 13){
             return back()->with('checkboxerrors','All Checkboxes must be checked!')->withInput();
          }
        $telehealth_form = new TelehealthForm();
        $telehealth_form->client_understanding_checkboxes = $request->client_understanding_checkboxes != '' ? json_encode($request->client_understanding_checkboxes) : '';
        $telehealth_form->your_name = $request->your_name;
        $telehealth_form->signature = $request->signature;
        $telehealth_form->save();

        $email = 'nikki@acceptedtherapy.com';
        $data = [];
        $data['email'] =  $email;
        $data['client_name'] = $telehealth_form->your_name;

        $data  = TelehealthForm::where('id',$telehealth_form->id)->first();
        // return $data;

        Mail::send('resource_form_email_template.telehealth_treatment_form', ['data'=>true,'new_data'=>$data], function ($messages) use ($email) {
            $messages->to($email);
            $messages->subject('Telehealth Treatment Consent Form');
        });

        return back()->with('telehealth_form_success','Your form submitted successfully!');

     }




    public function telehealth_form_index(){
        $telehealth_form_details = TelehealthForm::whereIsActive(1)->get();

        return view('admin.resources_forms.telehealth_form.index', get_defined_vars());
    }

    public function show_telehealth_form_details(Request $request, $telehealth_id){

       $telehealth_form_detail = TelehealthForm::where('id',$telehealth_id)->first();
    //    return $sliding_scale_form_detail;
       return view('admin.resources_forms.telehealth_form.show_telehealth_form_details', get_defined_vars());
    }

    public function telehealth_form_delete(Request $request,$telehealth_id)
    {
        $delete = TelehealthForm::find($telehealth_id);
        $delete->delete();

        return back()->with('telehealth_delete', 'Telehealth Treatment Consent Form Deleted suceessfuly!');
    }

}
