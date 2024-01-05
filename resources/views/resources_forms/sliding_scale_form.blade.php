@extends('layouts.master')
@section('content')

<!-- ==================================   Sliding Scale Fee Application FORM ============================= -->
<section class="forms">
    <div class="container form-intake form-reff">
        <div class="container form1">
            <fieldset class="border">
                <legend class="text-center text-capitalize">
                    Sliding Scale Fee Application
                </legend>
                <div class="position-relative therapy-border d-flex justify-content-center flex-wrap pt-4">
                    <div class="therapy-border-img">
                        <img src="{{ asset('assets/images/logo2.svg') }}" alt="logo">
                    </div>
                </div>
                <!-- FORM -->
                <div class="container form-fileds mt-5">
                    <!-- Payment Data  -->
                    <form action="{{ route('sliding_scale_store') }}" method="post" id="sliding-scale-forms" class="">
                        @csrf
                        <div class="payments-fields">
                            <div class="form-group mb-4">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control py-3" id="date" name="date" value="{{ old('date') }}"
                                     />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control py-3" id="name" placeholder="Name"
                                    name="name" value="{{ old('name') }}" />
                            </div>
                            <div>
                                <p>
                                    Sliding scale rate is based on family size and annual income. This form will
                                    be help me to figure out which level of the sliding scale you qualify for.
                                    This application will be reevaluated every six months or in the event of
                                    financial change in the household. The sliding scale rate is not applicable
                                    to anyone with insurance coverage that is in network with Accepted Therapy
                                    Services.
                                </p>
                            </div>
                            <!-- HouseHold -->
                            <div class="household py-4">
                                <div class="row">
                                    <h5>Household Members</h5>
                                    <p>
                                        Please list all dependent members of your household and their date of
                                        birth. If you have a dependent who is over the age of 18, additional
                                        information may be requested.
                                    </p>
                                </div>
                                <div class="form-group mb-4 forms-table">
                                    <table class="table table-striped table-hover table-responsive"
                                        id="tab_logic">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th class="text-center">
                                                    Name
                                                </th>
                                                <th class="text-center">
                                                    Relationship to you
                                                </th>
                                                <th class="text-center">
                                                    Date of Birth
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id='addr0'>
                                                <td>1</td>
                                                <td class="d-flex justify-content-center">
                                                    <input type="text" name='names[]' placeholder=''
                                                        class="form-control" />
                                                </td>
                                                <td>
                                                    <input type="text" name='relationship[]' placeholder='Self'
                                                        class="form-control" />
                                                </td>
                                                <td class="d-flex justify-content-center" >
                                                    <input type="date" name='dob[]' placeholder=''
                                                        class="form-control" />
                                                </td>
                                            </tr>

                                            <tr id='addr1'></tr>
                                        </tbody>
                                    </table>
                                    <div class="form-btn d-flex justify-content-between">
                                        <div class="add-data">
                                            <button id="add_row" class="btn">Add Member</button>
                                        </div>
                                        <div class="remove-data">
                                            <button id='delete_row' class="btn ">Delete
                                                Member</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Household Expenses -->
                            <div class="household-expen">
                                <div class="row">
                                    <h5>Household Expenses</h5>
                                    <p>
                                        This is a list of all of your monthly household expenses. I will take
                                        these expenses into consideration when determining your sliding scale
                                        fee rate.
                                    </p>
                                </div>
                                <div class="form-group mb-4">
                                    <table class="table table-striped table-hover table-responsive"
                                        id="table2_logic">

                                        <tbody>
                                            <tr id=''>

                                                <td class="text-center">

                                                    <label for="">Rent/Mortgage</label>
                                                    <input type="number" placeholder='$' class="form-control"
                                                        name="rent_mortgage" value="1" hidden/>
                                                </td>
                                                <td>
                                                    <input type="number" placeholder='$' class="form-control"
                                                        name="rent_mortgage_amount"  value="{{ old('rent_mortgage_amount') }}"/>
                                                </td>

                                            </tr>
                                            <tr id=''>

                                                <td class="text-center">

                                                    <label for="">Electricity</label>
                                                    <input type="number" placeholder='$' class="form-control"
                                                        name="electricity" value="2"  hidden/>
                                                </td>
                                                <td>
                                                    <input type="number" placeholder='$' class="form-control"
                                                          name="electricity_amount" value="{{ old('electricity_amount') }}"/>
                                                </td>

                                            </tr>
                                            <tr id=''>

                                                <td class="text-center">

                                                    <label for="">Water/Sewer/Gas</label>
                                                    <input type="number" placeholder='$' class="form-control"
                                                        name="water_sewer_gas" value="3"  hidden/>
                                                </td>
                                                <td>
                                                    <input type="number" placeholder='$' class="form-control"
                                                         name="water_sewer_gas_amount" value="{{ old('water_sewer_gas_amount') != '' ? old('water_sewer_gas_amount') : ' ' }}" />
                                                </td>

                                            </tr>
                                            <tr id=''>

                                                <td class="text-center">

                                                    <label for="">Car Payment(s)</label>
                                                    <input type="number" placeholder='$' class="form-control"
                                                        name="car_payments" value="4"  hidden/>
                                                </td>
                                                <td>
                                                    <input type="number" placeholder='$' class="form-control"
                                                        name="car_payments_amount" value="{{ old('car_payments_amount') }}"/>
                                                </td>

                                            </tr>
                                            <tr id=''>

                                                <td class="text-center">

                                                    <label for="">Phone</label>
                                                    <input type="number" placeholder='$' class="form-control"
                                                        name="phone" value="5"  hidden/>
                                                </td>
                                                <td>
                                                    <input type="number" placeholder='$' class="form-control"
                                                        name="phone_amount" value="{{ old('phone_amount') }}"  />
                                                </td>

                                            </tr>
                                            <tr id=''>

                                                <td class="text-center">

                                                    <label for="">Insurances (car, home, renter)</label>
                                                    <input type="number" placeholder='$' class="form-control"
                                                        name="insurance_car_home_renter" value="6"  hidden/>
                                                </td>
                                                <td>
                                                    <input type="number" placeholder='$' class="form-control"
                                                    name="insurance_car_home_renter_amount" value="{{ old('insurance_car_home_renter_amount') }}"  />
                                                </td>

                                            </tr>
                                            <tr id=''>

                                                <td class="text-center">
                                                    <input type="text" placeholder='Other (Explain)'
                                                        class="form-control text-center" name="other_explain" value="{{ old('other_explain') }}"
                                                          />
                                                </td>
                                                <td>
                                                    <input type="number" placeholder='$' class="form-control"
                                                    name="other_explain_amount" value="{{ old('other_explain_amount') }}"   />
                                                </td>

                                            </tr>
                                            <tr id='addrow1'></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Household Income -->
                            <div class="household-income py-4">
                                <div class="row">
                                    <h5>Household Income</h5>
                                    <p>
                                        Total all sources of income for each box and place the total amount in
                                        the second column. Then denote whether the income is received monthly or
                                        annually. </p>
                                </div>
                                <div class="form-group mb-4 d-flex forms-table">
                                    <table class="table table-striped table-hover" id="tab3_logic">
                                        <thead>
                                            <tr>
                                                <!-- <th class="text-center">
                                                    #
                                                </th> -->
                                                <th class="text-center">
                                                    Source of Income
                                                </th>
                                                <th class="text-center">
                                                    Amount </th>
                                                <th class="text-center">
                                                    Frequency </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id='' class="text-center">
                                                <!-- <td>1</td> -->
                                                <td>
                                                    <label for="">Wages, salaries, or tips</label>
                                                    <input type="number" placeholder='$' class="form-control" 
                                                    name='number' value="1" hidden/>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="number" name='amount_1' value="{{ old('amount_1') }}" placeholder='$'
                                                            min="0" class="form-control" />
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="1" name="frequency_1[]" type="checkbox" {{ ( is_array(old('frequency_1')) && in_array(1, old('frequency_1')) ) ? 'checked ' : '' }}
                                                                 id="flexCheckDefault3">
                                                            <label for="">Montlhy</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="2" name="frequency_1[]" type="checkbox" {{ ( is_array(old('frequency_1')) && in_array(2, old('frequency_1')) ) ? 'checked ' : '' }}
                                                                 id="flexCheckDefault3">
                                                            <label for="">Annually</label>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr id='' class="">
                                                <!-- <td>1</td> -->
                                                <td>
                                                    <label for="">Unemployment
                                                        Worker’s comp.
                                                        Social Security Disability
                                                        Public assistance
                                                        Survivor benefits Pension or retirement
                                                    </label>
                                                    <input type="number" placeholder='$' class="form-control" 
                                                    name='unemployment_workers' value="2" hidden/>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="number" placeholder='$'
                                                        name='amount_2' value="{{ old('amount_2') }}" class="form-control" />
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="1" name="frequency_2[]" type="checkbox" {{ ( is_array(old('frequency_2')) && in_array(1, old('frequency_2')) ) ? 'checked ' : '' }}
                                                                 id="flexCheckDefault3">
                                                            <label for="">Montlhy</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="2" name="frequency_2[]" type="checkbox" {{ ( is_array(old('frequency_2')) && in_array(1, old('frequency_2')) ) ? 'checked ' : '' }}
                                                                 id="flexCheckDefault3">
                                                            <label for="">Annually</label>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr id='' class="">
                                                <!-- <td>1</td> -->
                                                <td>
                                                    <label for="">
                                                        Child Support
                                                        Rent
                                                        Royalties
                                                        Alimony

                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="number"  placeholder='$'
                                                        name='amount_3' value="{{ old('amount_3') }}" class="form-control" />
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="1" name="frequency_3[]" type="checkbox" {{ ( is_array(old('frequency_3')) && in_array(1, old('frequency_3')) ) ? 'checked ' : '' }}
                                                                 id="flexCheckDefault3">
                                                            <label for="">Montlhy</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="2" name="frequency_3[]" type="checkbox" {{ ( is_array(old('frequency_3')) && in_array(1, old('frequency_3')) ) ? 'checked ' : '' }}
                                                                 id="flexCheckDefault3">
                                                            <label for="">Annually</label>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr id='' class="">
                                                <!-- <td>1</td> -->
                                                <td class="text-center">
                                                    <input type="text" placeholder='Any other income sources'
                                                        class="form-control" name="other[]" 
                                                         />
                                                </td>
                                                <td>
                                                    <input type="number" placeholder='$' class="form-control"
                                                    name='amount_4' value="{{ old('amount_4') }}"  min="0" />
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="1" name="frequency_4[]" type="checkbox" {{ ( is_array(old('frequency_4')) && in_array(1, old('frequency_4')) ) ? 'checked ' : '' }}
                                                                 id="flexCheckDefault3">
                                                            <label for="">Montlhy</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="2" name="frequency_4[]" type="checkbox" {{ ( is_array(old('frequency_4')) && in_array(1, old('frequency_4')) ) ? 'checked ' : '' }}
                                                                 id="flexCheckDefault3">
                                                            <label for="">Annually</label>
                                                        </div>
                                                    </div>

                                                </td>

                                            </tr>


                                            <tr id=''></tr>
                                        </tbody>
                                        <caption class="text-center">(Please be available to provide supporting
                                            documentation of your income upon request.)</caption>
                                    </table>

                                </div>
                            </div>
                            <!-- <div class="form-group mb-4 para-input d-flex flex-wrap">

                                <p class="d-flex flex-wrap align-items-center">

                                    <span class="txt2">I Your Name understand that I am being considered for a
                                        sliding scale
                                        fee at Accepted Therapy Services. I also understand that I may not meet
                                        criteria for a sliding scale. I further understand that that if my
                                        financial situation changes, I am expected to notify Accepted Therapy
                                        Services prior to my next session so that my sliding scale rate can be
                                        reassessed for need. </span>
                                </p>

                            </div> -->
                            <div class="form-group mb-4 para-input d-flex flex-wrap">

                                <p class="d-flex flex-wrap align-items-center">
                                    I &nbsp;<span class="hide"></span>
                                    <input type="text" class="form-control txt" placeholder="Your Name" name="your_name" value="{{ old('your_name') }}">
                                    <span class="txt2">understand that I am being considered for a sliding scale
                                        fee at Accepted Therapy Services. </span> <span> I also understand that
                                        I may not meet
                                        criteria for a sliding scale. I further understand that that if my
                                        financial situation changes, I am expected to notify Accepted Therapy
                                        Services prior to my next session so that my sliding scale rate can be
                                        reassessed for need. </span>
                                </p>

                            </div>

                            <div class="form-group mb-4">
                                <label for="">Signature box</label>
                                <div class="sign-main">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="signature" value="{{ old('signature') }}">

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

@push('scripts')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>
        toastr.error('{{ $error }}');
    </script>
@endforeach
@endif

@if (session()->has('sliding_scale_form_success'))
    <script>
        toastr.success('{{ session()->get('sliding_scale_form_success') }}');
    </script>
@endif

@endpush