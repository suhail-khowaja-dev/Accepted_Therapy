@extends('layouts.master')
@section('content')

<!-- ==================================  Non-Secure Release FORM ============================= -->
<section class="forms">
    <div class="container form-intake form-reff">
        <div class="container form1">
            <fieldset class="border">
                <legend class="text-center text-capitalize">
                    Non-Secure Release
                </legend>
                <div class="position-relative therapy-border d-flex justify-content-center flex-wrap pt-4">
                    <div class="therapy-border-img">
                        <img src="{{ asset('assets/images/logo2.svg') }}" alt="logo">
                    </div>
                </div>
                <!-- FORM -->
                <div class="container form-fileds mt-5">
                    <!-- Payment Data  -->
                    <form action="{{ route('non_secure_form_store') }}" method="post" id="non-secure-from" class="">
                        @csrf
                        <div class="non-secure-fields">
                            <div class="row">
                                <h5 class="text-dark">Consent for Release of Protected Health Information by
                                    Non-Secure Means</h5>
                            </div>
                            <div class="form-group mb-4">
                                <!-- <label for="client-name">Client Name:</label> -->
                                <input type="text" class="form-control py-3" name="name" id="name" placeholder="Name"
                                    value="{{ old('name') }}" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="dob">Date of Birth:</label>
                                <input type="date" class="form-control py-3" id="dob" name="date_of_birth" value="{{ old('date_of_birth') }}" />
                            </div>

                            <!-- <div class="form-group mb-4 para-input d-flex flex-wrap">
                                <p class="d-flex flex-wrap">
                                    I Your Name authorize Accepted Therapy Services to transmit
                                    to me by non-secure media the following types of protected health
                                    information related to my health records and health care treatment:
                                </p>
                            </div> -->
                            <div class="form-group mb-4 para-input d-flex flex-wrap">
                                <p class="d-flex flex-wrap">I &nbsp;<span class="hide"></span>
                                    <input type="text" class="form-control txt" placeholder="Your Name" name="your_name" value="{{ old('your_name') }}"
                                        >
                                    <span class="txt2">authorize Accepted Therapy Services to transmit to me by
                                        non-secure media the following </span>
                                    <span>
                                        types of protected health information
                                        related to my health records and health care treatment:
                                    </span>
                                </p>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" name="non_secure_checkboxes[]" value="1" {{ ( is_array(old('non_secure_checkboxes')) && in_array(1, old('non_secure_checkboxes')) ) ? 'checked ' : '' }} id="flexCheckDefault1">
                                <label class="form-check-label" for="flexCheckDefault1">
                                    Information related to the scheduling of meetings or other appointments.
                                </label>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" name="non_secure_checkboxes[]" value="2" {{ ( is_array(old('non_secure_checkboxes')) && in_array(2, old('non_secure_checkboxes')) ) ? 'checked ' : '' }} id="flexCheckDefault2">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    Information related to billing and payment
                                </label>
                            </div>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="non_secure_checkboxes[]" value="3" {{ ( is_array(old('non_secure_checkboxes')) && in_array(3, old('non_secure_checkboxes')) ) ? 'checked ' : '' }} id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">
                                I understand that if I contact my therapist through non-secure means (text
                                messages, email, or other phone apps) my therapist reserves the right to not
                                respond to protect my confidentiality.
                            </label>
                        </div>
                        <!-- --Termination Consent -->
                        <div class="term-consent">
                            <div class="row">
                                <h5 class="text-dark">Termination of Consent</h5>
                            </div>
                            <div class="form-check mt-4 mb-4">
                                <input class="form-check-input" type="checkbox" name="non_secure_checkboxes[]" {{ ( is_array(old('non_secure_checkboxes')) && in_array(4, old('non_secure_checkboxes')) ) ? 'checked ' : '' }} value="4" id="flexCheckDefault2">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    I understand that this authorization will expire 60 days from the
                                    termination of my therapy services.
                                </label>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" name="non_secure_checkboxes[]" {{ ( is_array(old('non_secure_checkboxes')) && in_array(5, old('non_secure_checkboxes')) ) ? 'checked ' : '' }} value="5" id="flexCheckDefault3">
                                <label class="form-check-label label-p" for="flexCheckDefault3">
                                    I can also revoke this authorization in writing at any time by sending
                                    written notification to my therapist at <a
                                        href="https://goo.gl/maps/TYRrety8Nsvwg3YbA" target="_blank"
                                        rel="noopener noreferrer">423 Weathersby Road Suite 240</a> or
                                    by email to <a
                                        href="mailto:acceptedtherapy@gmail.com">acceptedtherapy@gmail.com.</a>
                                    Your notice will not apply to
                                    actions taken by the requesting person/entity prior to the date they
                                    receive you written request to revoke authorization.
                                </label>
                            </div>
                            <div class="form-group mb-4">
                                <label for="">Signature box</label>
                                <div class="sign-main">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="signature" value="{{ old('signature') }}">

                                        </div>
                                        <div class="col-lg-6">
                                            <span id="signbox-date" class="d-flex justify-content-end"></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center from-btn mb-5">
                            <a href="javascript:void(0);" class="w-100">
                                <button type="submit" class="btn" name="">
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

@if (session()->has('non_secure_form_success'))
    <script>
        toastr.success('{{ session()->get('non_secure_form_success') }}');
    </script>
@endif

@endpush