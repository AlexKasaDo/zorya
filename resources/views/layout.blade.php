<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Зоря Дніпра &#8211; Про нас скаже наша продукція! Висока якість продукції вищого і першого сорту
зроби ваше життя щасливішим! &hellip;">
    <meta name="author" content="">



    <title>@yield('title',"Зоря Дніпра - Про нас скаже наша продукція!") </title>
    <link href="{{ asset('img/favicon.ico') }}" rel="stylesheet" type="img" >

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css" >



    <link href="{{ asset('vendor/revolution/css/revolution.all.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/revolution/css/revolution.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/aos/css/aos.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/jquery/jquery-ui.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/jquery/jquery.timepicker.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/lightGallery/css/lightgallery.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >




    <!-- Modernizr -->
    <script type="text/javascript" src="{{ asset('vendor/modernizr.js') }}"></script>

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

