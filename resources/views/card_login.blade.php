@extends('layouts.master')
@section('content')
<!-- ================================== FORGOT PASSWORD FORM ============================= -->
<section>
    <div class="forgot-main">
        <div class="container forgot-wrap position-relative mt-3">
            <div class="h-1 d-flex justify-content-center wow fadeInUp" data-wow-duration="1s"
                data-wow-delay="0.5s">
                <h5>
                    Enter Password {{ request()->segment(1) }}
                </h5>
            </div>

            <div class="signup-img2 position-absolute wow bounceIn" data-wow-duration="1s"
                data-wow-delay="0.75s">
                <img src="{{ asset('assets/images/banner3-img.svg') }}" alt="">
            </div>
            <div class="container form4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <form id="card_login_form" method="post">
                    @csrf
                    <input type="hidden" name="link" value="{{ $link }}">
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <input type="password" class="form-control py-3" name="password" id="password"
                                placeholder="Enter Your Password..." />
                        </div>
                    </div>



                    <div class="mt-4 pb-4 text-center">
                        <button type="button" id="card_login_button" class="btn py-2 mt-4">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection

@push('scripts')
<script>



    
    $("#card_login_button").on("click",function(){
            
            $.ajax({
                url: '{{ route('login_card') }}',
                type: 'GET',
                data: $("#card_login_form").serialize(),
                success: function(data) {
                    // alert(data.session_active_link);
                    // return false;
                    if(data.status == 200){
                        swal({
                            title: "Dear User!",
                            text: data.message,
                            type: "success",
                            icon: "success",
                        }).then(function(){
                            location.href = data.session_active_link;
                        });
                    }
                    
                    if(data.status == 404){

                        
                        swal({
                            title: "Dear User!",
                            text: data.message,
                            type: "error",
                            icon: "error",
                        });

                    }


                    if(data.status == 401){

                        
                        swal({
                            title: "Dear User!",
                            text: data.message,
                            type: "error",
                            icon: "error",
                        });

                        }

                    if(data.status == 400){
                        $.each(data.errors, function(prefix, val){
                           console.log(val[0]);
                            toastr.error(val[0]);
                       });
                    }

                }

            });
        
            
        });
</script>
@if ($errors->any())
@foreach ($errors->all() as $error)
<script>toastr.error('{{ $error }}')</script>
@endforeach
@endif

@endpush
