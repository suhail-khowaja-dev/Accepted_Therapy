@extends('layouts.master')

@section('content')
<style>
    .card.card-1{
        height: 100%;
    }
    .imageDog img{
        padding-top: 10rem !important;
        margin: auto !important;
        display: block;
    }
    .nikkiButton {
        text-align: center;
    }
    .nikkiButton button {
    background-color: #5AE2D8;
    color: #2D6D95 !important;
    font-family: "Solway-Bold";
    border-radius: 13px;
    font-size: 18px;
    width: 140px;
    margin: auto;
    padding: 8px;
    border: none;
}
</style>
    <!-- ================================== BANNER2 =============================== -->
    <section>
        <div class="banner2">
            <div class="container position-relative">
                <div class="banner2-text position-absolute px-lg-5 wow fadeInLeft" data-wow-duration="1s"
                    data-wow-delay="0.75s">
                    <div class="banner2-text-h1">
                        <span class="h-1 mb-0">{{ ucwords($team->first_name) . ' ' . ucwords($team->last_name) }}
                            <span>{{ count($team->therapist_specialities) > 0 ? ucwords($team->therapist_specialities[0]->speciality_title) : '' }}</span></span><br />
                        <span
                            class="h-3">{{ count($team->therapist_specialities) > 0 ? ucwords($team->therapist_specialities[0]->description) : '' }}</span><br />
                        <span class="h-3">{{$team->location}}</span><br>
                        {{-- <span class="h-3" >{{$team->email}}<span> --}}
                            <span><a  class="h-3" style="text-decoration: none" href="mailto:{{$team->email}}">{{$team->email}}</a></span>
                           {{-- <a href="{{$team->email}}"></a> --}}
                    </div>
                    {{-- <div class="banner2-text-btn1 mt-4 pb-4">
                        <a href="{{ route('schedule', ['id' => $team->slug]) }}" class="w-100">
                            <button type="button" class="btn">
                               {{ ucwords($team->first_name) . ' ' . ucwords($team->last_name) }}
                            </button>
                        </a>
                    </div> --}}
                </div>
                {{-- <div class="banner2-img position-absolute wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.75s">
                    <img src="{{ url('uploads/team_member/' . $team->profile_image) }}" alt="">
                </div> --}}
                <div class="banner2-img position-absolute wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="0.75s">
                        <img src="{{ asset('assets/images/corner1.png') }}" alt="">
                    </div>
                    <div class="member1-img for-respnosive-img position-absolute wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="0.75s">
                        <img src="{{ url('uploads/team_member/' . $team->profile_image) }}" alt="">
                    </div>
            </div>
        </div>
    </section>
    <!-- ================================== ABOUT NIKKI =============================== -->
    {{-- @if (Request::path() === 'therapist/yvette-huddleston')
    <section>
        <div class="about-nikki">
            <div class="container wrapper wow fadeInUp imageDog" data-wow-duration="1s" data-wow-delay="0.75s">
                <img src="{{asset('assets/images/Mufasa.JPG')}}" width="250px">
                <h4 class="text-center mt-3" style="color: #808080">Something Went Wrong</h4>
            </div>
        </div>
    </section>
      @else --}}
    <section>
        <div class="about-nikki">
            <div class="container wrapper wow fadeInUp  for-container-cstm-responsive-height" data-wow-duration="1s" data-wow-delay="0.75s">
                <!-- Meet Nikki -->
                <div class="h-5 text-center pt-5">
                    <h1>Meet {{ ucwords($team->first_name) . ' ' . ucwords($team->last_name) }}</h1>
                    <h3>Hello!</h3>
                </div>
                <div class="text-p1 text-center px-5 pt-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                    {!! $team->description !!}
                </div>
                {{-- <div class="meet-nikki-btn1 mt-5 text-center">
                    <a href="{{ route('schedule', ['id' => $team->slug]) }}">
                        <button class="btn" type="button">
                            Talk {{ ucwords($team->first_name) . ' ' . ucwords($team->last_name) }}
                        </button>
                    </a>
                </div> --}}

                <!-- Education -->
                <div class="education py-2">
                    <div class="h-5 text-center pt-5">
                        <h1>Education</h1>
                    </div>
                    <div class="text-p1 for-remove-padding-ul px-5 pt-2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.75s">
                        <p>
                        <ul>
                            {!! $team->education !!}
                        </ul>

                        </p>
                    </div>
                </div>
                <!-- Specialties -->
                {{-- <div class="specialties py-2">
                    <div class="h-5 text-center pt-5">
                        <h1>{{ $team->slug == 'nikki-dear' ? 'Credentials' : 'Specialties'}}</h1>
                    </div>
                    <div class="text-p1 px-2 pt-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.75s">
                        <div class="container py-5">
                            <div class="row">
                                @foreach ($team->therapist_specialities as $therapist_speciality)
                                    <div class="col-lg-4 mt-5">
                                        <div
                                            class="card card-1 position-relative d-flex justify-content-center align-items-center">
                                            <div class="spec text-center position-absolute">
                                                <h3 class="py-2">({{ ucwords($therapist_speciality->speciality_title) }})</h3>
                                            </div>
                                            <div class="text-center py-5">
                                                <h2>{{ ucwords($therapist_speciality->description) }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div> --}}
                <!-- Bio -->
                {{-- <div class="bio py-2">
                    <div class="h-5 text-center pt-5">
                        <h1>Bio</h1>
                    </div>
                    <div class="text-p1 text-center px-5 pt-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                        {!! $team->bio !!}
                    </div>
                </div> --}}
                <div class="nikkiButton mt-4 ">
                    <a href="{{ route('schedule', ['id' => $team->slug]) }}" class="w-100">
                        <button type="button" >
                           Talk to {{ ucwords($team->first_name)}}
                        </button>
                    </a>
                </div>
                <!-- Fav Quote -->
                <div class="quote py-4">
                    <div class="h-5 text-center pt-5">
                        <h1>Favorite Quote</h1>
                    </div>
                    <div class="text-p1 px-5 pt-2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="card border-0 card-0 for-container-cstm-responsive-height">
                            <div class="card profile py-3 px-4">
                                <img src="{{ url('uploads/team_member/' . $team->profile_image) }}" alt="">
                            </div>

                            <p class="content mb-0"><i class="fa fa-quote-left" aria-hidden="true"></i>
                                {{ $team->quote }} <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- @endif --}}

    @include('common.accepted_therapy_border')
@endsection



