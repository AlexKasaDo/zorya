<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{__('main.description')}}">
    <meta name="author" content="casairis">



    <title>{{__('main.title')}} </title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" rel="stylesheet" type="image/x-icon" >

    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet" type="text/css" >

   

    <!-- Fonts -->

</head>
<body id="page-top" class="dark-version">
<!-- Start  Loading Mask-->
<div id="mask">
    <div class="material-icon">
        <div class="spinner">
            <div class="right-side">
                <div class="bar"></div>
            </div>
            <div class="left-side">
                <div class="bar"></div>
            </div>
        </div>
        <div class="spinner color-2">
            <div class="right-side">
                <div class="bar"></div>
            </div>
            <div class="left-side">
                <div class="bar"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Loading Mask-->

<!-- Navigation -->
<header class="container-fluid header js-header-fixsmall overlayer-fixed">
    <!-- Start Navbar-->

    @include('menu')


    <!-- End Navbar-->
</header>

@yield('content')

<!--[if IE]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
@include('footer')

