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
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <input type="hidden" name="user_link" value="{{ $link }}">

                    @if (!empty($userCheck1) && !empty($userCheck2))
                                <input id="email" type="email" hidden class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $userCheck1->email }}" required autocomplete="email" autofocus>
                                @else

                                @if (!empty($userCheck1))
                                <input id="email" type="email" hidden class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $userCheck1->email }}" required autocomplete="email" autofocus>
                                @endif

                                @if (!empty($userCheck2))
                                <input id="email" type="email" hidden class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $userCheck2->email }}" required autocomplete="email" autofocus>
                                @endif

                                @endif

                                

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror





                    <div class="form-group mb-4">
                        <div class="input-group">
                            <input id="password" type="password" placeholder="Enter Your Password..." class="form-control py-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4 pb-4 text-center">
                        <button type="submit" id="card_login_button" class="btn py-2 mt-4">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection

@push('scripts')
@if (session()->has('fail'))
    <script>swal('Invalid Url','{{ session()->get('fail') }}','error')</script>
@endif

@endpush
