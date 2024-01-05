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
        <h2 class="top-tabt-heading">Welcome {{ Auth::user()->name }} to Agency Dashboard</h2>
        <br><br>

        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control"
                        id="inputAddress" placeholder="Name" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control"
                        id="inputEmail4" placeholder="Email" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}"
                    id="inputAddress" placeholder="1234 Main St" readonly>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputCountry">Country</label>
                    <input type="text" class="form-control" name="country" value="{{ Auth::user()->country }}"
                        placeholder="Country" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" name="state" value="{{ Auth::user()->state }}"
                        placeholder="State" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" name="city" value="{{ Auth::user()->city }}" id="inputCity"
                        readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" name="zip" value="{{ Auth::user()->zip }}" id="inputZip"
                        readonly>
                </div>
            </div>
            <br>

            <div class="d-flex justify-content-end">
                <a href="{{ route('user_profile') }}" class="btn edit-submit-cstmbtn">Edit Profile</a>
            </div>
        </form>
    </div>
@endsection

@push('scripts')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}')
            </script>
        @endforeach
    @endif

    @if (Session::has('user_updated'))
        <script>
            swal('User Profile', '{{ Session::get('user_updated') }}', 'success')
        </script>
    @endif

    @if (Session::has('user_error'))
        <script>
            swal('User Profile', '{{ Session::get('user_error') }}', 'success')
        </script>
    @endif

@endpush
