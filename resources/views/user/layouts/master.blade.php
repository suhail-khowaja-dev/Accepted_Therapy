<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.layouts.header')
   <style>
    
/* ============= BACK TO TOP BUTTON =================== */
.scroll-top {
    width: 49px;
    height: 43px;
    position: fixed;
    bottom: 25px;
    right: 20px;
    display: none;
    border: 2px solid #2D6D95;
}

.scroll-top i {
    display: inline-block;
    color: #2D6D95;

}

/* =================== SCROLL BAR ===================== */
/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #2D6D95;
    border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #f6f6f6;
    border: 2px solid #343838;
    border-radius: 30px;
    height: 50px;

}

/* Handle on hover */
/* ::-webkit-scrollbar-thumb:hover {
    background: #ffffff; 
  } */


/* ======= MOBILE SCREEN SIDE NAV========== */
.mobile-screen-nav {
    display: none;
}

/* MOBILE SCREEN SIDE NAV */
.mobile-screen-nav #main-content {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.mobile-screen-nav #title {
    color: #f6f6f6;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-size: 2em;
}

.mobile-screen-nav #btn {
    position: fixed;
    z-index: 5;
    top: 15px;
    left: 15px;
    cursor: pointer;
    -webkit-transition: left 500ms cubic-bezier(0.6, 0.05, 0.28, 0.91);
    transition: left 500ms cubic-bezier(0.6, 0.05, 0.28, 0.91);
}

.mobile-screen-nav #btn div {
    width: 35px;
    height: 2px;
    margin-bottom: 8px;
    background-color: #1A1A1A;
    -webkit-transition: -webkit-transform 500ms cubic-bezier(0.6, 0.05, 0.28, 0.91), opacity 500ms, box-shadow 250ms, background-color 500ms;
    transition: transform 500ms cubic-bezier(0.6, 0.05, 0.28, 0.91), opacity 500ms, box-shadow 250ms, background-color 500ms;
}

.mobile-screen-nav #logo-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.mobile-screen-nav #logo-container {
    /* background: #1A1A1A; */
    width: 227px;
    height: 129px;
}

.mobile-screen-nav #btn:hover>div {
    box-shadow: 0 0 1px #00DFFC;
}

.mobile-screen-nav #btn.active {
    left: 230px;
}

.mobile-screen-nav #btn.active div {
    background-color: #343838;
}

.mobile-screen-nav #btn.active:hover>div {
    box-shadow: 0 0 1px #343838;
}

.mobile-screen-nav #btn.active #top {
    -webkit-transform: translateY(10px) rotate(-135deg);
    -ms-transform: translateY(10px) rotate(-135deg);
    transform: translateY(10px) rotate(-135deg);
}

.mobile-screen-nav #btn.active #middle {
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
}

.mobile-screen-nav #btn.active #bottom {
    -webkit-transform: translateY(-10px) rotate(-45deg);
    -ms-transform: translateY(-10px) rotate(-45deg);
    transform: translateY(-10px) rotate(-45deg);
}

.mobile-screen-nav #box {
    position: fixed;
    z-index: 4;
    overflow: auto;
    top: 0px;
    left: -275px;
    width: 275px;
    opacity: 0;
    padding: 20px 0px;
    height: 100%;
    background-color: #f6f6f6;
    color: #343838;
    -webkit-transition: all 350ms cubic-bezier(0.6, 0.05, 0.28, 0.91);
    transition: all 350ms cubic-bezier(0.6, 0.05, 0.28, 0.91);
}

.mobile-screen-nav #box.active {
    left: 0px;
    opacity: 1;
}

.mobile-screen-nav #items {
    position: relative;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

.mobile-screen-nav #items .item {
    position: relative;
    cursor: pointer;
    font-size: 1.5em;
    /* padding: 15px 30px; */
    padding: 3px 30px;
    -webkit-transition: all 250ms;
    transition: all 250ms;
}

.mobile-screen-nav #items .item:hover {
    padding: 15px 45px;
    background-color: rgba(52, 56, 56, 0.2);
}

.mobile-screen-nav #items .item .nav-link {
    color: #2D6D95;
    font-family: "Solway-Reg";
}

.mobile-screen-nav #items .item .nav-link.active {
    color: #343838;

}

.mobile-screen-nav #items .btn-toggle {
    display: inline-flex;
    align-items: center;
    padding: .25rem .1rem;
    background-color: transparent;
    border: 0;
    color: #2D6D95;
    font-family: "Solway-Reg";
    font-size: 1em;
}

.mobile-screen-nav #items .btn-toggle-nav li {
    background-color: #2D6D95;
}

