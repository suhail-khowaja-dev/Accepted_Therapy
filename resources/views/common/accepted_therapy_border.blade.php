<section>
    <div class="therapy-logo">
        <div class="position-relative therapy-border d-flex justify-content-center pt-4">
            <div class="therapy-border-img wow bounceIn" data-wow-duration="1s" data-wow-delay="0.75s">
                <img src="{{url('/uploads/logo/'.logo_management()->header) ?? asset('assets/images/logo.png')}}" alt="">
            </div>
        </div>
        @if (request()->path() == 'show_cards')
        <div class="d-flex justify-content-center accepted-therapy">
            <h1 class="h-1 position-relative text-center">
                Accepted Therapy Services
            </h1>
        </div>
        @endif
    </div>
</section>