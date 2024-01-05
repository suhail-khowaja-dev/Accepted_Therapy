@extends('layouts.master')

@section('content')



<!-- ==================================  Credit/Debit Card Payment Authorization FORM ============================= -->

<section class="forms">

    <div class="container form-intake form-reff">

        <div class="container form1">

            <fieldset class="border">

                <legend class="text-center text-capitalize">

                    Credit/Debit Card Payment Authorization

                </legend>

                <div class="position-relative therapy-border d-flex justify-content-center flex-wrap pt-4">

                    <div class="therapy-border-img">

                        <img src="{{ asset('assets/images/logo2.svg') }}" alt="logo">

                    </div>

                </div>

                <!-- FORM -->

                <div class="container form-fileds mt-5">

                    <!-- Payment Data  -->

                    <form action="{{ route('credit_card_form_store') }}" method="post" id="payment-from">

                        @csrf

                        <div class="payments-fields">

                            <div class="form-group mb-4">

                                <label for="date">Date:</label>

                                <input type="date" name="date" class="form-control py-3" id="date" value="{{ old('date') }}" />

                            </div>

                            <div class="form-group mb-4">

                                <!-- <label for="client-name">Client Name:</label> -->

                                <input type="text" class="form-control py-3" id="name" placeholder="Name"

                                    name="name" value="{{ old('name') }}" />

                            </div>

                            <div class="form-check mb-4">

                                <input class="form-check-input" type="checkbox" name="credit_card_checkbox_details[]" value="1" {{ ( is_array(old('credit_card_checkbox_details')) && in_array(1, old('credit_card_checkbox_details')) ) ? 'checked ' : '' }}>

                                

                                <label class="form-check-label" for="">

                                    I understand that payment is due at the time of service, including treatment

                                    expenses that are not covered by insurance, such as missed appointments,

                                    late cancelations, deductibles, and co-payments. I will have the option with

                                    paying with check, cash, or credit card at the time of service.

                                </label>

                            </div>

                            <div class="form-check mb-4">

                                <input class="form-check-input" type="checkbox" name="credit_card_checkbox_details[]" value="2" {{ ( is_array(old('credit_card_checkbox_details')) && in_array(2, old('credit_card_checkbox_details')) ) ? 'checked ' : '' }}>

                                <label class="form-check-label" for="">

                                    I recognize that for all credit or debit card transactions, Accepted Therapy

                                    Services charges a $2.00 transaction convenience fee. This fee will be

                                    applied to each credit card transactions that occurs after April 4, 2022.

                                </label>

                            </div>

                            <div class="form-check mb-4">

                                <input class="form-check-input" type="checkbox" name="credit_card_checkbox_details[]" value="3" {{ ( is_array(old('credit_card_checkbox_details')) && in_array(3, old('credit_card_checkbox_details')) ) ? 'checked ' : '' }}>

                                <label class="form-check-label" for="">

                                    If I do not cancel at least 24 hours before my appointment or I do not show

                                    up to my appointment, I recognize that Accepted Therapy Services will charge

                                    my card a late cancel or no-show fee of $75. If there are unforeseen

                                    circumstance, I will contact my therapist and inform them and I recognize

                                    that the late fee will be at their discretion in the event of these

                                    circumstances.

                                </label>

                            </div>

                            <div class="form-group mb-4">

                                <!-- <label for="client-name">Name on Card:</label> -->

                                <input type="text" class="form-control py-3" id="card-name"

                                    placeholder="Name on Card" name="name_on_card" value="{{ old('name_on_card') }}"  />

                            </div>

                            <div class="mb-4">

                                <select class="form-select py-3" name="card_type" id="card-type">

                                    <option disabled selected value="">Card Type</option>

                                    <option value="1" {{ old('card_type') == '1' ? 'selected' : '' }}>American Express</option>

                                    <option value="2" {{ old('card_type') == '2' ? 'selected' : '' }}>Discover</option>

                                    <option value="3" {{ old('card_type') == '3 ' ? 'selected' : '' }}>Mastercard </option>

                                    <option value="4" {{ old('card_type') == '4' ? 'selected' : '' }}>Visa</option>

                                </select>

                            </div>

                            <div class="form-group mb-4">

                                <input type="number" class="form-control py-3" id="card-numb" class="card-digit"

                                    name="last_four_card_no" placeholder="Last 4 Card Number" value="{{ old('last_four_card_no') }}"

                                    maxlength="4" pattern="\d{4}"/>

                            </div>

                            <div class="form-group mb-4">

                                <input type="number" class="form-control py-3" id="ccv-digit" class="card-digit"

                                value="{{ old('card_ccv') }}" name="card_ccv" placeholder="CCV"  pattern="\d*" maxlength="3"

                                     />

                            </div>

                            <div class="form-group mb-4">

                                <label for="exp-date">Expiration Date:</label>

                                <input type="month" class="form-control py-3 exp_date" id="exp-date" name="expiration_date" value="{{ old('expiration_date') }}"

                                     />

                            </div>

                            <div class="form-group mb-4">

                                <!-- <label for="bill-code">Billing Zip Code:</label> -->

                                <input type="number" class="form-control py-3" id="bill-code"

                                    placeholder="Billing Zip Code" name="billing_zip" value="{{ old('billing_zip') }}"  />

                            </div>

                            <div class="form-group mb-4">

                                <input type="email" class="form-control py-3" 

                                    placeholder="Email Address for Receipt" name="receipt_email" value="{{ old('receipt_email') }}"/>

                            </div>

                            <!-- <div class="form-group mb-4 para-input d-flex flex-wrap">



                                <p class="d-flex flex-wrap align-items-center">



                                    <span class="txt2">I Your Name verify that my credit card information,

                                        provided

                                        above, is accurate to the

                                        best of my knowledge. If this information is incorrect or fraudulent or

                                        if

                                        my payment is declined, I understand that I am responsible for the

                                        entire

                                        amount owed and any interest or additional costs incurred if denied. I

                                        also

                                        understand by signing and initialing I recognize that if my payment is

                                        not

                                        received Accepted Therapy Services reserves the right to use an attorney

                                        or

                                        collection agency to secure payment.

                                    </span>

                                </p>



                            </div> -->

                             <div class="form-group mb-4 para-input d-flex flex-wrap">

                               

                                 <p class="d-flex flex-wrap align-items-center"> 

                                     <!-- <input class="form-check-input" type="checkbox"  id="flexCheckDefault3">&nbsp;I &nbsp;<span class="hide"></span> -->

                                    I &nbsp; <input type="text" class="form-control txt" placeholder="Your Name"

                                       name="your_name" value="{{ old('your_name') }}" >

                                      <span class="txt2">verify that my credit card information, provided above, is accurate to the best of my</span> 

                                      <span>

                                        knowledge. If this information is incorrect or fraudulent or if

                                        my payment is declined, I understand that I am responsible for the entire

                                        amount owed and any interest or additional costs incurred if denied. I also

                                        understand by signing and initialing I recognize that if my payment is not

                                        received Accepted Therapy Services reserves the right to use an attorney or

                                        collection agency to secure payment.

                                      </span>  

                                </p>



                            </div>



                            <div class="form-group mb-4">

                                <label for="">Signature box</label>

                                <div class="sign-main">

                                    <div class="row">

                                        <div class="col-lg-6">

                                            <input type="text" class="form-control" name="signature" value="{{ old('signature') }}" >



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



@if (session()->has('credit_card_form_success'))

    <script>

        toastr.success('{{ session()->get('credit_card_form_success') }}');

    </script>

@endif



<script>

    



    HTMLElement.prototype.limitDigits = function (max) {

    this.addEventListener('input', () => {

        if (this.value.length > max) {

            this.value = Math.floor(this.value/10)

        }

    })

} 



    const Input = document.getElementById('ccv-digit');



    Input.limitDigits(4);

</script>

@endpush