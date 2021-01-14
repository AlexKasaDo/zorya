
@section('title','Зоря Дніпра')
@section('delicacies','active')
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
<body id="page-top" class="bodypadding">
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
    @include('white.menu')
    <!-- End Navbar-->
</header>

<!--[if IE]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->


<div class="voffset-60"></div>
<!-- Gallery Section Start-->
<section id="section-gallery" class="border-bottom" data-aos="zoom-in" data-aos-duration="1000">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 logo_chumak ">
                        <a class="center" href="{{ route('ready_to_cook_food') }}">
                            <img class="rounded mx-auto d-block" src="{{ asset('img/demo/dark-version/logos/logo_half.png') }}" alt="logo"></a>
                    </div>
                </div>
                    <div class="col-lg-12 title ">
                        <h4 class="title center">{{__('menu.half')}}</h4>
                    </div>

            </div>
        </div>
    </div>

</section>
<!-- Gallery Section End-->
<!-- Specialities Section Start -->
<div class="voffset-131"></div>

<!-- History Section Start -->

<section id="section-history"  data-aos="fade-in" data-aos-duration="1000">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 equalHW padding0">
                <div  class="section specialities">
                    <div class="section history">
                        <div class="history-white-content alignVCenter">
                            <div class="container-col">
                                <!--<h4 class="small medium right light">Discover your taste</h4>-->
                                <h4 class="title">Напівфабрикати</h4>
                                <div class="voffset-30"></div>
                                <p>
                                    Склад: свинина, сало хребтове, яловичина, м&#39;ясо птиці, сіль кухонна, цукор-
                                    пісок, натуральні прянощі (перець духмяний мелений, перець чорний
                                    мелений).
                                </p>
                                <p>
                                    Поживна (харчова) цінність 100 g (г) продукту (середні значення):
                                    білки – 13,0 g (г); жири – 34,5 g (г) з них насичені жири – 14,5 g (г);
                                    вуглеводи –1,0 g (г) ; цукор - 1,0 g (г); сіль – 2,1 g (г).

                                </p>
                                <p>
                                    Енергетична цінність (калорійність) 100 g (г) продукту (середні
                                    значення): 1536 kj (кДж) / 367 kcal (ккал).
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 equalHW padding0">
                <div class=" history-size">
                </div>
            </div>
        </div>
</section>


<!-- Booking Section Start -->
<section id="section-booking" class="section booking">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="voffset-90"></div>
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12" data-aos-id="booking-section">
                        <!--<h4 class="small medium white">Let’s</h4>-->
                        <h4 class="white title">Зворотній зв'язок</h4>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#section-booking" method="post" id="bookingform" class="booking-form row">

                            <div class="voffset-20"></div>
                            <div class="form-group col-lg-12">
                                <input name="email" type="text" class="form-control" id="input-email" placeholder="Введіть  ім'я">
                            </div>
                            <div class="voffset-20"></div>
                            <div class="form-group col-lg-12">
                                <input name="email" type="text" class="form-control" id="input-email" placeholder="Введіть номер">
                            </div>

                            <div class="voffset-20"></div>
                            <div class="form-group col-lg-12">
                                <input name="email" type="text" class="form-control" id="input-email" placeholder="{{__('footer.email')}}">
                            </div>
                            <div class="voffset-40"></div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="" class="bt-orange left">Отправить<span><img alt=">" src="img/demo/particles/arrow.svg"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="voffset-100"></div>
            </div>
        </div>
    </div>
</section>

@include('footer')


