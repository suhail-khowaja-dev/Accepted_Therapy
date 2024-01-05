<style>

    .ClientInformation h4 {

        font-size: 35px;

        color: #000000;

        margin-top: 1rem

            /* font-family: "Raleway-Roman-Reg" */

    }



    .custommerContainer .subHeading h5 {

        /* font-family: "Raleway-Roman-Reg"; */

        font-size: 25px;

        color: #176ba2;

    }



    h5 {

        /* font-family: "Raleway-Roman-Reg"; */

        font-size: 25px;

        color: #176ba2;

    }



    .custommerContainer .subHeading h4 {

        color: #000 !important;

        font-size: 22px !important;

    }



    h3 {

        color: #000 !important;

        font-size: 22px !important;

    }



    .informationContainer label {

        font-size: 18px !important;

        padding: 0 5px;

        color: #0000008a !important;

    }



    ul li {

        font-size: 18px !important;

        padding: 0 5px;

        color: #0000008a !important;

    }



    .informationContainer p {

        background-color: #8080801c;

        border-radius: 5px;

        padding: 5px;

        font-size: 15px;

    }



    p i {

        margin-right: 2px

    }



    label {

        margin: 10px 0

    }



    span {

        color: #176ba2;

        font-weight: 600

    }



</style>





@extends('admin.layouts.master')

@section('content')

    {{-- customer_Information --}}

    <div class="custommerContainer">

        {{-- <div class="subHeading">

            <h5>

                Name and Contact Information

            </h5>

        </div> --}}

        <div class="informationContainer">

            <div class="row">

                <div class="col-lg-6">

                    <label for="">

                        Date:

                    </label>

                    <p>

                        @if (!empty($credit_card_form_detail->date))

                        {{ date('m/d/Y', strtotime($credit_card_form_detail->date)) }}

                        @else

                        N/A

                        @endif

                        

                    </p>

                </div>

                <div class="col-lg-6">

                    <label for="">

                        Name

                    </label>

                    <p>{{ $credit_card_form_detail->name ?? 'N/A' }}</p>

                </div>

                

                {{-- @foreach (json_decode($credit_card_form_detail->credit_card_checkbox_details) as $item)

                    

                @endforeach --}}

                

                @if (!empty($credit_card_form_detail->credit_card_checkbox_details))

                @foreach (json_decode($credit_card_form_detail->credit_card_checkbox_details) as $credit_card)

                @if ($credit_card == 1)

                <div class="col-lg-12">

                    <label for="" class="d-flex justify-content-between">

                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>

                        I understand that payment is due at the time

                        of service, including treatment expenses that are not covered by insurance, such as missed

                        appointments, late cancelations, deductibles, and co-payments. I will have the option with paying

                        with check, cash, or credit card at the time of service.

                    </label>

                </div>

                @endif



                @if ($credit_card == 2)

                <div class="col-lg-12">

                    <label for="" class="d-flex justify-content-between">

                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>

                        I recognize that for all credit or debit card transactions, Accepted Therapy Services charges a

                        $2.00 transaction convenience fee. This fee will be applied to each credit card transactions that

                        occurs after April 4, 2022.

                    </label>

                </div>

                @endif



                @if ($credit_card == 3)

                <div class="col-lg-12">

                    <label for="" class="d-flex justify-content-between">

                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>

                        If I do not cancel at least 24 hours before my appointment or I do not show up to my appointment, I

                        recognize that Accepted Therapy Services will charge my card a late cancel or no-show fee of $75. If

                        there are unforeseen circumstance, I will contact my therapist and inform them and I recognize that

                        the late fee will be at their discretion in the event of these circumstances.

                    </label>

                </div>

                @endif

                

                @endforeach

                @endif

                

                

                

            </div>

        </div>

    </div>



    <div class="custommerContainer">



        <div class="informationContainer">

            <div class="row">

                <div class="col-lg-4">

                    <label for="">

                        Name on Card

                    </label>

                    <p>

                        {{ $credit_card_form_detail->name_on_card ?? 'N/A' }}

                    </p>

                </div>

                <div class="col-lg-4">

                    <label for="">

                        Card Type

                    </label>

                    <p>

                        @if(!empty($credit_card_form_detail->card_type))

                            {{ $credit_card_form_detail->card_type == 1 ? 'American Express' : '' }}
                            {{ $credit_card_form_detail->card_type == 2 ? 'Discover' : '' }}
                            {{ $credit_card_form_detail->card_type == 3 ? 'Mastercard' : '' }}
                            {{ $credit_card_form_detail->card_type == 4 ? 'Visa' : '' }}
    
                        @else
                            N/A
                        @endif

                    </p>

                </div>

                <div class="col-lg-4">

                    <label for="">

                        Last 4 Card Number

                    </label>

                    <p>

                        {{ $credit_card_form_detail->last_four_card_no ?? 'N/A' }}

                    </p>

                </div>

                <div class="col-lg-4">

                    <label for="">

                        CVV

                    </label>

                    <p>

                        {{ $credit_card_form_detail->card_ccv ?? 'N/A' }}

                    </p>

                </div>

                <div class="col-lg-4">

                    <label for="">

                        Expiration Date:

                    </label>

                    <p>

                        @if (!empty($credit_card_form_detail->expiration_date))

                        {{ date('m/d/Y', strtotime($credit_card_form_detail->expiration_date)) }}

                        @else

                        N/A

                        @endif



                    </p>

                </div>

                <div class="col-lg-4">

                    <label for="">

                        Billing Zip Code

                    </label>

                    <p>

                        {{ $credit_card_form_detail->billing_zip ?? 'N/A' }}

                    </p>

                </div>

                <div class="col-lg-4">

                    <label for="">

                        Email Address for Receipt

                    </label>

                    <p>

                        {{ $credit_card_form_detail->receipt_email ?? 'N/A' }}

                    </p>

                </div>

                <div class="col-lg-12">

                    <label for="">

                        I

                        <span>

                            {{ $credit_card_form_detail->your_name ?? 'N/A' }}

                        </span>

                        verify that my credit card information, provided above, is accurate to the best of my

                        knowledge. If this information is incorrect or fraudulent or if my payment is declined, I understand

                        that I am responsible for the entire amount owed and any interest or additional costs incurred if

                        denied. I also understand by signing and initialing I recognize that if my payment is not received

                        Accepted Therapy Services reserves the right to use an attorney or collection agency to secure

                        payment.

                    </label>

                </div>

                <div class="col-lg-4">



                    <label for="">

                        Signature box

                    </label>

                    <p>

                        {{ $credit_card_form_detail->signature ?? 'N/A' }}

                    </p>

                </div>

                <div class="col-lg-4"></div>

                <div class="col-lg-4">

                    <label for="">

                        @if (!empty($credit_card_form_detail->created_at))

                        {{ date('D M Y h:m:s A', strtotime($credit_card_form_detail->created_at)) }}

                        @else

                        N/A

                        @endif

                    </label>

                </div>

            </div>

        </div>





    </div>

@endsection

