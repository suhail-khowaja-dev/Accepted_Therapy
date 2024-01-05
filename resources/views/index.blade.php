@extends('layouts.master')
@section('content')
<style>
    .home-package .packages-wrapper .card__side {
    height: 25.4rem !important;
}
</style>
<!-- ================================== BANNER1 =============================== -->
<section>
    <div class="banner1">
        <div class="container position-relative">
            <div class="banner-img-1 position-absolute">
                <img src="{{ url('uploads/cms/'.$cms_contents[0]->image) ?? ''}}" alt="">
            </div>
            <div class="banner-text1 position-absolute wow fadeInLeft" data-wow-duration="1s"
                data-wow-delay="0.5s">
                <span class="h-1">
                    {!! $cms_contents[0]->description ?? '' !!}
                </span>
                <div class="btn-1 mt-4">
                    <a href="{{ route('contact') }}" class="w-100">
                        <button type="button" class="btn">
                            Contact Now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================================== MISSION STATEMENT=============================== -->
<section>
    <div class="pb-5 mission">
        <div class="container  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="h-1 d-flex justify-content-center pt-5">
                <h1 class="text-center">{{ $cms_contents[1]->title ?? '' }}</h1>
            </div>
            <div class="p-1 d-flex justify-content-center pb-5">
                {!! $cms_contents[1]->description ?? '' !!}
            </div>
        </div>
    </div>
</section>
<!-- ================================== MEET OUR TEAM =============================== -->
<section>
    <div class="py-5 our-team" id="meetteam">
        <div class="container">
            <div class="h-1 d-flex justify-content-center pt-5">
                <h1 class="text-center">Meet Our Team</h1>
            </div>
            <!-- Team Gallery -->
            <div class="container team-mem mb-5 wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div
                    class="container position-relative our-clients d-flex flex-wrap justify-content-evenly py-5">
                    <!-- ================= first row =================-->

                    @if (count($teams) > 0)
                    @foreach ($teams as $team)
                    <div class="card text-center mt-3">
                        <a href="{{route('therapist', ['id' => $team->slug])}}">
                            <div class="our-team-1 mt-4 wow bounceIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                <img src="{{url('uploads/team_member/'.$team->profile_image)}}" alt="{{ $team->first_name }}" width="100" class="img-fluid rounded-circle mb-3 shadow-sm">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="card-title card-text">
                                <h5>
                                    {{ ucwords($team->first_name) }}
                                    {{-- {{ ucwords($team->last_name) }} --}}
                                </h5>
                            </div>
                            <div class="card-subtitle card-text">
                                <h6>
                                    {{ count($team->therapist_specialities) > 0 ? ucwords($team->therapist_specialities[0]->speciality_title) : '' }}
                                </h6>
                                <h6>
                                    {{ $team->location }}
                                </h6>
                            </div>
                            <div class="btn-2 mt-4">
                                <a href="{{route('therapist', ['id' => $team->slug])}}">
                                    <button type="button" class="btn">
                                         {{ ucwords($team->first_name) }}
                                         {{-- {{ ucwords($team->last_name) }} --}}
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h3 class="text-center py-5" style="color: gray">Therapist Not Exists!</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================================== LOCATION =============================== -->
<section>
    <div class="location">
        <div class="container position-relative">
            <div class="h-1 d-flex justify-content-center pt-5">
                <h1 class="text-center">
                    Locations
                </h1>
            </div>
            <div class="position-absolute circle-1">
                <img src="{{asset('assets/images/circle2.png')}}" alt="">
            </div>
            <div class="position-absolute circle-2">
                <img src="{{asset('assets/images/circle3.png')}}" alt="">
            </div>
            <!-- SWIPER SLIDER -->
            <div class="container position-relative locations-card mt-5 py-5">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    @if (count($locations) > 0)
                    <div class="swiper-wrapper">

                        @foreach ($locations as $location)
                        <div class="swiper-slide">
                            <a href="{{ route('location_details', ['id'=>$location->id,'city'=> $location->city,'state'=> $location->state]) }}" class="text-decoration-none">
                                <div class="card mb-3 mt-3">
                                    <div class="card-img">
                                        <img src="{{ url('uploads/locations/'.$location->image)}}" class="card-img-top" alt="{{ $location->state }}">
                                    </div>
                                    <div class="card-footer text-center">{{ $location->city }}, {{ $location->state }}</div>
                                </div>
                            </a>

                        </div>
                        @endforeach
                    </div>
                    @else
                    <h3 class="text-center py-2" style="color: gray">Locations Not Exists!</h3>
                    @endif
                    <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
                </div>
                <!-- //swiper slider end -->
            </div>



        </div>


    </div>
</section>


