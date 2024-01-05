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
    {{-- {{ dd($edit) }} --}}
    {{-- customer_Information --}}
    <div class="custommerContainer mt-4">
        <div class="informationContainer">
            <div class="row">
                <div class="col-lg-4">
                <form action="{{route('update_user_profile',$edit->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="actual_password" value="{{$edit->actual_password}}">
                    <input type="hidden" name="prevpassword" value="{{$edit->password}}">
                    <img src="{{ !empty($edit->profile_image) ? url('uploads/agency_member/' . $edit->profile_image) : asset('user/assets/image/profile/user-profile.png')}}" alt="{{ $edit->name }}" style="border-radius:50%;width:80px; height:80px; display:block;"><br>
                    <input type="file" name="profile_image" >
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Name
                    </label>

                        <input type="text" name="name" value="{{$edit->name ?? 'N/A' }}" class="form-control" />

                </div>
                <div class="col-lg-4">
                    <label for="">
                        Email
                    </label>

                    <input type="text" name="email" value="{{$edit->email ?? 'N/A' }}" class="form-control" />

                </div>

            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <label for="">
                        Address
                    </label>
                    <input type="text" name="address" value="{{$edit->address ?? 'N/A' }}" class="form-control" />
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Country
                    </label>
                    <input type="text" name="country" value="{{$edit->country ?? 'N/A' }}" class="form-control" />
                </div>
                <div class="col-lg-4">
                    <label for="">
                        State
                    </label>
                       <input type="text" name="state" value="{{$edit->state ?? 'N/A' }}" class="form-control" />
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <label for="">
                        City
                    </label>
                    <input type="text" name="city" value={{$edit->city ?? 'N/A' }} class="form-control" />
                </div>
                <div class="col-lg-4">
                    <label for="">
                        Zip Code
                    </label>
                    <input type="text" name="zip" value="{{$edit->zip ?? 'N/A' }}" class="form-control" />
                </div>
                <div class="col-lg-4">
                    <label for="">
                       Password
                    </label>
                    <input type="password" name="password"  class="form-control" />
                </div>
                <div class="col-lg-4">
                    <label for="">
                      Confirm Password
                    </label>
                    <input type="password" name="confirm_password" class="form-control" />
                </div>
            </div>
        </div>
    </div>
    <br>
    <input type="submit" name="submit" value="update" class="class btn btn-primary">
</form>

@endsection
