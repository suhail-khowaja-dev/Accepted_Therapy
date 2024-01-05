@extends('layouts.master')
@section('content')

<!-- ================================== BANNER2 =============================== -->
<section>
    <div class="banner2 loc-banner">
        <div class="container position-relative">
            <div class="banner2-text position-absolute px-lg-5 wow fadeInLeft" data-wow-duration="1s"
                data-wow-delay="0.75s">
                <div class="banner2-text-h1">
                    <span class="h-1 mb-0">Location</span><br />
                    <span class="h-3">{{ $location->state ?? '' }}</span>
                </div>

            </div>
            {{-- <div class="banner2-img position-absolute wow fadeInRight" data-wow-duration="1s"
                data-wow-delay="0.75s">
                <img src="{{ url('uploads/locations/'.$location->image ?? '') }}" alt="{{ $location->state }}">
            </div> --}}
            <div class="banner2-img position-absolute wow fadeInRight" data-wow-duration="1s"
            data-wow-delay="0.75s">
            <img src="{{ asset('assets/images/corner1.png') }}" alt="">
        </div>
        <div class="location-img for-location-img  position-absolute wow fadeInRight" data-wow-duration="1s"
            data-wow-delay="0.75s">
            <img src="{{ url('uploads/locations/'.$location->image ?? '') }}" alt="{{ $location->state }}">
        </div>
        </div>
    </div>
</section>
<!-- ================================== LOCATION MAP =============================== -->

<section>
    <div class="loc-map">
        <div class="container">
            <div class="embed-responsive embed-responsive-100x400px">
                @if (strstr( $location->embed_map_link, 'https://www.google.com/' ) != '' || strstr( $location->embed_map_link, 'http://www.google.com/' ) != '')
                <iframe
                    src="{{ $location->embed_map_link }}"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                @else
                    <h3 class="text-center py-5" style="color:gray">Google Map Link Found!</h3>
                @endif
            </div>
        </div>


        <div class="address-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ph-number">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-lg-5 mt-5">
                                    <div class="phone-img">
                                        <img src="{{asset('assets/images/phone.svg')}}" alt="">
                                    </div>
                                    <a href="tel:+{{ $location->contact ?? ''}}" class="p-3">
                                        {{ $location->contact ?? ''}}
                                    </a>

                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="loc-address">
                            <ul class="list-unstyled mb-0">

                                <li class="d-flex align-items-center mb-lg-4 mt-3">
                                    <div class="address-img">
                                        <img src="{{asset('assets/images/address.svg')}}" alt="">
                                    </div>
                                    <a href="https://goo.gl/maps/TYRrety8Nsvwg3YbA" target="_blank"
                                        class="p-3 mt-4">
                                        {{ $location->address ?? ''}}
                                    </a>


                                </li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- ================================== Mississippi Therapists =============================== -->
<section>
    <div class="pb-5 missi-therapist">
        <div class="container">
            <div class="h-1 d-flex justify-content-center pt-5">
                <h1 class="text-center">{{ $location->state ?? ''}} Therapists</h1>
            </div>
            <!-- Team Gallery -->
            <div class="container team-mem mb-5 wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div
                    class="container position-relative our-clients d-flex flex-wrap justify-content-evenly py-5">
                    <!-- ================= first row =================-->

                    @if (count($therapists) > 0)
                    @foreach ($therapists as $item )


                    <a href="{{ route('therapist',['id'=>$item->related_location_therapist->slug]) }}" class="text-decoration-none">
                        <div class="card text-center mt-3">
                            <div class="our-team-1 mt-4 wow bounceIn" data-wow-duration="1s"
                                data-wow-delay="0.7s">
                                <img src="{{ url('uploads/team_member/'.$item->related_location_therapist->profile_image)}}" alt="" width="100"
                                    class="img-fluid rounded-circle mb-3 shadow-sm">
                            </div>
                            <div class="card-body">
                                <div class="card-title card-text">
                                    <h5>
                                        {{ ucwords($item->related_location_therapist->first_name) . ' ' . ucwords($item->related_location_therapist->last_name) }}
                                    </h5>
                                </div>
                                <div class="card-subtitle card-text">
                                    <h6>
                                        LCSW
                                    </h6>
                                </div>

                            </div>
                        </div>
                    </a>

                    @endforeach
                    @else
                    <h3 class="text-center py-5" style="color:gray">Therapist Not Exist in this location!</h3>
                    @endif



                </div>
            </div>
        </div>
    </div>
</section>

@endsection
