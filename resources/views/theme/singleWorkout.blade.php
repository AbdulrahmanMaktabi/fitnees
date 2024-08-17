@extends('theme.master')
@section('content')
    <!-- Workout Details Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $workout->name }}</h1>
                <p class="lead">{{ $workout->description }}</p>
                <hr>
                <h3 class="mt-4">Exercises</h3>

                <!-- Exercise List -->
                <div class="list-group">
                    @php
                        $exerciseIds = json_decode($workout->exercises, true); // Decode JSON to array
                        if (!empty($exerciseIds)) {
                            $exercises = \App\Models\Exercise::whereIn('id', $exerciseIds)->get();
                        }
                    @endphp
                    @if (isset($exercises))
                        @foreach ($exercises as $exercise)
                            <div class="list-group-item list-group-item-action mb-3">
                                <img src="{{ asset('storage') }}/exercises/{{ $exercise->image }}" class="card-img-top"
                                    alt="Exercise Image"
                                    style="max-width: 350px; text-align: center; display: flex; margin: 0 auto;">

                                <div class="d-flex mt-5 w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $exercise->name }}</h5>
                                    <small class="text-muted">{{ $exercise->sets }} Sets x {{ $exercise->reps }}
                                        Reps</small>
                                </div>
                                <p class="mb-1">A great exercise to strengthen your {{ $exercise->muscle_group }}.</p>
                                <small class="text-muted">Rest: {{ $exercise->rest_period }} seconds</small>
                            </div>
                        @endforeach
                    @endif


                    <!-- Add more exercises as needed -->
                </div>
            </div>

            <!-- Sidebar Section -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('storage') }}/workouts/{{ $workout->image }}" class="card-img-top"
                        alt="Workout Image">
                    <div class="card-body">
                        <h5 class="card-title">Workout Information</h5>
                        <p class="card-text"><strong>Duration:</strong> {{ $workout->duration }} Minutes</p>
                        <p class="card-text"><strong>Level:</strong> {{ $workout->level }}</p>
                        <p class="card-text"><strong>Equipment:</strong> Bodyweight</p>
                        <p class="card-text"><strong>Target:</strong> Full Body</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
