@php
use App\Models\TeamManagement;
$teams = TeamManagement::where('status', 1)
    ->with('therapist_specialities')
    ->get();

@endphp
<!-- ================================== HEADER =============================== -->
<header class="lg-screen-navbar">
    <div class="container bg-success mynav">
        <nav class="navbar fixed-top navbar-light d-flex flex-wrap align-items-center justify-content-center">
            <div class="logo">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ url('/uploads/logo/' . logo_management()->header) ?? asset('assets/images/logo.png') }}"
                        alt="logo" class="d-inline-block align-text-top">
                </a>
            </div>

            <div class="nav-menu">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link px-2 {{ request()->is('/') ? 'active' : '' }}"
                            aria-current="page">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->segment(1) == 'therapist' ? 'active' : '' }}"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Meet Our Team
                        </a>
                        @if (count($teams) > 0)
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($teams as $team)
                                    <li><a class="dropdown-item"
                                            href="{{ route('therapist', ['id' => $team->slug]) }}">{{ ucwords($team->first_name) }}
                                            {{ ucwords($team->last_name) }},
                                            {{ empty($team->therapist_specialities[0]) ? '' : strtoupper($team->therapist_specialities[0]->speciality_title) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('resources') }}"
                            class="nav-link px-2 {{ request()->is('resource') ? 'active' : '' }}">
                            Resources
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('schedule') }}"
                            class="nav-link px-2 {{ request()->is('scheduling') ? 'active' : '' }}">
                            Scheduling
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}"
                            class="nav-link px-2 {{ request()->is('contact') ? 'active' : '' }}">
                            Contact Us
                        </a>
                    </li>

                    @if (!Auth::check())
                        <li class="nav-item">
                            <a href="" class="nav-link px-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">
                                Sign In
                            </a>
                        </li>
                    @endif

                    @if(Auth::check() && Auth::user()->role == 1)
                    <li class="nav-item">
                        <a href="" class="nav-link px-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">
                            Sign In
                        </a>
                    </li>
                    @endif

                    @if (!Auth::check())
                        <li class="nav-item">
                            <a href="" class="nav-link px-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal1">
                                Sign Up
                            </a>
                        </li>
                    @endif

                     @if(Auth::check() && Auth::user()->role == 1)
                        <li class="nav-item">
                            <a href="" class="nav-link px-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">
                                Sign Up
                            </a>
                        </li>
                    @endif
                    @if (Auth::check() && Auth::user()->role == 2 || Auth::check() && Auth::user()->role == 3)
                        <li class="nav-item">
                            <a href="{{ route('user_dashboard') }}" class="nav-link px-2">
                                My Account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user_logout') }}" class="nav-link px-2">
                                Logout
                            </a>
                        </li>
                    @endif


                    {{-- @if (Auth::check() && Auth::user()->role == 2)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->segment(1) == 'therapist' ? 'active' : '' }}" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ ucwords(Auth::user()->name) }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('user_dashboard') }}">My Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('user_logout') }}">Logout</a></li>
                        </ul>
                    </li>

                    @endif --}}
                    {{-- @if (Auth::check() && Auth::user()->role == 1)
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link px-2">
                            Logout
                        </a>
                    </li>
                    @endif --}}
                </ul>
            </div>


            <div class="text-end social-icons mx-5">
                <a class="" href="{{ $general_data->facebook ?? '#' }}" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a class="" href="{{ $general_data->instagram ?? '#' }}" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </nav>
    </div>

</header>
<!-- ================================== SIDE NAVBAR ON MOBILE SCREENS =============================== -->
<header class="mobile-screen-nav fixed-top for-mobile-navbar-color">
    <div id="main-content">
        <!-- <div id="title">Animated Sidebar Navigation Demo</div> -->
    </div>
    <div id="btn">
        <div id='top'></div>
        <div id='middle'></div>
        <div id='bottom'></div>
    </div>
    <div id="box">
        <div id="logo-container">
            <a class="navbar-brand" href="{{route('home')}}">
                {{-- <img src="../../../assets/images/logo2.svg" alt="logo-image"> --}}
                <img src="{{ url('/uploads/logo/' . logo_management()->header) ?? asset('assets/images/logo.png') }}"
                alt="logo">
            </a>
        </div>
        <div id="items">
            <div class="item"> <a  class="nav-link px-2 {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
            </div>
            <!-- <div class="item"><a class="nav-link" href="{{ route('home') }}?box=meetteam">Meet Our Team</a></div> -->

            <div class="item for-cstm-collapse">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                    data-bs-target="#dashboard-collapse" aria-expanded="false">
                    Meet Our Team
                </button>
                <div class="collapse" id="dashboard-collapse">
                    {{-- <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small"> --}}
                    {{-- <li><a href="{{route('therapist')}}" class="link-dark rounded">Nikki Dear,
                                LCSW</a></li>
                        <li><a href="{{route('therapist')}}" class="link-dark rounded">Lori Hodges,
                                LMSW</a></li>
                        <li><a href="{{route('therapist')}}" class="link-dark rounded">Yvette Claverie,
                                LCSW</a></li> --}}
                    {{-- </ul> --}}
                    @if (count($teams) > 0)
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            @foreach ($teams as $team)
                                <li><a class="link-dark rounded"
                                        href="{{ route('therapist', ['id' => $team->slug]) }}">{{ ucwords($team->first_name) }}
                                        {{ ucwords($team->last_name) }},
                                        {{ empty($team->therapist_specialities[0]) ? '' : strtoupper($team->therapist_specialities[0]->speciality_title) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="item"><a  class="nav-link px-2 {{ request()->is('resource') ? 'active' : '' }}" href="{{ route('resources') }}">Resources</a></div>
            <div class="item"><a class="nav-link px-2 {{ request()->is('scheduling') ? 'active' : '' }}" href="{{ route('schedule') }}">Scheduling</a></div>
            <div class="item"><a class="nav-link px-2 {{ request()->is('contact') ? 'active' : '' }}"  href="{{ route('contact') }}">Contact Us</a></div>

            <div class="item"><a href="" class="nav-link" data-bs-toggle="modal"
                    data-bs-target="#exampleModal2">Sign In</a>
            </div>
            <div class="item"><a href="" class="nav-link" data-bs-toggle="modal"
                    data-bs-target="#exampleModal1">Sign Up</a>
            </div>
            <div id="social-items" class="d-flex justify-content-center">
                <div class="item">
                    <a class="nav-link" href="{{ $general_data->facebook ?? '#' }}" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </div>
                <div class="item">
                    <a class="nav-link" href="{{ $general_data->instagram ?? '#' }}" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

    </div>
</header>
