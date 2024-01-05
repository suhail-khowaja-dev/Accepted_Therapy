@extends('layouts.master')

@section('content')



<!-- ==================================  Referral FORM ============================= -->

<section class="forms">

    <div class="container form-intake form-reff">

        <div class="container form1">

            <fieldset class="border">

                <legend class="text-center text-capitalize">

                    Referral Form

                </legend>

                <div class="position-relative therapy-border d-flex justify-content-center flex-wrap pt-4">

                    <div class="therapy-border-img">

                        <img src="{{ asset('assets/images/logo2.svg') }}" alt="logo">

                    </div>

                </div>

                <!-- FORM -->

                <div class="container form-fileds mt-5">

                    <!-- Referral Data  -->

                    <form action="{{ route('referral_form_store') }}" method="POST" id="referral-from" enctype="multipart/form-data">

                        @csrf

                        <div class="content-1">

                            <div class="row">

                                <div class="col-lg-12 text-center text-1">

                                    <p>

                                        Thank you for choosing to refer your client to Accepted Therapy

                                        Services. To start the

                                        referral process, please complete this form and mail or fax it to

                                        Accepted Therapy

                                        Services. You can also submit this form at <a

                                            href="https://www.acceptedtherapy.com/" target="__blank"

                                            class="text-decoration-none">acceptedtherapy.com</a>

                                    </p>



                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="therapist2">

                                        <p class="my-4 text-center"> Therapist:</p>



                                        <div class="therapist-check mb-4 mt-3 text-center d-flex flex-wrap justify-content-center align-items-lg-center">

                                            {{-- <div class="form-check">

                                                <input class="form-check-input" type="checkbox" value=""

                                                    id="flexCheckDefault2">

                                                <label class="form-check-label" for="flexCheckDefault2">

                                                    Nikki Dear, LCSW

                                                </label>

                                            </div> --}}



                                            @if (count($therapists) > 0)

                                                @foreach ($therapists as $therapist)

                                                <div class="form-check">

                                                    <input class="form-check-input" name="therapist" {{ old("therapist") == $therapist->id ? 'checked' : '' }} value="{{ $therapist->id }}" type="radio"

                                                        id="flexCheckDefault{{ $therapist->id }}">

                                                    <label class="form-check-label" for="flexCheckDefault{{ $therapist->id }}">

                                                        {{ ucwords($therapist->first_name)." ".ucwords($therapist->last_name) }}, {{ $therapist->therapist_specialities[0]->speciality_title }}

                                                    </label>

                                                </div>

                                                @endforeach

                                            @endif

                                            <div class="form-check">

                                                <input class="form-check-input" name="therapist" {{ old("therapist") == 0 ? 'checked' : '' }} value="0" type="radio"

                                                    id="flexCheckDefault0">

                                                <label class="form-check-label" for="flexCheckDefault0">

                                                    No Preference

                                                </label>

                                            </div>

                                        </div>

                                    </div>



                                </div>

                            </div>

                            <div class="reff-fileds">

                                <div class="form-group mb-4">

                                    <label for="date">Date:</label>

                                    <input type="date" name="date" value="{{ old('date') }}" class="form-control py-3" id="date"/>

                                </div>

                                <div class="form-group mb-4">

                                    <label for="client-name">Client Name:</label>

                                    <input type="text" name="client_name" value="{{ old('client_name') }}" class="form-control py-3" id="name" value="" />

                                </div>

                                <div class="form-group mb-4">

                                    <label for="dob">Date of Birth:</label>

                                    <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control py-3" id="dob" />

                                </div>

                                <div class="form-group mb-4">

                                    <label for="phone">Phone:</label>

                                    <input type="text" name="cell_phone" value="{{ old('cell_phone') }}" class="form-control py-3" id="phone" value="" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" />

                                </div>

                                <div class="form-group mb-4">

                                    <label for="phone2">Other Phone:</label>

                                    <input type="text" name="cell_phone_other" value="{{ old('cell_phone_other') }}" class="form-control py-3" id="phone2" value="" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" />

                                </div>

                                <div class="form-group mb-4">

                                    <label for="email">Email:</label>

                                    <input type="email" name="referral_email" value="{{ old('referral_email') }}" class="form-control py-3" id="email" value="" />

                                </div>

                                <div class="form-group mb-4">

                                    <label for="address">Address:</label>

                                    <textarea class="form-control" name="address"  id="address" placeholder=""

                                        rows="3">{{ old('address') }}</textarea>

                                </div>

                                <div class="form-group mb-4">

                                    <label for="city">City/State/Zip:</label>

                                    <input type="text" name="city_state_zip" value="{{ old('city_state_zip') }}"  class="form-control py-3" id="city" value="" />

                                </div>

                                <div class="form-group mb-4">

                                    <label for="formFileLg" class="form-label">Insurance: </label>

                                    <input class="form-control form-control-lg" name="insurance_image" type="file" id="formFile"

                                        placeholder="Upload a copy of insurance card">

                                    <span class="d-flex justify-content-start">Attach copy of insurance

                                        card if available</span>

                                        

                                </div>

                                <div class="form-group mb-4">

                                    <label for="daignoses">Diagnoses:</label>

                                    <input type="text" name="diagnoses" value="{{ old('diagnoses') }}" class="form-control py-3" id="daignoses" value="" />

                                </div>

                                <div class="form-group mb-4">

                                    <label for="reason">Reason for Referral:

                                    </label>

                                    <textarea class="form-control" id="reason" placeholder=""

                                        rows="5" name="reason_for_refferal">{{ old('reason_for_refferal') }}</textarea>

                                </div>

                                <div class="form-group mb-4">

                                    <label for="ref-source">Referral Source:

                                    </label>

                                    <input type="text" name="refferral_source" value="{{ old('refferral_source') }}" class="form-control py-3" id="ref-source" value="" />

                                </div>

                                <div class="form-group mb-4">

                                    <label for="phone3">Phone Number:</label>

                                    <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control py-3" id="phone3" value="" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" />

                                </div>

                                <div class="form-group mb-4">

                                    <label for="fax">Fax Number:</label>

                                    <input type="number" name="fax_number" value="{{ old('fax_number') }}" class="form-control py-3" id="fax" value="" />

                                </div>

                                <div class="form-group mb-4">

                                    <label for="email2">Email:</label>

                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control py-3" id="email2" value="" />

                                </div>



                            </div>

                        </div>

                        <div class="text-center from-btn mb-5">

                            <button type="submit" class="btn" id="referral_form">

                                Submit

                            </button>

                        </div>

                    </form>

                </div>







            </fieldset>

        </div>

    </div>





</section>





@include('common.accepted_therapy_border')



@endsection



@push('scripts')

@if ($errors->any())

@foreach ($errors->all() as $error)

    <script>

        toastr.error('{{ $error }}');

    </script>

@endforeach

@endif





@if (session()->has('referral_store'))

    <script>

        toastr.success('{{ session()->get('referral_store') }}');

    </script>

@endif

@endpush