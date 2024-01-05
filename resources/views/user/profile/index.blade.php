@extends('user.layouts.master')
@section('content')
<style>
    .edit-submit-cstmbtn {
        margin-top: 2rem;
        background-color: #6ED6D3;
        font-family: "Solway-Bold";
        font-weight: 600;
        color: #2D6D95;
        border-radius: 12px;
        padding: 8px 16px;
        font-size: 16px;
    }

    .edit-submit-cstmbtn:hover {
        margin-top: 2rem;
        background-color: #6ED6D3;
        font-family: "Solway-Bold";
        font-weight: 600;
        color: #2D6D95;
    }
    .top-tabt-heading {
        color: #2D6D95;
        font-size: 58px;
        font-family: "JA-Hand-Reg";
    }

</style>
    <div class="for-content-tabs">
        <h2>Change Profile</h2>
        <br><br>

        <form action="{{ route('user_profile_update', ['id' => Auth::id()]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="inputImage">Profile Image</label>
                    <input type="file" name="profile_image" class="form-control" id="inputImage" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" id="inputAddress" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" id="inputEmail4" placeholder="Email" readonly>
                </div>
            </div>
            {{-- <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputConfirmPassword4">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="inputConfirmPassword4" placeholder="Confirm Password">
                </div>
            </div> --}}
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" name="address" value="{{ Auth::user()->address == '' ? old('address') : Auth::user()->address }}" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputCountry">Country</label>
                    <input type="text" class="form-control" name="country" value="{{ Auth::user()->country == '' ? old('country') : Auth::user()->country }}" placeholder="Country">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" name="state" value="{{ Auth::user()->state == '' ? old('state') : Auth::user()->state }}" placeholder="State">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" name="city" value="{{ Auth::user()->city == '' ? old('city') : Auth::user()->city }}" id="inputCity">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" name="zip" value="{{ Auth::user()->zip == '' ? old('zip') : Auth::user()->zip }}" id="inputZip">
                </div>
            </div>
            <br>
            <button type="submit" class="btn edit-submit-cstmbtn">Update Profile</button>
        </form>
    </div>
@endsection

@push('scripts')
    
@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>toastr.error('{{ $error }}')</script>
@endforeach
@endif

@if (Session::has('user_updated'))
    <script>swal('User Profile','{{ Session::get('user_updated') }}','success')</script>
@endif

@if (Session::has('user_error'))
    <script>swal('User Profile','{{ Session::get('user_error') }}','success')</script>
@endif

@endpush