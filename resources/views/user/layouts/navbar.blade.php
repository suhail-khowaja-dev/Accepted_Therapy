<header class="header for-remove-position-fixed">
    <div class="container">
        <div class="row mainRow">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-xs-12">
                <a href="{{ route('user_dashboard') }}">
                    <div class="logo">
                        <img src="{{ url('/uploads/logo/' . logo_management()->header) }}" alt="navbar brand"
                            class="navbar-brand">
                    </div>
                </a>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-8 menu-large-screen">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8 col-8 menu-large-screen">
                <div class="header-nav">
                    <ul>
                        <li>
                            <a class="link_header" href="{{ route('user_logout') }}"><button
                                    class="log-out-button"><i class="fa fa-sign-out" aria-hidden="true"></i>LOG
                                    OUT</button></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6 col-6 menu-small-screen">
                <div class="toggle-small-screen">
                    <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                        aria-controls="offcanvasWithBackdrop">
                        <img src="{{ asset('user/assets/images/1x/ham-bar.png') }}" alt="toggle">
                    </button>
                </div>
                <div class="offcanvas offcanvas-start mobile_menu_offcanvas" tabindex="-1" id="offcanvasWithBackdrop"
                    aria-labelledby="offcanvasWithBackdropLabel">
                    <div class="offcanvas-header">
                        <div class="nav-logo mobile-sidenavbar">
                            <img src="{{ asset('user/assets/images/1x/logo.png') }}" alt="">
                        </div>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
