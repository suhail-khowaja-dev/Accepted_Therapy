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

    .informationContainer p {
        background-color: #8080801c;
        border-radius: 5px;
        padding: 5px;
        font-size: 15px;
    }

    p i {
        margin-right: 2px
    }

</style>


@extends('admin.layouts.master')
@section('content')
    {{-- main_heading --}}
    <div class="ClientInformation d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="">
                    Client Information
                </h4>
            </div>
        </div>
    </div>
    {{-- customer_Information --}}
    <div class="custommerContainer">
        <div class="subHeading">
            <h5>
                Name and Contact Information
            </h5>
        </div>
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-4">
                    <label for="">
                        First Name
                    </label>
                    <p>
                        {{ $intake_form_detail->client_first_name ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Last Name
                    </label>
                    <p>
                        {{ $intake_form_detail->client_last_name ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Preferred Name
                    </label>
                    <p>
                        {{ $intake_form_detail->client_preferred_therapist_name ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Phone
                    </label>
                    <p>
                        {{ $intake_form_detail->client_phone ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        E-mail
                    </label>
                    <p>
                        {{ $intake_form_detail->client_email ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Address
                    </label>
                    <p>
                        {{ $intake_form_detail->client_address ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        County
                    </label>
                    <p>
                        {{ $intake_form_detail->client_county ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        City
                    </label>
                    <p>
                        {{ $intake_form_detail->client_city ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        State
                    </label>
                    <p>
                        {{ $intake_form_detail->client_state ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Zip
                    </label>
                    <p>
                        {{ $intake_form_detail->client_zip ?? 'N/A' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="custommerContainer">
        <div class="subHeading">
            <h5>
                Emergency Contact
            </h5>
        </div>
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-4">
                    <label for="">
                        Name
                    </label>
                    <p>
                        {{ $intake_form_detail->emergency_name ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Phone
                    </label>
                    <p>
                        {{ $intake_form_detail->emergency_phone ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Relation
                    </label>
                    <p>
                        {{ $intake_form_detail->emergency_relationship ?? 'N/A' }}
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="custommerContainer">
        <div class="subHeading">
            <h5>
                Place of Service
            </h5>
        </div>
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-4">
                    <label for="">
                        Place of Service
                    </label>
                    <p>
                        {{ $intake_form_detail->place_of_service ?? 'N/A' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- Your Local Police Department Information --}}
    @if (!empty($intake_form_detail->place_of_service) && $intake_form_detail->place_of_service == 'Telehealth')
    <div class="custommerContainer">
        <div class="subHeading">
            <h5>
                Your Local Police Department Information
            </h5>
        </div>
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-4">
                    <label for="">
                        Police Department Name
                    </label>
                    <p>
                        {{ $intake_form_detail->pos_police_departement_name ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Phone Number
                    </label>
                    <p>
                        {{ $intake_form_detail->pos_police_phone ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Address
                    </label>
                    <p>
                        {{ $intake_form_detail->pos_police_address ?? 'N/A' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="custommerContainer">
        <div class="subHeading">
            <h5>
                Demographic Information
            </h5>
        </div>
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-4">
                    <label for="">
                        Birthday
                    </label>
                    <p>
                       {{ $intake_form_detail->di_date_of_birth ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Legal Gender
                    </label>
                    <p>
                       {{ $intake_form_detail->di_legal_gender ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Gender Identity
                    </label>
                    <p>
                       {{ $intake_form_detail->di_legal_gender_identity ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Pronouns
                    </label>
                    <p>
                       {{ $intake_form_detail->di_pronounce ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Sexual Orientation
                    </label>
                    <p>
                       {{ $intake_form_detail->di_sexual_orientation ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Race
                    </label>
                    <p>
                        {{ $intake_form_detail->di_race ?? 'N/A' }}
                    </p>
                </div>
            </div>
        </div>
    </div>


    {{-- Insurance_Information --}}
    @if (!empty($intake_form_detail->intake_insurance->insurance_checkboxes_details) && !empty($intake_form_detail->intake_insurance->insurance_signature))
    <div class="ClientInformation d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="">
                    Insurance Information
                </h4>
            </div>
        </div>
    </div>

    
    <div class="custommerContainer">
        <div class="informationContainer">
            <div class="row">
                @if (!empty($intake_form_detail->intake_insurance->medical_insurance_radio_1))
                    @if ($intake_form_detail->intake_insurance->medical_insurance_radio_1 == 'yes')
                    <div class="col-lg-12">
                        <div class="subHeading">
                            <h5>
                                Do you have medical insurance?
                            </h5>
                            <p class="checkingbox">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label for="">
                            Responsible Party
                        </label>
                        <p>
                            {{ $intake_form_detail->intake_insurance->responsible_party_1 ?? 'N/A' }}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <label for="">
                            Birthday
                        </label>
                        <p>
                            {{ $intake_form_detail->intake_insurance->insurance_birthday ?? 'N/A' }}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <label for="">
                            Relationship to Client
                        </label>
                        <p>
                            {{ $intake_form_detail->intake_insurance->relationship_with_client_1 ?? 'N/A' }}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <label for="">
                            Address (If Different)
                        </label>
                        <p>
                            {{ $intake_form_detail->intake_insurance->address_if_different_1 ?? 'N/A' }}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <label for="">
                            Insurance Provider
                        </label>
                        <p>
                            {{ $intake_form_detail->intake_insurance->insurance_provider_1 ?? 'N/A' }}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <label for="">
                            Insured Name
                        </label>
                        <p>
                            {{ $intake_form_detail->intake_insurance->insurance_name_1 ?? 'N/A' }}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <label for="">
                            Policy Number
                        </label>
                        <p>
                            {{ $intake_form_detail->intake_insurance->policy_number_1 ?? 'N/A' }}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <label for="">
                            Group Number
                        </label>
                        <p>
                            {{ $intake_form_detail->intake_insurance->policy_group_number_1 ?? 'N/A' }}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <label for="">
                            co_pay_1
                        </label>
                        <p>
                            {{ $intake_form_detail->intake_insurance->co_pay_1 ?? 'N/A' }}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <label for="">
                            Client’s’ Relationship to Insured
                        </label>
                        <p>
                            {{ $intake_form_detail->intake_insurance->client_relationship_to_insurance_1 ?? 'N/A' }}
                        </p>
                    </div>
                    @endif
                @endif
                
                
                @if (!empty($intake_form_detail->intake_insurance->medical_insurance_radio_2))
                    @if ($intake_form_detail->intake_insurance->medical_insurance_radio_2 == 'yes')
                <div class="col-lg-12">
                    <div class="subHeading">
                        <h5>
                            Do you have a secondary insurance?
                        </h5>
                        <p class="checkingbox">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Insurance Provider
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_insurance->insurance_provider_2 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Insured Name
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_insurance->insurance_name_2 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Policy Number
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_insurance->policy_number_2 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Group Number
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_insurance->policy_group_number_2 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Copay
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_insurance->co_pay_2 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Client’s’ Relationship to Insured
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_insurance->relationship_with_client_2 ?? 'N/A' }}
                    </p>
                </div>
                @endif
            @endif

                {{-- For Image --}}
                @if (!empty($intake_form_detail->intake_insurance->insurance_copy))
                <div class="col-lg-4">
                    <label for="">
                        Upload a copy of insurance card:
                    </label>
                    <p>
                        <a href="{{ url('uploads/intake_form/'.$intake_form_detail->intake_insurance->insurance_copy) }}" target="_blank"><img style="width:75px;" src="{{ url('uploads/intake_form/'.$intake_form_detail->intake_insurance->insurance_copy) }}"></a>
                    </p>
                </div>
                @endif

                <div class="col-lg-12">
                    
                    @if (!empty($intake_form_detail->intake_insurance->insurance_checkboxes_details))
                        @foreach (json_decode($intake_form_detail->intake_insurance->insurance_checkboxes_details) as $insurance_checkboxe)
                            @if ($insurance_checkboxe == 1)
                                <p>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    I understand that by submitting my insurance information, I am giving Accepted Therapy Services permission to file on my insurance. This includes releasing information including:
                                </p>
                            @endif
                            @if ($insurance_checkboxe == 2)
                                <p>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Assessment
                                </p>
                            @endif
                            @if ($insurance_checkboxe == 3)
                                <p>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Diagnosis
                                </p>
                            @endif
                            @if ($insurance_checkboxe == 4)
                                <p>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Participation in treatment
                                </p>
                            @endif
                            @if ($insurance_checkboxe == 5)
                                <p>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Progress in treatment
                                </p>
                            @endif
                            @if ($insurance_checkboxe == 6)
                                <p>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    Demographic information
                                </p>
                            @endif
                            @if ($insurance_checkboxe == 7)
                                <p>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    I further understand that no progress notes will be submitted unless additional authorization is received by Accepted Therapy Services in writing:
                                </p>
                            @endif
                        @endforeach
                    @endif
                </div>
                <div class="col-lg-4">

                    <label for="">
                        Signature box
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_insurance->insurance_signature ?? 'N/A'}}
                    </p>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <label for="">
                        @if (!empty($intake_form_detail->created_at))
                            {{ date_format($intake_form_detail->created_at, 'D M m Y h:m:s A') }}
                        @endif
                    </label>
                </div>
            </div>
        </div>
    </div>

    @endif

    {{-- main_heading --}}
    <div class="ClientInformation d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="">
                    Presenting Problem
                </h4>
            </div>
        </div>
    </div>
    {{-- Presenting Problem --}}
    <div class="custommerContainer">
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-12">
                    <label for="">
                        What is your major complaint or issue that you would like to address?
                    </label>
                    <p>
                        {{ $intake_form_detail->pp_complaint_or_issue ?? 'N/A' }}
                    </p>
                </div>
                @if (!empty($intake_form_detail->pp_previously_suffered))
                <div class="col-lg-12">
                    <label for="">
                        Have you previously suffered from this issue?
                    </label>
                    <p>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->pp_previously_suffered }}
                    </p>
                </div>
                @endif

                @if (!empty($intake_form_detail->pp_diagnosed))
                <div class="col-lg-12">
                    <label for="">
                        Have you ever been diagnosed with a mental illness (Generalized Anxiety Disorder, Major Depressive
                        Disorder, ADHD, PTSD, personality disorder, etc.)? If so, when?
                    </label>
                    <p>
                        {{ $intake_form_detail->pp_diagnosed }}
                    </p>
                </div>
                @endif


                
                <div class="col-lg-12">
                    <div class="subHeading">
                        <h5>
                            Current Symptoms
                        </h5>
                    </div>
                </div>

                @if (!empty($intake_form_detail->current_symtoms))
                    @foreach (json_decode($intake_form_detail->current_symtoms) as $current_symtom)
                    
                    @if ($current_symtom == 1)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Anxiety
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 2)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Crying Spells
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 3)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Fatigue
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 4)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Hallucinations
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 5)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Libido Changes
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 6)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Racing Thoughts
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 7)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Suspiciousness
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 8)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Appetite Issues
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 9)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Depression
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 10)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Grief/Loss
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 11)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Impulsivity
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 12)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Lost of interest
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 13)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Risky Activity
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 14)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Other 1
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 15)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Avoidance
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 16)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Excessive Energy
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 17)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Guilt/Shame
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 18)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Irritability
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 19)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Panic Attacks
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 20)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Sleep Changes
                            </p>
                        </div>
                    @endif

                    @if ($current_symtom == 21)
                        <div class="col-lg-4">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Other 2
                            </p>
                        </div>
                    @endif
                    
                @endforeach
                @endif


                @if (!empty($intake_form_detail->cs_other_1))
                <div class="col-lg-6">
                    <label for="">
                        Symptom first
                    </label>
                    <p>
                        {{ $intake_form_detail->cs_other_1 }}
                    </p>
                </div>
                @endif

                @if (!empty($intake_form_detail->cs_other_2))
                <div class="col-lg-6">
                    <label for="">
                        Symptom second
                    </label>
                    <p>
                        {{ $intake_form_detail->cs_other_2 }}
                    </p>
                </div>
                @endif

               
                

                
                @if (!empty($intake_form_detail->cs_therapy_past))
                <div class="col-lg-12">
                    <label for="">
                        Have you ever received therapy in the past? If so, please provide treatment received and dates of
                        treatment.
                    </label>
                    <p>
                        {{ $intake_form_detail->cs_therapy_past }}
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>

  
    {{-- main_heading --}}
    <div class="ClientInformation d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="">
                    Medical History
                </h4>
            </div>
        </div>
    </div>
    {{-- Medical History --}}
    <div class="custommerContainer">
        {{-- <div class="subHeading">
            <h5>
               What is your major complaint or issue that you would like to address?
            </h5>
        </div> --}}
        <div class="informationContainer">
            <div class="row">

                @if (!empty($intake_form_detail->intake_medication->primary_care_provider))
                <div class="col-lg-4">
                    <label for="">
                        Primary Care Provider
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_medication->primary_care_provider }}
                    </p>
                </div>
                @endif

                @if (!empty($intake_form_detail->intake_medication->medication_phone))
                <div class="col-lg-4">
                    <label for="">
                        Phone Number
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_medication->medication_phone }}
                    </p>
                </div>
                @endif


                @if (!empty($intake_form_detail->intake_medication->medication_radio) && $intake_form_detail->intake_medication->medication_radio == 'yes')
                    
                
                    <div class="col-lg-12">
                        <div class="subHeading">
                            <h5>
                                Are you currently taking any medications?
                            </h5>
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Name of Medication 1
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_name_1 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Dosage 1
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_dosage_1 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Frequency 1
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_frequency_1 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>



                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Name of Medication 2
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_name_2 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Dosage 2
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_dosage_2 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Frequency 2
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_frequency_2 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Name of Medication 3
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_name_3 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Dosage 3
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_dosage_3 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Frequency 3
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_frequency_3 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Name of Medication 4
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_name_4 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Dosage 4
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_dosage_4 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Frequency 4
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_frequency_4 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>



                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Name of Medication 5
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_name_5 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Dosage 5
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_dosage_5 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="subHeading">
                            <label>
                                Frequency 5
                            </label>
                            <p>
                                {{ $intake_form_detail->intake_medication->m_frequency_5 ?? 'N/A' }}
                            </p>
                        </div>
                    </div>

                @endif

                

                
                
                @if (!empty($intake_form_detail->intake_medication->madication_tried))
                <div class="col-lg-12">
                    <label for="">
                        What medications have you tried previously that did not work for you?
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_medication->madication_tried }}
                    </p>
                </div>
                @endif

                @if (!empty($intake_form_detail->intake_medication->madication_condition))
                <div class="col-lg-12">
                    <label for="">
                        Do you have any medical conditions?
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_medication->madication_condition }}
                    </p>
                </div>
                @endif

            </div>
        </div>
    </div>
    {{--  --}}
    {{-- main_heading --}}
    <div class="ClientInformation d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="">
                    Mental Health History
                </h4>
            </div>
        </div>
    </div>
    {{-- Mental Health History --}}
    <div class="custommerContainer">
        <div class="subHeading">
            <h5>
                Suicidal Ideations
            </h5>
        </div>
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-12">
                    <h3 for="">
                        Do you have any of the following:
                    </h3>
                </div>
                @if (!empty($intake_form_detail->csi_radio))
                <div class="col-lg-4">
                    <label for="">
                        Current suicidal ideations?
                    </label>
                    @if ($intake_form_detail->csi_radio == 'yes')
                        <p>
                            <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes <br>{{ $intake_form_detail->mh_current_suicidal_ideations }}
                        </p>
                    @endif

                    @if ($intake_form_detail->csi_radio == 'no')
                        <p>
                            <i class="fa fa-ban" aria-hidden="true"></i> No
                        </p>
                    @endif
                </div>
                @endif


                @if (!empty($intake_form_detail->csp_radio))
                <div class="col-lg-12">
                    <label for="">
                        Current suicide plan?
                    </label>
                    @if ($intake_form_detail->csp_radio == 'yes')
                        <p>
                            <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes <br>{{ $intake_form_detail->mh_current_suicidal_plan }}
                        </p>
                    @endif

                    @if ($intake_form_detail->csp_radio == 'no')
                        <p>
                            <i class="fa fa-ban" aria-hidden="true"></i> No
                        </p>
                    @endif
                </div>
                @endif

                @if (!empty($intake_form_detail->cshb_radio))
                <div class="col-lg-12">
                    <label for="">
                        Current self-harming behaviors?

                    </label>
                    @if ($intake_form_detail->cshb_radio == 'yes')
                    <p>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes <br>{{ $intake_form_detail->mh_current_self_harming_behaviors }}
                    </p>
                    @endif

                    @if ($intake_form_detail->cshb_radio == 'no')
                        <p>
                            <i class="fa fa-ban" aria-hidden="true"></i> No
                        </p>
                    @endif
                </div>
                @endif
                
                @if (!empty($intake_form_detail->hsoi_radio))
                <div class="col-lg-12">
                    <label for="">
                        History of suicidal ideations?

                    </label>
                    @if ($intake_form_detail->hsoi_radio == 'yes')
                    <p>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes <br>{{ $intake_form_detail->mh_history_of_suicidal_ideations }}
                    </p>
                    @endif

                    @if ($intake_form_detail->hsoi_radio == 'no')
                        <p>
                            <i class="fa fa-ban" aria-hidden="true"></i> No
                        </p>
                    @endif
                </div>
                @endif

                @if (!empty($intake_form_detail->psa_radio))
                <div class="col-lg-12">
                    <label for="">
                        Previous suicide attempts?

                    </label>
                    @if ($intake_form_detail->psa_radio == 'yes')
                    <p>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes <br>{{ $intake_form_detail->mh_previous_suicide_attempts }}
                    </p>
                    @endif

                    @if ($intake_form_detail->psa_radio == 'no')
                        <p>
                            <i class="fa fa-ban" aria-hidden="true"></i> No
                        </p>
                    @endif
                </div>
                @endif


                @if (!empty($intake_form_detail->hosh_radio))
                <div class="col-lg-12">
                    <label for="">
                        History of self-harming?
                    </label>
                    @if ($intake_form_detail->hosh_radio == 'yes')
                    <p>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes <br>{{ $intake_form_detail->mh_history_of_self_harming }}
                    </p>
                    @endif

                    @if ($intake_form_detail->hosh_radio == 'no')
                        <p>
                            <i class="fa fa-ban" aria-hidden="true"></i> No
                        </p>
                    @endif
                </div>
                @endif
                
                <div class="col-lg-12">
                    <div class="subHeading">
                        <h5>
                            Substance Use
                        </h5>
                    </div>
                    <h3>
                        Nicotine/Caffeine
                    </h3>
                </div>

                @if (!empty($intake_form_detail->su_nicotine_caffeine))
                <div class="col-lg-12">
                    <label for="">
                        Do you use nicotine (smoking, vaping, chewing tobacco, etc.)?
                    </label>
                    <p>
                        {{ $intake_form_detail->su_nicotine_caffeine }}
                    </p>
                </div>
                @endif

                @if (!empty($intake_form_detail->su_caffeinated_beverages_per_day))
                <div class="col-lg-12">
                    <label for="">
                        How many caffeinated beverages do you drink per day?
                    </label>
                    <p>
                        {{ $intake_form_detail->su_caffeinated_beverages_per_day }}
                    </p>
                </div>
                @endif

                @if (!empty($intake_form_detail->alcohole_consume))
                <div class="col-lg-12">
                    <h3 for="">
                        Alcohol
                    </h3>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        How much alcohol do you typically consume?
                    </label>
                    <p>
                        {{ $intake_form_detail->alcohole_consume }}
                    </p>
                </div>
                @endif


                <div class="col-lg-4">
                    <label for="">
                        How many drinks do you have on a typical day when you are drinking?
                    </label>
                    <p>
                        {{ empty($intake_form_detail->alcohole_drinks) ? 'N/A' : $intake_form_detail->alcohole_drinks}}
                    </p>
                </div>

                @if (!empty($intake_form_detail->who_told_you))
                <div class="col-lg-4">
                    <label for="">
                        Has anyone ever told you that you drink too much?
                    </label>
                    <p>
                        {{ $intake_form_detail->who_told_you }}
                    </p>
                </div>
                @endif

                <div class="col-lg-12">
                    <h3>
                        Illicit Drugs
                    </h3>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Have you ever tried any of the following?
                    </label>
                </div>
                {{-- {{ dd($intake_form_detail->intake_drug->checkbox_3) }} --}}
                @if (!empty($intake_form_detail->intake_drug->checkbox_1) && $intake_form_detail->intake_drug->checkbox_1 == 'Cocaine')
                <div class="col-lg-12">
                    <label for=""></label>
                    <p for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->intake_drug->checkbox_1 }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Age of First Use (1st)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->age_use_1 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Length of Use (1st)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->length_use_1 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Frequency of use (1st)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->frequency_use_1 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Amount of use (1st)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->amount_use_1 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Date of Last Use (1st)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->date_last_use_1 ?? 'N/A' }}
                    </p>
                </div>
                @endif



                @if (!empty($intake_form_detail->intake_drug->checkbox_2) && $intake_form_detail->intake_drug->checkbox_2 == 'Ecstasy')
                <div class="col-lg-12">
                    <label for=""></label>
                    <p for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->intake_drug->checkbox_2 }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Age of First Use (2nd)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->age_use_2 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Length of Use (2nd)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->length_use_2 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Frequency of use (2nd)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->frequency_use_2 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Amount of use (2nd)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->amount_use_2 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Date of Last Use (2nd)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->date_last_use_2 ?? 'N/A' }}
                    </p>
                </div>
                @endif



                @if (!empty($intake_form_detail->intake_drug->checkbox_3) && $intake_form_detail->intake_drug->checkbox_3 == 'Hallucinogens (LSD)')
                <div class="col-lg-12">
                    <label for=""></label>
                    <p for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->intake_drug->checkbox_3 }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Age of First Use (3rd)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->age_use_3 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Length of Use (3rd)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->length_use_3 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Frequency of use (3rd)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->frequency_use_3 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Amount of use (3rd)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->amount_use_3 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Date of Last Use (3rd)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->date_last_use_3 ?? 'N/A' }}
                    </p>
                </div>
                @endif




                @if (!empty($intake_form_detail->intake_drug->checkbox_4) && $intake_form_detail->intake_drug->checkbox_4 == 'Heroin')
                <div class="col-lg-12">
                    <label for=""></label>
                    <p for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->intake_drug->checkbox_4 }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Age of First Use (4th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->age_use_4 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Length of Use (4th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->length_use_4 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Frequency of use (4th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->frequency_use_4 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Amount of use (4th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->amount_use_4 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Date of Last Use (4th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->date_last_use_4 ?? 'N/A' }}
                    </p>
                </div>
                @endif





                @if (!empty($intake_form_detail->intake_drug->checkbox_5) && $intake_form_detail->intake_drug->checkbox_5 == 'Marijuana')
                <div class="col-lg-12">
                    <label for=""></label>
                    <p for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->intake_drug->checkbox_5 }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Age of First Use (5th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->age_use_5 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Length of Use (5th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->length_use_5 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Frequency of use (5th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->frequency_use_5 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Amount of use (5th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->amount_use_5 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Date of Last Use (5th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->date_last_use_5 ?? 'N/A' }}
                    </p>
                </div>
                @endif





                @if (!empty($intake_form_detail->intake_drug->checkbox_6) && $intake_form_detail->intake_drug->checkbox_6 == 'Methadone/Suboxone')
                <div class="col-lg-12">
                    <label for=""></label>
                    <p for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->intake_drug->checkbox_6 }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Age of First Use (6th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->age_use_6 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Length of Use (6th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->length_use_6 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Frequency of use (6th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->frequency_use_6 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Amount of use (6th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->amount_use_6 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Date of Last Use (6th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->date_last_use_6 ?? 'N/A' }}
                    </p>
                </div>
                @endif




                @if (!empty($intake_form_detail->intake_drug->checkbox_7) && $intake_form_detail->intake_drug->checkbox_7 == 'Methamphetamines')
                <div class="col-lg-12">
                    <label for=""></label>
                    <p for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->intake_drug->checkbox_7 }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Age of First Use (7th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->age_use_7 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Length of Use (7th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->length_use_7 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Frequency of use (7th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->frequency_use_7 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Amount of use (7th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->amount_use_7 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Date of Last Use (7th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->date_last_use_7 ?? 'N/A' }}
                    </p>
                </div>
                @endif



                @if (!empty($intake_form_detail->intake_drug->checkbox_8) && $intake_form_detail->intake_drug->checkbox_8 == 'Opioids (pain killers)')
                <div class="col-lg-12">
                    <label for=""></label>
                    <p for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->intake_drug->checkbox_8 }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Age of First Use (8th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->age_use_8 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Length of Use (8th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->length_use_8 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Frequency of use (8th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->frequency_use_8 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Amount of use (8th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->amount_use_8 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Date of Last Use (8th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->date_last_use_8 ?? 'N/A' }}
                    </p>
                </div>
                @endif



                @if (!empty($intake_form_detail->intake_drug->checkbox_9) && $intake_form_detail->intake_drug->checkbox_9 == 'Stimulants (pills)')
                <div class="col-lg-12">
                    <label for=""></label>
                    <p for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->intake_drug->checkbox_9 }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Age of First Use (9th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->age_use_9 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Length of Use (9th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->length_use_9 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Frequency of use (9th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->frequency_use_9 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Amount of use (9th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->amount_use_9 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Date of Last Use (9th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->date_last_use_9 ?? 'N/A' }}
                    </p>
                </div>
                @endif


                @if (!empty($intake_form_detail->intake_drug->checkbox_10) && $intake_form_detail->intake_drug->checkbox_10 == 'Tranquilizers')
                <div class="col-lg-12">
                    <label for=""></label>
                    <p for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->intake_drug->checkbox_10 }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Age of First Use (10th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->age_use_10 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Length of Use (10th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->length_use_10 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Frequency of use (10th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->frequency_use_10 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Amount of use (10th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->amount_use_10 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Date of Last Use (10th)
                    </label>
                    <p for="">
                        {{ $intake_form_detail->intake_drug->date_last_use_10 ?? 'N/A' }}
                    </p>
                </div>
                @endif


                @if (!empty($intake_form_detail->intake_drug->drug_misused_or_abuse_radio) && $intake_form_detail->intake_drug->drug_misused_or_abuse_radio == 'yes')
                <div class="col-lg-12">
                    <label for="">
                        Have you ever misused or abused prescription drugs?
                    </label>
                    <p for="">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes <br>
                        {{ $intake_form_detail->intake_drug->drug_misused_info }}
                    </p>
                </div>
                @endif

            </div>
        </div>
    </div>
    {{--  --}}
    {{-- main_heading --}}
    <div class="ClientInformation d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="">
                    Addition Information
                </h4>
            </div>
        </div>
    </div>
    {{-- Addition Information --}}
    <div class="custommerContainer">
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subHeading">
                        <h5>
                            Work
                        </h5>
                        @if (!empty($intake_form_detail->ai_occupation))
                        <label for="occupation">Occupation</label>
                        <p class="checkingbox">
                            {{ $intake_form_detail->ai_occupation }}
                        </p>    
                        @endif
                        
                        @if (!empty($intake_form_detail->ai_employer))
                        <label for="occupation">Occupation</label>
                        <p>
                            {{ $intake_form_detail->ai_employer }}
                        </p>
                        @endif

                    </div>
                </div>
                @if (!empty($intake_form_detail->ai_what_you_do))
                <div class="col-lg-12">
                    <label for="">
                        Do you enjoy what you do?
                    </label>
                    <p>
                        {{ $intake_form_detail->ai_what_you_do }}
                    </p>
                </div>
                @endif

                <div class="col-lg-12">
                    <div class="subHeading">
                        <h5>
                            Marriage
                        </h5>

                    </div>
                </div>
                
                @if (!empty($intake_form_detail->m_married_radio) && $intake_form_detail->m_married_radio == 'yes')
                <div class="col-lg-12">
                    <label for="">
                        Are you married?
                    </label>
                    <p>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes / {{ date("M Y", strtotime($intake_form_detail->m_married)) }}
                    </p>
                </div>
                @endif

                @if (!empty($intake_form_detail->m_divorced_radio) && $intake_form_detail->m_divorced_radio == 'yes')
                <div class="col-lg-12">
                    <label for="">
                        Have you ever been divorced?
                    </label>
                    <p>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes / {{ date("M Y", strtotime($intake_form_detail->m_divorced)) }}
                    </p>
                </div>
                @endif

                @if (!empty($intake_form_detail->m_rwyp_radio) && $intake_form_detail->m_rwyp_radio == 'yes')
                <div class="col-lg-12">
                    <label for="">
                        Do you have any prior marriages?
                    </label>
                    <p>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes
                    </p>

                    <label for="">
                        How many?
                    </label>
                    <p>
                        {{ $intake_form_detail->how_many ?? 'N/A' }}
                    </p>

                    @if (!empty($intake_form_detail->how_many_question))
                        
                   
                    @foreach (json_decode($intake_form_detail->how_many_question) as $question)
                    
                    @if ($question == 1)
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos distinctio accusamus vel numquam illum iure?
                            </p>
                            @endif
                            @if ($question == 2)
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos distinctio accusamus vel numquam illum iure?
                            </p>
                            @endif
                            @if ($question == 3)
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos distinctio accusamus vel numquam illum iure?
                            </p>
                            @endif
                            @if ($question == 4)
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos distinctio accusamus vel numquam illum iure?
                            </p>
                            @endif
                        
                    @endforeach
                    @endif

                    <label for="">
                        How many Dates of divorce/death?
                    </label>
                    <br>
                    <br>

                    <div class="row">
                        <div class="col-2">
                            <label for="">
                                divorce/death 1
                            </label>
                        </div>
                        <div class="col-5">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->divorce_death_1 ?? 'N/A' }}
                            </p>
                        </div>
                        <div class="col-5">
                            <p>
                                {{ json_decode($intake_form_detail->divorce_or_death_date)[0] ?? 'N/A' }}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <label for="">
                                divorce/death 2
                            </label>
                        </div>
                        <div class="col-5">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->divorce_death_2 ?? 'N/A' }}
                            </p>
                        </div>
                        <div class="col-5">
                            <p>
                                {{ json_decode($intake_form_detail->divorce_or_death_date)[1] ?? 'N/A' }}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <label for="">
                                divorce/death 3
                            </label>
                        </div>
                        <div class="col-5">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->divorce_death_3 ?? 'N/A' }}
                            </p>
                        </div>
                        <div class="col-5">
                            <p>
                                {{ json_decode($intake_form_detail->divorce_or_death_date)[2] ?? 'N/A' }}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <label for="">
                                divorce/death 4
                            </label>
                        </div>
                        <div class="col-5">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->divorce_death_4 ?? 'N/A' }}
                            </p>
                        </div>
                        <div class="col-5">
                            <p>
                                {{ json_decode($intake_form_detail->divorce_or_death_date)[3] ?? 'N/A' }}
                            </p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-2">
                            <label for="">
                                divorce/death 5
                            </label>
                        </div>
                        <div class="col-5">
                            <p>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->divorce_death_5 ?? 'N/A' }}
                            </p>
                        </div>
                        <div class="col-5">
                            <p>
                                {{ json_decode($intake_form_detail->divorce_or_death_date)[4] ?? 'N/A' }}
                            </p>
                        </div>
                    </div>
                    
                    
                    
{{--                     
                    <div class="row">
                        @foreach (json_decode($intake_form_detail->divorce_or_death_date) as $date)
                        <div class="col-6">
                            <p>
                                {{ date("d M Y", strtotime($date)) }}
                            </p>
                        </div>
                        @endforeach
                    </div> --}}
                    
                </div>
                @endif

                @if (!empty($intake_form_detail->m_relationship_with_your_partner))
                <div class="col-lg-12">
                    <label for="">
                        How is your relationship with your partner?
                    </label>
                    <p>
                        {{ $intake_form_detail->m_relationship_with_your_partner }}
                    </p>
                </div>
                @endif

                
                
                <div class="col-lg-12">
                    <h5 for="">
                        Children
                    </h5>
                </div>
                @if (!empty($intake_form_detail->intake_children->no_of_children_radio) && $intake_form_detail->intake_children->no_of_children_radio == 'yes')
                <div class="col-lg-12">
                    <label for="">
                        Do you have any children (including step-children)?
                    </label>
                    <p>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> Yes
                    </p>
                </div>

                
                <div class="col-lg-12">
                    <label for="">
                        Number of children
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->no_of_children	?? 'N/A' }}
                    </p>
                </div>
                

                <div class="col-lg-12">
                    <label for="">
                        Name of (1st) Child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->name_child_1 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Age of (1st) Child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->age_of_child_1 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Relation with your (1st) child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->relationship_with_child_1 ?? 'N/A' }}
                    </p>
                </div>





                <div class="col-lg-12">
                    <label for="">
                        Name of (2nd) Child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->name_child_2 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Age of (2nd) Child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->age_of_child_2 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Relation with your (2nd) child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->relationship_with_child_2 ?? 'N/A' }}
                    </p>
                </div>




                <div class="col-lg-12">
                    <label for="">
                        Name of (3rd) Child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->name_child_3 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Age of (3rd) Child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->age_of_child_3 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Relation with your (3rd) child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->relationship_with_child_3 ?? 'N/A' }}
                    </p>
                </div>



                <div class="col-lg-12">
                    <label for="">
                        Name of (4th) Child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->name_child_4 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Age of (4th) Child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->age_of_child_4 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Relation with your (4th) child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->relationship_with_child_4 ?? 'N/A' }}
                    </p>
                </div>


                <div class="col-lg-12">
                    <label for="">
                        Name of (5th) Child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->name_child_5 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Age of (5th) Child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->age_of_child_5 ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Relation with your (5th) child
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_children->relationship_with_child_5 ?? 'N/A' }}
                    </p>
                </div>
                @endif


                <div class="col-lg-12">
                    <h5 for="">
                        Religion/Spirituality
                    </h5>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        What is your religion?
                    </label>
                    <p>
                        {{ $intake_form_detail->religion ?? '' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Is spirituality important to you?
                    </label>
                    <p>
                        {{ $intake_form_detail->spirituality ?? 'N/A' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
    {{-- main_heading --}}
    <div class="ClientInformation d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="">
                    Family History
                </h4>
            </div>
        </div>
    </div>
    {{-- Family History --}}
    <div class="custommerContainer">
        {{-- <div class="subHeading">
            <h5>
                Do you have medical insurance?
            </h5>
        </div> --}}
        <div class="informationContainer">
            <div class="row">

                <div class="col-lg-12">
                    <label for="">
                        Were you adopted?
                    </label>
                    <p>
                        <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $intake_form_detail->adopted_radio == 'yes' ? 'Yes' : 'No' }}
                    </p>
                </div>

                @if ($intake_form_detail->adopted_radio == 'yes')
                <div class="col-lg-12">
                    <label>
                        How old were you when you were adopted?
                    </label>
                    <p>
                        {{ $intake_form_detail->adopted_age	 ?? 'N/A' }}
                    </p>
                </div>
                 <div class="col-lg-12">
                    <label>
                        Do you have a relationship with your biological parents?
                    </label>
                    <p>
                        {{ $intake_form_detail->biological_parents ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Relationship of Parents:
                    </label>
                    <p>
                        {{ $intake_form_detail->relationship_of_parents ?? 'N/A' }}
                    </p>
                </div>
                @endif
                
                <div class="col-lg-12">
                    <label for="">
                       Is your mother living?
                    </label>
                    <p>
                        <i class="fa {{ $intake_form_detail->is_mother_living_radio == 'yes' ? 'fa-check-square-o' : 'fa-ban' }}" aria-hidden="true"></i> {{ $intake_form_detail->is_mother_living_radio == 'yes' ? 'Yes' : 'No' }}
                    </p>
                </div>

                @if ($intake_form_detail->is_mother_living_radio == 'yes')
                <div class="col-lg-12">
                    <label for="">
                        How is/was your relationship with your mother?
                    </label>
                    <p>
                       {{ $intake_form_detail->relationship_with_mother ?? 'N/A' }}
                    </p>
                </div>    
                @endif
                
                @if ($intake_form_detail->is_mother_living_radio == 'no')
                <div class="col-lg-12">
                    <label for="">
                        Date of death
                    </label>
                    <p>
                       {{ $intake_form_detail->mother_date_of_death != '' ? date("M d Y", strtotime($intake_form_detail->mother_date_of_death)) : 'N/A' }} 
                    </p>
                </div>

                <div class="col-lg-12">
                    <label for="">
                        How is/was your relationship with your mother?
                    </label>
                    <p>
                       {{ $intake_form_detail->relationship_with_mother ?? 'N/A' }}
                    </p>
                </div>
                @endif


                <div class="col-lg-12">
                    <label for="">
                        Is your father living?
                    </label>
                    <p>
                        <i class="fa {{ $intake_form_detail->father_living_radio == 'yes' ? 'fa-check-square-o' : 'fa-ban' }}" aria-hidden="true"></i> {{ $intake_form_detail->father_living_radio == 'yes' ? 'Yes' : 'No' }}
                    </p>
                </div>

                @if ($intake_form_detail->father_living_radio == 'yes')
                <div class="col-lg-12">
                    <label for="">
                        How is/was your relationship with your father?
                    </label>
                    <p>
                        {{ $intake_form_detail->relationship_with_father ?? 'N/A' }}
                    </p>
                </div>
                @endif

                @if ($intake_form_detail->father_living_radio == 'no')
                <div class="col-lg-12">
                    <label for="">
                        Date of death
                    </label>
                    <p>
                        {{ $intake_form_detail->father_date_of_death != '' ? date("M d Y", strtotime($intake_form_detail->father_date_of_death)) : 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        How is/was your relationship with your father?
                    </label>
                    <p>
                        {{ $intake_form_detail->relationship_with_father ?? 'N/A' }}
                    </p>
                </div>
                @endif


                @if (!empty($intake_form_detail->intake_siblings[0]->sibling_count))
                    
                
                <div class="col-lg-12">
                    <label for="">
                        How many siblings do you have?
                    </label>
                    <p>
                        {{ $intake_form_detail->intake_siblings[0]->sibling_count ?? 'N/A' }}
                    </p>
                </div>
                {{-- {{ dd($intake_form_detail->intake_siblings) }} --}}
                @foreach ($intake_form_detail->intake_siblings as $index => $sibling)
                <div class="col-lg-12">
                    <label for="">
                        {{ $index == 0 ? '(1st)': ''}} {{ $index == 1 ? '(2nd)': ''}} {{ $index == 2 ? '(3rd)': ''}} {{ $index == 3 ?  '(4th)' : ''}} {{ $index == 4 ?  '(5th)' : ''}} Sibling Name
                    </label>
                    <p>
                        {{ $sibling->sibling_name ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        {{ $index == 0 ? '(1st)': ''}} {{ $index == 1 ? '(2nd)': ''}} {{ $index == 2 ? '(3rd)': ''}} {{ $index == 3 ?  '(4th)' : ''}} {{ $index == 4 ?  '(5th)' : ''}} Sibling Age 
                    </label>
                    <p>
                        {{ $sibling->sibling_age ?? 'N/A' }}
                    </p>
                </div>

                <div class="col-lg-12">
                    <label for="">
                        {{ $index == 0 ? '(1st)': ''}} {{ $index == 1 ? '(2nd)': ''}} {{ $index == 2 ? '(3rd)': ''}} {{ $index == 3 ?  '(4th)' : ''}} {{ $index == 4 ?  '(5th)' : ''}} Sibling Relationship with
                    </label> 
                    <p>
                        {{ $sibling->sibling_relation ?? 'N/A' }}
                    </p>
                </div>
                @endforeach
                @endif


                
                    
                
                <div class="col-lg-12">
                    <label for="">
                        What is your birth order?
                    </label>
                    <p>
                        {{ $intake_form_detail->birth_order ?? 'N/A' }}
                    </p>
                </div>
                 <div class="col-lg-12">
                     <div class="subHeading">
                         <h5>
                             Medical Conditions
                            </h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="">
                        Does anyone in your family have any medical conditions? If so, specify medical condition and member of family affected.
                    </label>
                    <p>
                        {{ $intake_form_detail->medical_conditions ?? 'N/A' }}
                    </p>
                </div>

                <div class="col-lg-12">
                    <label for="">
                        Do you have any family history of mental illness? If so, specify diagnosis and member of family affected.
                    </label>
                    <p>
                        {{ $intake_form_detail->mental_illness ?? 'N/A' }}
                    </p>
                </div>

                <div class="col-lg-12">
                    <label for="">
                        Is there anything else that you want your therapist to know?
                    </label>
                    <p>
                        {{ $intake_form_detail->anything_else_know_therapist ?? 'N/A' }}
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
