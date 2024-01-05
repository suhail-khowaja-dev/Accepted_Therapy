<section>
    <div class="container d-flex main-logo2 position-relative justify-content-center">
        <div class="logo2">
            <a href="{{route('home')}}">
            <img src="{{ url('/uploads/logo/' . logo_management()->header) ?? asset('assets/images/logo.png') }}"
            alt="logo" class="d-inline-block align-text-top">
            </a>
        </div>

    </div>
</section>


{{-- {{ url('/uploads/logo/' . logo_management()->header) ?? asset('assets/images/logo.png') }} --}}
