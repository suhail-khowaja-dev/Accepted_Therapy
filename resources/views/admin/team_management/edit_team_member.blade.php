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




<form action="{{ route('update_team_member', ['id'=>$team_member->id]) }}" method="POST"
    enctype="multipart/form-data">
    @csrf


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <div><img src="{{ url('uploads/team_member/'.$team_member->profile_image) }}" width="100px"></div> <br>
                <label>Profile Image</label>
                <input type="file" name="profile_image" width="100px" height="100px">
                {{-- <p style="color:red"> Image Size Recommended: 507px * 269px<br>
                    Allow Ext: png|jpeg|jpg
                </p> --}}
                <br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" value="{{ $team_member->first_name }}" placeholder="Enter First Name">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" value="{{ $team_member->last_name }}" placeholder="Enter Last Name">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control email" value="{{ $team_member->email }}" placeholder="Enter Therapist Email">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Location</label>
                <input type="text" name="location" class="form-control email" value="{{ $team_member->location }}" placeholder="Enter Therapist Location">
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-lg-6">
            <div class="form-group"><label>Work Title</label>
            <input type="text" name="work_title" class="form-control" placeholder="Work Title" value="{{ $team_member->work_title }}">
            <span style="color:red">
                @error('work_title')
                {{ $message }}
                @enderror
            </span>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Work Title's Abbreviation</label>
                <input type="text" name="abbreviation" class="form-control" placeholder="Enter Work Title's Abbreviation" value="{{ $team_member->shortcut_title }}">
                <span style="color:red">
                    @error('abbreviation')
                    {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
    </div> --}}


    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Specialities</label>

                <select class="js-example-basic-multiple form-control" name="specialities[]" multiple="multiple">
                    @if (count($specialities) > 0)
                    @foreach ($specialities as $speciality)
                        <option value="{{ $speciality->id }}"
                            @if (count($team_member->therapist_specialities) > 0)
                            @foreach ($team_member->therapist_specialities as $tp)
                                    {{ $speciality->speciality_title  == $tp->speciality_title ? 'selected' : '' }}
                            @endforeach
                            @endif
                            >{{ $speciality->speciality_title ?? '' }}</option>
                    @endforeach
                    @endif
                  </select>
            </div>
        </div>
    </div>


    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Location</label>
                <select class="form-control" name="location" aria-label="Default select example">
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}" {{ $location->id == $team_member->location ? 'selected' : '' }}>{{ $location->city ?? '' }}, {{ $location->state ?? '' }}, {{ $location->country ?? '' }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Description</label>
                <textarea class="ckeditor form-control" id="bericht" name="description" required rows="4" cols="50"
                    style="min-width: 100%">{{ $team_member->description }}</textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Biography</label>
                <textarea class="ckeditor form-control" id="bericht" name="bio" required>{{ $team_member->bio }}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Education</label>
                <textarea class="ckeditor form-control" id="bericht" name="education" required>{{ $team_member->education }}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Favourite Quote</label>
                <textarea class="form-control" name="quote">{{ $team_member->quote }}</textarea>
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


@if(Session::has('slug'))
<script>
    swal('Slug Error','{{ Session::get('slug') }}','error');
</script>
@endif
@endsection
