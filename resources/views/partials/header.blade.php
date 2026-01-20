 <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                               <a href="{{route('home')}}"><img src="{{asset('assets/img/logo/logo2.png')}}" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="{{ route('home') }}">Početna</a></li>
                                        <li><a href="{{ route('apartments') }}">Apartmani</a></li>
                                        <li><a href="{{ route('blog') }}">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                                <li><a href="{{ route('single_blog')}}">Single blog</a></li>
                                                <li><a href="{{ route('elements')}}">Elementi</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('about') }}">O nama</a></li>
                                        <li><a href="{{ route('contact') }}">Kontakt</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-3">
                            <!-- header-btn -->
                            <div class="header-btn">
                                <a href="#" class="btn btn1 d-none d-lg-block">Rezeviraj sada</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->