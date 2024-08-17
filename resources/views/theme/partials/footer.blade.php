    <!-- info section -->

    <section class="info_section layout_padding2-top">
        <div class="container">
            <div class="info_form">
                <h4>
                    Our Newsletter
                </h4>
                <form action="{{ route('newsletter.store') }}" method="POST">
                    @csrf
                    <input type="text" placeholder="Enter your email" name="email">
                    @error('email')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <div class="d-flex justify-content-end">
                        <button>
                            subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h6>
                        About Energym
                    </h6>
                    <p>
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut
                        enim ad
                        minim veniam, quis nostrud exercitation u
                    </p>
                </div>
                <div class="col-md-2 offset-md-1">
                    <h6>
                        Menus
                    </h6>
                    <ul>
                        <li class=" active">
                            <a class="" href="{{ route('theme.home') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="">
                            <a class="" href="{{ route('theme.about') }}">About </a>
                        </li>
                        <li class="">
                            <a class="" href="{{ route('workouts.index') }}">Workouts </a>
                        </li>
                        <li class="">
                            <a class="" href="{{ route('theme.contact') }}">Contact Us</a>
                        </li>
                        <li class="">
                            <a class="" href="{{ route('theme.login') }}">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>
                        Useful Links
                    </h6>
                    <ul>
                        <li>
                            <a href="">
                                Adipiscing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Elit, sed
                            </a>
                        </li>
                        <li>
                            <a href="">
                                do Eiusmod
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Tempor
                            </a>
                        </li>
                        <li>
                            <a href="">
                                incididunt
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>
                        Contact Us
                    </h6>
                    <div class="info_link-box">
                        <a href="">
                            <img src="{{ asset('assets') }}/images/location-white.png" alt="">
                            <span> No.123, loram ipusm</span>
                        </a>
                        <a href="">
                            <img src="{{ asset('assets') }}/images/call-white.png" alt="">
                            <span>+01 12345678901</span>
                        </a>
                        <a href="">
                            <img src="{{ asset('assets') }}/images/mail-white.png" alt="">
                            <span> demo123@gmail.com</span>
                        </a>
                    </div>
                    <div class="info_social">
                        <div>
                            <a href="">
                                <img src="{{ asset('assets') }}/images/facebook-logo-button.png" alt="">
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="{{ asset('assets') }}/images/twitter-logo-button.png" alt="">
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="{{ asset('assets') }}/images/linkedin.png" alt="">
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="{{ asset('assets') }}/images/instagram.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info section --><!-- footer section -->
    <section class="container-fluid footer_section ">
        <p>
            &copy; 2019 All Rights Reserved. Design by
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </section>
    <!-- footer section -->
