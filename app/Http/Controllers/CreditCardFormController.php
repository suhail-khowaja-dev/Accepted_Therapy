<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreditCardForm;
use Illuminate\Support\Facades\Mail;

class CreditCardFormController extends Controller
{
    public function index(){
        $cc = CreditCardForm::find(1);
        // return date_format($cc->created_at, 'D M d Y h:m:s A');
        return view('resources_forms.credit_card_form');
    }

    public function credit_card_form_store(Request $request){
        // return $request->all();
        $request->validate([

        'signature' => 'required',
        'your_name' => 'required',
        'receipt_email' => 'required|email',
        'billing_zip' => 'required|numeric',
        'expiration_date' => 'required',
        'card_ccv' => 'required|numeric',
        'last_four_card_no' => 'required|numeric',
        'card_type' => 'required',
        'name_on_card' => 'required',
        'name' => 'required',
        'date' => 'required',
        ]);



        $credit_card_form = new CreditCardForm();
        $credit_card_form->date = $request->date;
        $credit_card_form->name = $request->name;
        $credit_card_form->credit_card_checkbox_details = $request->credit_card_checkbox_details != '' ? json_encode($request->credit_card_checkbox_details) :'' ;
        $credit_card_form->name_on_card = $request->name_on_card;
        $credit_card_form->card_type = $request->card_type;
        $credit_card_form->last_four_card_no = $request->last_four_card_no;
        $credit_card_form->card_ccv = $request->card_ccv;
        $credit_card_form->expiration_date = $request->expiration_date;
        $credit_card_form->billing_zip = $request->billing_zip;
        $credit_card_form->receipt_email = $request->receipt_email;
        $credit_card_form->your_name = $request->your_name;
        $credit_card_form->signature = $request->signature;
        $credit_card_form->save();


        $email = 'nikki@acceptedtherapy.com';
        $data = [];
        $data['email'] =  $email;
        $data['client_name'] = $credit_card_form->name;

        $data = CreditCardForm::where('id',$credit_card_form->id)->first();


        Mail::send('resource_form_email_template.credit_debit_card_form', ['data'=>true,'new_data'=>$data], function ($messages) use ($email) {
            $messages->to($email);
            $messages->subject('Credit/Debit Card Payment Authorization Form');
        });


        return back()->with('credit_card_form_success','Your form submitted successfully!');

     }






     public function credit_card_form_form_index(){
        $credit_card_form_details = CreditCardForm::whereIsActive(1)->get();
        return view('admin.resources_forms.credit_card_form.index', get_defined_vars());
    }

    public function show_credit_card_form_details(Request $request, $credit_card_id){
       $credit_card_form_detail = CreditCardForm::find($credit_card_id);
    //    return $credit_card_form_detail;
       return view('admin.resources_forms.credit_card_form.show_credit_card_form_details', get_defined_vars());
    }

    public function credit_card_form_delete(Request $request,$inform_consent_id)
    {
        $delete = CreditCardForm::find($inform_consent_id);
        $delete->delete();

        return back()->with('credit_card_delete', 'Credit Card Form Deleted suceessfuly!');
    }


}
