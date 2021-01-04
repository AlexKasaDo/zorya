
<div class="row justify-content-center">
    <div class="col-12">
        <div class="row justify-content-between">
            <div class="col-auto">
                <a class="navbar-brand" href="{{ route('index') }}"><img alt="" src="{{ asset('img/demo/dark-version//logos/logo-slider-white.png') }}" alt="logo"></a>
                <a class="navbar-brand black" href="/"><img alt="" src="{{ asset('img/demo/dark-version//logos/logo-slider-black.png') }}" alt="logo"></a>
            </div>

            <div class="d-flex justify-content-center onlydesktop">
                <ul class="navbar">
                    <li><a href="{{ route('home') }}" class="nav-link @yield('menu.home')">Головна</a></li>
                    <li class="nav-item dropdown" ><a class="nav-link @yield('delicacies') "  href="section-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Продукція</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class=" dropdown-item " href="{{ route('delicacies') }}" >Делікатеси</a></li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="boiled-sausages.php" >Варені ковбаси</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('delicacies') }}">Вищий сорт</a></li>
                                    <li><a class="dropdown-item" href="{{ route('delicacies') }}">Перший сорт</a></li>
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
                    <li ><a class=" nav-link @yield('gallery.full')"  href="{{ route('gallery') }}"  aria-haspopup="true" aria-expanded="false">Галерея</a></li>
                    <li><a class="nav-link @yield('new')" href="{{ route('new') }}">Новинки</a></li>
                    <li><a class=" nav-link @yield('menu.vacancies')"  href="{{ route('vacancies') }}">Вакансії</a></li>
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