<!-- ================================== OUR CLIENTS =============================== -->
<section>
    <div class="pt-5 pb-3 our-team">
        <div class="container">

            <!-- Client Gallery -->
            <div class="container client-mem mb-5">
                <div class="container position-relative our-clients d-flex flex-wrap py-5">
                    <!-- ================= first row =================-->
                    <!-- first card -->
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6">
                                <div class="client-img mx-auto wow bounceIn" data-wow-duration="1s"
                                    data-wow-delay="0.75s">
                                    <img src="{{ url('uploads/cms/'.$cms_contents[2]->image) ?? '' }}" class="card-img" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card-body py-5">
                                    <h5 class="card-title">{{ $cms_contents[2]->title ?? '' }}</h5>
                                    {!! $cms_contents[2]->description ?? '' !!}
                                    <div class="btn-2 mt-4">
                                        <a href="https://accepted.mytheranest.com/appointments/new " target="_blank">
                                            <button type="button" class="btn wow bounceIn">
                                                Click Here
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="curve-border position-absolute">
                        <img src="{{asset('assets/images/curve1.png')}}" alt="">
                    </div>
                    <!-- Second Card -->
                    <div class="card mb-3">
                        <div class="row no-gutters card-mobile">
                            <div class="col-lg-6  col-md-6">
                                <div class="card-body py-5 mx-auto">
                                    <h5 class="card-title">{{ $cms_contents[3]->title ?? '' }}</h5>
                                    {!! $cms_contents[3]->description ?? '' !!}
                                    <div class="btn-2 mt-4">
                                        <a href="{{ route('schedule') }}">
                                            <button type="button" class="btn wow bounceIn"
                                                data-wow-duration="1s" data-wow-delay="0.5s">
                                                Click Here
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="client-img wow bounceIn" data-wow-duration="1s"
                                    data-wow-delay="0.75s">
                                    <img src="{{ url('uploads/cms/'.$cms_contents[3]->image) ?? '' }}" class="card-img" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="curve-border2 position-absolute">
                        <img src="{{asset('assets/images/curve2.png')}}" alt="">
                    </div>
                    <!-- Third card -->
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6">
                                <div class="client-img mx-auto wow bounceIn" data-wow-duration="0.75s"
                                    data-wow-delay="1s">
                                    <img src="{{ url('uploads/cms/'.$cms_contents[4]->image) ?? '' }}" class="card-img" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card-body py-5">
                                    <h5 class="card-title">{{ $cms_contents[4]->title ?? '' }}</h5>
                                    {!! $cms_contents[4]->description ?? '' !!}
                                    <div class="btn-2 mt-4">
                                        <a href="{{ route('referral_form_index') }}">
                                            <button type="button" class="btn wow bounceIn"
                                                data-wow-duration="1s" data-wow-delay="0.5s">
                                                Click Here
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================================== CLIENTS RESOURCES =============================== -->
<section>
    <div class="resources">
        <div class="container d-flex flex-wrap position-relative resources-wrap wow fadeInUp"
            data-wow-duration="0.75s" data-wow-delay="1s">
            <div class="circles-3 position-absolute">
                <img src="{{asset('assets/images/circle1.png')}}"  class="card-img" alt="">
            </div>
            <div class="resource-text position-absolute wow bounceIn" data-wow-duration="0.75s"
                data-wow-delay="1s">
                <h1>
                    {{ $cms_contents[5]->title ?? '' }}
                </h1>
                {!! $cms_contents[5]->description ?? '' !!}
                <div class="resource-btn mt-3 d-flex flex-row">
                    <div>
                        <a href="{{ route('resources') }}" class="w-100">
                            <button type="button" class="btn">
                                Forms
                            </button>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('resources') }}" class="w-100">
                            <button type="button" class="btn">
                                Therapy Tools
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="plants-4 position-absolute">
                <img src="{{ url('uploads/cms/'.$cms_contents[5]->image) ?? '' }}" alt="plant-banner">
            </div>
        </div>
    </div>
</section>
<!-- ================================== CLINICAL RESOURCES =============================== -->
<section>
    <div class="clinical-resources pb-5">
        <div class="container pt-5">
            <div class="h-1 d-flex justify-content-center text-center">
                <h1>
                    {{ $cms_contents[6]->title ?? '' }}
                </h1>
            </div>
            <div class="p-1 d-flex justify-content-center text-center">
                {!! $cms_contents[6]->description ?? '' !!}
            </div>
            <div class="circles-5 d-flex flex-lg-row justify-content-lg-evenly text-center">
                <div class="position-relative img-white wow fadeInLeft" data-wow-duration="1s"
                    data-wow-delay="0.75s">
                    <span class="agency position-absolute">{{ $cms_contents[6]->title_second ?? '' }}
                        Sign In
                    </span>
                    <span class="click position-absolute">
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal2">Click Here &rarr;</a>
                    </span>
                    <img src="{{asset('assets/images/white-circle.png')}}" alt="">
                </div>
                <div class="position-relative img-white wow fadeInRight" data-wow-duration="1s"
                    data-wow-delay="0.75s">
                    <span class="agency position-absolute">{{ $cms_contents[6]->title_third ?? '' }}
                        Sign Up
                    </span>
                    <span class="click position-absolute">
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal1">Click Here &rarr;</a>
                    </span>
                    <img src="{{asset('assets/images/white-circle.png')}}" alt="">
                </div>

            </div>
        </div>

    </div>
