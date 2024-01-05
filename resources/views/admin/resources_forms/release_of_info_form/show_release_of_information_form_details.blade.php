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
                        This form is to be completed in the event that you wish to include other angecies or people previous
                        therapists, medical providers, testing results, parent providing payment, or anyone else you would
                        like for Accepted Therapy Sercies to have access to.
                    </label>
                </div>

                <div class="col-lg-12">
                    <label for="">
                        I <span>
                            {{ $release_info_form_detail->your_name ?? '' }}
                        </span>
                        whose date of birth is
                        <span>
                            {{ $release_info_form_detail->date != '' ? date('m/d/Y', strtotime($release_info_form_detail->date)) : 'N/A' }}
                        </span>
                        authorize Accepted Therapy Services to disclose and/or obtain information from <span>
                            {{ $release_info_form_detail->person_or_agency_name ?? '' }}
                        </span>
                    </label>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        The following information (initial each item to be disclosed)
                    </label>
                </div>


                @if (!empty($release_info_form_detail->release_of_info_checkboxes))
                @foreach (json_decode($release_info_form_detail->release_of_info_checkboxes) as $release_info_form)
                
                @if ($release_info_form == 1)
                <div class="col-lg-4">
                    <label for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Assessment
                    </label>
                </div>
                @endif

                @if ($release_info_form == 2)
                <div class="col-lg-4">
                    <label for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Diagnosis
                    </label>
                </div>
                @endif

                @if ($release_info_form == 3)
                <div class="col-lg-4">
                    <label for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Psychosocial Evaluation
                    </label>
                </div>
                @endif
                
                @if ($release_info_form == 4)
                <div class="col-lg-4">
                    <label for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Treatment Plan
                    </label>
                </div>
                @endif

                @if ($release_info_form == 5)
                <div class="col-lg-4">
                    <label for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Current Treatment Updates   
                    </label>
                </div>
                @endif

                @if ($release_info_form == 6)
                <div class="col-lg-4">
                    <label for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Presence/Participation in Treatment
                    </label>
                </div>
                @endif

                @if ($release_info_form == 7)
                <div class="col-lg-4">
                    <label for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Progress in treatment
                    </label>
                </div>
                @endif

                @if ($release_info_form == 8)
                <div class="col-lg-4">
                    <label for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Demographic information
                    </label>
                </div>
                @endif

                @if ($release_info_form == 9)
                <div class="col-lg-4">
                    <label for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Recommendations
                    </label>
                </div>
                @endif

                @if ($release_info_form == 10)
                <div class="col-lg-4">
                    <label for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Other
                    </label>
                    <p>
                        other symptom
                    </p>
                </div>
                @endif

                @if ($release_info_form == 11)
                <div class="col-lg-4">
                    <label for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        Psychotherapy notes
                    </label>
                </div>
                @endif

                @endforeach
                @endif

                <div class="col-lg-12">
                    <label for="">
                        Psychotherapy notes will not be released without discussion and approval from individual therapist.
                    </label>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        This information may be used or disclosed in connection with mental health treatment or payment. If
                        the purpose is other than as specified above, please specify
                    </label>
                    <p>
                        {{ $release_info_form_detail->reason ?? '' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Termination
                    </label>
                    <p>
                        Unless sooner revoked, this authorization expires 60 days from the termination of my therapy
                        services I understand that I have the right to revoke this authorization, in writing, at any time by
                        sending written notification my therapist at 423 Weathersby Road Suite 240 or by email to
                        acceptedtherapy@gmail.com. I further understand that revocation will not apply to actions taken by
                        the requesting person/entity prior to the date they receive you written request to revoke
                        authorization.
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Condition
                    </label>
                    <p>
                        I further understand that Accepted Therapy Services will not condition my treatment on whether I
                        give authorization for the requested disclosure.
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Signature box
                    </label>
                    <p>
                        {{ $release_info_form_detail->signature ?? '' }}
                    </p>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <label for="">
                        {{ !empty($release_info_form_detail->created_at) ? date('D M d Y h:m:s A', strtotime($release_info_form_detail->created_at)) : 'N/A' }}
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection
