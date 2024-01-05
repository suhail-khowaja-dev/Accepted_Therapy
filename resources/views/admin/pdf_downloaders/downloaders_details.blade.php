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
    <div class="custommerContainer mt-4">
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ !empty($user->profile_image) ? url('uploads/agency_member/' . $user->profile_image) : asset('user/assets/image/profile/user-profile.png')}}" alt="{{ $user->name }}" style="border-radius:50%;width:80px; height:80px; display:block;">
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Name
                    </label>

                       <p>{{$user->name ?? 'N/A' }} </p>

                </div>
                <div class="col-lg-4">
                    <label for="">
                        Email
                    </label>

                    <p>{{$user->email ?? 'N/A' }}</p>

                </div>

            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <label for="">
                        Address
                    </label>
                   <p>{{$user->address ?? 'N/A' }} </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Country
                    </label>
                    <p> {{$user->country ?? 'N/A' }} </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        State
                    </label>
                       <p>{{$user->state ?? 'N/A' }} </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <label for="">
                        City
                    </label>
                   <p>{{$user->city ?? 'N/A' }} </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Zip Code
                    </label>
                   <p>{{$user->zip ?? 'N/A' }} </p>
                </div>
            </div>
        </div>
    </div>

    <div class="custommerContainer mt-5">
        <div class="subHeading">
            <h5>
                Package
            </h5>
        </div>
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-4">
                    <label for="">
                        Package Name
                    </label>
                    <p>
                        {{ $user->package[0]->package_title ?? 'N/A' }}
                    </p>
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Subscription ID
                    </label>
                    <p>
                        {{ json_decode($user->package[0]->paypal_response)->subscriptionID ?? 'N/A' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
