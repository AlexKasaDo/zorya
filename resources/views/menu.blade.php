
<div class="row justify-content-center">
    <div class="col-12">
        <div class="row justify-content-between">
            <div class="col-auto">
                <a class="navbar-brand" href="{{ route('index') }}"><img alt="logo"  src="
                    {{ asset('img/demo/dark-version/logos/logo_zorya_main.png') }}

                        "></a>
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
                    <li><a class="bt-orange bt-menu-reserve" href="{{ route('specorder') }}">{{__('menu.specorder')}}</a></li>
                    <li><a class="fb-ic mr-3" href="http://www.facebook.com" target="_blank" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" viewBox="0 0 264 512"><path d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"/></svg>
                        </a></li>
                    <li><a class="tw-ic mr-3" href="https://www.instagram.com/zorya_dnepra"  target="_blank" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"   viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                        </a></li>
                    <li><a class="tw-ic mr-3" href="{{ route('locale', __('main.set_lang_to_back')) }}"  target="_self" role="button">@lang('main.set_lang')</a></li>

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
