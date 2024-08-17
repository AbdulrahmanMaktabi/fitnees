@extends('theme.master')
@section('content')
    <div class="container" style="min-height: 65vh; margin:60px auto;">
        <h2 style="">Edit a Workout</h2>
        <form action="{{ route('workouts.update', $workout) }}" method="POST" enctype="multipart/form-data">
            <form action="{{ route('workouts.update', $workout->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Workout Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Enter workout name" value="{{ old('name', $workout->name) }}" required>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Description Field -->
                <div class="form-group">
                    <label for="description">Workout Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="Enter workout description" required>{{ old('description', $workout->description) }}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Level Field -->
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" id="level" name="level" required>
                        <option value="beginner" {{ old('level', $workout->level) == 'beginner' ? 'selected' : '' }}>
                            Beginner</option>
                        <option value="intermediate"
                            {{ old('level', $workout->level) == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                        <option value="advanced" {{ old('level', $workout->level) == 'advanced' ? 'selected' : '' }}>
                            Advanced</option>
                    </select>
                    @error('level')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Duration Field -->
                <div class="form-group">
                    <label for="duration">Duration (in minutes)</label>
                    <input type="number" class="form-control" id="duration" name="duration" placeholder="Enter duration"
                        required value="{{ old('duration', $workout->duration) }}">
                    @error('duration')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Hidden User ID Field -->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                @error('user_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <!-- Image Field -->
                <div class="form-group">
                    <label for="image">Workout Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update Workout</button>
            </form>

    </div>
@endsection
