
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
<section id="section-gallery" data-aos="zoom-in" data-aos-duration="1000">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <h4 class="title center">Спецзаказ</h4>
                    </div>
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
                        <div class="history-content alignVCenter">
                            <div class="container-col">
                                <!--<h4 class="small medium right light">Discover your taste</h4>-->
                                <h4 class="white title">Тірольські</h4>
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
                <div class="tirolska history-size">
                </div>
            </div>
        </div>
</section>
<section id="section-history"  data-aos="fade-in" data-aos-duration="1000">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 equalHW padding0">
                <div class="salyami_asorti history-size">
                </div>
            </div>
            <div class="col-lg-6 equalHW padding0">
                <div  class="section specialities">
                    <div class="section history">
                        <div class="history-content alignVCenter">
                            <div class="container-col">
                                <!--<h4 class="small medium right light">Discover your taste</h4>-->
                                <h4 class="white title">Салямі Асорті</h4>
                                <div class="voffset-30"></div>
                                <p>  Склад: свинина напівжирна, свинина нежирна, яловичина вищого сорту,
                                    м&#39;ясо птиці, сіль кухонна, перець чорний мелений, перець духмяний мелений,
                                    цукор-пісок. </p>
                                <p>
                                    Поживна (харчова) цінність 100 g (г) продукту (середні значення):
                                    білки – 17,7 g (г); жири – 11,2 g (г) насичені жири –4,0 g (г);
                                    вуглеводи – 1,0 g (г) ; цукри - 1,0 g (г); сіль – 2,1 g (г).


                                </p>
                                <p>
                                    Енергетична цінність (калорійність) 100 g (г) продукту (середні
                                    значення): 736 kj (кДж) / 176 kcal (ккал).
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="section-history"  data-aos="fade-in" data-aos-duration="1000">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 equalHW padding0">
                <div  class="section specialities">
                    <div class="section history">
                        <div class="history-content alignVCenter">
                            <div class="container-col">
                                <!--<h4 class="small medium right light">Discover your taste</h4>-->
                                <h4 class="white title">Баликова з зеленню</h4>
                                <div class="voffset-30"></div>
                                <p>
                                    Склад: свинина, м&#39;ясо птиці, сіль кухонна, зелена цибуля, петрушка,
                                    гранульована паприка, кріп, цукор-пісок, перець чорний мелений, перець
                                    духмяний мелений, горіх мускатний мелений.
                                </p>
                                <p>
                                    Поживна (харчова) цінність 100 g (г) продукту (середні значення):
                                    білки – 18,0 g (г); жири – 8,1 g (г) насичені жири – 2,8 g (г);
                                    вуглеводи –1,0 g (г) ; цукор - 1,0 g (г); сіль – 2,1 g (г).

                                </p>
                                <p>
                                    Енергетична цінність (калорійність) 100 g (г) продукту (середні
                                    значення): 623 kj (кДж) / 149 kcal (ккал).
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 equalHW padding0">
                <div class="spicy_meet history-size">
                </div>
            </div>
        </div>
</section>
<section id="section-history"  data-aos="fade-in" data-aos-duration="1000">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 equalHW padding0">
                <div class="shinka_cut history-size">
                </div>
            </div>
            <div class="col-lg-6 equalHW padding0">
                <div  class="section specialities">
                    <div class="section history">
                        <div class="history-content alignVCenter">
                            <div class="container-col">
                                <!--<h4 class="small medium right light">Discover your taste</h4>-->
                                <h4 class="white title">Шинко-рубана</h4>
                                <div class="voffset-30"></div>
                                <p>  Склад: свинина, яловичина, вода питна, цукор-пісок, перець чорний або
                                    білий мелені, перець духмяний мелений, часник свіжий. </p>
                                <p>
                                    Поживна (харчова) цінність 100 g (г) продукту: білки -
                                    13,0 g (г); жири –25,0 g (г); вуглеводи –
                                    2,0 g (г).


                                </p>
                                <p>
                                    Енергетична цінність (калорійність) 100 g (г) продукту: 1192,4 kj (кДж) /
                                    285 kcal (ккал).
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="section-history"  data-aos="fade-in" data-aos-duration="1000">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 equalHW padding0">
                <div  class="section specialities">
                    <div class="section history">
                        <div class="history-content alignVCenter">
                            <div class="container-col">
                                <!--<h4 class="small medium right light">Discover your taste</h4>-->
                                <h4 class="white title">Баликова з зеленню</h4>
                                <div class="voffset-30"></div>
                                <p>
                                    Склад: свинина, м&#39;ясо птиці, сіль кухонна, зелена цибуля, петрушка,
                                    гранульована паприка, кріп, цукор-пісок, перець чорний мелений, перець
                                    духмяний мелений, горіх мускатний мелений.
                                </p>
                                <p>
                                    Поживна (харчова) цінність 100 g (г) продукту (середні значення):
                                    білки – 18,0 g (г); жири – 8,1 g (г) насичені жири – 2,8 g (г);
                                    вуглеводи –1,0 g (г) ; цукор - 1,0 g (г); сіль – 2,1 g (г).

                                </p>
                                <p>
                                    Енергетична цінність (калорійність) 100 g (г) продукту (середні
                                    значення): 623 kj (кДж) / 149 kcal (ккал).
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 equalHW padding0">
                <div class="spicy_meet history-size">
                </div>
            </div>
        </div>
</section>


<!-- History Section End -->

<!-- Booking Section Start -->
<section id="section-booking" class="section booking">

</section>

@include('footer')


