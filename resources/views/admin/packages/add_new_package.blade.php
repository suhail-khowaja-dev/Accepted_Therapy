@extends('admin.layouts.master')
<style>
    .box1 {
        margin: 0 15px;
    }

    label {
        color: #8d9498 !important;
        font-family: gilroybold !important;
        font-size: 22px !important;
    }

    .thumbnailbox {
        height: 71px;
        width: 100px;
        border: 1px solid black;
        border-radius: 1px;
    }

    .newinput {
        padding: 1rem;
        font-family: gilroy;
        border-radius: 100px;
        outline: none;
        border: none;
        background-color: #F2F2F2;
        width: 100%;
    }

    .box {
        margin: 0 1rem;
    }

    .canceldiv {
        top: -11px;
        right: -13px;
    }

    .customclassicon {
        font-size: 27px !important;
        background-color: white !important;
        padding: 5px 10px 5px 10px !important;
        border-radius: 18px !important;
        cursor: pointer;
    }

    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .customcontainer {
        padding: .3rem 0 !important;
    }

    .modal-body {
        background-color: #0e101b2e;
    }

    /* Hide the browser's default radio button */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 40;
        height: 16px;
        width: 16px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked~.checkmark {
        background-color: #8d9498;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {
        top: 5px;
        left: 5px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: white;
    }
</style>
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success d-flex justify-content-between align-items-center">
            <p style="margin:0;">{{ Session::get('success') }}</p>
            <button class="btn btn-primary"><a href="{{ route('team_management') }}" style="color:white"><i
                        class="fa fa-arrow-left"></i> Go Back</a></button>
        </div>
        <br>
    @endif




    <form action="{{ route('store_package') }}" method="POST">
        @csrf




        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Package Title</label>
                    <input type="text" name="package_title" class="form-control" id="package_title"
                        value="{{ old('package_title') }}" placeholder="Enter Package Title">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Package Price</label>
                    <input type="text" name="package_price" class="form-control package_price"
                        value="{{ old('package_price') }}" placeholder="Enter Package Price">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Package Listing 1</label>
                    <input type="text" name="package_listing[]" class="form-control" id="package_listing"
                        placeholder="Package List 1">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Package Listing 2</label>
                    <input type="text" name="package_listing[]" class="form-control" id="package_listing"
                        placeholder="Package List 2">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Package Listing 3</label>
                    <input type="text" name="package_listing[]" class="form-control" id="package_listing"
                        placeholder="Package List 3">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Package Listing 4</label>
                    <input type="text" name="package_listing[]" class="form-control" id="package_listing"
                        placeholder="Package List 4">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Package Listing 5</label>
                    <input type="text" name="package_listing[]" class="form-control" id="package_listing"
                        placeholder="Package List 5">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Package Listing 6</label>
                    <input type="text" name="package_listing[]" class="form-control" id="package_listing"
                        placeholder="Package List 6">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Package Listing 7</label>
                    <input type="text" name="package_listing[]" class="form-control" id="package_listing"
                        placeholder="Package List 7">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Package Listing 8</label>
                    <input type="text" name="package_listing[]" class="form-control" id="package_listing"
                        placeholder="Package List 8">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

    </form>
    </div>
    </div>
@endsection


@push('scripts')
    @if (Session::has('package_added'))
        <script>
            toastr.success('{{ Session::get('package_added') }}')
        </script>
    @endif


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}')
            </script>
        @endforeach
    @endif

@endpush
