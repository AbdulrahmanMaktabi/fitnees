@php
    $muscles = App\Models\Muscle::all();
    use App\Models\Exercise;
@endphp
@extends('theme.master')
@section('exercies-active', 'active')
@section('content')
    <div class="container">

        <h1 style="margin:80px; text-align:center">Exercises List</h1>
        @if (Auth::check() && Auth::user()->id == 3)
            <a href="{{ route('exercises.create') }}" class="btn btn-primary"
                style="position: absolute; top: 81%; right:80px">Create Exercise</a>
        @endif
        <div class="muscles"
            style=
    "
        display: flex;
        justify-content: space-around;
        margin-bottom: 60px;
    ">
            @if (count($muscles) > 0)
                @foreach ($muscles as $muscle)
                    <div class="muscle"
                        style=
    "
        border: 2px solid #000;
        background-color: rgba(255, 230, 0, 0.418);
        padding: 6px;                    
    ">
                        <a href="{{ route('exercises.index', ['muscle_id' => $muscle->id]) }}">
                            {{ $muscle->name }}
                        </a>
                    </div>
                @endforeach
            @endif

        </div>
        <div class="boxes" style="display: flex; flex-wrap: wrap;">
            @foreach ($exercises as $exercise)
                <div class="box col-4">
                    @if (Auth::check() && Auth::user()->id == 3)
                        <form action="{{ route('exercises.destroy', $exercise) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this exercise?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    @endif

                    <img src="{{ asset('storage') }}/exercises/{{ $exercise->image }}" alt=""
                        style="max-width: 100%">
                    <h2>{{ $exercise->name }}</h2>
                    <p>{{ $exercise->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
    @if (session('create_success'))
        <div class="alert alert-success" role="alert" style="position: fixed; bottom:10px; right: 10px;">
            {{ session('create_success') }}
        </div>
    @endif
    @if (session('delete_success'))
        <div class="alert alert-success" role="alert" style="position: fixed; bottom:10px; right: 10px;">
            {{ session('delete_success') }}
        </div>
    @endif
@endsection
