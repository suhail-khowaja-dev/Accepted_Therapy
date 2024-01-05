<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>
<style type="text/css">
    #logo_padding {

        margin-top: 0;
        margin-bottom: 15px;
        padding-bottom: 0px;
        padding-top: 0px;

    }

</style>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="white">



                <img src="{{ url('/uploads/logo/' . logo_management()->header) }}" alt="navbar brand"
                    class="navbar-brand" width="150px">
                <!-- <img src="{{ asset('admin/assets_new/img/1x/fab.png') }}" alt="navbar brand" class="navbar-brand" height="35px" width="108px"> -->
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu" style="color: black"></i>
                    </button>
                </div>
            </div>

            <!-- End Logo Header -->

            <!-- Navbar Header -->
            @include('admin.layouts.navbar')
        </div>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
