@extends('theme.master')
@section('contact-active', 'active')
@section('content')
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
                                    width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
@endsection
