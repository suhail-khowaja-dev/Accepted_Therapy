@extends('layouts.master')
@section('content')

<!-- ==================================  Release oF Information FORM ============================= -->
<section class="forms">
    <div class="container form-intake form-reff">
        <div class="container form1">
            <fieldset class="border">
                <legend class="text-center text-capitalize">
                    Release of Information
                </legend>
                <div class="position-relative therapy-border d-flex justify-content-center flex-wrap pt-4">
                    <div class="therapy-border-img">
                        <img src="{{ asset('assets/images/logo2.svg') }}" alt="logo">
                    </div>
                </div>
                <!-- FORM -->
                <div class="container form-fileds mt-5">
                    <!-- Release Info  -->
                    <form action="{{ route('release_info_form_store') }}" method="post" id="release-info-form    s" class="">
                        @csrf
                        <div class="release-fields">
                            <div>
                                <p>
                                    This form is to be completed in the event that you wish to include other
                                    angecies or people previous therapists, medical providers, testing results,
                                    parent providing payment, or anyone else you would like for Accepted Therapy
                                    Sercies to have access to.
                                </p>
                            </div>
                            <div class="form-group mb-4 para-input d-flex flex-wrap">

                                <p class="d-flex flex-wrap align-items-center">
                                    I &nbsp;<span class="hide"></span>
                                    <input type="text" class="form-control txt" placeholder="Your Name"
                                       name="your_name" value="{{ old('your_name') }}">
                                    <span class="txt2">whose date of birth is</span>&nbsp;
                                    <input type="date" class="form-control txt" placeholder="Your Birthday"
                                    name="date" value="{{ old('date') }}">
                                    <span class="">authorize Accepted Therapy Services to disclose and/or obtain
                                        information from</span> &nbsp;
                                    <input type="text" class="form-control txt"
                                        placeholder="Person or Agency Name" name="person_or_agency_name" value="{{ old('person_or_agency_name') }}" />
                                </p>

                            </div>
                            <div class="mb-4">

                                <div class="row">
                                    <p>The following information (initial each item to be disclosed)</p>
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="11" name="release_of_info_checkboxes[]" {{ ( is_array(old('release_of_info_checkboxes')) && in_array(11, old('release_of_info_checkboxes')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault11">
                                            <label class="form-check-label" for="flexCheckDefault11">
                                                Psychotherapy notes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input {{ ( is_array(old('release_of_info_checkboxes')) && in_array(1, old('release_of_info_checkboxes')) ) ? 'clicked' : '' }}" type="checkbox" value="1" name="release_of_info_checkboxes[]" {{ ( is_array(old('release_of_info_checkboxes')) && in_array(1, old('release_of_info_checkboxes')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault1">
                                            <label class="form-check-label" for="flexCheckDefault1">
                                                Assessment
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="2" name="release_of_info_checkboxes[]" {{ ( is_array(old('release_of_info_checkboxes')) && in_array(2, old('release_of_info_checkboxes')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault2">
                                            <label class="form-check-label" for="flexCheckDefault2">
                                                Diagnosis
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="3" name="release_of_info_checkboxes[]" {{ ( is_array(old('release_of_info_checkboxes')) && in_array(3, old('release_of_info_checkboxes')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault3">
                                            <label class="form-check-label" for="flexCheckDefault3">
                                                Psychosocial Evaluation
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="4" name="release_of_info_checkboxes[]" {{ ( is_array(old('release_of_info_checkboxes')) && in_array(4, old('release_of_info_checkboxes')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault4">
                                            <label class="form-check-label" for="flexCheckDefault4">
                                                Treatment Plan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="5" name="release_of_info_checkboxes[]" {{ ( is_array(old('release_of_info_checkboxes')) && in_array(5, old('release_of_info_checkboxes')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault5">
                                            <label class="form-check-label" for="flexCheckDefault5">
                                                Current Treatment Updates
                                            </label>
                                        </div>


                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="6" name="release_of_info_checkboxes[]" {{ ( is_array(old('release_of_info_checkboxes')) && in_array(6, old('release_of_info_checkboxes')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault6">
                                            <label class="form-check-label" for="flexCheckDefault6">
                                                Presence/Participation in Treatment
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="7" name="release_of_info_checkboxes[]" {{ ( is_array(old('release_of_info_checkboxes')) && in_array(7, old('release_of_info_checkboxes')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault7">
                                            <label class="form-check-label" for="flexCheckDefault7">
                                                Progress in treatment
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="8" name="release_of_info_checkboxes[]" {{ ( is_array(old('release_of_info_checkboxes')) && in_array(8, old('release_of_info_checkboxes')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault8">
                                            <label class="form-check-label" for="flexCheckDefault8">
                                                Demographic information
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="9" name="release_of_info_checkboxes[]" {{ ( is_array(old('release_of_info_checkboxes')) && in_array(9, old('release_of_info_checkboxes')) ) ? 'checked ' : '' }}
                                                id="flexCheckDefault9">
                                            <label class="form-check-label" for="flexCheckDefault9">
                                                Recommendations
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                onchange="otherSym();" value="10" id="other-symp" name="release_of_info_checkboxes[]" {{ ( is_array(old('release_of_info_checkboxes')) && in_array(10, old('release_of_info_checkboxes')) ) ? 'checked ' : '' }}>
                                            <label class="form-check-label" for="other-symp">
                                                Other
                                            </label>
                                        </div>
                                        <div id="other-symptom">
                                            <input type="text" placeholder="Other Symptom" name="other_symtoms" value="{{ old('other_symtoms') }}"
                                                class="form-control py-2" id="">
                                        </div>

                                    </div>
                                    <div>
                                        <p> <i>Psychotherapy notes will not be released without discussion and
                                                approval from individual therapist.</i></p>
                                    </div>
                                </div>
                                <div class="form-group mb-4 para-input d-flex flex-wrap">

                                    <p class="">
                                        This information may be used or disclosed in connection with mental
                                        health treatment or payment. If the purpose is other than as specified
                                        above, please specify
                                        <input type="text" class="form-control txt" placeholder="Reason"
                                        name="reason" value="{{ old('reason') }}">
                                    </p>

                                </div>
                            </div>
                            <!-- Termination -->
                            <div class="terminate">
                                <div class="row">
                                    <h5>Termination</h5>
                                </div>
                                <div>
                                    <p class="label-p">
                                        Unless sooner revoked, this authorization expires 60 days from the
                                        termination of my therapy services I understand that I have the right to
                                        revoke this authorization, in writing, at any time by sending written
                                        notification my therapist at <a
                                            href="https://goo.gl/maps/TYRrety8Nsvwg3YbA" target="_blank"
                                            rel="noopener noreferrer">423 Weathersby Road Suite 240</a> or by
                                        email
                                        to <a
                                            href="mailto:acceptedtherapy@gmail.com">acceptedtherapy@gmail.com.</a>
                                        I further understand that revocation will
                                        not apply to actions taken by the requesting person/entity prior to the
                                        date they receive you written request to revoke authorization.
                                    </p>
                                </div>
                            </div>
                            <!-- Condition -->
                            <div class="cond">
                                <div class="row">
                                    <h5>Condition</h5>
                                </div>
                                <div>
                                    <p class="label-p">
                                        I further understand that Accepted Therapy Services will not condition
                                        my treatment on whether I give authorization for the requested
                                        disclosure.
                                    </p>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="">Signature box</label>
                                <div class="sign-main">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" name="signature" value="{{ old('signature') }}" class="form-control">

                                        </div>
                                        <div class="col-lg-6">
                                            <span id="signbox-date" class="d-flex justify-content-end"></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center from-btn mb-5">
                                <a href="javascript:void(0);" class="w-100">
                                    <button type="submit" class="btn" name="">
                                        Submit
                                    </button>
                                </a>
                            </div>
                        </div>

                    </form>
                </div>



            </fieldset>
        </div>
    </div>


</section>

@include('common.accepted_therapy_border')

@endsection

@push('scripst')


@push('scripts')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>
        toastr.error('{{ $error }}');
    </script>
@endforeach
@endif

@if (session()->has('release_info_form_success'))
    <script>
        toastr.success('{{ session()->get('release_info_form_success') }}');
    </script>
@endif

<script>
    $(document).ready(function(){

     

        $(".form-check-input").click(function(){
        var elem = $(this).attr("id");
        $(this).toggleClass("clicked")

        
        if(elem == 'flexCheckDefault11' && $(this).hasClass("clicked")){
            $("#flexCheckDefault1").attr('disabled',true)
            $("#flexCheckDefault2").attr('disabled',true)
            $("#flexCheckDefault3").attr('disabled',true)
            $("#flexCheckDefault4").attr('disabled',true)
            $("#flexCheckDefault5").attr('disabled',true)
            $("#flexCheckDefault6").attr('disabled',true)
            $("#flexCheckDefault7").attr('disabled',true)
            $("#flexCheckDefault8").attr('disabled',true)
            $("#flexCheckDefault9").attr('disabled',true)
            $("#other-symp").attr('disabled',true)
        }else{
            $("#flexCheckDefault1").attr('disabled',false)
            $("#flexCheckDefault2").attr('disabled',false)
            $("#flexCheckDefault3").attr('disabled',false)
            $("#flexCheckDefault4").attr('disabled',false)
            $("#flexCheckDefault5").attr('disabled',false)
            $("#flexCheckDefault6").attr('disabled',false)
            $("#flexCheckDefault7").attr('disabled',false)
            $("#flexCheckDefault8").attr('disabled',false)
            $("#flexCheckDefault9").attr('disabled',false)
            $("#other-symp").attr('disabled',false)
        }

        
        
        if(  (elem == 'flexCheckDefault1' || 
             elem == 'flexCheckDefault2' || 
             elem == 'flexCheckDefault3' || 
             elem == 'flexCheckDefault4' || 
             elem == 'flexCheckDefault5' || 
             elem == 'flexCheckDefault6' || 
             elem == 'flexCheckDefault7' || 
             elem == 'flexCheckDefault8' || 
             elem == 'flexCheckDefault9' || 
             elem == 'other-symp') && $(this).hasClass("clicked")){
                
            $("#flexCheckDefault11").attr('disabled',true)
        }

        if(!$("#flexCheckDefault1").hasClass("clicked") && 
            !$("#flexCheckDefault2").hasClass("clicked") && 
            !$("#flexCheckDefault3").hasClass("clicked") && 
            !$("#flexCheckDefault4").hasClass("clicked") && 
            !$("#flexCheckDefault5").hasClass("clicked") && 
            !$("#flexCheckDefault6").hasClass("clicked") && 
            !$("#flexCheckDefault7").hasClass("clicked") && 
            !$("#flexCheckDefault8").hasClass("clicked") && 
            !$("#flexCheckDefault9").hasClass("clicked") && 
            !$("#other-symp").hasClass("clicked") 
        ){
            
            $("#flexCheckDefault11").attr('disabled',false)
        }


        });
      
    });
</script>
@endpush