</section>

@if(!Auth::check())
<section class="home-package">
    <div class="packages-main">
        <div class="">
            <div class="packages-wrapper payment-wrapper px-4 py-5">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center" id="myDIV">
                        <div class="h-1 for-font d-flex justify-content-center pt-2">
                            <h1 class="text-center">
                               Select Package for PDF Download
                            </h1>
                        </div>
                        @if(!empty($packages))

                            @foreach ($packages as $listing)
                                @php
                                    $array_ids[] = $listing->id;
                                @endphp
                                @if ($listing->id == 4)
                                <div class="col-lg-6 my-3">
                                    <label for="p1{{ $listing->id ?? '' }}" class="w-100">
                                        <input type="radio" name="package" id="p1{{ $listing->id ?? '' }}" hidden>
                                        <div class="card card-width">
                                            <div class="card__side card__side--front-1">
                                                <div class="card__title card__title--1">
                                                    <i class="fas fa-paper-plane"></i>
                                                    <h4 class="card__heading">{{$listing->package_title ?? ''}}</h4>
                                                </div>

                                                <div class="card__details">
                                                    <ul>

                                                        <li>
                                                            <span class="check-ico"><i
                                                                    class="fa-solid fa-check"></i></span>
                                                                {{ json_decode($listing->package_listing)[0] ?? 'N/A'}}
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card__side card__side--back card__side--back-1" onclick="getPackageId({{ $listing->id ?? '' }})" id="testing"  value={{$listing->id}}>
                                                <input type="hidden" value="" id="package_id">
                                                <div class="card__cta">
                                                    <div class="card__price-box">
                                                        <p class="card__price-only">Only</p>
                                                        <p class="card__price-value">${{$listing->package_price ?? ''}}</p>
                                                    </div>
                                                    <div class="btn btn--white selectPackage">Select</div>
                                                </div>
                                            </div>
                                        </div>
                                    </label>

                                </div> <!-- col end.// -->
                                <div class="col-lg-6">
                                    <div class="client-mem for-padding-top">
                                        <form id="signup_form_pdf" method="POST">
                                            @csrf
                                            <input type="hidden" name="_token" value="">
                                            <div class="form-group mb-4">
                                                <div class="input-group">
                                                    <input type="text" class="form-control py-3" name="name" id="name"
                                                        placeholder="Name" >
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="input-group">
                                                    <input type="email" class="form-control py-3" name="email" id="email"
                                                        placeholder="Email Address" >
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="input-group">
                                                    <input type="password" class="form-control py-3" name="password"
                                                        placeholder="Password" >
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="btn-1 mt-4 text-center">
                                    <a class="w-100" id="payment_redirect">
                                        <button type="button" class="btn" id="next">
                                            Next
                                        </button>
                                    </a>
                                </div>


                                @endif
                            @endforeach
                            @if (!in_array(4, $array_ids ?? ['']))
                            <h3 class="text-center mt-5">Sorry!, Download Package<br>Not Available</h3>
                            @endif
                        @endif
                    </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endif
