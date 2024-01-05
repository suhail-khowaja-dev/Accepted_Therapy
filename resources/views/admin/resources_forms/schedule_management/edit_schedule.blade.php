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


@if(Session::has('schedule_created'))
    <div class="alert alert-success d-flex justify-content-between align-items-center">
        <p style="margin:0;">{{ Session::get('schedule_created') }}</p>
        <button class="btn btn-primary"><a href="{{ route('schedule.index') }}" style="color:white"><i class="fa fa-arrow-left"></i> Go Back</a></button>
    </div>
    <br>
@endif




<form action="{{ route('schedule_update',['id' => $schedule->id]) }}" method="POST"
    enctype="multipart/form-data">
    @csrf



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="schedule_name" value="{{ $schedule->schedule_name }}" class="form-control" id="schedule_name" placeholder="Enter Name" readonly>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="schedule_email" value="{{ $schedule->schedule_email }}" class="form-control" id="schedule_email" placeholder="Enter Email" readonly>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="schedule_phone" value="{{ $schedule->schedule_phone }}" class="form-control" placeholder="Enter Phone Number"
                 onkeydown="javascript:backspacerDOWN(this,event);"
                onkeyup="javascript:backspacerUP(this,event);" readonly>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Insurance</label>
                <input type="text" name="schedule_insurance" value="{{ $schedule->schedule_insurance }}" class="form-control" id="schedule_insurance" placeholder="Enter Insurance" readonly>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Location</label>
                <input type="text" name="location" value="{{ $schedule->location ?? 'N/A' }}" class="form-control" placeholder="Location"
                 onkeydown="javascript:backspacerDOWN(this,event);"
                onkeyup="javascript:backspacerUP(this,event);" readonly>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Preferred Therapist</label>

                {{-- <select name="team_management_id" class="form-control">
                    @if (count($therapists))
                        @foreach ($therapists as $therapist)
                        <option value="{{ $therapist->id }}" {{ $schedule->team_management_id == $therapist->id ? 'selected' : '' }}>{{ ucwords($therapist->first_name)." ".ucwords($therapist->last_name) }}</option>
                        @endforeach
                    @endif
                  </select> --}}

                    <input type="text" name="team_management_id" value="@if ($schedule->team_management_id == 0)No Preference @else {{ ucwords($schedule->therapist->first_name)." ".ucwords($schedule->therapist->last_name) }} @endif" class="form-control" id="team_management_id" placeholder="Preferred Therapist" readonly>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="5" name="schedule_message" placeholder="Message..." readonly>{{ $schedule->schedule_message }}</textarea>
                </div>
            </div>
        </div>
    </div>


{{--
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div> --}}

</form>
</div>
</div>





@endsection

