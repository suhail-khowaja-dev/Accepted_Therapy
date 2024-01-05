<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamManagement;
use App\Models\Admin\ReferralForm;
use Illuminate\Support\Facades\Mail;

class ResourcesFormController extends Controller
{
    public function referral_form_index(){
        $therapists = TeamManagement::whereStatus(true)->with('therapist_specialities')->get();
        // return $therapists;
        return view('resources_forms.referral', get_defined_vars());
    }
    
    
    public function referral_form_store(Request $request){
        $request->validate([
            'email' => 'required|email',
            // 'fax_number' => 'required',
            'phone_number' => 'required',
            'refferral_source' => 'required',
            'reason_for_refferal' => 'required',
            'diagnoses' => 'required',
            // 'insurance_image' => 'mimes:jpeg,jpg,png,gif,pdf,docs|required',
            'city_state_zip' => 'required',
            'address' => 'required',
            // 'referral_email' => 'required',
            // 'cell_phone_other' => 'required',
            'cell_phone' => 'required',
            'date_of_birth' => 'required',
            'client_name' => 'required',
            'date' => 'required',
            'therapist' => 'required',

        ]);
        if(!empty($request->insurance_image)){
            $imageName = time().'.'.$request->insurance_image->extension();  
        }else{
            $imageName = null;
        }

        $refferal = new ReferralForm();
        $refferal->team_management_id = $request->therapist;
        $refferal->date = $request->date;
        $refferal->client_name = $request->client_name;
        $refferal->date_of_birth = $request->date_of_birth;
        $refferal->cell_phone = $request->cell_phone;
        $refferal->cell_phone_other = $request->cell_phone_other;
        $refferal->referral_email = $request->referral_email;
        $refferal->address = $request->address;
        $refferal->city_state_zip = $request->city_state_zip;
        $refferal->insurance_image = $imageName;
        $refferal->diagnoses = $request->diagnoses;
        $refferal->reason_for_refferal = $request->reason_for_refferal;
        $refferal->refferral_source = $request->refferral_source;
        $refferal->phone_number = $request->phone_number;
        $refferal->fax_number = $request->fax_number;
        $refferal->email = $request->email;
        $refferal->save();
        
        if(!empty($request->insurance_image)){
            $request->insurance_image->move('uploads/resources_forms/', $imageName);
        }
        



        $email = 'nikki@acceptedtherapy.com';
        $data = [];
        $data['email'] =  $email;
        $data['client_name'] = $refferal->client_name;

        Mail::send('resource_form_email_template.referral_form', ['data'=>true,'new_data'=>$data], function ($messages) use ($email) {
            $messages->to($email);
            $messages->subject('Referral Form');
        });

        return back()->with('referral_store','Referral form submitted successfully');

    }




    


}
