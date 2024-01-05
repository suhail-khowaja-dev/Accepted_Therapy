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
                <div class="col-lg-12">
                    <label for="">
                        Telehealth is live two-way audio and/or video electronic communications that allows therapists and
                        clients to meet outside of a physical office setting.
                    </label>
                </div>
                <div class="col-lg-12">
                    <div class="subHeading">
                        <h5>
                            Client Understanding
                        </h5>
                    </div>
                </div>


                @if (!empty($telehealth_form_detail->client_understanding_checkboxes))
                @foreach (json_decode($telehealth_form_detail->client_understanding_checkboxes) as $telehealth_checkbox)
                
                @if ($telehealth_checkbox == 1)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand that telehealth services are completely voluntary and that I can withdraw this consent
                        at any time.
                    </label>
                </div>
                @endif

                @if ($telehealth_checkbox == 1)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand that none of the telehealth sessions will be recorded or photographed.
                    </label>
                </div>
                @endif
                
                @if ($telehealth_checkbox == 2)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I agree not to make or allow audio or video recordings of any portion of the sessions.
                    </label>
                </div>
                @endif

                @if ($telehealth_checkbox == 3)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand that the laws that protect privacy and the confidentiality of client information also
                        apply to telehealth, and that no information obtained in the use of telehealth that identifies me
                        will be disclosed to other entities without my consent.
                    </label>
                </div>
                @endif

                @if ($telehealth_checkbox == 4)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand that telehealth is performed over a secure communication system that is almost
                        impossible for anyone else to access. I understand that any internet-based communication is not 100
                        % guaranteed to be secure.
                    </label>
                </div>
                @endif

                @if ($telehealth_checkbox == 5)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I agree that my therapist and Accepted Therapy Services will not be held responsible if any outside
                        party gains access to my personal information by bypassing the security measures of the
                        communication system.
                    </label>
                </div>
                @endif

                @if ($telehealth_checkbox == 6)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand there are potential risks to this technology, including interruptions, unauthorized
                        access, and technical difficulties.
                    </label>
                </div>
                @endif

                @if ($telehealth_checkbox == 7)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand that I or my therapist may discontinue the telehealth sessions at any time if it is
                        felt that the video technology is not adequate for the situation. </label>
                </div>
                @endif

                @if ($telehealth_checkbox == 8)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand that if there is an emergency during a telehealth session, then my therapist may call
                        emergency services and/or my emergency contact. </label>
                </div>
                @endif

                @if ($telehealth_checkbox == 9)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand that this form is signed in addition to the Notice of Privacy Practices and Consent to
                        Treatment and that all office policies and procedures apply to telehealth services. </label>
                </div>
                @endif

                @if ($telehealth_checkbox == 10)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand that if the video conferencing connection drops while I am in a session, I will have an
                        additional phone line available to contact my therapist, or I will make additional plans with my
                        therapist ahead of time for recontact. My therapist may choose to use a different means of
                        technology (Zoom, FaceTime, Google Meets) for completion of my session; however, these other means
                        may not be HIPPA compliant. </label>
                </div>
                @endif

                @if ($telehealth_checkbox == 11)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand my therapist will advise me about what telehealth platform to use and she will
                        establish a video conference session. I also recognize that if I am more than 10 minutes late to a
                        telehealth session, I will be charged the standard no-show fee. </label>
                </div>
                @endif

                @if ($telehealth_checkbox == 12)
                <div class="col-lg-12">
                    <label for="" class="d-flex ">
                        <i class="fa fa-check-square-o" aria-hidden="true" style="margin-top: 6px;margin-right: 5px;"></i>
                        I understand a “no show” or late fee will be charged if I miss an appointment or do not cancel
                        within 24 hours of scheduled appointment. I understand credit card or other form of payment will be
                        established before the first session and that insurance is not responsible for any late or no-show
                        fees accrued.</label>
                </div>
                @endif

                @if ($telehealth_checkbox == 13)
                <div class="col-lg-12">
                    <div class="subHeading">
                        <h5>
                            Client Understanding
                        </h5>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
                <div class="col-lg-12">
                    <label for="">
                        I <span>{{ $telehealth_form_detail->your_name ?? 'N/A' }}</span>
                        here by give my informed consent for the use of
                        telehealth in my care.
                    </label>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Signature box
                    </label>
                    <p>
                        {{ $telehealth_form_detail->signature ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <label for="">
                        {{ !empty($telehealth_form_detail->created_at) ? date('D M Y h:m:s A', strtotime($telehealth_form_detail->created_at)) : 'N/A' }}
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection
