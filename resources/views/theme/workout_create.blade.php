@extends('theme.master')
@section('content')
    <div class="container" style="min-height: 65vh; margin:60px auto;">
        <h2 style="">Create a Workout</h2>
        <form action="{{ route('workouts.store') }}" method="POST" enctype="multipart/form-data">
            <form action="">
                @csrf

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Workout Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter workout name"
                        value="{{ @old('name') }}" required>
                </div>

                <!-- Description Field -->
                <div class="form-group">
                    <label for="description">Workout Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="Enter workout description" required>
                    {{ @old('description') }}
                </textarea>
                </div>

                <!-- Level Field -->
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" id="level" name="level" required>
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                    </select>
                </div>

                <!-- Duration Field -->
                <div class="form-group">
                    <label for="duration">Duration (in minutes)</label>
                    <input type="number" class="form-control" id="duration" name="duration" placeholder="Enter duration"
                        required value="{{ @old('duration') }}">
                </div>

                <!-- Multi-select for exercises -->
                <div class="form-group">
                    <label for="exercises">Select Exercises</label>
                    <select name="exercises[]" id="exercises" class="form-control" multiple>
                        @foreach ($exercises as $exercise)
                            <option value="{{ $exercise->id }}">{{ $exercise->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Hidden User ID Field -->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <!-- Image Field -->
                <div class="form-group">
                    <label for="image">Workout Image</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Create Workout</button>
            </form>
    </div>
@endsection
