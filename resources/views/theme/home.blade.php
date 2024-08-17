@extends('theme.master')
@section('home-active', 'active')
@section('content')
    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    About Energym
                </h2>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="{{ asset('assets') }}/images/about-img.png" alt="">
                </div>
                <div class="detail-box">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                    </p>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Our Services
                </h2>
            </div>
            <div class="service_container">
                @foreach ($workouts as $workout)
                    <div class="box">
                        <img src="{{ asset('storage') }}/workouts/{{ $workout->image }}" alt="">
                        <h6 class="visible_heading">
                            {{ $workout->name }}
                        </h6>
                        <div class="link_box">
                            <a href="{{ route('workouts.show', $workout) }}">
                                <img src="{{ asset('assets') }}/images/link.png" alt="">
                            </a>
                            <h6>
                                {{ $workout->name }}
                            </h6>
                        </div>
                    </div>
                @endforeach
                <div>
                    {{ $workouts->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

    <!-- end service section -->


    <!-- Us section -->

    <section class="us_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Why Choose Us
                </h2>
            </div>
            <div class="us_container">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('assets') }}/images/u-1.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            QUALITY EQUIPMENT
                        </h5>
                        <p>
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('assets') }}/images/u-2.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            HEALTHY NUTRITION PLAN
                        </h5>
                        <p>
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('assets') }}/images/u-3.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            SHOWER SERVICE
                        </h5>
                        <p>
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('assets') }}/images/u-4.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            UNIQUE TO YOUR NEEDS
                        </h5>
                        <p>
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end us section -->


    <!-- client section -->

    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    What Says Our Customers
                </h2>
            </div>
            <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets') }}/images/client.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Consectetur
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets') }}/images/client.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Consectetur
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets') }}/images/client.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Consectetur
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <ol class="carousel-indicators">
        <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
        <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
    </ol>
    <!-- end client section -->

    <!-- result section -->

    <section class="result_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="img-box">
                        <img src="{{ asset('assets') }}/images/result-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="detail-box">
                        <h2>
                            BUILT TO BRING <br>
                            BEST RESULTS
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                        </p>
                        <a href="">
                            Get A Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end result section -->


    <!-- contact section -->
    <section class="contact_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    <span>
                        Get In Touch
                    </span>
                </h2>
            </div>
            <div class="layout_padding2-top">
                <div class="row">
                    <div class="col-md-6 ">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="contact_form-container">
                                <div>
                                    <div>
                                        <input type="text" placeholder="Name" name="name"
                                            value="{{ @old('name') }}" />
                                        @error('name')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <input type="email" placeholder="Email" name="email"
                                            value="{{ @old('email') }}" />
                                        @error('email')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Phone Number" name="phone"
                                            value="{{ @old('phone') }}" />
                                        @error('phone')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mt-5">
                                        <input type="text" placeholder="Message" name="message"
                                            value="{{ @old('message') }}" />
                                        @error('message')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit">
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="map_container">
                            <div class="map-responsive">
                                <iframe
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                    width="600" height="300" frameborder="0"
                                    style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
    {{-- alerts --}}
    @if (session('login'))
        <div class="alert alert-success" role="alert" style="position: fixed; bottom:10px; right: 10px;">
            {{ session('login') }}
        </div>
    @endif
    @if (session('logout'))
        <div class="alert alert-success" role="alert" style="position: fixed; bottom:10px; right: 10px;">
            {{ session('logout') }}
        </div>
    @endif
    @if (session('contactMsg'))
        <div class="alert alert-success" role="alert" style="position: fixed; bottom:10px; right: 10px;">
            {{ session('contactMsg') }}
        </div>
    @endif
    @if (session('newsletter'))
        <div class="alert alert-success" role="alert" style="position: fixed; bottom:10px; right: 10px;">
            {{ session('newsletter') }}
        </div>
    @endif

@endsection
