@extends('layouts.master')
@section('content')
 {{-- <?php
 dd(session()->get('user_signup'));
 ?> --}}
        <!-- ================================== BANNER2 =============================== -->
        <section>
            <div class="banner3">
                <div class="container position-relative d-flex justify-content-center">
                    <div class="position-absolute banner3-img">
                        <img src="{{ asset('assets/images/banner3-img.svg') }}" alt="">
                    </div>
                    <div class="position-absolute banner3-text wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <span class="h-1">
                            Payment
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================================== Payment =============================== -->
        <section>
            <div class="payment-main">
                <div class="container">
                    <div class="payment-wrapper">
                        <div class="py-5">
                            <div class="">
                                <div class="row">
                                    <aside class="col-lg-8 mx-auto">
                                        <!-- ============== COMPONENT PAYMENT MINI =============== -->
                                        <article class="card">
                                            <div class="card-body">
                                                <h5 class="card-title text-center mb-5">Pay Amount</h5>

                                                <div id="paypal-button-container"></div>

                                            </div>
                                        </article>
                                    </aside>
                                </div> <!-- row.// -->
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

<script src="https://www.paypal.com/sdk/js?client-id=AU7NgKJ0x3sJg8LoKawhLcRMNXDxpw9TLJwiLS2IuZK7AekBlBWlNNaNEhqyUhCSJBUM4aI6Dznu24qS&components=buttons&vault=true&intent=subscription"></script>
<script>
    var planLocalId = '{{ session()->get('selected_package_pdf')['id'] }}';

                    //  [null,'P-0DY23795G5960115WMKUK7GQ','P-6JT52283J6865545HMKVANBI','P-9LX41055KK074051PMKVAOOY','P-3FJ396614E792525XMKVAKTY'];
    var plan_id_array = [null,'P-4KF65128C55502727MLQ4OXA','P-3EP77470BH329020XMLQ4PYQ','P-3FJ396614E792525XMKVAKTY','P-2VY06958CM9058138MPA5F6Y'];

    paypal.Buttons({
      createSubscription: function(data, actions) {
        return actions.subscription.create({
          'plan_id': plan_id_array[planLocalId],
        });
      },
      onApprove: function(data, actions) {

        $.ajax({
                url: '{{ route('amount_store_pdf') }}',
                type: 'GET',
                data: data,
                beforeSend: function(){
                    $("#preloader").css('display','block');
                },
                success: function(data) {
                    $("#preloader").css('display','none');

                    if(data.status == 200){
                        swal({
                            title: "Dear User!",
                            text: 'You have successfully purchase plan',
                            type: "success",
                            icon: "success",
                        }).then(function(){
                            location.href = "{{ route('home') }}";
                        });
                    }else{


                        swal({
                            title: "Dear User!",
                            text: 'Something went wrong!, Please try again',
                            type: "error",
                            icon: "error",
                        });

                    }


                }

            });

      }
    }).render('#paypal-button-container');
  </script>


@endsection

