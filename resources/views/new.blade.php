
@extends('layout')
@section('title','Зоря Дніпра')
@section('new','active')

@section('content')
    <!-- Booking Section Start -->
    <div class="voffset-200 bg"></div>
    <!-- New Section Start -->
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

<!-- Booking Section Start -->
<section id="section-booking" class="section booking voffset-131 bg">

</section>

@endsection
