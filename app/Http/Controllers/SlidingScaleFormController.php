<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReleaseInfoForm;
use App\Models\SlidingScaleForm;
use Illuminate\Support\Facades\Mail;
use App\Models\SlidingScaleHouseholdMemberForm;

class SlidingScaleFormController extends Controller
{
    public function index(){

        return view('resources_forms.sliding_scale_form');
    }

    public function sliding_scale_store(Request $request){
        // return $request->all();
        $request->validate([
            'signature' => 'required',
            'your_name' => 'required',
            'name' => 'required',
            'date' => 'required',
        ]);
        // return $request->all();

        $sliding_scale_form = new SlidingScaleForm();

        $sliding_scale_form->date = $request->date;
        $sliding_scale_form->name = $request->name;

        $sliding_scale_form->rent_mortgage = $request->rent_mortgage;
        $sliding_scale_form->rent_mortgage_amount = $request->rent_mortgage_amount;
        $sliding_scale_form->electricity = $request->electricity;
        $sliding_scale_form->electricity_amount = $request->electricity_amount;
        $sliding_scale_form->water_sewer_gas = $request->water_sewer_gas;
        $sliding_scale_form->water_sewer_gas_amount = $request->water_sewer_gas_amount;
        $sliding_scale_form->car_payments = $request->car_payments;
        $sliding_scale_form->car_payments_amount = $request->car_payments_amount;
        $sliding_scale_form->phone = $request->phone;
        $sliding_scale_form->phone_amount = $request->phone_amount;
        $sliding_scale_form->insurance_car_home_renter = $request->insurance_car_home_renter;
        $sliding_scale_form->insurance_car_home_renter_amount = $request->insurance_car_home_renter_amount;
        $sliding_scale_form->other_explain = $request->other_explain;
        $sliding_scale_form->other_explain_amount = $request->other_explain_amount;

        $sliding_scale_form->wages_salaries_or_tips = $request->wages_salaries_or_tips;
        $sliding_scale_form->amount_1 = $request->amount_1;
        $sliding_scale_form->frequency_1 = $request->frequency_1 != '' ? json_encode($request->frequency_1) : '';

        $sliding_scale_form->unemployment_workers = $request->unemployment_workers;
        $sliding_scale_form->amount_2 = $request->amount_2;
        $sliding_scale_form->frequency_2 = $request->frequency_2 != '' ? json_encode($request->frequency_2) : '';

        $sliding_scale_form->child_support = $request->child_support;
        $sliding_scale_form->amount_3 = $request->amount_3;
        $sliding_scale_form->frequency_3 = $request->frequency_3 != '' ? json_encode($request->frequency_3) : '';

        $sliding_scale_form->another_income_source = $request->another_income_source;
        $sliding_scale_form->amount_4 = $request->amount_4;
        $sliding_scale_form->frequency_4 = $request->frequency_4 != '' ? json_encode($request->frequency_4) : '';

        $sliding_scale_form->your_name = $request->your_name;
        $sliding_scale_form->signature = $request->signature;
        $sliding_scale_form->save();



    if(count($request->names) != 1 && count($request->dob) != 1){

        for($i=0; $i<count($request->names); $i++){
            $sliding_scale_household_form = new SlidingScaleHouseholdMemberForm();

            $sliding_scale_household_form->sliding_scale_id = $sliding_scale_form->id;
            $sliding_scale_household_form->name = $request->names[$i];
            $sliding_scale_household_form->relationship_to_you = $request->relationship[$i];
            $sliding_scale_household_form->date_of_birth = $request->dob[$i];
            $sliding_scale_household_form->save();

        }
    }

    $email = 'nikki@acceptedtherapy.com';
    $data = [];
    $data['email'] =  $email;
    $data['client_name'] = $sliding_scale_form->name;

    $data = SlidingScaleForm::where('id',$sliding_scale_form->id)->with('get_scale_household')->first();
    // return $data;

    Mail::send('resource_form_email_template.sliding_scale_form', ['data'=>true,'new_data'=>$data], function ($messages) use ($email) {
        $messages->to($email);
        $messages->subject('Sliding Scale Fee Application Form');
    });

    return back()->with('sliding_scale_form_success','Your form submitted successfully!');

     }


     public function sliding_scale_form_index(){
        $sliding_scale_form_details = SlidingScaleForm::whereIsActive(1)->get();

        return view('admin.resources_forms.sliding_scale_form.index', get_defined_vars());
    }

    public function show_sliding_scale_form_details(Request $request, $sliding_scale_form_id){

       $sliding_scale_form_detail = SlidingScaleForm::where('id',$sliding_scale_form_id)->with('get_scale_household')->first();
    //    return $sliding_scale_form_detail;
       return view('admin.resources_forms.sliding_scale_form.show_sliding_scale_form_details', get_defined_vars());
    }

    public function sliding_scale_form_delete(Request $request,$sliding_scale_id)
    {
        $delete = SlidingScaleForm::find($sliding_scale_id);
        $delete->delete();

        return back()->with('sliding_scale_delete', 'Sliding Scale Form Deleted suceessfuly!');
    }


}
