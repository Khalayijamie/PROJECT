<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="#"><img src="home/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                          
                                            <li><a href="{{ url('userpage') }}">Home</a></li>
                                            <li><a href="{{url('about')}}">About</a></li>
                                            <li><a href="#services-section" id="services" for="services">Services</a></li>

                                            <li><a href="{{url('blog')}}">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="{{url('blog')}}">Blog</a></li>
                                                    <li><a href="{{url('blog-details')}}">Blog Details</a></li>
                                                   
                                                </ul>
                                            </li>
                                            <li><a href="{{url('contact')}}">Contact</a></li>

                                            <li><a href="{{url('show_cart')}}">Cart</a></li>

                                            <li><a href="{{url('show_order')}}">Order</a></li>

                                           

                                            @if (Route::has('login'))

                                            @auth
                                            <li><x-app-layout>
    
                                            </x-app-layout></li>

                                            @else
                                            <li><a class="btn btn-primary" href="{{ route('login') }}">Login</a></li>
                                            <li><a class="btn btn-primary" href="{{ route('register') }}">Register</a></li>
                                            @endauth

                                            @endif


                                           
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="{{url('contact')}}" class="btn header-btn"><img src="home/assets/img/icon/smartphone.svg" alt="">254 712345678</a>

                                </div>
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
    </div>
    <!-- Header End -->
</header>