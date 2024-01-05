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

@if(Session::has('update_faq'))
    <div class="alert alert-success d-flex justify-content-between align-items-center">
        <p style="margin:0;">{{ Session::get('update_faq') }}</p>
        <button class="btn btn-primary"><a href="{{ route('faq_index') }}" style="color:white"><i class="fa fa-arrow-left"></i> Go Back</a></button>
    </div>
    <br>
@endif


<form action="{{ route('faq_update', ['id' => $faq->id]) }}" method="POST">
    @csrf



    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <label>FAQ Type</label>
                <select class="form-control" name="faq_type_id">
                    @foreach ($faq_type  as $faq_types )
                        <option value="{{ $faq_types->id }}" {{$faq_types->id == $faq->faq_type_id ? 'selected' : ''}}>{{ ucwords($faq_types->section_type) }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label>Question</label>
                <input type="text" name="question" class="form-control" value="{{$faq->question}}" placeholder="Enter Question">

            </div>

            <div class="form-group">
                <label>Answer</label>
                <textarea class="form-control" name="answer" rows="10" placeholder="Enter Answer">{{ $faq->answer }}</textarea>
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
