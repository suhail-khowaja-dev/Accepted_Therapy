@extends('layouts.master')
@section('content')

<section class="forms">
    <div class="container form-intake form-reff">
        <div class="container form1">
            <fieldset class="border">
                <legend class="text-center text-uppercase">
                    Credit/Debit Card Payment Authorization
                </legend>
                <div class="position-relative therapy-border d-flex justify-content-center flex-wrap pt-4">
                    <div class="therapy-border-img">
                        <img src="{{asset('assets/images/logo2.svg') }}" alt="logo">
                    </div>
                </div>
                <!-- FORM -->
                <div class="container form-fileds mt-5">
                    <!-- Payment Data  -->
                    <form action="" method="" id="payment-from" class="">
                        <div class="payments-fields">
                            <div class="form-group mb-4">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control py-3" id="date" value="2022-01-01" />
                            </div>
                            <div class="form-group mb-4">
                                <!-- <label for="client-name">Client Name:</label> -->
                                <input type="text" class="form-control py-3" id="name" placeholder="Name"
                                    value="" />
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    I understand that payment is due at the time of service, including treatment
                                    expenses that are not covered by insurance, such as missed appointments,
                                    late cancelations, deductibles, and co-payments. I will have the option with
                                    paying with check, cash, or credit card at the time of service.
                                </label>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    I recognize that for all credit or debit card transactions, Accepted Therapy
                                    Services charges a $2.00 transaction convenience fee. This fee will be
                                    applied to each credit card transactions that occurs after April 4, 2022.
                                </label>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="">
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
                                    placeholder="Name on Card" value="" required />
                            </div>
                            <div class="mb-4">
                                <select class="form-select py-3" id="card-type">
                                    <option selected disabled value="">Card Type
                                    </option>
                                    <option value="">American Express</option>
                                    <option value="">Discover</option>
                                    <option value="">Mastercard </option>
                                    <option value="">Visa </option>

                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control py-3" id="card-numb" class="card-digit"
                                    name="onlynumbers" placeholder="Last 4 Card Number" value="" pattern="\d*"
                                    maxlength="4" required />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control py-3" id="ccv-digit" class="card-digit"
                                    name="onlynumbers" placeholder="CCV" value="" pattern="\d*" maxlength="3"
                                    required />
                            </div>
                            <div class="form-group mb-4">
                                <label for="exp-date">Expiration Date:</label>
                                <input type="date" class="form-control py-3" id="exp-date" value="2022-01-01"
                                    required />
                            </div>
                            <div class="form-group mb-4">
                                <!-- <label for="bill-code">Billing Zip Code:</label> -->
                                <input type="number" class="form-control py-3" id="bill-code"
                                    placeholder="Billing Zip Code" required />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" class="form-control py-3" id=""
                                    placeholder="Email Address for Receipt" />
                            </div>
                            
                             <div class="form-group mb-4 para-input d-flex flex-wrap">
                               
                                 <p class="d-flex flex-wrap align-items-center"> 
                                     <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">&nbsp;I &nbsp;<span class="hide"></span> -->
                                    I &nbsp; <input type="text" class="form-control txt" placeholder="Your Name"
                                        value="" required>
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
                                            <input type="text" class="form-control" name="" id="">

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