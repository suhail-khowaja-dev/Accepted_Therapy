@php
    $general_data = App\Models\Configuration::first();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    <div id="preloader">
        <div id="loader"></div>
      </div>


      @if (request()->segment(1) != 'login' && request()->segment(1) != 'show-cards')
        @include('layouts.header')
      @endif

    <div id="butter">

        
        <!-- ================================== LOGO2 =============================== -->
        @include('common.logo_2')

        @yield('content')

        <!-- ================================== FOOTER =============================== -->

        @if (request()->segment(1) != 'login' && request()->segment(1) != 'show-cards')
            @include('layouts.footer')
        @endif
    </div>

    @include('layouts.footer-scripts')
</body>

</html>
