
<div class="row justify-content-center">
    <div class="col-12">
        <div class="row justify-content-between">
            <div class="col-auto">
                <a class="navbar-brand" href="{{ route('index') }}"><img alt="" src="{{ asset('img/demo/dark-version/logos/logo-slider-white.png') }}" alt="logo"></a>
                <a class="navbar-brand black" href="/"><img alt="" src="{{ asset('img/demo/dark-version/logos/logo-slider-black.png') }}" alt="logo"></a>
            </div>

            <div class="d-flex justify-content-center onlydesktop">
                <ul class="navbar">
                    <li><a href="{{ route('home') }}" class="nav-link @yield('menu.home')">{{__('menu.home')}}</a></li>
                    <li class="nav-item dropdown" ><a class="nav-link dropdown-toggle @yield('delicacies') "  href="section-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('menu.product')}}</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class=" dropdown-item " href="{{ route('delicacies') }}" >{{__('menu.delicacies')}}</a></li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="boiled-sausages.php" >{{__('menu.boiled')}}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('highest_class') }}">{{__('menu.highest')}}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('first_class') }}">{{__('menu.first')}}</a></li>
                                    <li><a class="dropdown-item" href="#">{{__('menu.second')}}</a></li>

                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('bigsausages') }}" >{{__('menu.bigsausages')}}</a></li>
                            <li><a class="dropdown-item" href="{{ route('bigsausages') }}" >{{__('menu.sausages')}}</a></li>
                            <li> <a class="dropdown-item" href="{{ route('ham') }}" >{{__('menu.ham')}}</a></li>
                            <li> <a class="dropdown-item"  href="{{ route('semi_smoked')}}" >{{__('menu.semi')}}</a></li>
                            <li> <a class="dropdown-item"  href="{{ route('cheese_smoked') }}" >{{__('menu.cheese')}}</a></li>
                            <li> <a class="dropdown-item"  href="{{ route('specorder') }}" >{{__('menu.specorder')}}</a></li>
                            <li> <a class="dropdown-item"  href="{{ route('ready_to_cook_food') }}" >{{__('menu.half')}} </a></li>
                        </ul>
                    </li>
                    <li ><a class=" nav-link @yield('gallery.full')"  href="{{ route('gallery') }}"  aria-haspopup="true" aria-expanded="false">{{__('menu.gallery')}}</a></li>
                    <li><a class="nav-link @yield('new')" href="{{ route('new') }}">{{__('menu.new')}}</a></li>
                    <li><a class=" nav-link @yield('menu.vacancies')"  href="{{ route('vacancies') }}">{{__('menu.vacancies')}}</a></li>
                    <li><a class="animatedScroll nav-link" href="#section-booking">{{__('menu.contact')}}</a></li>
                </ul>
            </div>


            <div class="d-flex justify-content-end">
                <ul class="navbar float-right onlydesktop">
                    <li><a class="fb-ic mr-3" href="http://www.facebook.com" target="_blank" role="button"><i class="fab fa-lg fa-facebook-f"></i></a></li>
                    <li><a class="tw-ic mr-3" href="https://www.instagram.com/zorya_dnepra"  target="_blank" role="button"><i class="fab fa-lg fa-instagram"></i></a></li>
                    <li><a class="tw-ic mr-3" href="https://www.instagram.com/zorya_dnepra"  target="_blank" role="button">RU</a></li>
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
                <li class="current"><a href="{{ route('home') }}" >{{__('menu.home')}}</a></li>
                <li><a href="#section-menu" class="animatedScroll">{{__('menu.product')}}</a></li>
                <li><a href="{{ route('gallery') }}" >{{__('menu.gallery')}}</a></li>
                <li><a href="{{ route('new') }}" >{{__('menu.new')}}</a></li>
                <li><a href="{{ route('vacancies') }}" >{{__('menu.vacancies')}}</a></li>
                <li><a href="#section-booking" class="animatedScroll">{{__('menu.contact')}}</a></li>
            </ul>
        </nav>
    </div>
</div>
