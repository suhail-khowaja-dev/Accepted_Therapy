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
        <h2>Change Password</h2>
        <br><br>

        <form action="{{ route('user_change_password', ['id' => Auth::id()]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputConfirmPassword4">Confirm Password</label>
                    <input type="password" name="confirm_password" value="{{ old('confirm_password') }}" class="form-control" id="inputConfirmPassword4" placeholder="Confirm Password">
                </div>
            </div>

            <br>
            <button type="submit" class="btn edit-submit-cstmbtn">Update Password</button>
        </form>
    </div>
@endsection

@push('scripts')
    
@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>toastr.error('{{ $error }}')</script>
@endforeach
@endif

@if (Session::has('password_updated'))
    <script>swal('Password','{{ Session::get('password_updated') }}','success')</script>
@endif

@if (Session::has('password_error'))
    <script>swal('Password','{{ Session::get('password_error') }}','success')</script>
@endif

@endpush