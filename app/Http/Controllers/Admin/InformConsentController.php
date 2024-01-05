<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\InformConsentForm;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class InformConsentController extends Controller
{
    public function index(){
        return view('resources_forms.inform_consent_form');
    }

    public function inform_consent_form_store(Request $request){
        $request->validate([
            'inform_consent_date_time' => 'required',
            // 'witness' => 'required',
            // 'printed_name' => 'required',
            'rights_signature' => 'required',
        ]);



        $intake_consent_form = new InformConsentForm();
        $intake_consent_form->benefit_signature = $request->benefit_signature;
        $intake_consent_form->telehealth_signature = $request->telehealth_signature;
        $intake_consent_form->professional_fees_signature = $request->professional_fees_signature;
        $intake_consent_form->session_fees_signature = $request->session_fees_signature;
        $intake_consent_form->book_fees_signature = $request->book_fees_signature;
        $intake_consent_form->professional_record_signature = $request->professional_record_signature;
        $intake_consent_form->confidentiality_signature = $request->confidentiality_signature;
        $intake_consent_form->parents_minor_signature = $request->parents_minor_signature;
        $intake_consent_form->rights_signature = $request->rights_signature;
        $intake_consent_form->printed_name = $request->printed_name;
        $intake_consent_form->witness = $request->witness;
        $intake_consent_form->inform_consent_date_time = $request->inform_consent_date_time;
        $intake_consent_form->save();


        // return $data['benefit_signature'];

        $email = 'nikki@acceptedtherapy.com';
        $data = [];
        $data['email'] =  $email;
        $data  = InformConsentForm::where('id',$intake_consent_form->id)->first();


        Mail::send('resource_form_email_template.informed_consent_form', ['data' => true, 'new_data'=>$data], function ($messages) use ($email) {
            $messages->to($email);
            $messages->subject('Informed Consent Form');
        });

        return back()->with('intake_consent_form_success','Your form submitted successfully!');

     }



     public function informed_consent_form_index(){
        $informed_consent_form_details = InformConsentForm::whereIsActive(1)->get();
        return view('admin.resources_forms.informed_consent_form.index', get_defined_vars());
    }

    public function show_informed_consent_form_details(Request $request, $intake_id){

       $intake_form_detail = InformConsentForm::find($intake_id);

       return view('admin.resources_forms.informed_consent_form.informed_consent_form_details', get_defined_vars());
    }

    public function informed_consent_form_delete(Request $request,$inform_consent_id)
    {
        $delete = InformConsentForm::find($inform_consent_id);
        $delete->delete();

        return back()->with('informed_consent_delete', 'Informed Consent Form Deleted suceessfuly!');
    }

}
