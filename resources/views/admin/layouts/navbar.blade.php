<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">



    <div class="container-fluid">

        <div class="collapse" id="search-nav">

            {{-- <form class="navbar-left navbar-form nav-search mr-md-3">

                <div class="input-group">

                    <div class="input-group-prepend">

                        <button type="submit" class="btn btn-search pr-1">

                            <i class="fa fa-search search-icon"></i>

                        </button>

                    </div>

                    <input type="text" placeholder="Search ..." class="form-control">

                </div>

            </form> --}}

        </div>

        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

            <li class="nav-item toggle-nav-search hidden-caret">

                <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"

                    aria-expanded="false" aria-controls="search-nav">

                    <i class="fa fa-search"></i>

                </a>

            </li>

            <a href="{{ route('logout') }}" style="color: white">Logout</a>

            <ul class="dropdown-menu dropdown-user animated fadeIn">

                <div class="dropdown-user-scroll scrollbar-outer">

                    <li>

                </div>

            </ul>

            </li>

        </ul>

    </div>

</nav>