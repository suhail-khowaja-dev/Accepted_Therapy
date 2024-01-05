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
                    Consent for Release of Protected Health Information by Non-Secure Means
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
                        Name
                    </label>
                    <p>{{ $non_secure_form_detail->name ?? 'N/A' }}</p>
                </div>
                <div class="col-lg-6">
                    <label for="">
                        Date of Birth:
                    </label>
                    <p>
                        {{ !empty($non_secure_form_detail->date_of_birth) ? date('m/d/Y', strtotime($non_secure_form_detail->date_of_birth)) : 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        I
                        <span>
                            {{ $non_secure_form_detail->your_name ?? 'N/A' }}
                        </span>
                        authorize Accepted Therapy Services to transmit to me by non-secure media the following
                        types of protected health information related to my health records and health care treatment:
                    </label>
                </div>

                @if (!empty($non_secure_form_detail->non_secure_checkboxes))
                @php
                    $count = 0;
                @endphp
                @foreach (json_decode($non_secure_form_detail->non_secure_checkboxes) as $non_secure_form)
                @if ($non_secure_form == 1)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        Information related to the scheduling of meetings or other appointments.
                    </label>
                </div>
                @endif

                @if ($non_secure_form == 2)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        Information related to billing and payment
                    </label>
                </div>
                @endif

                @if ($non_secure_form == 3)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand that if I contact my therapist through non-secure means (text messages, email, or other
                        phone apps) my therapist reserves the right to not respond to protect my confidentiality.
                    </label>
                </div>
                @endif

                @if ($non_secure_form == 4 || $non_secure_form == 5)
                @php
                    
                    $count++
                @endphp

                @if ($count == 1)
                
                <div class="ClientInformation d-flex justify-content-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="">
                                Termination of Consent
                            </h4>
                        </div>
                    </div>
                </div>

                @endif



                @if ($non_secure_form == 4)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I can also revoke this authorization in writing at any time by sending written notification to my
                        therapist at 423 Weathersby Road Suite 240 or by email to acceptedtherapy@gmail.com. Your notice
                        will not apply to actions taken by the requesting person/entity prior to the date they receive you
                        written request to revoke authorization.
                    </label>
                </div>
                @endif


                @if ($non_secure_form == 5)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        Information related to billing and payment
                    </label>
                </div>
                @endif


                @endif


                @endforeach
                @endif
            </div>
        </div>
    </div>
    
    {{-- customer_Information --}}
    <div class="custommerContainer">
        <div class="informationContainer">
            <div class="row">

                
                
                <div class="col-lg-4">
                    <label for="">
                        Signature box
                    </label>
                    <p>
                        {{ $non_secure_form_detail->signature ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <label for="">
                        {{ !empty($non_secure_form_detail->created_at) ? date('D M Y h:m:s A', strtotime($non_secure_form_detail->created_at)) : 'N/A' }}
                    </label>
                </div>
            </div>
        </div>
    </div>


@endsection
