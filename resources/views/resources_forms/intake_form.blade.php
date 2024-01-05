@extends('layouts.master')
@section('content')

<!-- ================================== INTAKE FORM ============================= -->
<section class="forms">
    <div class="container form-intake">
        <div class="container form1">
            <fieldset class="border">
                <legend class="text-center" style="text-transform: capitalize">
                    Intake Form
                </legend>
                <div class="position-relative therapy-border d-flex justify-content-center flex-wrap pt-4">
                    <div class="therapy-border-img">
                        <img src="{{ asset('assets/images/logo2.svg') }}" alt="logo">
                    </div>
                </div>
                <!-- FORM -->
                <div class="container form-fileds mt-5">
                    <!-- Client Info  -->
                    <form action="{{ route('intake_form_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3>Client Information</h3>
                        <h5>Name and Contact Information</h5>
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="mb-4">
                                    <input type="text" placeholder="First Name" name="first_name"
                                        class="form-control py-3"  value="{{ old('first_name') }}">
                                </div>
                                <div class="mb-4">
                                    <input type="text" placeholder="Last Name" name="last_name"
                                        class="form-control py-3"  value="{{ old('last_name') }}">
                                </div>
                                <div class="mb-4">
                                    <input type="text" placeholder="Preferred Name" name="preferred_therapist_name"
                                        class="form-control py-3"  value="{{ old('preferred_therapist_name') }}">
                                </div>
                                <div class="mb-4">
                                    <input type="text" placeholder="Phone" name="phone"
                                        class="form-control py-3" id="exampleInputPhone1" value="{{ old('phone') }}" / onkeydown="javascript:backspacerDOWN(this,event);"
                                        onkeyup="javascript:backspacerUP(this,event);">
                                </div>
                                <div class="mb-4">
                                    <input type="email" placeholder="Email" name="email"
                                        class="form-control py-3" id="exampleInputEmail1" value="{{ old('email') }}">
                                </div>
                                <div class="mb-4">
                                    <textarea class="form-control" id="validationTextarea" placeholder="Address"
                                         rows="3" name="address">{{ old('address') }}</textarea>
                                </div>
                                {{-- <div class="mb-4">
                                    <input type="text" class="form-control py-3" name="street"
                                        placeholder="Street" id="validationDefault02" value="{{ old('street') }}">
                                </div> --}}
                                <div class="mb-4">
                                    <select class="form-select py-3" id="validationDefault03"
                                        placeholder="County" name="county">
                                        @include('partials.county')
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <select class="form-select py-3" id="validationDefault03"
                                        placeholder="City" name="city">
                                        @include('partials.cities')
                                    </select>
                                </div>
                                <div class="mb-4 col-md-12">
                                    <select class="form-select py-3" id="validationDefault04"
                                        placeholder="State" name="state">
                                        @include('partials.states')
                                    </select>
                                </div>
                                <div class="mb-4 col-md-12">
                                    <input type="text" class="form-control py-3" name="zip_code" placeholder="Zip"
                                        id="validationDefault05" value="{{ old('zip_code') }}">
                                </div>


                            </div>
                        </div>
                        <!-- Emergency Contact -->
                        <div class="">
                            <div class="row">
                                <h5>Emergency Contact</h5>
                            </div>
                            <div class="mb-4">
                                <input type="text" placeholder="Name" name="emergency_person_name" class="form-control py-3"
                                     value="{{ old('emergency_person_name') }}">
                            </div>
                            <div class="mb-4">
                                <input type="text" placeholder="Phone" name="emergency_person_phone" class="form-control py-3"
                                    id="exampleInputPhone2" value="{{ old('emergency_person_phone') }}" / onkeydown="javascript:backspacerDOWN(this,event);"
                                    onkeyup="javascript:backspacerUP(this,event);">
                            </div>
                            <div class="mb-4">
                                <input type="text" placeholder="Relationship" name="relationship"
                                    class="form-control py-3"  value="{{ old('relationship') }}">
                            </div>


                        </div>
                        <!-- Place of Service -->
                        <div class="">
                            <div class="row">
                                <h5>Place of Service</h5>
                            </div>
                            <div class="mb-4">
                                <select onchange="tele(this);" class="form-select py-3"  name="place_of_service"
                                    >
                                    @include('partials.place_of_service')
                                </select>
                                <div id="ifTele" class="mt-4">
                                    <div class="row">
                                        <h5>Your Local Police Department Information</h5>
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" placeholder="Police Department Name" name="police_departement"
                                            class="form-control py-3" id="policeDep" >
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" placeholder="Phone Number" name="police_phone_number"
                                            class="form-control py-3" id="policePhone" / onkeydown="javascript:backspacerDOWN(this,event);"
                                            onkeyup="javascript:backspacerUP(this,event);">
                                    </div>
                                    <div class="mb-4">
                                        <textarea class="form-control" id="police-address" placeholder="Address"
                                            name="police_address" rows="3" ></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Demographic Information -->
                        <div class="demo-graph">
                            <div class="row">
                                <h5>Demographic Information</h5>
                            </div>
                            <div class="mb-4">
                                <label for="dob">Birthday</label>
                                <input type="date" name="dg_date_of_birth" class="form-control py-3" id="dob" value="{{ old('dg_date_of_birth') }}"
                                     />
                                <!-- <input class="form-control py-3" min="2022-03-31" max="2023-08-24" value="2017-03-01" list="date-list" placeholder="yyyy-mm-dd" ="" type="date" />                  -->
                            </div>
                            <div class="mb-4">
                                <select class="form-select py-3"  name="legal_gender" >
                                    @include('partials.legal_gender')
                                </select>
                            </div>
                            <div class="mb-4">
                                <select class="form-select py-3"  name="gender_identity">
                                    @include('partials.gender_identity')
                                </select>
                            </div>
                        </div>
                        <!-- Pronouns-->
                        <div class="pronouns">
                            <!-- <div class="row">
                                <h5>Pronouns</h5>
                            </div> -->
                            <div class="mb-4">
                                <input type="text" placeholder="Pronouns" name="pronounce"
                                    class="form-control py-3"  value="{{ old('pronounce') }}">
                            </div>
                            <div class="mb-4">
                                <select class="form-select py-3"  name="sexual_orientation">
                                    @include('partials.sexual_orientation')
                                </select>
                            </div>
                            <div class="mb-4">
                                <select class="form-select py-3"  name="race" >
                                    @include('partials.race')
                                </select>
                            </div>
                            <div class="mb-4">
                                <select class="form-select py-3"  name="marital_status" >
                                   @include('partials.marital_status')
                                </select>
                            </div>
                        </div>

                        <!-- Insurance Information -->
                        <div class="insu-info">
                            <div class="row">
                                <h5 class="sub-head position-relative pt-5">Insurance Information</h5>
                            </div>
                            <div class="row">
                                <span class="mb-4 label1">Do you have medical insurance?</span>
                                <div class="mb-4">
                                    <input type="radio" class="form-check-input" onclick="checkyes();"
                                        value="yes" name="medical_insurance_radio_1" id="yeschecked" {{ old('medical_insurance_radio_1') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label pr-5" for="yeschecked">Yes</label>
                                    <input type="radio" class="form-check-input" onclick="checkno();" value="no"
                                        id="nochecked" name="medical_insurance_radio_1" {{ old('medical_insurance_radio_1') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="nochecked">No</label>
                                </div>
                            </div>
                            <div id="ifYes">
                                <div class="mb-4">
                                    <input type="text" placeholder="Subscriber Name" name="responsible_party_1"
                                        class="form-control py-3" id="respon-party" value="{{ old('responsible_party_1') }}">
                                </div>
                                {{-- <div class="mb-4">
                                    <label for="dob">Birthday</label>
                                    <input type="date" class="form-control py-3" name="insurance_birthday" id="insurance-dob"
                                        placeholder="04/04/2022" value="{{ old('insurance_birthday') }}"/>
                                </div> --}}
                                <div class="mb-4">
                                    <input type="text" placeholder="Relationship to Client" name="relationship_with_client_1" value="{{ old('relationship_with_client_1') }}"
                                        class="form-control py-3" >
                                </div>
                                <div class="mb-4">
                                    <textarea class="form-control" placeholder="Address (If Different)" name="address_if_different_1" rows="3">{{ old('address_if_different_1') }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <select class="form-select py-3"  name="insurance_provider_1">
                                        @include('partials.insurance_provider')
                                    </select>
                                </div>
                                {{-- <div class="mb-4">
                                    <input type="text" placeholder="Insured Name" name="insurance_name_1"
                                        class="form-control py-3" value="{{ old('insurance_name_1') }}">
                                </div> --}}
                                <div class="mb-4">
                                    <input type="text" placeholder="Policy Number" name="policy_number_1"
                                        class="form-control py-3" maxlength="10" value="{{ old('policy_number_1') }}">
                                </div>
                                <div class="mb-4">
                                    <input type="text" placeholder="Group Number" name="policy_group_number_1"
                                        class="form-control py-3" maxlength="10" value="{{ old('policy_group_number_1') }}">
                                </div>
                                <div class="mb-4">
                                    <input type="number" placeholder="Copay" name="co_pay_1"
                                        class="form-control py-3" maxlength="10" value="{{ old('co_pay_1') }}">
                                </div>
                                <div class="mb-4">
                                    <select class="form-select py-3"  name="client_relationship_to_insurance_1">
                                        @include('partials.client_relationship_to_insurance')
                                    </select>
                                </div>
                            </div>

                            <span class="label1 mb-4">Do you have a secondary insurance?</span>
                            <div class="mb-4 mt-4">
                                <input type="radio" class="form-check-input" onchange="secyes();" value="yes"
                                    name="medical_insurance_radio_2" id="y-checked" {{ old('medical_insurance_radio_2') == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label pr-5" for="y-checked">Yes</label>
                                <input type="radio" class="form-check-input" onchange="secno();" value="no"
                                    id="n-checked" name="medical_insurance_radio_2" {{ old('medical_insurance_radio_2') == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="n-checked">No</label>
                            </div>
                            <div id="sec-insured">
                                <div class="mb-4">
                                    <select class="form-select py-3" id="insurance-provider" name="insurance_provider_2">
                                        @include('partials.insurance_provider_2')
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <input type="text" placeholder="Insured Name" name="insurance_name_2"
                                        class="form-control py-3" value="{{ old('insurance_name_2') }}">
                                </div>
                                <div class="mb-4">
                                    <input type="text" placeholder="Policy Number" name="policy_number_2"
                                        class="form-control py-3" maxlength="10" value="{{ old('policy_number_2') }}">
                                </div>
                                <div class="mb-4">
                                    <input type="text" placeholder="Group Number" name="policy_group_number_2"
                                        class="form-control py-3" maxlength="10" value="{{ old('policy_group_number_2') }}">
                                </div>
                                <div class="mb-4">
                                    <input type="number" placeholder="Copay" name="co_pay_2"
                                        class="form-control py-3" maxlength="10" value="{{ old('co_pay_2') }}">
                                </div>
                                <div class="mb-4">
                                    <select class="form-select py-3"  name="relationship_with_client_2">
                                        @include('partials.client_relationship_to_insurance_2')
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="formFileLg" class="form-label">Upload a copy of insurance
                                    card: </label>
                                <input class="form-control form-control-lg" type="file" id="formFile"
                                    name="insurance_copy">
                            </div>

                            <div class="mb-4 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="insurance_checkboxes_details[]" {{ ( is_array(old('insurance_checkboxes_details')) && in_array(1, old('insurance_checkboxes_details')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault1">
                                    <label class="label1" for="flexCheckDefault1">
                                        I understand that by submitting my insurance information, I am giving Accepted Therapy Services permission to file on my insurance. This includes releasing information including:
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2" name="insurance_checkboxes_details[]" {{ ( is_array(old('insurance_checkboxes_details')) && in_array(2, old('insurance_checkboxes_details')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault40">
                                    <label class="form-check-label" for="flexCheckDefault40">
                                        Assessment
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="3" name="insurance_checkboxes_details[]" {{ ( is_array(old('insurance_checkboxes_details')) && in_array(3, old('insurance_checkboxes_details')) ) ? 'checked ' : '' }}
                                        id="flexCheckChecked3">
                                    <label class="form-check-label" for="flexCheckChecked3">
                                        Diagnosis
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="4" name="insurance_checkboxes_details[]" {{ ( is_array(old('insurance_checkboxes_details')) && in_array(4, old('insurance_checkboxes_details')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault444">
                                    <label class="form-check-label" for="flexCheckDefault444">
                                        Participation in treatment
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="5" name="insurance_checkboxes_details[]" {{ ( is_array(old('insurance_checkboxes_details')) && in_array(5, old('insurance_checkboxes_details')) ) ? 'checked ' : '' }}
                                        id="flexCheckChecked5">
                                    <label class="form-check-label" for="flexCheckChecked5">
                                        Progress in treatment
                                    </label>
                                </div>
                                <div class="form-check mb-5">
                                    <input class="form-check-input" type="checkbox" value="6" name="insurance_checkboxes_details[]" {{ ( is_array(old('insurance_checkboxes_details')) && in_array(6, old('insurance_checkboxes_details')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault66">
                                    <label class="form-check-label" for="flexCheckDefault66">
                                        Demographic information
                                    </label>
                                </div>
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="7" name="insurance_checkboxes_details[]" {{ ( is_array(old('insurance_checkboxes_details')) && in_array(7, old('insurance_checkboxes_details')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault77">
                                    <label class="label1" for="flexCheckDefault77">
                                        I further understand that no progress notes will be submitted unless additional authorization is received by Accepted Therapy Services in writing:
                                    </label>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Signature box</label>
                                    <div class="sign-main">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="insurance_signature" value="{{ old('insurance_signature') }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <span id="signbox-date" class="d-flex justify-content-end"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Presenting Problem -->
                        <div class="Presenting Problem">
                            <div class="row">
                                <h5 class="sub-head position-relative pt-5">Presenting Problem</h5>
                            </div>

                            <div class="mb-4 mt-4">
                                <label for="issue" class="label1 mb-4">
                                    What is your major complaint or issue that you would
                                    like to address?
                                </label>
                                <textarea class="form-control" id="issue" placeholder="Major Issue or Complaint"
                                    name="complaint_or_issue" rows="5" >{{ old('complaint_or_issue') }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label class="label1 mb-4">
                                    Have you previously suffered from this issue?
                                </label>
                                <div>
                                    <input type="radio" class="form-check-input" value="yes" {{ old('radio_stacked') == 'yes' ? 'checked' : ''}}
                                        name="radio_stacked" id="yessuffer" >
                                    <label class="form-check-label pr-5" for="yessuffer">Yes</label>
                                    <input type="radio" class="form-check-input" value="no" {{ old('radio_stacked') == 'no' ? 'checked' : ''}} id="nosuffer1" 
                                        name="radio_stacked" >
                                    <label class="form-check-label" for="nosuffer1">No</label>
                                </div>
                            </div>

                            <div class="mb-4 mt-4">
                                <label for="disorder" class="label1 mb-4">
                                    Have you ever been diagnosed with a mental illness (Generalized Anxiety
                                    Disorder, Major Depressive Disorder, ADHD, PTSD, personality disorder,
                                    etc.)? If so, when?
                                </label>
                                <textarea class="form-control" id="disorder" placeholder="" name="diagnosed"
                                    rows="5" >{{ old('diagnosed') }}</textarea>
                            </div>

                            <div class="mb-4">
                                <div class="row">
                                    <h5>Current Symptoms</h5>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(1, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault2">
                                            <label class="form-check-label" for="flexCheckDefault2">
                                                Anxiety
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="2" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(2, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault3">
                                            <label class="form-check-label" for="flexCheckDefault3">
                                                Crying Spells
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="3" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(3, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault4">
                                            <label class="form-check-label" for="flexCheckDefault4">
                                                Fatigue
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="4" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(4, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault5">
                                            <label class="form-check-label" for="flexCheckDefault5">
                                                Hallucinations
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="5" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(5, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault6">
                                            <label class="form-check-label" for="flexCheckDefault6">
                                                Libido Changes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="6" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(6, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault78">
                                            <label class="form-check-label" for="flexCheckDefault78">
                                                Racing Thoughts
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="7" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(7, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault79">
                                            <label class="form-check-label" for="flexCheckDefault79">
                                                Suspiciousness
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="8" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(8, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault8">
                                            <label class="form-check-label" for="flexCheckDefault8">
                                                Appetite Issues
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="9" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(9, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault9">
                                            <label class="form-check-label" for="flexCheckDefault9">
                                                Depression
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="10" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(10, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault10">
                                            <label class="form-check-label" for="flexCheckDefault10">
                                                Grief/Loss
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="11" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(11, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault11">
                                            <label class="form-check-label" for="flexCheckDefault11">
                                                Impulsivity
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="12" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(12, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault12">
                                            <label class="form-check-label" for="flexCheckDefault12">
                                                Lost of interest
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="13" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(13, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault13">
                                            <label class="form-check-label" for="flexCheckDefault13">
                                                Risky Activity
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                onchange="otherSym();" id="other-symp" value="14" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(14, old('current_symtoms')) ) ? 'checked ' : '' }}>
                                            <label class="form-check-label" for="other-symp">
                                                Other
                                            </label>
                                        </div>
                                        <div id="other-symptom">
                                            <input type="text" placeholder="Other Symptom" name="other_symptom_1"
                                                class="form-control py-2" >
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="15" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(15, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault14">
                                            <label class="form-check-label" for="flexCheckDefault14">
                                                Avoidance
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="16" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(16, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault15">
                                            <label class="form-check-label" for="flexCheckDefault15">
                                                Excessive Energy </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="17" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(17, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault16">
                                            <label class="form-check-label" for="flexCheckDefault16">
                                                Guilt/Shame
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="18" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(18, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault17">
                                            <label class="form-check-label" for="flexCheckDefault17">
                                                Irritability
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="19" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(19, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault18">
                                            <label class="form-check-label" for="flexCheckDefault18">
                                                Panic Attacks
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="20" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(20, old('current_symtoms')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault19">
                                            <label class="form-check-label" for="flexCheckDefault19">
                                                Sleep Changes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                onchange="otherSym2();" id="other-symp2" value="21" name="current_symtoms[]" {{ ( is_array(old('current_symtoms')) && in_array(21, old('current_symtoms')) ) ? 'checked ' : '' }}>
                                            <label class="form-check-label" for="other-symp2">
                                                Other
                                            </label>
                                        </div>
                                        <div id="other-symptom2">
                                            <input type="text" placeholder="Other Symptom" name="other_symptom_two"
                                                class="form-control py-2">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 mt-4">
                                <label for="issue" class="label1 mb-4">
                                    Have you ever received therapy in the past? If so, please provide treatment
                                    received and dates of treatment.
                                </label>
                                <textarea class="form-control" id="treatment" placeholder="" name="treatment"
                                    rows="5" >{{ old('treatment') }}</textarea>
                            </div>
                        </div>

                        <!-- Medical History -->
                        <div class="Medical History">
                            <div class="row">
                                <h5 class="sub-head position-relative pt-5">Medical History</h5>
                            </div>

                            <div class="mb-4 mt-4">
                                <input type="text" placeholder="Primary Care Provider" name="primary_care_provider"
                                    class="form-control py-3" value="{{ old('primary_care_provider') }}">
                            </div>

                            <div class="mb-4">
                                <input type="text" placeholder="Phone Number" name="medication_phone"
                                    class="form-control py-3" maxlength="10" value="{{ old('medication_phone') }}" / onkeydown="javascript:backspacerDOWN(this,event);"
                                    onkeyup="javascript:backspacerUP(this,event);">
                            </div>

                            <span class="label1 mb-4">Are you currently taking any medications?</span>
                            <div class="mb-4 mt-4 form-group">
                                <div>
                                    <input type="radio" class="form-check-input" onchange="mediyes();"
                                        value="yes" name="medication_radio" id="medi-yes" {{ old('medication_radio') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label pr-5" for="medi-yes">Yes</label>
                                    <input type="radio" class="form-check-input" onchange="medino();" value="no"
                                        id="medi-no" name="medication_radio" {{ old('medication_radio') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="medi-no">No</label>
                                </div>

                                <div>
                                    <div id="taking-medi" class="more-medi">
                                        <div class="medi-inputs">
                                            <div class="medi-inputs-cards">
                                                <div class="mb-4 mt-4 form-group">
                                                    <input type="text" placeholder="Name of Medication"
                                                        name="m_name_1" class="form-control py-3" value="{{ old('m_name_1') }}">
                                                </div>
                                                <div class="mb-4 form-group">
                                                    <input type="text" placeholder="Dosage" name="m_dosage_1" value="{{ old('m_dosage_1') }}"
                                                        class="form-control py-3" >
                                                </div>
                                                <div class="mb-4 form-group">
                                                    <input type="text" placeholder="Frequency" name="m_frequency_1"
                                                        class="form-control py-3" maxlength="10" value="{{ old('m_frequency_1') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4 d-flex justify-content-center form-btn">
                                            <a href="javascript:void(0);">
                                                <button type="button" class="btn add_more-medi">
                                                    Add Another Medications
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>


                                </div>


                            </div>

                            <div class="mb-4 mt-3">
                                <span class="label1 mb-4">What medications have you tried previously that did
                                    not work for you?</span>
                                <textarea class="form-control mt-3"  placeholder=""
                                    name="madication_tried" rows="2">{{ old('madication_tried') }}</textarea>
                            </div>
                            <div class="mb-4 mt-3">
                                <span class="label1 mb-4">Do you have any medical conditions?</span>
                                <textarea class="form-control mt-3"  placeholder=""
                                    name="madication_condition" rows="2">{{ old('madication_condition') }}</textarea>
                            </div>

                        </div>
                        <!-- Mental Health History -->
                        <div class="mental-health">
                            <div class="row">
                                <h5 class="sub-head position-relative pt-5">Mental Health History</h5>
                                <h5>Suicidal Ideations</h5>
                            </div>
                            <span class="label1 mb-4">Do you have any of the following:</span>


                            <div class="mb-4 mt-3 form-group">
                                <label for="">Current suicidal ideations?</label>
                                <div>
                                    <input type="radio" class="form-check-input suicidal-idea" value="yes"
                                        name="suic_radio" id="su-yes1" {{ old('suic_radio') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label pr-5" for="su-yes1">Yes</label>
                                    <input type="radio" class="form-check-input suicidal-idea" value="no"
                                        id="su-no" name="suic_radio" {{ old('suic_radio') == 'no' ? 'checked' : ''}}>
                                    <label class="form-check-label" for="su-no">No</label>
                                </div>
                                <div class="for-more">
                                    <textarea class="form-control mt-3" 
                                        placeholder="More Information" name="current_suicidal_ideations" rows="3">{{ old('current_suicidal_ideations') }}</textarea>
                                </div>
                            </div>

                            <div class="mb-4 mt-3 form-group">
                                <label for="">Current suicide plan?</label>
                                <div>
                                    <input type="radio" class="form-check-input suicidal-idea" value="yes"
                                        name="scp_radio" id="su-yes2" {{ old('scp_radio') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label pr-5" for="su-yes2">Yes</label>
                                    <input type="radio" class="form-check-input suicidal-idea" value="no"
                                        id="su-no" name="scp_radio" {{ old('scp_radio') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="su-no">No</label>
                                </div>
                                <div class="for-more">
                                    <textarea class="form-control mt-3" 
                                        placeholder="More Information" name="current_suicide_plan" rows="3">{{ old('current_suicide_plan') }}</textarea>
                                </div>
                            </div>

                            <div class="mb-4 mt-3 form-group">
                                <label for="">Current self-harming behaviors?</label>
                                <div>
                                    <input type="radio" class="form-check-input suicidal-idea" value="yes"
                                        name="cshb_radio" id="su-yes3" {{ old('cshb_radio') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label pr-5" for="su-yes3">Yes</label>
                                    <input type="radio" class="form-check-input suicidal-idea" value="no"
                                        id="su-no" name="cshb_radio" {{ old('cshb_radio') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="su-no">No</label>
                                </div>
                                <div class="for-more">
                                    <textarea class="form-control mt-3" 
                                        placeholder="More Information" name="current_self_harming_behaviors" rows="3">{{ old('current_self_harming_behaviors') }}</textarea>
                                </div>
                            </div>

                            <div class="mb-4 mt-3 form-group">
                                <label for="">History of suicidal ideations?</label>
                                <div>
                                    <input type="radio" class="form-check-input suicidal-idea" value="yes"
                                        name="hosi_radio" id="su-yes4" {{ old('hosi_radio') == 'yes' ? 'checked' : ''}}>
                                    <label class="form-check-label pr-5" for="su-yes4">Yes</label>
                                    <input type="radio" class="form-check-input suicidal-idea" value="no"
                                        id="su-no" name="hosi_radio" {{ old('hosi_radio') == 'no' ? 'checked' : ''}}>
                                    <label class="form-check-label" for="su-no">No</label>
                                </div>
                                <div class="for-more">
                                    <textarea class="form-control mt-3" 
                                        placeholder="More Information" name="history_of_suicidal_ideations" rows="3">{{ old('history_of_suicidal_ideations') }}</textarea>
                                </div>
                            </div>

                            <div class="mb-4 mt-3 form-group">
                                <label for="">Previous suicide attempts?</label>
                                <div>
                                    <input type="radio" class="form-check-input suicidal-idea" value="yes"
                                        name="psa_radio" id="su-yes5" {{ old('psa_radio') == 'yes' ? 'checked' : ''}}>
                                    <label class="form-check-label pr-5" for="su-yes5">Yes</label>
                                    <input type="radio" class="form-check-input suicidal-idea" value="no"
                                        id="su-no" name="psa_radio" {{ old('psa_radio') == 'no' ? 'checked' : ''}}>
                                    <label class="form-check-label" for="su-no">No</label>
                                </div>
                                <div class="for-more">
                                    <textarea class="form-control mt-3" 
                                        placeholder="More Information" name="previous_suicide_attempts" rows="3">{{ old('previous_suicide_attempts') }}</textarea>
                                </div>
                            </div>

                            <div class="mb-4 mt-3 form-group">
                                <label for="">History of self-harming?</label>
                                <div>
                                    <input type="radio" class="form-check-input suicidal-idea" value="yes"
                                        name="hos_radio" id="su-yes6" {{ old('hos_radio') == 'yes' ? 'checked' : ''}}>
                                    <label class="form-check-label pr-5" for="su-yes6">Yes</label>
                                    <input type="radio" class="form-check-input suicidal-idea" value="no"
                                        id="su-no" name="hos_radio" {{ old('hos_radio') == 'no' ? 'checked' : ''}}>
                                    <label class="form-check-label" for="su-no">No</label>
                                </div>
                                <div class="for-more">
                                    <textarea class="form-control mt-3" 
                                        placeholder="More Information" name="history_of_self_harming" rows="3">{{ old('history_of_self_harming') }}</textarea>
                                </div>
                            </div>
                            <!-- Substance Use -->
                            <div class="subs-use">
                                <div class="row">
                                    <h5>Substance Use</h5>
                                </div>
                                <!-- Nicotine -->
                                <label for="" class="sub-label">Nicotine/Caffeine </label>
                                <div class="mb-4 mt-3 form-group">
                                    <label for="" class="mb-3">Do you use nicotine (smoking, vaping, chewing
                                        tobacco, etc.)? </label>
                                    <input type="text" placeholder="" name="su_nicotine_caffeine" class="form-control py-3" value="{{ old('su_nicotine_caffeine') }}">
                                </div>
                                <div class="mb-4 mt-3 form-group">
                                    <label for="" class="mb-3">How many caffeinated beverages do you drink per
                                        day?</label>
                                    <input type="text" placeholder="" name="su_caffeinated_beverages_per_day"
                                        class="form-control py-3" value="{{ old('su_caffeinated_beverages_per_day') }}">
                                </div>

                                <!-- Alcohol -->
                                <label for="" class="sub-label">Alcohol</label>
                                <div class="mb-4 mt-3 form-group">
                                    <div class="mb-4">
                                        <label for="" class="mb-3">How much alcohol do you typically
                                            consume?</label>
                                        <select class="form-select py-3"  name="alcohole_consume">
                                            @include('partials.alcohole_consume')
                                        </select>
                                    </div>

                                    <div id="drinks">
                                        <label for="" class="mb-3">How many drinks do you have on a typical day
                                            when you are drinking?</label>
                                        <select class="form-select py-3" name="drinks">
                                            @include('partials.drinks')
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4 mt-3">
                                    <span class="label1 mb-4">Has anyone ever told you that you drink too
                                        much?</span>
                                    <textarea class="form-control mt-3" placeholder=""
                                        name="who_told_you" rows="3">{{ old('who_told_you') }}</textarea>
                                </div>
                                <!-- Illicit Drugs -->
                                <label for="" class="sub-label">Illicit Drugs</label>
                                <div class="from-group mb-4 mt-3">
                                    <span class="label1 mb-4">Have you ever tried any of the following?</span>
                                    <div class="check-drugs">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkbox_1" {{ old('checkbox_1') == 'Cocaine' ? 'checked' : '' }} value="Cocaine"
                                                id="flexCheckDefault20">
                                            <label class="form-check-label" for="flexCheckDefault20">
                                                Cocaine
                                            </label>
                                        </div>

                                        <div id="drugs-duration">
                                            <div class="from-group mb-4 mt-3">
                                                <input type="number" placeholder="Age of First Use"
                                                    name="age_use_1" value="{{ old('age_use_1') }}" class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Length of Use" name="length_use_1" value="{{ old('length_use_1') }}"
                                                    class="form-control py-3">
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Frequency of use"
                                                    name="frequency_use_1" value="{{ old('frequency_use_1') }}" class="form-control py-3" >
                                            </div>

                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Amount of use" name="amount_use_1" value="{{ old('amount_use_1') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <label class="form-check-label" for="flexCheckDefault21">
                                                    Date of Last Use
                                                </label>
                                                <input type="date" class="form-control py-3"
                                                    placeholder="Date of Divorce MM/YY" value="{{ old('date_last_use_1') }}"
                                                    name="date_last_use_1" class="form-control py-3" id="lastuse1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-drugs">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkbox_2" {{ old('checkbox_2') == 'Ecstasy' ? 'checked' : '' }} value="Ecstasy"
                                                id="flexCheckDefault22">
                                            <label class="form-check-label" for="flexCheckDefault22">
                                                Ecstasy
                                            </label>
                                        </div>

                                        <div id="drugs-duration">
                                            <div class="from-group mb-4 mt-3">
                                                <input type="number" placeholder="Age of First Use"
                                                name="age_use_2" value="{{ old('age_use_2') }}" class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Length of Use" name="length_use_2" value="{{ old('length_use_2') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Frequency of use"
                                                name="frequency_use_2" value="{{ old('frequency_use_2') }}" class="form-control py-3" >
                                            </div>

                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Amount of use" name="amount_use_2" value="{{ old('amount_use_2') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <label class="form-check-label" for="flexCheckDefault23">
                                                    Date of Last Use
                                                </label>
                                                <input type="date" class="form-control py-3"
                                                    placeholder="Date of Divorce MM/YY" value="{{ old('date_last_use_2') }}"
                                                    name="date_last_use_2" class="form-control py-3" id="lastuse2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-drugs">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkbox_3" {{ old('checkbox_3') == 'Hallucinogens (LSD)' ? 'checked' : '' }} value="Hallucinogens (LSD)"
                                                id="flexCheckDefault24">
                                            <label class="form-check-label" for="flexCheckDefault24">
                                                Hallucinogens (LSD)
                                            </label>
                                        </div>

                                        <div id="drugs-duration">
                                            <div class="from-group mb-4 mt-3">
                                                <input type="number" placeholder="Age of First Use"
                                                    name="age_use_3" value="{{ old('age_use_3') }}" class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Length of Use" name="length_use_3" value="{{ old('length_use_3') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Frequency of use"
                                                name="frequency_use_3" value="{{ old('frequency_use_3') }}" class="form-control py-3" >
                                            </div>

                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Amount of use" name="amount_use_3" value="{{ old('amount_use_3') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <label class="form-check-label" for="flexCheckDefault25">
                                                    Date of Last Use
                                                </label>
                                                <input type="date" class="form-control py-3"
                                                    placeholder="Date of Divorce MM/YY" value="{{ old('date_last_use_3') }}"
                                                    name="date_last_use_3" class="form-control py-3" id="lastuse3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-drugs">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkbox_4" {{ old('checkbox_4') == 'Heroin' ? 'checked' : '' }} value="Heroin"
                                                id="flexCheckDefault26">
                                            <label class="form-check-label" for="flexCheckDefault26">
                                                Heroin
                                            </label>
                                        </div>

                                        <div id="drugs-duration">
                                            <div class="from-group mb-4 mt-3">
                                                <input type="number" placeholder="Age of First Use"
                                                    name="age_use_4" value="{{ old('age_use_4') }}" class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Length of Use" name="length_use_4" value="{{ old('length_use_4') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Frequency of use"
                                                name="frequency_use_4" value="{{ old('frequency_use_4') }}" class="form-control py-3" >
                                            </div>

                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Amount of use" name="amount_use_4" value="{{ old('amount_use_4') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <label class="form-check-label" for="flexCheckDefault27">
                                                    Date of Last Use
                                                </label>
                                                <input type="date" class="form-control py-3"
                                                    placeholder="Date of Divorce MM/YY" value="{{ old('date_last_use_4') }}"
                                                    name="date_last_use_4" class="form-control py-3" id="lastuse4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-drugs">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkbox_5" {{ old('checkbox_5') == 'Marijuana' ? 'checked' : '' }} value="Marijuana"
                                                id="flexCheckDefault28">
                                            <label class="form-check-label" for="flexCheckDefault28">
                                                Marijuana
                                            </label>
                                        </div>

                                        <div id="drugs-duration">
                                            <div class="from-group mb-4 mt-3">
                                                <input type="number" placeholder="Age of First Use"
                                                    name="age_use_5" value="{{ old('age_use_5') }}" class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Length of Use" name="length_use_5" value="{{ old('length_use_5') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Frequency of use"
                                                name="frequency_use_5" value="{{ old('frequency_use_5') }}" class="form-control py-3" >
                                            </div>

                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Amount of use" name="amount_use_5" value="{{ old('amount_use_5') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <label class="form-check-label" for="flexCheckDefault29">
                                                    Date of Last Use
                                                </label>
                                                <input type="date" class="form-control py-3"
                                                    placeholder="Date of Divorce MM/YY" value="{{ old('date_last_use_5') }}"
                                                    name="date_last_use_5" class="form-control py-3" id="lastuse5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-drugs">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkbox_6" {{ old('checkbox_6') == 'Methadone/Suboxone' ? 'checked' : '' }} value="Methadone/Suboxone"
                                                id="flexCheckDefault30">
                                            <label class="form-check-label" for="flexCheckDefault30">
                                                Methadone/Suboxone
                                            </label>
                                        </div>

                                        <div id="drugs-duration">
                                            <div class="from-group mb-4 mt-3">
                                                <input type="number" placeholder="Age of First Use"
                                                    name="age_use_6" value="{{ old('age_use_6') }}" class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Length of Use" name="length_use_6" value="{{ old('length_use_6') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Frequency of use"
                                                name="frequency_use_6" value="{{ old('frequency_use_6') }}" class="form-control py-3" >
                                            </div>

                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Amount of use" name="amount_use_6" value="{{ old('amount_use_6') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <label class="form-check-label" for="flexCheckDefault31">
                                                    Date of Last Use
                                                </label>
                                                <input type="date" class="form-control py-3"
                                                    placeholder="Date of Divorce MM/YY" value="{{ old('date_last_use_6') }}"
                                                    name="date_last_use_6" class="form-control py-3" id="lastuse6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-drugs">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkbox_7" {{ old('checkbox_7') == 'Methamphetamines' ? 'checked' : '' }} value="Methamphetamines"
                                                id="flexCheckDefault32">
                                            <label class="form-check-label" for="flexCheckDefault32">
                                                Methamphetamines
                                            </label>
                                        </div>

                                        <div id="drugs-duration">
                                            <div class="from-group mb-4 mt-3">
                                                <input type="number" placeholder="Age of First Use"
                                                    name="age_use_7" value="{{ old('age_use_7') }}" class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Length of Use" name="length_use_7" value="{{ old('length_use_7') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Frequency of use"
                                                name="frequency_use_7" value="{{ old('frequency_use_7') }}" class="form-control py-3" >
                                            </div>

                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Amount of use" name="amount_use_7" value="{{ old('amount_use_7') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <label class="form-check-label" for="flexCheckDefault33">
                                                    Date of Last Use
                                                </label>
                                                <input type="date" class="form-control py-3"
                                                    placeholder="Date of Divorce MM/YY" value="{{ old('date_last_use_7') }}"
                                                    name="date_last_use_7" class="form-control py-3" id="lastuse7">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-drugs">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkbox_8" {{ old('checkbox_8') == 'Opioids (pain killers)' ? 'checked' : '' }} value="Opioids (pain killers)"
                                                id="flexCheckDefault34">
                                            <label class="form-check-label" for="flexCheckDefault34">
                                                Opioids (pain killers)
                                            </label>
                                        </div>

                                        <div id="drugs-duration">
                                            <div class="from-group mb-4 mt-3">
                                                <input type="number" placeholder="Age of First Use"
                                                    name="age_use_8" value="{{ old('age_use_8') }}" class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Length of Use" name="length_use_8" value="{{ old('length_use_8') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Frequency of use"
                                                name="frequency_use_8" value="{{ old('frequency_use_8') }}" class="form-control py-3" >
                                            </div>

                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Amount of use" name="amount_use_8" value="{{ old('amount_use_8') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <label class="form-check-label" for="flexCheckDefault35">
                                                    Date of Last Use
                                                </label>
                                                <input type="date" class="form-control py-3" id="lastuse8"
                                                value="{{ old('date_last_use_8') }}" name="date_last_use_8"
                                                    placeholder="Date of last use dd/MM/YYYY" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-drugs">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkbox_9" {{ old('checkbox_9') == 'Stimulants (pills)' ? 'checked' : '' }} value="Stimulants (pills)"
                                                id="flexCheckDefault36">
                                            <label class="form-check-label" for="flexCheckDefault36">
                                                Stimulants (pills) </label>
                                        </div>

                                        <div id="drugs-duration">
                                            <div class="from-group mb-4 mt-3">
                                                <input type="number" placeholder="Age of First Use"
                                                    name="age_use_9" value="{{ old('age_use_9') }}" class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Length of Use" name="length_use_9" value="{{ old('length_use_9') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Frequency of use"
                                                name="frequency_use_9" value="{{ old('frequency_use_9') }}" class="form-control py-3" >
                                            </div>

                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Amount of use" name="amount_use_9" value="{{ old('amount_use_9') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <label class="form-check-label" for="flexCheckDefault37">
                                                    Date of Last Use
                                                </label>
                                                <input type="date" class="form-control py-3"
                                                    placeholder="Date of Divorce MM/YY" value="{{ old('date_last_use_9') }}"
                                                    name="date_last_use_9" class="form-control py-3" id="lastuse9">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-drugs">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkbox_10" {{ old('checkbox_10') == 'Tranquilizers' ? 'checked' : '' }} value="Tranquilizers"
                                                id="flexCheckDefault38">
                                            <label class="form-check-label" for="flexCheckDefault38">
                                                Tranquilizers
                                            </label>
                                        </div>

                                        <div id="drugs-duration">
                                            <div class="from-group mb-4 mt-3">
                                                <input type="number" placeholder="Age of First Use"
                                                    name="age_use_10" value="{{ old('age_use_10') }}" class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Length of Use" name="length_use_10" value="{{ old('length_use_10') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Frequency of use"
                                                name="frequency_use_10" value="{{ old('frequency_use_10') }}" class="form-control py-3" >
                                            </div>

                                            <div class="from-group mb-4 mt-3">
                                                <input type="text" placeholder="Amount of use" name="amount_use_10" value="{{ old('amount_use_10') }}"
                                                    class="form-control py-3" >
                                            </div>
                                            <div class="from-group mb-4 mt-3">
                                                <label class="form-check-label" for="flexCheckDefault39">
                                                    Date of Last Use
                                                </label>
                                                <input type="date" class="form-control py-3"
                                                    placeholder="Date of Divorce MM/YY" value="{{ old('date_last_use_10') }}"
                                                    name="date_last_use_10" class="form-control py-3" id="lastuse10">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-4 mt-3">
                                    <span class="label1 mb-4">Have you ever misused or abused prescription
                                        drugs?</span>
                                    <div>
                                        <input type="radio" class="form-check-input" value="yes"
                                            name="drug_misused_or_abuse_radio" {{ old('drug_misused_or_abuse_radio') == 'yes' ? 'checked' : '' }} id="yessuffer" >
                                        <label class="form-check-label pr-5" for="yessuffer">Yes</label>
                                        <input type="radio" class="form-check-input" value="no" id="nosuffer2"
                                            name="drug_misused_or_abuse_radio" {{ old('drug_misused_or_abuse_radio') == 'no' ? 'checked' : '' }} >
                                        <label class="form-check-label" for="nosuffer2">No</label>
                                    </div>
                                    <div class="for-more">

                                        <textarea class="form-control mt-3" 
                                            placeholder="More Information" name="drug_misused_info"
                                            rows="3">{{ old('drug_misused_info') }}</textarea>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Addition Information   -->
                        <div class="addition-info">
                            <div class="row">
                                <h5 class="sub-head position-relative pt-5">Addition Information</h5>
                            </div>
                            <!-- Work-->
                            <div class="work">
                                <h5>Work</h5>
                                <div class="form-group mb-4 mt-3">
                                    <input type="text" placeholder="Occupation" name="occupation"
                                        class="form-control py-3" value="{{ old('occupation') }}">
                                </div>
                                <div class="form-group mb-4 mt-3">
                                    <input type="text" placeholder="Employer" name="employer"
                                        class="form-control py-3" value="{{ old('employer') }}">
                                </div>
                                <div class="form-group mb-4 mt-3">
                                    <span class="label1 mb-4">Do you enjoy what you do?</span>
                                    <textarea class="form-control mt-3"  placeholder=""
                                        name="enjoy" rows="2">{{ old('enjoy') }}</textarea>
                                </div>
                            </div>
                            <!-- Marriage -->
                            <div class="marriage">
                                <h5>Marriage </h5>
                                <div class="mb-4 mt-3 form-group">
                                    <span class="label1 mb-4">Are you married?</span>
                                    <div>
                                        <input type="radio" class="form-check-input" value="yes" name="married_radio"
                                            id="marry-yes" {{ old('married_radio') == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label pr-5" for="marry-yes">Yes</label>
                                        <input type="radio" class="form-check-input" value="no" id="marry-no"
                                            name="married_radio" {{ old('married_radio') == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="marry-no">No</label>
                                    </div>
                                    <div id="domarr">
                                        <input type="date" placeholder="Date of Marriage MM/YY"
                                            name="married_radio_date" class="form-control py-3" >
                                    </div>
                                </div>
                                <div class="mb-4 mt-3 form-group">
                                    <span class="label1 mb-4">Have you ever been divorced?</span>
                                    <div>
                                        <input type="radio" class="form-check-input" value="yes" name="divorced_radio"
                                            id="div-yes" {{ old('divorced_radio') == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label pr-5" for="div-yes" >Yes</label>
                                        <input type="radio" class="form-check-input" value="no" id="div-no"
                                            name="divorced_radio" {{ old('divorced_radio') == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="div-no">No</label>
                                    </div>
                                    <div id="domarr">
                                        <input type="date" placeholder="Date of Divorce MM/YY"
                                            name="divorced_radio_date" class="form-control py-3" >
                                    </div>
                                </div>
                                <div class="mb-4 mt-3 form-group">
                                    <span class="label1 mb-4">Do you have any prior marriages?</span>
                                    <div>
                                        <input type="radio" class="form-check-input" value="yes"
                                            name="rwyp_radio" id="prior-yes" {{ old('rwyp_radio') == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label pr-5" for="prior-yes">Yes</label>
                                        <input type="radio" class="form-check-input" value="no" id="prior-no"
                                            name="rwyp_radio" {{ old('rwyp_radio') == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="prior-no">No</label>
                                    </div>
                                    <div id="domarr" class="input_fields_wrap">

                                        <div class="mt-4 form-group">
                                            <span class="label1 mb-4">How many?
                                            </span>
                                            <div class="d-flex">
                                                <input type="number" class="form-control py-3 mt-2" name="how_many" id="howMany">
                                            </div>
                                            <div class="form-check mt-4">
                                                <input class="form-check-input" type="checkbox" value="1" name="how_many_question[]" id="flexCheckDefaultHowMany1" {{ ( is_array(old('how_many_question')) && in_array(1, old('how_many_question')) ) ? 'checked ' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefaultHowMany1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos distinctio accusamus vel numquam illum iure?
                                                </label>
                                            </div>
                                            <div class="form-check mt-4">
                                                <input class="form-check-input" type="checkbox" value="2" name="how_many_question[]" id="flexCheckDefaultHowMany2" {{ ( is_array(old('how_many_question')) && in_array(2, old('how_many_question')) ) ? 'checked ' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefaultHowMany2">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos distinctio accusamus vel numquam illum iure?
                                                </label>
                                            </div>
                                            <div class="form-check mt-4">
                                                <input class="form-check-input" type="checkbox" value="3" name="how_many_question[]" id="flexCheckDefaultHowMany3" {{ ( is_array(old('how_many_question')) && in_array(3, old('how_many_question')) ) ? 'checked ' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefaultHowMany3">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos distinctio accusamus vel numquam illum iure?
                                                </label>
                                            </div>
                                            <div class="form-check mt-4">
                                                <input class="form-check-input" type="checkbox" value="4" name="how_many_question[]" id="flexCheckDefaultHowMany4" {{ ( is_array(old('how_many_question')) && in_array(4, old('how_many_question')) ) ? 'checked ' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefaultHowMany4">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos distinctio accusamus vel numquam illum iure?
                                                </label>
                                            </div>
                                        </div>

                                        <div class="mt-4 form-group mt-5">
                                            <span class="label1 mb-4">How many Dates of divorce/death?
                                            </span>
                                            
                                            <div class="d-flex align-items-center">
                                                <div class="mt-4">
                                                    <input type="radio" class="form-check-input" value="divorce"
                                                        name="divorce_death_1" id="prior-divorce" {{ old('divorce_death_1') == 'divorce' ? 'checked' : '' }}>
                                                    <label class="form-check-label pr-5" for="prior-divorce">Divorce</label>

                                                    <input type="radio" class="form-check-input" value="death" id="death-no"
                                                        name="divorce_death_1" {{ old('divorce_death_1') == 'death' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="death-no">Death</label>
                                                </div>

                                                
                                                
                                                <input type="date" class="form-control py-3 mt-2" name="divorce_or_death_date[]" name="multiple-dates" id="date1"> &nbsp;
                                                <div class="form-btn">
                                                    <a href="javascript:void(0);">
                                                        <button type="button" class="btn add_field_button"><i
                                                                class="fa fa-plus"></i></button>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                

                            </div>
                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">How is your relationship with your
                                    partner?</label>
                                <select class="form-select py-3"  name="relationship_with_your_partner">
                                    @include('partials.relation_with_partner')
                                </select>
                            </div>


                        </div>

                        <!-- Children -->
                        <div class="children">
                            <h5>Children </h5>
                            <div class="mb-4 mt-3 form-group">
                                <span class="label1 mb-4">Do you have any children (including
                                    step-children)?</span>
                                <div>
                                    <input type="radio" class="form-check-input" value="yes"
                                        name="no_of_children_radio" id="number-child-yes" {{ old('no_of_children_radio') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label pr-5" for="number-child-yes">Yes</label>
                                    <input type="radio" class="form-check-input" value="no" id="number-child-no"
                                        name="no_of_children_radio" {{ old('no_of_children_radio') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="number-child-no">No</label>
                                </div>
                                <div id="domarr" class="mt-3">
                                    <input type="number" placeholder="Number of children" name="no_of_children"
                                        class="form-control py-3" value="{{ old('no_of_children') }}">
                                    <div class="mb-4 mt-3 form-group">
                                        <!-- <span class="label1 mb-4">Add another child</span> -->
                                        <div>
                                            <div id="more-child" class="mt-4">
                                                <div class="more-children-wrap">
                                                    <div class="more-children-fields">
                                                        <div class="form-group mb-4">
                                                            <input type="text" placeholder="Name of Child"
                                                                name="name_child_1" value="{{ old('name_child_1') }}" class="form-control py-3"
                                                                >
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <input type="number" placeholder="Age of Child"
                                                                name="age_of_child_1" value="{{ old('age_of_child_1') }}" class="form-control py-3"
                                                                >
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <select class="form-select py-3" 
                                                                name="relationship_with_child_1">
                                                                <option  disabled value="">Relationship
                                                                    With
                                                                    Child
                                                                </option>
                                                                <option value="Excellent" {{ old('relationship_with_child_1') == 'Excellent' ? 'selected' : '' }}>Excellent</option>
                                                                <option value="Good" {{ old('relationship_with_child_1') == 'Good' ? 'selected' : '' }}>Good </option>
                                                                <option value="Fair" {{ old('relationship_with_child_1') == 'Fair' ? 'selected' : '' }}>Fair</option>
                                                                <option value="Poor" {{ old('relationship_with_child_1') == 'Poor' ? 'selected' : '' }}>Poor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="form-group mb-4">
                                                    <a href="javascript:void:(0);">
                                                        <button type="button"
                                                            class="bg-danger btn remove-child">remove</button>
                                                    </a>
                                                </div> -->
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center form-btn">
                                            <a href="javascript:void:(0);">
                                                <button type="button" class="btn add-child text-white"
                                                    id="add-more-children">Add Children</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <!-- Religion/Spirituality -->
                        <div class="religion">
                            <h5>Religion/Spirituality </h5>

                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">What is your religion?</label>
                                <select class="form-select py-3" name="religion">
                                    @include('partials.religion')
                                </select>
                            </div>
                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">Is spirituality important to you?</label>
                                <textarea class="form-control"  placeholder=""
                                    name="spirituality" rows="3">{{ old('spirituality') }}</textarea>

                            </div>
                        </div>
                        <!-- Family History -->
                        <div class="family">
                            <div class="row">
                                <h5 class="sub-head position-relative pt-5">Family History</h5>
                            </div>

                            <div class="mb-4 mt-3 form-group">
                                <span class="label1 mb-4">Were you adopted?</span>
                                <div>
                                    <input type="radio" class="form-check-input" value="yes" name="adopted"
                                        id="adopted-yes" {{ old('adopted') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label pr-5" for="adopted-yes">Yes</label>
                                    <input type="radio" class="form-check-input" value="no" id="adopted-no"
                                        name="adopted" {{ old('adopted') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="adopted-no">No</label>
                                </div>
                                <div id="domarr" class="mt-3">
                                    <div class="mb-4 form-group">
                                        <span class="label1"> How old were you when you were adopted?</span>
                                        <input type="number" placeholder="" name="adopte_age"
                                            class="form-control py-3" >
                                    </div>

                                    <div class="mb-4 form-group">
                                        <label for="" class="mb-3">Do you have a relationship with your
                                            biological parents?</label>
                                        <input type="text" placeholder="" name="biological_parent"
                                            class="form-control py-3" >
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">Relationship of Parents:</label>
                                <div>
                                    <select class="form-select py-3"  name="parents_remarry">
                                        @include('partials.parents_remarry')
                                    </select>
                                </div>
                                <div id="domarr" class="mt-4">
                                    <div class="mb-4 form-group">
                                        <span class="label1">How old were you?
                                            Did they remarry?
                                        </span>
                                        <input type="number" placeholder="" name="parents_remarry_age"
                                            class="form-control py-3 mt-2" >
                                    </div>
                                </div>

                            </div>
                            <!-- mother -->
                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">Is your mother living?</label>
                                <div>
                                    <input type="radio" class="form-check-input" value="yes" name="is_mother_living_radio"
                                        id="mother-live-yes" {{ old('is_mother_living_radio') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label pr-5" for="mother-live-yes">Yes</label>
                                    <input type="radio" class="form-check-input" value="no" id="mother-live-no"
                                        name="is_mother_living_radio" {{ old('is_mother_living_radio') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="mother-live-no">No</label>
                                </div>
                                <div id="death" class="mt-4">
                                    <div class="mb-4 form-group">
                                        <span class="label1">Date of death
                                        </span>
                                        <input type="date" class="form-control py-3 mt-2" value="{{ old('mother_date_of_death') }}"
                                            name="mother_date_of_death" id="mother1">
                                    </div>
                                </div>

                            </div>
                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">How is/was your relationship with your
                                    mother?</label>
                                <select class="form-select py-3"  name="relation_with_mother">
                                    @include('partials.relation_with_mother')
                                </select>

                            </div>
                            <!-- father -->
                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">Is your father living?</label>
                                <div>
                                    <input type="radio" class="form-check-input" value="yes" name="father_living_radio"
                                        id="father-live-yes" {{ old('father_living_radio') == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label pr-5" for="father-live-yes">Yes</label>
                                    <input type="radio" class="form-check-input" value="no" id="father-live-no"
                                        name="father_living_radio" {{ old('father_living_radio') == 'no' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="father-live-no">No</label>
                                </div>
                                <div id="death" class="mt-4">
                                    <div class="mb-4 form-group">
                                        <span class="label1">Date of death
                                        </span>
                                        <input type="date" class="form-control py-3 mt-2" value="{{ old('father_date_of_death') }}"
                                            name="father_date_of_death" id="father1">
                                    </div>
                                </div>

                            </div>
                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">How is/was your relationship with your
                                    father?</label>
                                <select class="form-select py-3"  name="relation_with_father">
                                    @include('partials.relation_with_father')
                                </select>

                            </div>
                            <!-- siblings -->
                            <div class="mb-4 form-group">
                                <label for="sibling" class="mb-3">How many siblings do you have?</label>
                                <div>
                                    <select class="form-select py-3" id="sibling" name="sibling_count">
                                        <option selected disabled value="">Select...</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">Other</option>
                                    </select>
                                </div>
                                <div id="other-sib" class="mt-4">
                                    <div class="mb-4 form-group">
                                        <input type="number" placeholder="How many siblings do you have?"
                                            value="" name="other_sibling_count" class="form-control py-3 mt-2"
                                            id="sibling1">
                                    </div>

                                </div>
                                <div id="domarr" class="mt-4 domarrlast">
                                    <div class="more-siblings-fields">
                                        <div class="mb-4 form-group">
                                            <input type="text" placeholder="Sibling Name" name="sibling_name[]"
                                                class="form-control py-3 mt-2" >
                                        </div>
                                        <div class="mb-4 form-group">
                                            <input type="number" placeholder="Sibling Age" name="sibling_age[]"
                                                class="form-control py-3 mt-2" >
                                        </div>
                                        <div class="mb-4 form-group">
                                            <select class="form-select py-3"  name="sibling_relation[]">
                                                <option disabled value="">Relationship with
                                                    Sibling
                                                </option>
                                                <option value="1">Excellent</option>
                                                <option value="2">Good </option>
                                                <option value="3">Fair</option>
                                                <option value="4">Poor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <div id="more-siblings">
                                            <div class="more-siblings-wrap">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-center form-btn">
                                        <a href="javascript:void:(0);">
                                            <button type="button" class="btn add-sib text-white"
                                                id="add-more-sibling">Add Sibling</button>
                                        </a>
                                    </div>
                                </div>


                            </div>
                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">What is your birth order?</label>
                                <input type="number" placeholder="" name="birth_order" value="{{ old('birth_order') }}"
                                    class="form-control py-3 mt-2" >
                            </div>
                            <!-- Medical Condition -->
                            <div class="medi-cond">
                                <h5>Medical Conditions</h5>
                            </div>
                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">Does anyone in your family have any medical
                                    conditions? If so, specify medical condition and member of family affected.
                                </label>
                                <textarea class="form-control"  placeholder=""
                                    name="medical_conditions" rows="5">{{ old('medical_conditions') }}</textarea>
                            </div>
                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">Do you have any family history of mental illness? If
                                    so, specify diagnosis and member of family affected.
                                </label>
                                <textarea class="form-control"  placeholder=""
                                    name="mental_illness" rows="5">{{ old('mental_illness') }}</textarea>
                            </div>
                            <hr>
                            <div class="mb-4 form-group">
                                <label for="" class="mb-3">Is there anything else that you want your therapist
                                    to know?
                                </label>
                                <textarea class="form-control"  placeholder=""
                                    name="anything_else_know_therapist" rows="5">{{ old('anything_else_know_therapist') }}</textarea>
                            </div>

                        </div>
                        <div class="text-center from-btn mb-5">
                            <a  class="w-100">
                                <button type="submit" class="btn">
                                    Submit
                                </button>
                            </a>
                        </div>

                    </form>
                </div>


            </fieldset>
        </div>
    </div>


</section>

@include('common.accepted_therapy_border')
@endsection

@push('scripst')


@push('scripts')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>
        toastr.error('{{ $error }}');
    </script>
@endforeach
@endif

@if (session()->has('intake_success'))
    <script>
        toastr.success('{{ session()->get('intake_success') }}');
    </script>
@endif

@endpush