.mobile-screen-nav #items .btn-toggle-nav li a {
    color: #F2F2F2;
}

.mobile-screen-nav #items .btn-toggle:hover,
.mobile-screen-nav #items .btn-toggle:focus {
    outline: none;
    box-shadow: none;

    /* background-color: #d2f4ea; */
}

.mobile-screen-nav #items .btn-toggle::before {
    width: 1.0em;
    line-height: 0;
    content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
    transition: transform .35s ease;
    transform-origin: .5em 50%;
}

.mobile-screen-nav #items .btn-toggle[aria-expanded="true"] {
    color: #2D6D95;
}

.mobile-screen-nav #items .btn-toggle[aria-expanded="true"]::before {
    transform: rotate(90deg);
}

.mobile-screen-nav #items .btn-toggle-nav a {
    display: inline-flex;
    padding: .1875rem .5rem;
    margin-top: .125rem;
    margin-left: 1.25rem;
    text-decoration: none;
    color: #2D6D95;
    font-family: "Solway-Reg";
}

.scrollarea {
    overflow-y: auto;
}

/* .mobile-screen-nav #items .dropdown-toggle::after {
    display: inline-block;
    width: .3em;
    height: .3em;
    margin: -.3em 0 0 .4em;
    vertical-align: middle;
    content: "";
    border: .3em solid;
    border-width: 0 .15em .15em 0;
    transform: rotateZ(45deg)
} */

.mobile-screen-nav #items .dropdown-menu .dropdown-item {
    font-family: "Solway-Reg";
    color: #F2F2F2;
}

.mobile-screen-nav #items .dropdown-menu {
    background-color: #2D6D95;
    border: none;
    z-index: 100;
}

.mobile-screen-nav #items .dropdown-menu .dropdown-item:hover {
    background: #F2F2F2;
    color: #2D6D95;
}

.mobile-screen-nav #social-items .item .nav-link {
    /* background-color: #2D6D95; */
    color: #F2F2F2;
    background-color: #2D6D95;
    border-radius: 40px;
}

.mobile-screen-nav #social-items .item .nav-link i.fa-facebook-f {
    /* background-color: #2D6D95; */
    color: #F2F2F2;
    background-color: #2D6D95;
    border-radius: 40px;
    padding: 0px 4px;
}

/* ====================== HOME PAGE ======================== */
/* ---------------------HEADER NAV */
header .mynav .navbar {
    background: #F2F2F2;
}

header .mynav .logo {
    height: 80px;
    width: 260px;
    overflow: hidden;
}
.design_by:hover{
    text-decoration: underline;
}
header .mynav .logo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

header .mynav .nav-menu {
    margin-left: 3rem;
}

header .mynav .nav-menu .nav-item .nav-link {
    font-family: "Solway-Reg";
    color: #4D4D4D;
    /* background-color: aquamarine; */
    /* margin-right: 15px; */
}

header .mynav .dropdown-toggle::after {
    display: inline-block;
    width: .3em;
    height: .3em;
    margin: -.3em 0 0 .4em;
    vertical-align: middle;
    content: "";
    border: .3em solid;
    border-width: 0 .15em .15em 0;
    transform: rotateZ(45deg)
}

header .mynav .dropdown-menu .dropdown-item {
    font-family: "Solway-Reg";
    color: #F2F2F2;
}

header .mynav .dropdown-menu {
    background-color: #2D6D95;
    transition: all 0.5s;
    border: none;
}

header .mynav .dropdown-menu:hover {
    background-color: #2D6D95;
}

header .mynav .dropdown-menu .dropdown-item:hover {
    background: #F2F2F2;
    color: #2D6D95;
}

header .mynav .nav-menu .nav-item .nav-link.active {
    color: #2D6D95;
    /* background-color: chartreuse; */
}

header .mynav .social-icons a {
    padding: 20px;
    text-decoration: none;
}

header .mynav .social-icons i {
    font-size: 27px;
    color: #2D6D95;
}

.modal-dialog {
    max-width: 1037px;
}

.modal-header {
    background: #fff;
}

.modal-body {
    padding: 0;
    background-color: transparent;
}

.modal-content {
    background-color: transparent;
    border: 0;
}

.close-button {
    z-index: 1;
    background: aliceblue;
    right: 50px;
    top: 30px;
}

   </style>
</head>



<body>
    <div id="preloader">
        <div id="loader"></div>
      </div>
    <div>

        
        {{-- navbar --}}
        @include('layouts.header')

        <section class="mt7">
            @include('user.layouts.sidebar')

            @yield('content')
        </section>
        @include('user.layouts.footer')
    </div>

    @include('user.layouts.footer-scripts')
</body>

</html>
