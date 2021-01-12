@extends('layout')
@section('title')
@section('menu.home','active')
@section('content')
    <!-- Hero Section  Start -->
    <section id="section-home" class="slider slide-overlay-black">
        <!-- START REVOLUTION -->
        <div class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider"  data-version="5.0">
                <ul>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-title="Slide Title" data-transition="slotfade-horizontal">
                        <img alt=""  class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                             srcset="{{ asset('img/demo/dark-version/slider-design/sliderbg-380w.jpg') }} 320w,
                                         {{ asset('img/demo/dark-version/slider-design/sliderbg-480.jpg') }} 480w,
                                         {{ asset('img/demo/dark-version/slider-design/sliderbg-992.jpg') }} 800w,
                                         {{ asset('img/demo/dark-version/slider-design/sliderbg-1200w.jpg') }} 1200w"
                             sizes="(max-width: 320px) 280px,
                                    (max-width: 480px) 440px,
                                                       800px"
                             src="{{ asset('img/demo/dark-version/slider-design/sliderbg-1200w.jpg') }}">

                        <div class="tp-caption"
                             data-x="['center']"
                             data-hoffset="['15','135','15','15']"
                             data-voffset="['-80']"
                             data-x="['center']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['center']"
                             data-frames='[{"from":"opacity: 0;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:50px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity: 1;auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h1>{{__('main.h1_title')}}</h1>
                        </div>


                        <div class="tp-caption"
                             data-x="['center']"
                             data-hoffset="['15','135','15','15']"
                             data-voffset="['0']"
                             data-x="['center']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['center']"
                             data-frames='[{"from":"opacity: 0;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:50px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity: 1;auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <p class="title">{{__('main.sub_title')}}</p>
                        </div>

