    <!-- slider section -->
    <section class=" slider_section position-relative">
        <div class="container">
            <div class="custom_nav2">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex  flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item @yield('home-active')">
                                    <a class="nav-link" href="{{ route('theme.home') }}">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item @yield('about-active')">
                                    <a class="nav-link" href="{{ route('theme.about') }}">About </a>
                                </li>
                                <li class="nav-item @yield('exercies-active')">
                                    <a class="nav-link" href="{{ route('exercises.index') }}">Exercises </a>
                                </li>
                                <li class="nav-item @yield('workout-active')">
                                    <a class="nav-link" href="{{ route('workouts.index') }}">Workouts </a>
                                </li>
                                <li class="nav-item @yield('contact-active')">
                                    <a class="nav-link" href="{{ route('theme.contact') }}">Contact Us</a>
                                </li>
                                @if (!Auth::check())
                                    <li class="nav-item @yield('login-active')">
                                        <a class="nav-link" href="{{ route('theme.login') }}">Login</a>
                                    </li>
                                @else
                                    <li class="nav-item @yield('login-active')">
                                        <form id="logout-form" method="POST" action="{{ route('theme.logout') }}"
                                            style="display: none;">
                                            @csrf
                                        </form>

                                        <a class="nav-link" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                    </li>
                                @endif
                            </ul>
                            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="slider_container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7">
                                    <div class="detail-box">
                                        <h2>
                                            Get Your Body
                                        </h2>
                                        <h1>
                                            Fitness Here
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut
                                            labore et dolore magna aliqua. Ut enim ad minim veniam
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Read More
                                            </a>
                                            <a href="" class="btn-2">
                                                Get A Quote
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="carousel-item ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                                    <div class="detail-box">
                                        <h2>
                                            Get Your Body
                                        </h2>
                                        <h1>
                                            Fitness Here
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut
                                            labore et dolore magna aliqua. Ut enim ad minim veniam
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Read More
                                            </a>
                                            <a href="" class="btn-2">
                                                Get A Quote
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                                    <div class="detail-box">
                                        <h2>
                                            Get Your Body
                                        </h2>
                                        <h1>
                                            Fitness Here
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut
                                            labore et dolore magna aliqua. Ut enim ad minim veniam
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Read More
                                            </a>
                                            <a href="" class="btn-2">
                                                Get A Quote
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->
