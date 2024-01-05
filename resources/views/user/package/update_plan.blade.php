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



        .cstm-close-btn {

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            padding: 8px !important;

            border-radius: 6px;

        }

        .cstm-close-btn i{

            font-size: 20px;

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



        .display_none {

            display: none;

        }



        .success_status {

            background-color: #6ed6d3;

        }



        .success_expire {

            background-color: rgb(236, 180, 106);

        }



        .badge_regenerate {

            cursor: pointer;

            background-color: #6ed688;

        }



        .badge_delete {

            cursor: pointer;

            background-color: #d66e6e;

        }



        /* ================================== SIGNIN FORM ============================= -->*/

        .siginin-main {

            /* background-color: #FFFFFF; */

            min-height: 593px;

            /* margin-top: 101px; */

        }



        .siginin-main h5 {

            z-index: 1;

        }



        .signin-wrap {

            background: #F2F2F2;

            border-radius: 50px;

            min-height: 600px;

            overflow: hidden;

        }



        .corner-img1 {

            width: 400px;

            right: -158px;

            top: -36px;

        }



        .corner-img1 img {

            width: 100%;

            height: 100%;

            object-fit: cover;

        }



        .corner-img2 {

            width: 400px;

            left: -81px;

            top: 380px;

        }



        .corner-img2 img {

            width: 100%;

            height: 100%;

            object-fit: cover;

        }



        .signin-wrap .form4 {

            width: 85%;

            padding-top: 100px;

        }



        .signin-wrap .form4 input {

            background: #E6E6E6;

            padding: 10px;

            border-radius: 11px;

            border: none;

        }



        .signin-wrap .form4 input::placeholder {

            color: #1A1A1A;

            font-family: "Solway-Reg";

            padding-left: 18px;

            font-weight: 600;

        }



        .signin-wrap .form4 input:focus {

            outline: none;

            box-shadow: none;

        }



        .signin-wrap .form4 a {

            color: #1A1A1A;

            font-family: "Solway-Reg";

            padding-left: 18px;

            font-weight: 600;

            text-decoration: none;

        }





        .modal-dialog {

            max-width: 1037px !important;

            height: auto !important;

            margin: auto !important;

        }



        .signin-wrap .form4 input {

            background: #E6E6E6 !important;

            padding: 10px;

            border-radius: 11px;

            border: none;

        }



        .close-button {

            right: 42px;

        }



        .btn-close {

            box-sizing: content-box;

            width: 1em;

            height: 1em;

            padding: 0.25em 0.25em;

            color: #000;

            background: transparent url(https://www.freeiconspng.com/thumbs/cross-png/cross-png-28.png) border: 0;

            border-radius: 0.25rem;

            opacity: .5;

            position: absolute;

            right: 0;

            top: 10px;

            background-color: beige !important;

            z-index: 213;

        }

        .link_copy_td{

            display: flex;

            min-width: 650px;

        }

        .link_copy_input{

            background: transparent;

            border: none;

            width: 100%;

        }

        .link_copy_input:focus{

            outline:none;

        }

        .link_copy_input::selection{

            outline:none;

        }

        .link_copy_btn{

            border:none;

        }

        .copied_span{

            display: none;

        }

        .copied_span_style{

            background: #c8a180;

            padding: 2px;

            color: #fff;

            border-radius: 2px;     

        }

        .d-none{

            display: none;

        }

        .badge_logo_clr{

            background: #c8a180;

            padding: 7px;

        }

        .link_pass_copy_input {

            border: none;

            width: 140px;

            background-color: transparent

        }

        .link_pass_copy_input:focus{

            outline:none;

        }

        .link_pass_copy_input::selection{

            outline:none;

        }

        /* .link_copy_btn{

            border:none;

        } */

        .lcs_none{

            display: none;

        }





        /* ====================== PAYMENT PAGE ========================= */

.payment-wrapper{

    background-image: url(../../assets/images/bg1.png);

    min-height: 600px;

    width: 100%;

    background-size: cover;

    background-position: center;

    margin: 0 auto;

}

.payment-wrapper .card{

    background-color: transparent;

    border: 0px;

}

.payment-wrapper .card-title {

    color: #2D6D95;

    font-family: "JA-Hand-Reg";

    font-size: 4rem;

}

.payment-wrapper label {

    font-family: "Raleway-Roman-Reg";

    font-size: 1.2rem;

    font-weight: 600;

}

.payment-wrapper label.cvv:hover{

    cursor: pointer;

}



.payment-wrapper button {

    background-color: #2D6D95;

    font-family: "Solway-Bold";

    color: #FFFFFF;

    border-radius: 13px;

    padding: 6px 38px;

    font-size: 20px;

}

.payment-wrapper input:focus, .payment-wrapper select:focus{

    outline: none;

    box-shadow: none;

}

.payment-wrapper .headingTop{

    font-family: "Raleway-Roman-Reg";

    font-weight: 600;

    font-size: 1.5rem;

}



.payment-wrapper .paymentMethod{

    width: 76px;

    height: 54px;

}



.payment-wrapper .paymentMethod.active {

	outline: none !important;

}



.payment-wrapper .paymentMethod.active .method {

	border-color: #4cd264;

	outline: none !important;

	box-shadow: 0px 3px 22px 0px #7b7b7b;



}



/* .payment-wrapper .paymentMethod .method {

	position: absolute;

	right: 3px;

	top: 3px;

	bottom: 3px;

	left: 3px;

	background-size: contain;

	background-position: center;

	background-repeat: no-repeat;

	border: 2px solid transparent;

	transition: all 0.5s;

} */



.payment-wrapper .paymentMethod .method.visa {

	background-image: url("data:image/png;base64,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");

    width: 100%;

    height: 100%;

    background-size: cover;

    background-position: center;

    





}



.payment-wrapper .paymentMethod .method.master-card {

	background-image: url("data:image/png;base64,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");

    width: 100%;

    height: 100%;

    background-size: cover;

    background-position: center;





}



.payment-wrapper .paymentMethod .method.amex {

	background-image: url("http://www.paymentscardsandmobile.com/wp-content/uploads/2015/08/Amex-icon.jpg");

    width: 100%;

    height: 100%;

    background-size: cover;

    background-position: center;





}



/* .payment-wrapper .paymentMethod .method.vishwa {

	background-image: url("http://i.imgur.com/VkiM7PL.jpg");

    width: 100%;

    height: 100%;

    background-size: cover;

    background-position: center;

} */

.payment-wrapper .paymentMethod .method.paypal {

    background-image: url("https://www.merchantmaverick.com/wp-content/uploads/2020/02/PayPal_Debit_Card.png");

    width: 100%;

    height: 100%;

    background-size: cover;

    background-position: center;

}





/* .payment-wrapper .paymentMethod .method:hover {

	border-color: #4cd264;

	outline: none !important;

} */

.payment-wrapper .paymentMethod.pay-p{

    width: 82px;

    height: 59px;

}

.payment-wrapper input[type=radio]:checked + .method{

    border: 5px solid #2c6c94;

    border-radius: 10px;

    cursor: pointer;

    transform: scale(1.1);

}

.paymentMethod:active {

    cursor: pointer;

    transform: scale(1.1);

    /* transition: 0.2s all ease-in-out; */

}   

/* ============================= PACKAGES ===================== */

.packages-wrapper {

    min-height: 737px;

}

.packages-wrapper .card{

    /* background-color: #FFFFFF; */

}

.packages-wrapper .heading-primary {

    color: #fff;

    text-transform: uppercase;

    -webkit-backface-visibility: hidden;

            backface-visibility: hidden;

    margin-bottom: 6rem;

  }

  

  .packages-wrapper .heading-primary--main {

    display: block;

    font-size: 6rem;

    font-weight: 400;

    letter-spacing: 3.5rem;

    -webkit-animation-name: moveInLeft;

            animation-name: moveInLeft;

    -webkit-animation-duration: 1s;

            animation-duration: 1s;

    -webkit-animation-timing-function: ease-out;

            animation-timing-function: ease-out;

    /*

          animation-delay: 3s;

          animation-iteration-count: 3;

          */

  }

  

  .packages-wrapper .heading-primary--sub {

    display: block;

    font-size: 2rem;

    font-weight: 700;

    letter-spacing: 1.75rem;

    -webkit-animation: moveInRight 1s ease-out;

            animation: moveInRight 1s ease-out;

  }

  

  .packages-wrapper  .heading-secondary {

    font-size: 3.5rem;

    text-transform: uppercase;

    font-weight: 700;

    color: transparent;

    letter-spacing: 0.2rem;

    line-height: 1;

    -webkit-transition: all 0.2s;

    transition: all 0.2s;

    color: #eee;

  }

  

  .packages-wrapper .btn, .btn:link, .btn:visited {

    text-transform: uppercase;

    text-decoration: none;

    padding: 1rem 2rem;

    display: inline-block;

    border-radius: 0.5rem;

    -webkit-transition: all 0.2s;

    transition: all 0.2s;

    position: relative;

    font-size: 1rem;

    border: none;

    cursor: pointer;

  }

  

  .packages-wrapper  .btn:hover {

    -webkit-transform: translateY(-3px);

            transform: translateY(-3px);

    -webkit-box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);

            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);

  }

  

  .packages-wrapper   .btn:hover::after {

    -webkit-transform: scaleX(1.4) scaleY(1.6);

            transform: scaleX(1.4) scaleY(1.6);

    opacity: 0;

  }

  

  .packages-wrapper  .btn:active, .btn:focus {

    outline: none;

    -webkit-transform: translateY(-1px);

            transform: translateY(-1px);

    -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);

            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);

  }

  

  .packages-wrapper  .btn--white {

    background-color: #fff;

    color: #777;

  }

  

  .packages-wrapper .btn--white::after {

    background-color: #fff;

  }

  

  .packages-wrapper .btn--green {

    background: -webkit-gradient(linear, left top, right top, from(#fc466b), to(#3f5efb));

    background: linear-gradient(to right, #fc466b, #3f5efb);

    color: #fff;

  }

  

  .packages-wrapper  .btn--green::after {

    background-color: #55c57a;

  }



  .packages-wrapper .card {

    -webkit-perspective: 150rem;

    perspective: 150rem;

    -moz-perspective: 150rem;

    position: relative;

    height:35.7rem;

  }

  

  .packages-wrapper .card__side {

    height:35rem;

    -webkit-transition: all 0.8s ease;

    transition: all 0.8s ease;

    position: absolute;

    top: 0;

    left: 0;

    width: 100%;

    -webkit-backface-visibility: hidden;

            backface-visibility: hidden;

    border-radius: 3px;

    overflow: hidden;

    -webkit-box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);

            box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);

  }

  

  .packages-wrapper .card__side--front {

    /* background-color: #fff; */

  }

  

  .packages-wrapper .card__side--front-1 {

    background: linear-gradient(-45deg, #2c6c94, #6ed6d3,#ffffff);

  }

  

  .packages-wrapper .card__side--front-2 {

    background: linear-gradient(-45deg, #2c6c94, #6ed6d3,#ffffff);

  }

  

  .packages-wrapper .card__side--front-3 {

    background: linear-gradient(-45deg, #2c6c94, #6ed6d3,#ffffff);

  }

  

  .packages-wrapper .card__side--back {

    -webkit-transform: rotateY(180deg);

            transform: rotateY(180deg);

  }

  

  .packages-wrapper .card__side--back-1 {

    background: linear-gradient(-45deg, #000, #00DFFC);

  }

  

  .packages-wrapper .card__side--back-2 {

    background: linear-gradient(-45deg, #000, #00DFFC);

  }

  

  .packages-wrapper .card__side--back-3 {

    background: linear-gradient(-45deg, #000, #00DFFC);

  }

  

  .packages-wrapper .card:hover .card__side--front-1,

  .packages-wrapper .card:hover .card__side--front-2,

  .packages-wrapper .card:hover .card__side--front-3 {

    -webkit-transform: rotateY(-180deg);

            transform: rotateY(-180deg);

  }

  

  .packages-wrapper .card:hover .card__side--back {

    -webkit-transform: rotateY(0);

            transform: rotateY(0);

  }

  .packages-wrapper input[type=radio]:checked + .card{

    border: 5px solid #186ca2;

    cursor: pointer;

    transform: scale(1.1);

}

.packages-wrapper .card__side--back:active {

    cursor: pointer;

    transform: scale(1.1);

    /* transition: 0.2s all ease-in-out; */

} 

  .packages-wrapper label {

    font-family: "Raleway-Roman-Reg";

    font-size: 1.2rem;

    font-weight: 600;

}

  .packages-wrapper .card__title {

    /* height: 20rem; */

    padding: 4rem 2rem 2rem;

    display: -webkit-box;

    display: -ms-flexbox;

    display: flex;

    -webkit-box-orient: vertical;

    -webkit-box-direction: normal;

        -ms-flex-direction: column;

            flex-direction: column;

    -webkit-box-pack: center;

        -ms-flex-pack: center;

            justify-content: center;

    -webkit-box-align: center;

        -ms-flex-align: center;

            align-items: center;

  }

  

  .packages-wrapper .card__title--1 .fas {

    font-size: 3rem;

    color: #2c6c94;

  }

  

  .packages-wrapper .card__title--2 .fas {

    font-size: 3rem;

    color: #2c6c94;

  }

  

  .packages-wrapper .card__title--3 .fas {

    font-size: 3rem;

    color: #2c6c94;

  }

  

  .packages-wrapper .card__heading {

    font-size: 2rem;

    font-weight: 300;

    text-transform: uppercase;

    text-align: center;

    color: #fff;

    width: 75%;

    font-family: "JA-Hand-Reg";

    margin-top: 1rem;

  }

  

  .packages-wrapper .card__heading-span {

    padding: 1rem 1.5rem;

    -webkit-box-decoration-break: clone;

    box-decoration-break: clone;

  }

  

  .packages-wrapper .card__details {

    padding: 0 2rem 2rem;

    height: 298px;

    font-family: "Solway-Reg";

  }

  

  .packages-wrapper .card__details ul {

    list-style: none;

    width: 100%;

    margin: 0 auto;

    padding: 0px;

  }

  

  .packages-wrapper  .card__details ul li {

    font-size: 0.8rem;

    padding: 0.5rem;

    display: flex;

    /* background-color: #00DFFC; */

  }

  .packages-wrapper  .card__details ul li .check-ico{

      color: #ffffff;

      margin-right: 15px;

  

  }

  .packages-wrapper .card__details ul li:not(:last-child) {

    border-bottom: 1px solid #eee;

  }

  

  .packages-wrapper .card__cta {

    position: absolute;

    top: 50%;

    left: 50%;

    -webkit-transform: translate(-50%, -50%);

    transform: translate(-50%, -50%);

    width: 90%;

    text-align: center;

  }

  

  .packages-wrapper .card__price-box {

    text-align: center;

    color: #fff;

    margin-bottom: 8rem;

  }

  

  .packages-wrapper .card__price-only {

    font-size: 3rem;

    text-transform: uppercase;

    font-family: "JA-Hand-Reg";

  }

  

  .packages-wrapper .card__price-value {

    font-size: 2rem;

    font-weight: 100;

    font-family: "Solway-Bold";

  }

  

  .packages-wrapper .row {

    /* max-width: 114rem;

    margin: 0 auto; */

    justify-content: flex-end;

    width: 88%;

    margin-left: auto;

  }

  

  .packages-wrapper  .row:not(:last-child) {

    margin-bottom: 5rem;

    margin-top: 5rem;

  }

  

  .packages-wrapper  .row::after {

    content: "";

    display: table;

    clear: both;

  }

  

  .packages-wrapper .row [class^="col-"] {

    float: left;

  }

  

  .packages-wrapper .row [class^="col-"]:not(:last-child) {

    /* margin-right: 6rem; */

  }

  

  .packages-wrapper .row .col-1-of-3 {

    width: calc((100% - 2 * 6rem) / 3);

  }

  

  @media only screen and (max-width: 600px ){

    .packages-wrapper .row {

    width: 100%;

    margin-left: unset;

  }

  }

    </style>

    <div class="for-content-tabs">

        <h2 class="top-tabt-heading">Update Plan</h2>

        <br>



        {{-- Generate Link Form --}}

        {{-- <form id="link_generate_form" action="" method="POST">

            @csrf

            <div id="inputs_list" class="display_none">

                <div class="row">

                    <div class="form-group col-md-6">

                        <label for="link_generate">Link Generate</label>

                        <input type="text" name="link_generate" class="form-control" id="link_generate"

                            placeholder="Generate Link" readonly>

                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-6">

                        <label for="inputemail">Password</label>

                        <input type="text" name="password" class="form-control" id="inputPassword"

                            placeholder="Your Password" readonly>

                    </div>

                </div>

            </div>

            <div class="d-flex justify-content-start">

                @if (Auth::user()->link_expire_count > 0)

                    <button type="button" id="linkGenerateBtn" class="btn edit-submit-cstmbtn">Prepare Link</button>

                    <button type="button" id="link_send_to" class="btn edit-submit-cstmbtn display_none">Generate Link &

                        Send To</button>

                @endif





                <button type="button" class="btn edit-submit-cstmbtn" disabled

                    style="margin-left:8px; background-color: rgb(236, 180, 106); color:black;">{{ Auth::user()->link_expire_count == 0 ? 'All Links Used ' : 'Remaining Links' }}

                    ({{ Auth::user()->link_expire_count ?? '' }})</button>



            </div>

        </form> --}}



        

    </div>



    <section>

        <div class="packages-main">

            <div class="container">

                <div class="packages-wrapper payment-wrapper px-4 py-5">

                    <div class="row d-flex " id="myDIV">



                        @if (!empty($packages))

                            @foreach ($packages as $package)

                                <div class="col-lg-4 my-3">

                                    <label for="p{{ $package->id }}" class="w-100">

                                        <input type="radio" name="package" id="p{{ $package->id }}" hidden>

                                        <div class="card ">

                                            <div class="card__side card__side--front-1">

                                                <div class="card__title card__title--1">

                                                    <i class="fas fa-paper-plane"></i>

                                                    <h4 class="card__heading">{{ $package->package_title ?? '' }}</h4>

                                                </div>



                                                <div class="card__details">

                                                    <ul>

                                                        @foreach (json_decode($package->package_listing) as $listing)

                                                            @if (!empty($listing))

                                                                <li>

                                                                    <span class="check-ico"><i

                                                                            class="fa-solid fa-check"></i></span>

                                                                    {{ $listing }}

                                                                </li>

                                                            @endif

                                                        @endforeach

                                                    </ul>

                                                </div>

                                            </div>

                                            <div class="card__side card__side--back card__side--back-1" onclick="getPlanId({{ $package->id }})">

                                                <div class="card__cta">

                                                    <div class="card__price-box">

                                                        <p class="card__price-only">Only</p>

                                                        <p class="card__price-value">${{ $package->package_price ?? '' }}</p>

                                                    </div>

                                                    <div class="btn btn--white selectPackage">Select</div>

                                                </div>

                                            </div>

                                        </div>

                                    </label>



                                </div> <!-- col end.// -->

                            @endforeach

                        @endif

                            

                        <div class="btn-1 mt-4 text-center">

                            <a class="w-100" id="goToPayment">

                                <button type="button" class="btn">

                                    Go to Payment

                                </button>

                            </a>

                        </div>

                    </div>



                </div>

            </div>

        </div>

    </section>







    



@endsection



@push('scripts')

    <script>



    $("#goToPayment").on("click",function(){

        if(!$("#goToPayment").attr('href')){

            toastr.error('Please select plan');

        }

    });

            



        function getPlanId(plan_id){

            

            $.ajax({

                url: 'create_package/'+plan_id,

                type: 'GET',

                success: function(data) {

                    console.log(data)

                    if(data.status == 200){

                        

                        toastr.success('You have selected '+data.package_title+' Plan');



                        $("#goToPayment").attr('href','{{ route('agent_pay_amount') }}');

                    }else{

                        toastr.error('Account have not been created!, Please Singup again');

                    }

                }



            });



        }





    </script>

@endpush

