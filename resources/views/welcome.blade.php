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


        <title>Зоря Дніпра - Про нас скаже наша продукція! </title>
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
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <a class="navbar-brand" href="{{ route('index') }}"><img alt="" src="{{ asset('img/demo/dark-version//logos/logo-slider-white.png') }}" alt="logo"></a>
                        <a class="navbar-brand black" href="/"><img alt="" src="{{ asset('img/demo/dark-version//logos/logo-slider-black.png') }}" alt="logo"></a>
                    </div>
                    <div class="d-flex justify-content-center onlydesktop">
                        <ul class="navbar">
                            <li><a href="#section-home" class="animatedScroll nav-link active">Головна</a></li>
                            <li class="nav-item dropdown" ><a class="nav-link dropdown-toggle"  href="section-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Продукція</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class=" dropdown-item" href="delicacies.php" >Делікатеси</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="boiled-sausages.php" >Варені ковбаси</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="boiled-sausages.php">Вищий сорт</a></li>
                                            <li><a class="dropdown-item" href="first-class.php">Перший сорт</a></li>
                                            <li><a class="dropdown-item" href="#">Другий сорт</a></li>

                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="sausages.php" >Сардельки</a></li>
                                    <li><a class=" dropdown-item " href="sausagesupper.php" >Сосиски</a></li>
                                    <li> <a class="dropdown-item" href="boiled-shinki.php" >Шинки Варені</a></li>
                                    <li> <a class="dropdown-item"  href="semi-smoked.php" >Напівкопчені ковбаси </a></li>
                                    <li> <a class="dropdown-item"  href="smoked-cheese.php" >Сирокопчені ковбаси</a></li>
                                    <li> <a class="dropdown-item"  href="specorder.php" >Спецзаказ</a></li>
                                    <li> <a class="dropdown-item"  href="half_product.php" >Напівфабрикати </a></li>
                                </ul>
                            </li>
                            <li ><a class="animatedScroll nav-link"  href="#section-gallery" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Галерея</a></li>
                            <li><a class="animatedScroll nav-link" href="#section-teamSection">Новинки</a></li>
                            <li><a class=" nav-link" href="/vacancies.php">Вакансії</a></li>
                            <li><a class="animatedScroll nav-link" href="#section-booking">Контакти</a></li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-end">
                        <ul class="navbar float-right onlydesktop">
                            <li><a class="fb-ic mr-3" href="http://www.facebook.com" target="_blank" role="button"><i class="fab fa-lg fa-facebook-f"></i></a></li>
                            <li><a class="tw-ic mr-3" href="https://www.instagram.com/zorya_dnepra"  target="_blank" role="button"><i class="fab fa-lg fa-instagram"></i></a></li>
                        </ul>
                        <ul class="navbar">
                            <li class="hambuger onlyresponsive">
                                <button id="trigger-overlay" class="trigger-overlay dropdown-icon"><span></span></button>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay overlay-hugeinc">
            <div class="overlay-content"><span class="trigger-overlay"></span>
                <nav id="nav">
                    <ul>
                        <li class="current"><a href="#section-home" class="animatedScroll">Головна</a></li>
                        <li><a href="#section-menu" class="animatedScroll">Продукція</a></li>
                        <li><a href="#section-gallery" class="animatedScroll">Галерея</a></li>
                        <li><a href="#section-teamSection" class="animatedScroll">Новинки</a></li>
                        <li><a href="#section" class="animatedScroll">Вакансії</a></li>
                        <li><a href="#section-booking" class="animatedScroll">Контакти</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Navbar-->
    </header>

    <!--[if IE]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

    <!-- Hero Section  Start -->
    <section id="section-home" class="slider slide-overlay-black">
        <!-- START REVOLUTION -->
        <div class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider"  data-version="5.0">
                <ul>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="img/demo/dark-version//slider-design/sliderbg1.jpg" data-title="Slide Title" data-transition="slotfade-horizontal">
                        <img alt=""  class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('img/demo/dark-version/slider-design/sliderbg1.jpg') }}">

                        <div class="tp-caption"
                             data-x="['center']"
                             data-hoffset="['15','135','15','15']"
                             data-voffset="['-80']"
                             data-x="['center']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['center']"
                             data-frames='[{"from":"opacity: 0;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:50px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity: 1;auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>Ласкаво просимо</h2>
                        </div>

                        <div class="tp-caption"
                             data-x="['center']"
                             data-hoffset="['15','135','15','15']"
                             data-voffset="['0']"
                             data-x="['center']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['center']"
                             data-frames='[{"from":"opacity: 0;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:50px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity: 1;auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <p class="title">Про нас скаже наша продукція</p>
                        </div>

                        <div class="tp-caption"
                             data-responsive_offset="on"
                             data-x="['center']"
                             data-hoffset="['15','135','15','15']"
                             data-voffset="['100']"
                             data-x="['center']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['center']"
                             data-frames='[{"from":"opacity: 0;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:50px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity: 1;auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <p class="description">З нами смачно </p>

                        </div>

                        <div class="tp-caption"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['1170','1170','1170','420']"
                             data-whitespace="normal"
                             data-voffset="['200']"
                             data-x="['center']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['center']"
                             data-frames='[{"from":"opacity: 0;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity: 1;auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btns-box">
                                <a href="#section-menu" class="animatedScroll theme-btn btn-style-one bt-orange">Продукція</a>

                            </div>
                        </div>
                    </li>


                </ul>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!-- END OF SLIDER WRAPPER -->
        <a class="scroll-down animatedScroll" href="#section-menu"><span></span></a>
    </section>
    <!-- Hero Section End -->

    <div class="voffset-131 big"></div>

    <!-- Specialities Section Start -->
    <!--<section id="section-specialities" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12" >
                    <h4 class="small center">Бренды</h4>
                    <h4 class="center title">Торговые марки</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                  <div  class="section specialities">
                    <div class="voffset-50"></div>
                    <div class="row">
                        <div class="contentslide slide-specialities" >
                            <div class="sliderslide col-lg-4 equalHW">
                                <div class="sliderslide-content specialities">
                                <img alt=""  src="img/demo/dark-version//svg/hamburger.svg" class="filter" alt="Gourmet Burgers" />
                                    <div class="voffset-15"></div>
                                    <h4>Название торговой марки</h4>
                                    <div class="voffset-20"></div>
                                    <p>A winning gourmet burger comes down to four things. A patty to be proud of, a sauce to make your mouth water, a great bun and, of course, a side order of potatos</p>
                                </div>
                            </div>
                            <div class="sliderslide col-lg-4 equalHW">
                                <div class="sliderslide-content specialities">
                                <img alt=""  src="img/demo/dark-version//svg/salad.svg" class="filter" alt="Healthy Salads"/>
                                    <div class="voffset-15"></div>
                                    <h4>Название торговой марки</h4>
                                    <div class="voffset-20"></div>
                                    <p>Salads can be healthy, satisfying meals on their own or perfect accompaniments to main dishes. Whatever sort of salad you're after, we've got a great selection</p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="voffset-80"></div>
                </div>
            </div>
        </div>
    </section>
    -->
    <!-- Specialities Section Start -->

    <div class="voffset-131"></div>

    <!-- History Section Start -->
    <section id="section-history"  data-aos="fade-in" data-aos-duration="1000">

    </section>
    <!-- History Section End -->

    <div class="voffset-131"></div>

    <!-- Featured Section Start -->
    <section  id="section-menu" data-aos="fade-right" data-aos-duration="1000">
        <div class="row justify-content-md-center">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12">
                            <h4 class="small center">Продукція</h4>
                        </div>
                    </div>
                </div>
                <div class="section menu">
                    <div class="container-fluid">
                        <div class="voffset-50"></div>
                        <div class="row featured-carrusel">
                            <div class="col-lg-3">
                                <div class="featured-image">
                                    <img  src="{{ asset('img/demo/dark-version/featured/01.jpg') }}" alt="Featured" />
                                </div>
                                <div class="featured-info">
                                    <div class="featured-text">
                                        <p>Шинки варені</p>

                                    </div>
                                    <div class="featured-button">
                                        <a href="boiled-shinki.php" class="bt-orange featured"><span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="featured-image">
                                    <img  src="{{ asset('img/demo/dark-version/featured/02.jpg') }}" alt="Featured" />
                                </div>
                                <div class="featured-info">
                                    <div class="featured-text">
                                        <p>Варені ковбаси</p>

                                    </div>
                                    <div class="featured-button">
                                        <a href="boiled-sausages.php" class="bt-orange featured"><span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="featured-image">
                                    <img   src="{{ asset('img/demo/dark-version/featured/03.jpg') }}"  alt="Featured" />
                                </div>
                                <div class="featured-info">
                                    <div class="featured-text">
                                        <p>Сардельки</p>

                                    </div>
                                    <div class="featured-button">
                                        <a href="sausages.php" class="bt-orange featured"><span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="featured-image">
                                    <img src="{{ asset('img/demo/dark-version/featured/04.jpg') }}" alt="Featured" />
                                </div>
                                <div class="featured-info">
                                    <div class="featured-text">
                                        <p>Напівкопчені</p>

                                    </div>
                                    <div class="featured-button">
                                        <a href="semi-smoked.php" class="bt-orange featured"><span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="featured-image">
                                    <img  src="{{ asset('img/demo/dark-version/featured/05.jpg') }}" alt="Featured" />
                                </div>
                                <div class="featured-text">
                                    <p>Делікатеси</p>

                                </div>
                                <div class="featured-button">
                                    <a href="delicacies.php" class="bt-orange featured"><span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="featured-image">
                                    <img  src="{{ asset('img/demo/dark-version/featured/06.jpg') }}" alt="Featured" />
                                </div>
                                <div class="featured-text">
                                    <p>Сирокопчена</p>

                                </div>
                                <div class="featured-button">
                                    <a href="smoked-cheese.php" class="bt-orange featured"><span><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <div class="voffset-131"></div>

    <!-- Menu Section Start -->
    <section  id="section-ppal-menu" data-aos="fade-in" data-aos-duration="1000">

    </section>
    <!-- Menu Section End -->

    <div class="voffset-131"></div>





    <div class="voffset-131"></div>

    <!-- Testimonials Section Start -->
    <section data-aos="fade-in" data-aos-duration="1000">

    </section>
    <!-- Testimonials Section End -->

    <div class="voffset-131"></div>

    <!-- Team Section Start -->
    <section id="section-teamSection" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <h4 class="small center">Бренди</h4>
                    <h4 class="title center">Новинки</h4>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <div class="voffset-50"></div>
                    <div class="row">
                        <div class="contentslide slide-team" >
                            <div class="sliderslide col-4">
                                <div class="sliderslide-content center">
                                    <img src="{{ asset('img/demo/dark-version/team/z_parmezanom.jpg') }}" class="nofilter" alt="Галицька" />
                                    <div class="voffset-40"></div>
                                    <h4 class="center">З Пармезаном</h4>
                                    <p class="center">Ковбаса сиров’ялена вищого сорту</p>
                                    <div class="voffset-40"></div>
                                </div>
                            </div>
                            <div class="sliderslide col-4">
                                <div class="sliderslide-content center">
                                    <img src="{{ asset('img/demo/dark-version/team/zamkova3953.jpg') }}" class="nofilter" alt="Замкова"/>
                                    <div class="voffset-40"></div>
                                    <h4 class="center">Замкова</h4>
                                    <p class="center">Ковбаса напівкопчена вищого сорту</p>
                                    <div class="voffset-40"></div>
                                </div>
                            </div>
                            <div class="sliderslide col-4">
                                <div class="sliderslide-content center">
                                    <img src="{{ asset('img/demo/dark-version/team/moskowska.jpg') }}" class="nofilter" alt="Московська"/>
                                    <div class="voffset-40"></div>
                                    <h4 class="center">Московська</h4>
                                    <p class="center">Ковбаса варено-копчена вищого сорту</p>
                                    <div class="voffset-40"></div>
                                </div>
                            </div>
                            <div class="sliderslide col-4">
                                <div class="sliderslide-content center">
                                    <img src="{{ asset('img/demo/dark-version/team/sosiski_Avstriys\'ki.jpg') }}" class="nofilter" alt="Тірольські"/>
                                    <div class="voffset-40"></div>
                                    <h4 class="center">Австрійські</h4>
                                    <p class="center">Сосиски вищого сорту</p>
                                    <div class="voffset-40"></div>
                                </div>
                            </div>
                            <div class="sliderslide col-4">
                                <div class="sliderslide-content center">
                                    <img src="{{ asset('img/demo/dark-version/team/sardel\'ki_Shkol\'ni.jpg') }}" class="nofilter" alt="Тірольські"/>
                                    <div class="voffset-40"></div>
                                    <h4 class="center">Шкільні</h4>
                                    <p class="center">Сосиски вищого сорту</p>
                                    <div class="voffset-40"></div>
                                </div>
                            </div>
                            <div class="sliderslide col-4">
                                <div class="sliderslide-content center">
                                    <img src="{{ asset('img/demo/dark-version/team/meet3949.jpg') }}" class="nofilter" alt="М’ясницька" />
                                    <div class="voffset-40"></div>
                                    <h4 class="center">М’ясницька</h4>
                                    <p class="center">Ковбаса напівкопчена першого сорту</p>
                                    <div class="voffset-40"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="voffset-80"></div>
            </div>

        </div>
    </section>
    <!-- Team Section Start -->

    <div class="voffset-131 bg"></div>

    <!-- Booking Section Start -->
    <section id="section-booking" class="section booking">

    </section>
    <!-- Booking Section End -->



    <!-- Footer Section Start -->
    <footer>
        <div class="voffset-50"></div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <a href="/"><img  class="logo" src="{{ asset('img/demo/dark-version/logos/logo-slider-white.png') }}" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="voffset-50"></div>
                    <div class="col-footer-1" >
                        <h4>Про компанію</h4>
                        <p>Про нас скаже наша продукція!</p>
                        <p>З нами смачно.</p>
                    </div>
                    <div class="col-footer-2">
                        <h4>Отримати новини</h4>
                        <form action="#" method="post" id="newsform" class="booking-form">
                            <div class="form-group ">
                                <label for="input-news"></label>
                                <input name="date" type="text" class="form-control" id="input-news" placeholder="Введіть e-mail">
                                <button type="submit" value="" class="bt-orange">
                                    <span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version//particles/arrow.svg') }}"/>
                                    </span>
                                </button>
                            </div>
                            <div class="voffset-50"></div>

                        </form>
                    </div>
                    <div class="col-lg-5 col-footer-3 footer-contact">
                        <h4>Контакти</h4>
                        <p>
                            <span>вул. В. Сухомлинського </span>
                            <span>+38 (067) 231-59-57</span>
                            <span>буд. 74 А, смт Слобожанське <br>
                            Дніпровський р-н Дніпропетровська обл. Україна</span>
                            <span><a href="mailto:zoryadnepra@gmail.com">zoryadnepra@gmail.com</a></span>

                        </p>
                    </div>
                </div>
                <div class="voffset-50"></div>
            </div>
            <div class="container-fluid">
                <div class="col-12 copyright">
                    <div class="voffset-20"></div>
                    <div class="row">
                        <p>Copyright 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Booking Section End -->

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery.timepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>


    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{ asset('vendor/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/revolution/js/extensions/revolution.extensions.all.js') }}"></script>


    <!-- Animation On Screen -->
    <script type="text/javascript" src="{{ asset('vendor/aos/js/aos.js') }}"></script>

    <!-- Slick Slider -->
    <script type="text/javascript" src="{{ asset('vendor/slick/slick.js') }}"></script>

    <!-- Masonry -->
    <script type="text/javascript" src="{{ asset('vendor/masonry/js/isotope.pkgd.js') }}"></script>

    <!-- LightGallery -->
    <script type="text/javascript" src="{{ asset('vendor/lightGallery/js/lightgallery.js') }}"></script>


    <!-- Custom scripts for this template -->
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    </body>

</html>
