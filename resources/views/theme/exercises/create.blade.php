@extends('theme.master')
@section('content')
    <div class="container">
        <form style="margin: 120px 0;" method="POST" action="{{ route('exercises.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Exercise Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter exercise name" name="name">
                @error('name')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2">Muscle Name</label>
                <select class="form-select" aria-label="Default select example" name="muscle_id" id="">
                    @foreach ($muscles as $muscle)
                        <option value="{{ $muscle->id }}">{{ $muscle->name }}</option>
                    @endforeach
                </select>
                @error('muscle_id')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Exercise Description</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description"
                    name="description">
                @error('description')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-check">
                <input type="file" class="form-check-input" id="exampleCheck1" name="image">
                @error('image')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-5" style="margin-top: 50px">Create</button>
        </form>
    </div>
@endsection
