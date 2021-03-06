
<!-- Footer Section Start -->
<footer>
    <div class="voffset-50"></div>
    <div class="row">
        <div class="container">
            <div class="row">
{{--                <div class="col-12">--}}
{{--                    <div class="row justify-content-between">--}}
{{--                        <div class="col-auto">--}}
{{--                            <a href="/"><img  class="logo" src="{{ asset('img/demo/dark-version/logos/logo-slider-white.png') }}" alt="logo"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="voffset-50"></div>
                <div class="col-footer-1" >
                    <h4>{{__('footer.about')}}</h4>
                    <p>{{__('footer.title')}}</p>
                    <p>{{__('footer.sub_title')}}</p>
                </div>
                <div class="col-footer-2">
                    <h4>{{__('footer.get_news')}}</h4>
                    <form action="#" id="newsform" class="booking-form">
                        <div class="form-group ">
                            <label for="input-news"></label>
                            <input name="date" type="text" class="form-control" id="input-news" placeholder="{{__('footer.email')}}">
                            <button type="submit" value="" class="bt-orange">
                                    <span class="left0"><img alt=""  src="{{ asset('img/demo/dark-version//particles/arrow.svg') }}"/>
                                    </span>
                            </button>
                        </div>
                        <div class="voffset-50"></div>

                    </form>
                </div>
                <div class="col-lg-5 col-footer-3 footer-contact">
                    <h4>{{__('footer.contacts')}}</h4>
                    <p>
                        <span>{{__('footer.street')}} </span>
                        <span>+38 (067) 231-59-57</span>
                        <span>{{__('footer.house')}}<br>
                            {{__('footer.city')}}</span>
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

<!-- Modernizr -->
<script type="text/javascript" src="{{ asset('vendor/modernizr.js') }}"></script>
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
