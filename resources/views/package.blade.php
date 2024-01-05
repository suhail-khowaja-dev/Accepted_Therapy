@extends('layouts.master')
@section('content')

    <!-- ================================== BANNER2 =============================== -->
    <section>
        <div class="banner3">
            <div class="container position-relative d-flex justify-content-center">
                <div class="position-absolute banner3-img">
                    <img src="{{ asset('assets/images/banner3-img.svg') }}" alt="">
                </div>
                <div class="position-absolute banner3-text wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <span class="h-1">
                        Packages
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================== PACKAGES =============================== -->

    <section>
        <div class="packages-main">
            <div class="container">
                <div class="packages-wrapper payment-wrapper px-4 py-5">
                    <div class="row d-flex justify-content-center" id="myDIV">
                        
                        @if (count($packages) > 0)
                            @foreach ($packages as $package)
                                <div class="col-lg-3 my-3">
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
                        

                        
                        <div class="btn-1 mt-4 text-center">
                            <a class="w-100" id="goToPayment">
                                <button type="button" class="btn">
                                    Go to Payment
                                </button>
                            </a>
                        </div>
                        @else
                        <div class="col-lg-3 my-3">
                            <h2 class="text-center mt-5">Sorry!, Package Not Available...!!</h2>
                        </div> <!-- col end.// -->
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>
{{-- {{ dd(session()->get('user_signup')) }} --}}
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

                    if(data.status == 200){

                        toastr.success('You have selected '+data.package_title+' Plan');

                        $("#goToPayment").attr('href','{{ route('pay_amount') }}');
                    }else{
                        toastr.error('Account have not been created!, Please Singup again');
                    }
                }

            });

        }


    </script>
@endpush