@if(Auth::check() && Auth::user()->role == 1)
<section class="home-package">
    <div class="packages-main">
        <div class="">
            <div class="packages-wrapper payment-wrapper px-4 py-5">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center" id="myDIV">
                        <div class="h-1 for-font d-flex justify-content-center pt-2">
                            <h1 class="text-center">
                               Select Package for PDF Download
                            </h1>
                        </div>
                        @if(!empty($packages))

                            @foreach ($packages as $listing)
                                @php
                                    $array_ids[] = $listing->id;
                                @endphp
                                @if ($listing->id == 4)
                                <div class="col-lg-6 my-3">
                                    <label for="p1{{ $listing->id ?? '' }}" class="w-100">
                                        <input type="radio" name="package" id="p1{{ $listing->id ?? '' }}" hidden>
                                        <div class="card card-width">
                                            <div class="card__side card__side--front-1">
                                                <div class="card__title card__title--1">
                                                    <i class="fas fa-paper-plane"></i>
                                                    <h4 class="card__heading">{{$listing->package_title ?? ''}}</h4>
                                                </div>

                                                <div class="card__details">
                                                    <ul>

                                                        <li>
                                                            <span class="check-ico"><i
                                                                    class="fa-solid fa-check"></i></span>
                                                                {{ json_decode($listing->package_listing)[0] ?? 'N/A'}}
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card__side card__side--back card__side--back-1" onclick="getPackageId({{ $listing->id ?? '' }})" id="testing"  value={{$listing->id}}>
                                                <input type="hidden" value="" id="package_id">
                                                <div class="card__cta">
                                                    <div class="card__price-box">
                                                        <p class="card__price-only">Only</p>
                                                        <p class="card__price-value">${{$listing->package_price ?? ''}}</p>
                                                    </div>
                                                    <div class="btn btn--white selectPackage">Select</div>
                                                </div>
                                            </div>
                                        </div>
                                    </label>

                                </div> <!-- col end.// -->
                                <div class="col-lg-6">
                                    <div class="client-mem for-padding-top">
                                        <form id="signup_form_pdf" method="POST">
                                            @csrf
                                            <input type="hidden" name="_token" value="">
                                            <div class="form-group mb-4">
                                                <div class="input-group">
                                                    <input type="text" class="form-control py-3" name="name" id="name"
                                                        placeholder="Name" >
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="input-group">
                                                    <input type="email" class="form-control py-3" name="email" id="email"
                                                        placeholder="Email Address" >
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="input-group">
                                                    <input type="password" class="form-control py-3" name="password"
                                                        placeholder="Password" >
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="btn-1 mt-4 text-center">
                                    <a class="w-100" id="payment_redirect">
                                        <button type="button" class="btn" id="next">
                                            Next
                                        </button>
                                    </a>
                                </div>


                                @endif
                            @endforeach
                            @if (!in_array(4, $array_ids ?? ['']))
                            <h3 class="text-center mt-5">Sorry!, Download Package<br>Not Available</h3>
                            @endif
                        @endif
                    </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endif
<!-- ================================== GET IN TOUCH =============================== -->
<section>
    <div class="getin-touch">
        <div class="container position-relative wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="1s">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-left">
                        <div class="circles-5 position-absolute">
                            <img src="{{asset('assets/images/circle4.png')}}" alt="">
                        </div>
                        <div class="therapist position-absolute wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="0.9s">
                            <img src="{{ url('uploads/cms/'.$cms_contents[7]->image ?? '') }}" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 py-5">
                    <div class="h-1">
                        <h1>
                            Get In touch
                        </h1>
                    </div>
                    <div class="p-1">
                        {!! $cms_contents[7]->description ?? '' !!}
                    </div>
                    <!-- ---FORM--- -->
                    <div class="form1">
                        <div class="row">
                            <div class="col-lg-12">
                                @include('common.get_in_touch_form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================== Accepted Therapy Border =============================== -->
        @include('common.accepted_therapy_border')
    </div>
</section>
{{-- {{ dd(session()->get('selected_package')) }} --}}
@endsection

@push('scripts')

    <script>

$("#next").on("click",function(){
            var show = $('#package_id').val();
             if(show == ''){
                toastr.error('Please Select a Plan');
                return false;
             }
             if($("#next").hasClass('download_plan_selected')) {
                $.ajax({
                        url: '{{ route('sign_up_form_data') }}',
                        type: 'POST',
                        data: $("#signup_form_pdf").serialize(),
                        beforeSend: function(){
                            $("#preloader").css('display','block');
                        },
                        success: function(response) {
                        $("#preloader").css('display','none');

                        if(response.status == 200){
                            location.href = "{{ route('pay_amount_pdf') }}";
                        }else{
                            $.each(response.errors, function(prefix, val){
                                toastr.error(val[0]);
                          });

                            // respnse.errors = [];
                        }
                    }

                    // });
                 });

             }
        });

        function getPackageId(plan_id){
        var package_id_confrom = document.getElementById("package_id").value = plan_id;
            $.ajax({
                url: 'create_package_pdf/'+plan_id,
                type: 'GET',
                success: function(data) {
                    // console.log(data);
                    if(data.status == 200){
                        toastr.success('You have selected '+data.package_title+' Plan');

                         $("#next").addClass('download_plan_selected');

                    }else{
                        toastr.error('Account have not been created!, Please Singup again');
                    }
                }
            });

        }

    </script>


@if (Session::has('password_reset'))
<script>swal('Dear User','{{ Session::get('password_reset') }}','success')</script>
@endif
@if (Session::has('password_error'))
<script>swal('Invalid','{{ Session::get('password_error') }}','error')</script>
@endif
@if (Session::has('pdf'))
<script>swal('Pdf Plan','{{ Session::get('pdf') }}','success')</script>
@endif
@endpush
