@extends('layouts.master')
@section('content')

<!-- ================================== BANNER2 =============================== -->
<section>
    <div class="banner3">
        <div class="container position-relative d-flex justify-content-center wow zoomIn">
            <div class="position-absolute banner3-img">
                <img src="{{asset('assets/images/banner3-img.svg')}}" >
            </div>
            <div class="position-absolute banner3-text">
                <span class="h-1">
                    Resources
                </span>
            </div>
        </div>
    </div>
</section>
<!-- ================================== INTAKE FORMS =============================== -->
<section id="intake">
    <div class="intake-main">
        <div class="container pt-5 intake-wrap for-container-cstm-responsive-height  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.75s">
            <div class="text-center">
                <div class="h-1">
                    <h5>
                        Intake Forms
                    </h5>
                    <p class="mx-auto">
                        Please complete these forms prior to your first session and email them to
                        acceptedtherapy.com. If you are receiving telehealth services, you will also receive a
                        copy
                        of these forms through the client portal when your account is created.
                    </p>

                </div>
            </div>

            <div class="container form3 pt-2">
                <form action="" method="" class="">
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('intake_form') }}" class="w-100" target="__blank">
                                <button type="button" class="btn py-3" name="IntakeForm" id="">
                                    Intake (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('inform_consent_form') }}" class="w-100"
                                target="__blank">
                                <button type="button" class="btn py-3" name="InformedConsent" id="">
                                    Informed Consent (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('credit_card_form') }}" class="w-100" target="__blank">
                                <button type="button" class="btn py-3" name="CreditCardAuthorization" id="">
                                    Credit Card Authorization (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('non_secure_form') }}" class="w-100" target="__blank">
                                <button type="button" class="btn py-3" name="Non-SecureRelease" id="">
                                    Non-Secure Release (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('release_info_form') }}" class="w-100" target="__blank">
                                <button type="button" class="btn py-3" name="ReleaseofInformation" id="">
                                    Release of Information (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('sliding_scale_form') }}" class="w-100"
                                target="__blank">
                                <button type="button" class="btn py-3" name="SlidingScaleFeeApplication" id="">
                                    Sliding Scale Free Aplication (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('telehealth_treatment_form') }}" class="w-100" target="__blank">
                                <button type="button" class="btn py-3" name="TelehealthTreatmentConsent" id="">
                                    Telehealth Treatment Consent (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>




                </form>
            </div>
            <!-- Therapy tools -->
            <div class="text-center pt-5" id="therapy">
                <div class="h-1 pt-5">
                    <h5>
                        Therapy Tools
                    </h5>
                    <p class="mx-auto">
                        Here you will find many different tools that may be beneficial for you. If you are
                        unsure on
                        how to use any of these resources, talk to your therapist for more information.
                    </p>

                </div>
            </div>
            <div class="container  pt-2  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.75s">
                <div class="client-understanding">
                {{-- <h3 class="book-recommend text-center">Book Recommendations</h3> --}}
                <div class="form-group mb-4 para-input d-flex flex-wrap">
                    <ul class="list-style-disc ul_tools">
                        <li><a href="{{asset('assets/images/sample.pdf')}}" target="_blank">Thought record</a></li>
                        <li><a href="{{asset('assets/images/sample.pdf')}}" target="_blank">EMDR Core Belief List</a></li>
                        <li><a href="{{asset('assets/images/sample.pdf')}}" target="_blank">Emotion wheel</a></li>
                        <li><a href="{{asset('assets/images/sample.pdf')}}" target="_blank">Diary card</a></li>
                        <li><a href="{{asset('assets/images/sample.pdf')}}" target="_blank">Cognitive Distortions</a></li>
                        <li><a href="{{asset('assets/images/sample.pdf')}}" target="_blank">Defense Mechanisms</a></li>
                        <li><a href="{{asset('assets/images/sample.pdf')}}" target="_blank">Karpman Triangle </a></li>
                    </ul>
                </div>
                </div>

            </div>
            <div class="container  pt-2  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.75s">
                <div class="client-understanding">
                <h3 class="book-recommend text-center">Book Recommendations</h3>
                <div class="form-group mb-4 para-input d-flex flex-wrap">
                    <ul class="list-style-disc ul_tools">
                        <li><a href="https://www.amazon.com/Body-Keeps-Score-Healing-Trauma/dp/0143127748/ref=sr_1_1?keywords=the+body+keeps+the+score&qid=1658644037&s=books&sprefix=the+body+%2Cstripbooks%2C119&sr=1-1" target="_blank">The Body Keeps the Score: Brain, Mind, and Body in the Healing of Trauma</a> by Bessel van der Kolk</li>
                        <li><a href="https://www.amazon.com/Atlas-Heart-Meaningful-Connection-Experience/dp/0399592555/ref=tmm_hrd_swatch_0?_encoding=UTF8&qid=1658644420&sr=1-1" target="_blank">Atlas of the Heart: Mapping Meaningful Connection and the Language of Healing Experience</a> by Brené Brown</li>
                        <li><a href="https://www.amazon.com/Complex-PTSD-Surviving-RECOVERING-CHILDHOOD/dp/1492871842/ref=sr_1_4?keywords=complex+ptsd&qid=1658644346&s=books&sprefix=complex+pts%2Cstripbooks%2C114&sr=1-4" target="_blank">Complex PTSD: From Surviving to Thriving: A Guide and Map for Recovering from Childhood Trauma</a> by Pete Walker</li>
                        <li><a href="https://www.amazon.com/Getting-Past-Your-Self-Help-Techniques/dp/1609619951/ref=sr_1_22?crid=1IBUS7MYDEXKE&keywords=therapy+books&qid=1658644193&s=books&sprefix=therapy+books%2Cstripbooks%2C121&sr=1-22" target="_blank">Getting Past Your Past: Take Control of Your Life with Self-Help Techniques from EMDR Therapy</a> by Francine Shapiro</li>
                        <li><a href="https://www.amazon.com/Grief-Recovery-Handbook-Anniversary-Expanded/dp/0061686077/ref=sr_1_1?crid=1PBEZBZ2IS0SL&keywords=the+grief+recovery+handbook&qid=1658643712&sprefix=the+grief%2Caps%2C139&sr=8-1" target="_blank">The Grief Recovery Handbook</a> by John James and Russell Friedman</li>
                    </ul>
                </div>
                </div>
                {{-- <form action="" method="" class="">
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('intake_form') }}" class="w-100" target="__blank">
                                <button type="button" class="btn py-3" name="IntakeForm" id="">
                                    Intake (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('inform_consent_form') }}" class="w-100"
                                target="__blank">
                                <button type="button" class="btn py-3" name="InformedConsent" id="">
                                    Informed Consent (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('credit_card_form') }}" class="w-100" target="__blank">
                                <button type="button" class="btn py-3" name="CreditCardAuthorization" id="">
                                    Credit Card Authorization (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('non_secure_form') }}" class="w-100" target="__blank">
                                <button type="button" class="btn py-3" name="Non-SecureRelease" id="">
                                    Non-Secure Release (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('release_info_form') }}" class="w-100" target="__blank">
                                <button type="button" class="btn py-3" name="ReleaseofInformation" id="">
                                    Release of Information (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('sliding_scale_form') }}" class="w-100"
                                target="__blank">
                                <button type="button" class="btn py-3" name="SlidingScaleFeeApplication" id="">
                                    Sliding Scale Free Aplication (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('telehealth_treatment_form') }}" class="w-100" target="__blank">
                                <button type="button" class="btn py-3" name="TelehealthTreatmentConsent" id="">
                                    Telehealth Treatment Consent (PDF)
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" >
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>





                </form> --}}
            </div>

        </div>
    </div>
</section>

@include('common.accepted_therapy_border')

@endsection
