@extends('layouts.master')
@section('content')

<!-- ================================== BANNER2 =============================== -->
<section>
    <div class="banner3">
        <div class="container position-relative d-flex justify-content-center">
            <div class="position-absolute banner3-img">
                <img src="{{asset('assets/images/banner3-img.svg')}}" alt="">
            </div>
            <div class="position-absolute banner3-text wow zoomIn" data-wow-duration="1s"
                data-wow-delay="0.5s ">
                <span class="h-1">
                    Contact Us
                </span>
            </div>
        </div>
    </div>
</section>
<!-- ================================== GET IN TOUCH =============================== -->
<section>
    <div class="getin-touch contact">
        <div class="container position-relative wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.75s ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-left">
                        <div class="circles-5 position-absolute">
                            <img src="{{asset('assets/images/circle4.png')}}" alt="">
                        </div>
                        <div class="therapist position-absolute wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="0.9s ">
                            <img src="{{asset('assets/images/Contact Us.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 py-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.75s">
                    <div class="h-1">
                        <h1>
                            Get In touch
                        </h1>
                    </div>

                    <!-- ---FORM--- -->
                    <div class="form1 pt-5">
                        <div class="row">
                            <div class="col-lg-12">
                                @include('common.get_in_touch_form')
                                <div class="p-1 git_p mt-5">
                                    <p>
                                        If you have any concerns regarding the care that you are receiving at Accepted Therapy Services, you can let us know by completing the <a href="https://s.surveyplanet.com/z63a9ivm" target="_blank"> Accepted Therapy Services Survey.</a> This survey can be submitted with 100% anonymity and is 100% confidential. This means that your answers will not be shared with your therapist, unless you select to share your answers with your therapist in the survey.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@include('common.accepted_therapy_border')
@endsection
