@extends('layouts.master')
@section('content')
<!-- ================================== FORGOT PASSWORD FORM ============================= -->
<section>
    <div class="forgot-main">
        <div class="container forgot-wrap position-relative mt-3">
            <div class="h-1 d-flex justify-content-center wow fadeInUp" data-wow-duration="1s"
                data-wow-delay="0.5s">
                <h5>
                    Reset Password
                </h5>
            </div>

            <div class="signup-img2 position-absolute wow bounceIn" data-wow-duration="1s"
                data-wow-delay="0.75s">
                <img src="{{ asset('assets/images/banner3-img.svg') }}" alt="">
            </div>
            <div class="container form4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <form id="reset_password_form" action="{{ route('password_change',['token'=>request()->token]) }}" method="post">
                    @csrf
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <input type="password" class="form-control py-3" name="password" id="password"
                                placeholder="Reset Your Password..." />
                        </div>
                    </div>



                    <div class="mt-4 pb-4 text-center">
                        <a href="javascript:void(0);" class="w-100">
                            <button type="submit" id="forget_password_button" class="btn py-2 mt-4">
                                Reset Password
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
    
@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>toastr.error('{{ $error }}')</script>
@endforeach
@endif



@endpush