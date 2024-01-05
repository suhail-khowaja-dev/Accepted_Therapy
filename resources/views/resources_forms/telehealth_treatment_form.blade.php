@extends('layouts.master')
@section('content')


<!-- ==================================  Telehealth Treatment Consent FORM ============================= -->
<section class="forms">
    <div class="container form-intake form-reff">
        <div class="container form1">
            <fieldset class="border">
                <legend class="text-center text-capitalize">
                    Telehealth Treatment Consent

                </legend>
                <div class="position-relative therapy-border d-flex justify-content-center flex-wrap pt-4">
                    <div class="therapy-border-img">
                        <img src="{{ asset('assets/images/logo2.svg') }}" alt="logo">
                    </div>
                </div>
                <!-- FORM -->
                <div class="container form-fileds mt-5">
                    <!-- Release Info  -->
                    <form action="{{ route('telehealth_treatment_store') }}" method="POST" id="release-info-forms" class="">
                        @csrf
                        <div class="inform-fields">
                            <div>
                                <h5 class="text-dark">Information and Informed Consent for Telehealth Treatment
                                </h5>
                                <p>Telehealth is live two-way audio and/or video electronic communications that
                                    allows therapists and clients to meet outside of a physical office setting.
                                </p>
                            </div>
                            <!-- Client Understanding -->
                            <div class="client-understanding">
                                <div class="row">
                                    <h5>Client Understanding</h5>
                                </div>
                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="1" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(1, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I understand that telehealth services are completely voluntary and that
                                        I can withdraw this consent at any time.
                                    </label>
                                </div>
                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="2" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(2, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I understand that none of the telehealth sessions will be recorded or
                                        photographed. </label>
                                </div>
                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="3" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(3, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I agree not to make or allow audio or video recordings of any portion of
                                        the sessions. </label>
                                </div>
                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="4" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(4, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I understand that the laws that protect privacy and the confidentiality
                                        of client information also apply to telehealth, and that no information
                                        obtained in the use of telehealth that identifies me will be disclosed
                                        to other entities without my consent. </label>
                                </div>
                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="5" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(5, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I understand that telehealth is performed over a secure communication
                                        system that is almost impossible for anyone else to access. I understand
                                        that any internet-based communication is not 100 % guaranteed to be
                                        secure. </label>
                                </div>
                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="6" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(6, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I agree that my therapist and Accepted Therapy Services will not be held
                                        responsible if any outside party gains access to my personal information
                                        by bypassing the security measures of the communication system. </label>
                                </div>
                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="7" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(7, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I understand there are potential risks to this technology, including
                                        interruptions, unauthorized access, and technical difficulties. </label>
                                </div>
                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="8" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(8, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I understand that I or my therapist may discontinue the telehealth
                                        sessions at any time if it is felt that the video technology is not
                                        adequate for the situation. </label>
                                </div>
                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="9" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(9, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I understand that if there is an emergency during a telehealth session,
                                        then my therapist may call emergency services and/or my emergency
                                        contact. </label>
                                </div>
                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="10" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(10, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I understand that this form is signed in addition to the Notice of
                                        Privacy Practices and Consent to Treatment and that all office policies
                                        and procedures apply to telehealth services.
                                    </label>
                                </div>
                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="11" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(11, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I understand that if the video conferencing connection drops while I am
                                        in a session, I will have an additional phone line available to contact
                                        my therapist, or I will make additional plans with my therapist ahead of
                                        time for recontact. My therapist may choose to use a different means of
                                        technology (Zoom, FaceTime, Google Meets) for completion of my session;
                                        however, these other means may not be HIPPA compliant.
                                    </label>
                                </div>

                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="12" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(12, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I understand my therapist will advise me about what telehealth platform
                                        to
                                        use and she will establish a video conference session. I also recognize
                                        that
                                        if I am more than 10 minutes late to a telehealth session, I will be
                                        charged
                                        the standard no-show fee.
                                </div>

                                <div class="form-check mt-4 mb-4">
                                    <input class="form-check-input" type="checkbox" name="client_understanding_checkboxes[]" value="13" {{ ( is_array(old('client_understanding_checkboxes')) && in_array(13, old('client_understanding_checkboxes')) ) ? 'checked ' : '' }}
                                        id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        I understand a “no show” or late fee of $75.00 will be charged if I miss an appointment or do not cancel within 24 hours of scheduled appointment. I understand credit card or other form of payment will be established before the first session and that insurance is not responsible for any late or no-show fees accrued.
                                </div>
                                <h5 class="">B. Therapy Tools</h5>
                                <div class="form-group mb-4 para-input d-flex flex-wrap">
                                    <ul class="list-style-disc ul_tools">
                                        <li>Core Beliefs</li>
                                        <li>Diary Card</li>
                                        <li>Thought Record</li>
                                        <li>Timeline</li>
                                    </ul>
                                </div>
                                <h5 class="">C. Book Recommendations</h5>
                                <div class="form-group mb-4 para-input d-flex flex-wrap">
                                    <ul class="list-style-disc ul_tools">
                                        <li><a href="https://www.amazon.com/Body-Keeps-Score-Healing-Trauma/dp/0143127748/ref=sr_1_1?keywords=the+body+keeps+the+score&qid=1658644037&s=books&sprefix=the+body+%2Cstripbooks%2C119&sr=1-1" target="_blank">The Body Keeps the Score: Brain, Mind, and Body in the Healing of Trauma</a> by Bessel van der Kolk</li>
                                        <li><a href="https://www.amazon.com/Atlas-Heart-Meaningful-Connection-Experience/dp/0399592555/ref=tmm_hrd_swatch_0?_encoding=UTF8&qid=1658644420&sr=1-1" target="_blank">Atlas of the Heart: Mapping Meaningful Connection and the Language of Healing Experience</a> by Brené Brown</li>
                                        <li><a href="https://www.amazon.com/Complex-PTSD-Surviving-RECOVERING-CHILDHOOD/dp/1492871842/ref=sr_1_4?keywords=complex+ptsd&qid=1658644346&s=books&sprefix=complex+pts%2Cstripbooks%2C114&sr=1-4" target="_blank">Complex PTSD: From Surviving to Thriving: A Guide and Map for Recovering from Childhood Trauma</a> by Pete Walker</li>
                                        <li><a href="https://www.amazon.com/Getting-Past-Your-Self-Help-Techniques/dp/1609619951/ref=sr_1_22?crid=1IBUS7MYDEXKE&keywords=therapy+books&qid=1658644193&s=books&sprefix=therapy+books%2Cstripbooks%2C121&sr=1-22" target="_blank">Getting Past Your Past: Take Control of Your Life with Self-Help Techniques from EMDR Therapy</a> by Francine Shapiro</li>
                                        <li><a href="https://www.amazon.com/Grief-Recovery-Handbook-Anniversary-Expanded/dp/0061686077/ref=sr_1_1?crid=1PBEZBZ2IS0SL&keywords=the+grief+recovery+handbook&qid=1658643712&sprefix=the+grief%2Caps%2C139&sr=8-1" target="_blank">The Grief Recovery Handbook</a> by John James and Russell Friedman</li>
                                    </ul>
                                </div>
                                <h5 class="">Client Consent</h5>
                                <div class="form-group mb-4 para-input d-flex flex-wrap">
                                    <p class="d-flex flex-wrap">I &nbsp;<span class="hide"></span>
                                        <input type="text" class="form-control txt" placeholder="Your Name"
                                            name="your_name" value="{{ old('your_name') }}">
                                        <span class="txt2">here by give my informed consent for the use of
                                        </span>
                                        <span>
                                            telehealth in my care.
                                        </span>
                                    </p>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Signature box</label>
                                    <div class="sign-main">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="signature" value="{{ old('signature') }}" id="">

                                            </div>
                                            <div class="col-lg-6">
                                                <span id="signbox-date"
                                                    class="d-flex justify-content-end"></span>

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
                            </div>
                        </div>
                    </form>
                </div>

            </fieldset>
        </div>
    </div>


</section>

@include('common.accepted_therapy_border')

@endsection

@push('scripts')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>
        toastr.error('{{ $error }}');
    </script>
@endforeach
@endif

@if (session()->has('telehealth_form_success'))
    <script>
        toastr.success('{{ session()->get('telehealth_form_success') }}');
    </script>
@endif

@if (Session::has('checkboxerrors'))
<script>
    toastr.error('{{Session::get('checkboxerrors')}}');
</script>
  @endif

@endpush