{{--                        <div class="tp-caption"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-x="['center']"--}}
{{--                             data-hoffset="['15','135','15','15']"--}}
{{--                             data-voffset="['100']"--}}
{{--                             data-x="['center']"--}}
{{--                             data-y="['middle','middle','middle','middle']"--}}
{{--                             data-textalign="['center']"--}}
{{--                             data-frames='[{"from":"opacity: 0;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:50px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity: 1;auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <p class="description">З нами смачно </p>--}}

{{--                        </div>--}}

                        <div class="tp-caption"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['1920','1920','1920','520']"
                             data-whitespace="normal"
                             data-hoffset="['15','135','15','15']"
                             data-voffset="['120']"
                             data-x="['center']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['center']"
                             data-frames='[{"from":"opacity: 0;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity: 1;auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btns-box">
                                <a href="#section-menu" class="animatedScroll theme-btn btn-style-one bt-orange">{{__('main.main_button')}}</a>

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
                            <h4 class="small center">{{__('main.title_production')}}</h4>
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
                                        <p>{{__('main.ham')}}</p>

                                    </div>
                                    <div class="featured-button">
                                        <a href="{{ route('ham') }}" class="bt-orange featured"><span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="featured-image">
                                    <img  src="{{ asset('img/demo/dark-version/featured/02.jpg') }}" alt="Featured" />
                                </div>
                                <div class="featured-info">
                                    <div class="featured-text">
                                        <p>{{__('main.cooked_sausage')}}</p>

                                    </div>
                                    <div class="featured-button">
                                        <a href="{{ route('highest_class') }}" class="bt-orange featured"><span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="featured-image">
                                    <img   src="{{ asset('img/demo/dark-version/featured/03.jpg') }}"  alt="Featured" />
                                </div>
                                <div class="featured-info">
                                    <div class="featured-text">
                                        <p>{{__('main.big_sausages')}}</p>

                                    </div>
                                    <div class="featured-button">
                                        <a href="{{ route('bigsausages') }}" class="bt-orange featured"><span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="featured-image">
                                    <img src="{{ asset('img/demo/dark-version/featured/04.jpg') }}" alt="Featured" />
                                </div>
                                <div class="featured-info">
                                    <div class="featured-text">
                                        <p>{{__('main.half')}}</p>

                                    </div>
                                    <div class="featured-button">
                                        <a href="{{ route('semi_smoked')}}" class="bt-orange featured"><span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="featured-image">
                                    <img  src="{{ asset('img/demo/dark-version/featured/05.jpg') }}" alt="Featured" />
                                </div>
                                <div class="featured-text">
                                    <p>{{__('main.delicacies')}}</p>

                                </div>
                                <div class="featured-button">
                                    <a href="{{ route('delicacies') }}" class="bt-orange featured"><span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="featured-image">
                                    <img  src="{{ asset('img/demo/dark-version/featured/06.jpg') }}" alt="Featured" />
                                </div>
                                <div class="featured-text">
                                    <p>{{__('main.cheese')}}</p>

                                </div>
                                <div class="featured-button">
                                    <a href="{{ route('cheese_smoked') }}" class="bt-orange featured"><span><img alt=""  src="{{ asset('img/demo/dark-version/particles/arrow.svg') }}"/></span></a>
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



    @include('gallery')

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
                    <h4 class="small center">{{__('news.brands')}}</h4>
                    <h4 class="title center">{{__('news.news')}}</h4>
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
                                    <h4 class="center">{{__('news.parmezan')}}</h4>
                                    <p class="center">{{__('news.parmezan_desc')}}</p>
                                    <div class="voffset-40"></div>
                                </div>
                            </div>
                            <div class="sliderslide col-4">
                                <div class="sliderslide-content center">
                                    <img src="{{ asset('img/demo/dark-version/team/zamkova3953.jpg') }}" class="nofilter" alt="Замкова"/>
                                    <div class="voffset-40"></div>
                                    <h4 class="center">{{__('news.zamkova')}}</h4>
                                    <p class="center">{{__('news.parmezan_desc')}}</p>
                                    <div class="voffset-40"></div>
                                </div>
                            </div>
                            <div class="sliderslide col-4">
                                <div class="sliderslide-content center">
                                    <img src="{{ asset('img/demo/dark-version/team/moskowska.jpg') }}" class="nofilter" alt="Московська"/>
                                    <div class="voffset-40"></div>
                                    <h4 class="center">{{__('news.moscow')}}</h4>
                                    <p class="center">{{__('news.moscow_desc')}}</p>
                                    <div class="voffset-40"></div>
                                </div>
                            </div>
                            <div class="sliderslide col-4">
                                <div class="sliderslide-content center">
                                    <img src="{{ asset('img/demo/dark-version/team/sosiski_Avstriys\'ki.jpg') }}" class="nofilter" alt="Тірольські"/>
                                    <div class="voffset-40"></div>
                                    <h4 class="center">{{__('news.austria')}}</h4>
                                    <p class="center">{{__('news.austria_desc')}}</p>
                                    <div class="voffset-40"></div>
                                </div>
                            </div>
                            <div class="sliderslide col-4">
                                <div class="sliderslide-content center">
                                    <img src="{{ asset('img/demo/dark-version/team/sardel\'ki_Shkol\'ni.jpg') }}" class="nofilter" alt="Тірольські"/>
                                    <div class="voffset-40"></div>
                                    <h4 class="center">{{__('news.school')}}</h4>
                                    <p class="center">{{__('news.school_desc')}}</p>
                                    <div class="voffset-40"></div>
                                </div>
                            </div>
                            <div class="sliderslide col-4">
                                <div class="sliderslide-content center">
                                    <img src="{{ asset('img/demo/dark-version/team/meet3949.jpg') }}" class="nofilter" alt="М’ясницька" />
                                    <div class="voffset-40"></div>
                                    <h4 class="center">{{__('news.meat')}}</h4>
                                    <p class="center">{{__('news.meat_desc')}}</p>
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
    <!-- New Section End -->

    <div class="voffset-131 bg"></div>

    <!-- Booking Section Start -->
    <section id="section-booking" class="section booking">

    </section>
    <!-- Booking Section End -->

@endsection

