<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ReferralForm;
use Illuminate\Http\Request;

class ReferralFormController extends Controller
{
    public function index(){
        $referral_form_details = ReferralForm::whereIsActive(1)->with('therapist')->get();
        return view('admin.resources_forms.referral_form.index', get_defined_vars());
    }

    public function show_referral_form_details(Request $request, $referral_id){
        $referral_form_details = ReferralForm::where('id',$referral_id)->with('therapist.therapist_specialities')->first();
        // return $referral_form_details;
        return view('admin.resources_forms.referral_form.referral_form_details', get_defined_vars());
    }

    public function referral_delete(Request $request,$referral_id)
    {
        $delete = ReferralForm::find($referral_id);
        $delete->delete();

        return back()->with('referral_delete', 'Referral Form Deleted suceessfuly!');
    }

}
