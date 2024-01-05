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
    {{-- main_heading --}}
    <div class="ClientInformation d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="">
                    Information and Informed Consent for Telehealth Treatment
                </h4>
            </div>
        </div>
    </div>
    {{-- customer_Information --}}
    <div class="custommerContainer">
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-6">
                    <label for="">
                        Date:
                    </label>
                    <p>
                        {{ $sliding_scale_form_detail->date != '' ? date('m/d/Y', strtotime($sliding_scale_form_detail->date)) : 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-6">
                    <label for="">
                        Name
                    </label>
                    <p>
                        {{ $sliding_scale_form_detail->name ?? 'N/A'}}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Sliding scale rate is based on family size and annual income. This form will be help me to figure
                        out which level of the sliding scale you qualify for. This application will be reevaluated every six
                        months or in the event of financial change in the household. The sliding scale rate is not
                        applicable to anyone with insurance coverage that is in network with Accepted Therapy Services.
                    </label>
                </div>
                <div class="col-lg-12">
                    <div class="subHeading">
                        <h5>
                            Household Members
                        </h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        Please list all dependent members of your household and their date of birth. If you have a dependent
                        who is over the age of 18, additional information may be requested.
                    </label>
                </div>
                {{-- <div class=""> --}}
                {{-- <div class="row"> --}}

                
                <div class="col-lg-3">
                    <label for="">
                        #
                    </label>
                </div>
                <div class="col-lg-3">
                    <label for="">
                        Name
                    </label>
                </div>
                <div class="col-lg-3">
                    <label for="">
                        Relationship to you
                    </label>
                </div>
                <div class="col-lg-3">
                    <label for="">
                        Date of Birth
                    </label>
                </div>
                
                @if (!empty($sliding_scale_form_detail->get_scale_household))
                @foreach (json_decode($sliding_scale_form_detail->get_scale_household) as $scale_household)
                <div class="col-lg-3">
                    <p for="">
                        {{ $scale_household->id ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-3">
                    <p for="">
                        {{ $scale_household->name ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-3">
                    <p for="">
                        {{ $scale_household->relationship_to_you ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-3">
                    <p for="">
                        {{ $scale_household->date_of_birth ?? 'N/A' }}
                    </p>
                </div>

                @endforeach
                @endif


                {{-- </div> --}}
                {{-- </div> --}}
                <div class="col-lg-12">
                    <div class="subHeading">
                        <h5>
                            Household Expenses
                        </h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="">
                        Rent/Mortgage
                    </label>
                </div>
                <div class="col-lg-6">
                    <p>
                        {{ !empty($sliding_scale_form_detail->rent_mortgage_amount) ? '$'.$sliding_scale_form_detail->rent_mortgage_amount : '$'}}
                    </p>
                </div>
                <div class="col-lg-6">
                    <label for="">
                        Electricity
                    </label>
                </div>
                <div class="col-lg-6">
                    <p>
                        {{ !empty($sliding_scale_form_detail->electricity_amount) ? '$'.$sliding_scale_form_detail->electricity_amount : '$'}}
                    </p>
                </div>
                <div class="col-lg-6">
                    <label for="">
                        Water/Sewer/Gas
                    </label>
                </div>
                <div class="col-lg-6">
                    <p>
                        {{ !empty($sliding_scale_form_detail->water_sewer_gas_amount) ? '$'.$sliding_scale_form_detail->water_sewer_gas_amount : '$'}}
                    </p>
                </div>
                <div class="col-lg-6">
                    <label for="">
                        Car Payment(s)
                    </label>
                </div>
                <div class="col-lg-6">
                    <p>
                        {{ !empty($sliding_scale_form_detail->car_payments_amount) ? '$'.$sliding_scale_form_detail->car_payments_amount : '$'}}
                    </p>
                </div>
                <div class="col-lg-6">
                    <label for="">
                        Phone
                    </label>
                </div>
                <div class="col-lg-6">
                    <p>
                        {{ !empty($sliding_scale_form_detail->phone_amount) ? '$'.$sliding_scale_form_detail->phone_amount : '$'}}
                    </p>
                </div>
                <div class="col-lg-6">
                    <label for="">
                        Insurances (car, home, renter)
                    </label>
                </div>
                <div class="col-lg-6">
                    <p>
                        {{ !empty($sliding_scale_form_detail->insurance_car_home_renter_amount) ? '$'.$sliding_scale_form_detail->insurance_car_home_renter_amount : '$'}}
                    </p>
                </div>
                <div class="col-lg-6">
                    <label for="">
                        Other (Explane)
                    </label>
                </div>
                <div class="col-lg-6">
                    <p>
                        {{ !empty($sliding_scale_form_detail->other_explain_amount) ? '$'.$sliding_scale_form_detail->other_explain_amount : '$'}}
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="subHeading">
                        <h5>
                            Household Income
                        </h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Total all sources of income for each box and place the total amount in the second column. Then
                        denote whether the income is received monthly or annually.
                    </label>
                </div>

                {{-- <div class="row"> --}}
                <div class="col-lg-7">
                    <div class="d-flex">
                        <label for="">
                            Source of Income
                        </label>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex justify-content-between">
                        <label for="">
                            Amount
                        </label>
                        <label for="">
                            Frequency
                        </label>
                    </div>
                </div>
                {{-- </div> --}}
                {{-- <div class="row"> --}}
                <div class="col-lg-7">
                    <div class="d-flex">
                        <label for="">
                            Wages, salaries, or tips
                        </label>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex justify-content-between">
                        <label for="">
                            {{ !empty($sliding_scale_form_detail->amount_1) ? '$'.$sliding_scale_form_detail->amount_1 : '$'}}
                        </label>
                        <div class="d-flex">
                            @if (!empty($sliding_scale_form_detail->frequency_1))
                            @foreach (json_decode($sliding_scale_form_detail->frequency_1) as $frequency_1)
                                @if ($frequency_1 == 1)
                                <label for="">
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Montlhy
                                </label>
                                @endif

                                @if ($frequency_1 == 2)
                                <label>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Annually
                                </label>
                                @endif

                            @endforeach
                            @endif
                        </div>
                    </div>

                </div>
                {{-- </div>
            <div class="row"> --}}
                <div class="col-lg-7">
                    <div class="d-flex">
                        <label for="">
                            Unemployment Worker’s comp. Social Security Disability Public assistance Survivor benefits
                            Pension or retirement
                        </label>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex justify-content-between">
                        <label for="">
                            {{ !empty($sliding_scale_form_detail->amount_2) ? '$'.$sliding_scale_form_detail->amount_2 : '$'}}
                        </label>
                        <div class="d-flex">
                            @if (!empty($sliding_scale_form_detail->frequency_2))
                            @foreach (json_decode($sliding_scale_form_detail->frequency_2) as $frequency_2)
                                @if ($frequency_2 == 1)
                                <label for="">
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Montlhy
                                </label>
                                @endif

                                @if ($frequency_2 == 2)
                                <label>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Annually
                                </label>
                                @endif

                            @endforeach
                            @endif
                        </div>
                    </div>

                </div>


                <div class="col-lg-7">
                    <div class="d-flex">
                        <label for="">
                            Child Support Rent Royalties Alimony	
                        </label>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex justify-content-between">
                        <label for="">
                            {{ !empty($sliding_scale_form_detail->amount_2) ? '$'.$sliding_scale_form_detail->amount_3 : '$'}}
                        </label>
                        <div class="d-flex">
                            @if (!empty($sliding_scale_form_detail->frequency_3))
                            @foreach (json_decode($sliding_scale_form_detail->frequency_3) as $frequency_3)
                                @if ($frequency_3 == 1)
                                <label for="">
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Montlhy
                                </label>
                                @endif

                                @if ($frequency_3 == 2)
                                <label>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Annually
                                </label>
                                @endif

                            @endforeach
                            @endif
                        </div>
                    </div>

                </div>


                <div class="col-lg-7">
                    <div class="d-flex">
                        <p>
                            {{ $sliding_scale_form_detail->another_income_source ?? 'N/A' }}
                        <p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex justify-content-between">
                        <label for="">
                            {{ !empty($sliding_scale_form_detail->amount_4) ? '$'.$sliding_scale_form_detail->amount_4 : '$'}}
                        </label>
                        <div class="d-flex">
                            @if (!empty($sliding_scale_form_detail->frequency_4))
                            @foreach (json_decode($sliding_scale_form_detail->frequency_4) as $frequency_4)
                                @if ($frequency_4 == 1)
                                <label for="">
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Montlhy
                                </label>
                                @endif

                                @if ($frequency_4 == 2)
                                <label>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Annually
                                </label>
                                @endif

                            @endforeach
                            @endif
                        </div>
                    </div>

                </div>
                {{-- </div> --}}

                <div class="col-lg-12">
                    <span>
                        (Please be available to provide supporting documentation of your income upon request.)
                    </span>
                </div>

                    <div class="col-lg-12">
                    <label for="">
                        I
                        <span>
                            {{ $sliding_scale_form_detail->your_name ?? 'N/A' }}
                        </span>
                        understand that I am being considered for a sliding scale fee at Accepted Therapy Services.
                        I also understand that I may not meet criteria for a sliding scale. I further understand that that
                        if my financial situation changes, I am expected to notify Accepted Therapy Services prior to my
                        next session so that my sliding scale rate can be reassessed for need.
                    </label>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Signature box
                    </label>
                    <p>
                        {{ $sliding_scale_form_detail->signature ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <label for="">
                        {{ !empty($sliding_scale_form_detail->created_at) ? date('D M d Y h:m:s A', strtotime($sliding_scale_form_detail->created_at)) : 'N/A' }}
                    </label>
                </div>

            </div>
        </div>
    </div>
@endsection
