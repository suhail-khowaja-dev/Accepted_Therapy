@extends('layouts.master')
@section('content')
<!-- ================================== FORGOT PASSWORD FORM ============================= -->
<section>
    <div class="forgot-main">
        <div class="container forgot-wrap position-relative mt-3">
            <div class="h-1 d-flex justify-content-center wow fadeInUp" data-wow-duration="1s"
                data-wow-delay="0.5s">
                <h5>
                    Forget Password
                </h5>
            </div>

            <div class="signup-img2 position-absolute wow bounceIn" data-wow-duration="1s"
                data-wow-delay="0.75s">
                <img src="{{ asset('assets/images/banner3-img.svg') }}" alt="">
            </div>
            <div class="container form4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <form id="forget_password_form" method="post">
                    @csrf
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <input type="email" class="form-control py-3" name="email" id="email"
                                placeholder="Enter Your Email..." />
                        </div>
                    </div>



                    <div class="mt-4 pb-4 text-center">
                        <a href="javascript:void(0);" class="w-100">
                            <button type="button" id="forget_password_button" class="btn py-2 mt-4">
                                Send
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@include('common.accepted_therapy_border')
@endsection

@push('scripts')
<script>
    $("#forget_password_button").on("click",function(){

            $.ajax({
                url: '{{ route('update_password') }}',
                type: 'POST',
                data: $("#forget_password_form").serialize(),
                beforeSend: function(){
                    $("#preloader").css('display','block');
                },
                success: function(data) {
                    $("#preloader").css('display','none');
                    if(data.status == 404){
                        swal({
                            title: "Invalid!",
                            text: data.message,
                            type: "error",
                            icon: "error",
                        })
                    }
                    if(data.status == 200){
                        swal({
                            title: "Dear User!",
                            text: data.message,
                            type: "success",
                            icon: "success",
                        }).then(function(){
                            location.href = "{{ route('update_password') }}";
                        });
                    }

                    $.each(data.errors, function(prefix, val){
                        //    console.log(val[0]);
                            toastr.error(val[0]);
                       });

                }

            });


        });
</script>
{{-- @if ($errors->any())
@foreach ($errors->all() as $error)
<script>toastr.error('{{ $error }}')</script>
@endforeach
@endif --}}

@endpush
