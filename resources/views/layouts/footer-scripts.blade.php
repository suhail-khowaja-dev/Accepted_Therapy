<!-- /container -->
<button class="btn  scroll-top" data-scroll="up" type="button">
    <i class="fas fa-chevron-up"></i>
</button>

<!-- ====Jquery JS ==== -->
<script src="{{ asset('assets/js/jquery.min.js')}}"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js')}}"> </script>
<!-- ===Boostrap Bundle JS ====-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"> </script>
<!-- swiper slider js -->
<script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
<!-- WOW JS -->
<script src="{{ asset('assets/js/wow.js')}}"> </script>
<!-- Butter JS -->
<script src="{{ asset('assets/js/butter.js')}}"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/js/javascript.js')}}"></script>
<!-- Form JAVASCRIPT -->
<script src="{{ asset('assets/js/form-javascript.js')}}">
<script>
    toastr.options = {
        "positionClass": "toast-top-right",
        "showDuration": "9000",
        "hideDuration": "9000",
        "timeOut": "9000",
        "extendedTimeOut": "9000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>

<script>
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    // Get the value of "some_key" in eg "https://example.com/?some_key=some_value";
    let value = params.box; // "some_value" ;
    console.log(value);
    if (value != null) {
        $('html,body').animate({
            scrollTop: $(`#${value}`).offset().top
        },
            'slow');
    }
    </script>

    <script>


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

$("#contactForm").on('submit', function (e) { 
    e.preventDefault();
    

    $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                method: $(this).attr('method'),
                data: new FormData(this),
                processData: false,  
                dataType: 'json',
                contentType: false,
                beforeSend: function(){
                    $(document).find('span.error-text').text('');
                    $("#preloader").css('display','block');
                },
                success: function(data) {
                    $("#preloader").css('display','none');
                   if(data.status == 0){
                       $.each(data.error, function(prefix, val){
                            toastr.error(val[0]);
                       });

                   }else{
                    swal({
                            title: "Dear Customer!",
                            text: "Thank You for Contact Us.!",
                            type: "success",
                            icon: "success",
                        });
                    
                    $("#contactForm")[0].reset();
                    
                   }
                }

    });
    


    
 });


 
</script>



<div class="modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">

                <!-- ================================== SIGNIN FORM ============================= -->
                <section>
                    <div class="siginin-main">

                        <div class="container signin-wrap position-relative mt-3">
                            <div class="position-absolute close-button">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="h-1 d-flex justify-content-center pt-5 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay="0.5s">
                                <h5 class="signup-head">
                                    Sign Up
                                </h5>
                            </div>

                            <div class="signup-img1 position-absolute wow bounceIn" data-wow-duration="1s"
                                data-wow-delay="0.5s">
                                <img src="{{asset('assets/images/banner3-img.svg')}}" alt="">
                            </div>
                            <div class="signup-img2 position-absolute wow fadeInRight" data-wow-duration="1s"
                                data-wow-delay="0.5s">
                                <img src="{{asset('assets/images/banner3-img.svg')}}" alt="">
                            </div>
                            <div class="container form4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s ">
                                <form id="signup_form" method="POST">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control py-3" name="name"
                                                id="name" placeholder="Name" />
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="input-group">
                                            <input type="email" class="form-control py-3" name="email" id="email"
                                                placeholder="Email Address" />
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="input-group">
                                            <input type="password" class="form-control py-3" name="password"
                                                placeholder="Password" />
                                        </div>
                                    </div>


                                    <div class="mt-4 pb-4 text-center">
                                        <a class="w-100">
                                            <button type="button" id="signup_btn" class="btn py-2">
                                                Sign Up
                                            </button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal"
                 aria-label="Close"></button>
         </div> -->
            <div class="modal-body">

                <!-- ================================== SIGNIN FORM ============================= -->
                <section>
                    <div class="siginin-main">
                        <div class="container signin-wrap position-relative  mt-3">
                            <div class="position-absolute close-button">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="h-1 d-flex justify-content-center pt-5 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay="0.5s">
                                <h5>
                                    Sign In
                                </h5>
                            </div>

                            <div class="corner-img1 position-absolute wow bounceIn" data-wow-duration="1s"
                                data-wow-delay="0.5s">
                                <img src="{{asset('assets/images/banner3-img.svg')}}" alt="">
                            </div>
                            <div class="corner-img2 position-absolute wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="0.5s">
                                <img src="{{asset('assets/images/banner3-img.svg')}}" alt="">
                            </div>
                            <div class="container form4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s ">
                                <form id="sigin_form" method="post">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control py-3" name="email"
                                                id="email_sign_in" placeholder="Email Address" />
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="input-group">
                                            <input type="password" class="form-control py-3" name="password"
                                                placeholder="Password" />
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('forget_password') }}" class="" id="forgot">
                                            Forget Password?
                                        </a>
                                    </div>

                                    <div class="mt-4 pb-4 text-center">
                                        <a href="javascript:void(0);" class="w-100">
                                            <button type="button" id="login_btn" class="btn py-2">
                                                Sign In
                                            </button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </section>
            </div>

        </div>
    </div>
</div>

@stack('scripts')

