@extends('theme.master')
@section('workout-active', 'active')
@section('content')
    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="container">

            <div class="heading_container">
                <h2>
                    Avaliable Workouts
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

            </div>
        </div>
    </section>

    <!-- end service section -->
    @if (session('create_success'))
        <div class="alert alert-success" role="alert" style="position: fixed; bottom:10px; right: 10px;">
            {{ session('create_success') }}
        </div>
    @endif
@endsection
