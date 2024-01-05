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
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-12">
                    <label for="">
                        Thank you for choosing to refer your client to Accepted Therapy Services. To start the referral
                        process, please complete this form and mail or fax it to Accepted Therapy Services. You can also
                        submit this form at acceptedtherapy.com
                    </label>
                </div>
                <div class="col-lg-12">
                    <div class="subHeading">
                        <h5>
                            Therapist:
                        </h5>
                    </div>
                </div>
                {{-- 0 is (No Preference) --}}
                @if ($referral_form_details->team_management_id == 0)
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        No Preference
                    </label>
                </div>  
                @else
                
                @if (!empty($referral_form_details->therapist->first_name) && !empty($referral_form_details->therapist->last_name))
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        {{ ucwords($referral_form_details->therapist->first_name) }} {{ ucwords($referral_form_details->therapist->last_name) }}, {{ $referral_form_details->therapist->therapist_specialities[0]->speciality_title ?? '' }}
                    </label>
                </div>    
                @endif
                
                @endif

                
                

                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Date:
                    </label>
                    <p>
                        {{ date('m/d/Y', strtotime($referral_form_details->date ?? '')) }}
                    </p>
                </div>
                 <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Client Name:
                    </label>
                    <p>
                        {{ $referral_form_details->client_name ?? 'N/A' }}
                    </p>
                </div>
                 <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Date of Birth:
                    </label>
                    <p>
                        {{ date('m/d/Y', strtotime($referral_form_details->therapist->date_of_birth ?? '')) }}
                    </p>
                </div>
                 <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Cell Phone:
                    </label>
                    <p>
                        {{ $referral_form_details->cell_phone ?? 'N/A' }}
                    </p>
                </div>
                 <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Other Phone:
                    </label>
                    <p>
                        {{ $referral_form_details->cell_phone_other	?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Email:
                    </label>
                    <p>
                        {{ $referral_form_details->referral_email ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Address:
                    </label>
                    <p>
                        {{ $referral_form_details->address ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        City/State/Zip:
                    </label>
                    <p>
                        {{ $referral_form_details->city_state_zip ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Insurance:
                    </label>
                    <p>
                        @if (pathinfo($referral_form_details->insurance_image, PATHINFO_EXTENSION) == 'pdf')
                        <a href="{{ url('uploads/resources_forms/'. $referral_form_details->insurance_image ?? '') }}" target="_blank">
                            Pdf document <i class="fa fa-download" aria-hidden="true"></i>
                        </a>
                        @else

                            @if(!empty($referral_form_details->insurance_image))
                            <a href="{{ url('uploads/resources_forms/'. $referral_form_details->insurance_image ?? '') }}" target="_blank">
                                <img src="{{ url('uploads/resources_forms/'. $referral_form_details->insurance_image ?? '') }}" width="70px" alt="">
                            </a>
                            @else
                            File Not Found!
                            @endif
                        
                        @endif
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Diagnoses:
                    </label>
                    <p>
                        {{ $referral_form_details->diagnoses ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Reason for Referral:
                    </label>
                    <p>
                        {{ $referral_form_details->reason_for_refferal ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Referral Source:
                    </label>
                    <p>
                        {{ $referral_form_details->refferral_source	?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Phone Number:
                    </label>
                    <p>
                        {{ $referral_form_details->phone_number ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Fax Number:
                    </label>
                    <p>
                        {{ $referral_form_details->fax_number ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="" class="d-flex ">
                        Email:
                    </label>
                    <p>
                        {{ $referral_form_details->email ?? 'N/A' }}
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
