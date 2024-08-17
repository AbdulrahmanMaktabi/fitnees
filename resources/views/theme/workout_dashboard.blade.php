@extends('theme.master')
@section('content')
    <div class="container" style="min-height: 60vh">
        <div class="box"
            style="display: flex; justify-content:space-between; align-items:center; padding:40px 0; margin: 60px 0;">
            <h2>You Want To Create A New Workout??</h2>
            <a href="{{ route('workouts.create') }}" class="btn btn-info">Create</a>
        </div>
        <h1 style="margin-top:120px">list of workouts</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width: 55%">Name</th>
                    <th scope="col" style="width: 20%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($workouts as $workout)
                    <tr>
                        <th scope="row">{{ $workout->id }}</th>
                        <td>{{ $workout->name }}</td>
                        <td style="display: flex;">
                            <a style="margin:0 10px" class="btn btn-primary"
                                href="{{ route('workouts.show', $workout) }}">Show</a>
                            <a style="margin:0 10px" class="btn btn-warning"
                                href="{{ route('workouts.edit', $workout) }}">Edit</a>
                            <form action="{{ route('workouts.destroy', $workout) }}" method="post"
                                onsubmit="return confirmDelete()">
                                @csrf
                                @method('delete')
                                <input style="margin:0 10px" type="submit" class="btn btn-danger" value="Delete">
                            </form>

                            <script>
                                function confirmDelete() {
                                    return confirm('Are you sure you want to delete this workout? This action cannot be undone.');
                                }
                            </script>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if (session('update_success'))
        <div class="alert alert-success" role="alert" style="position: fixed; bottom:10px; right: 10px;">
            {{ session('update_success') }}
        </div>
    @endif
    @if (session('delete_success'))
        <div class="alert alert-success" role="alert" style="position: fixed; bottom:10px; right: 10px;">
            {{ session('delete_success') }}
        </div>
    @endif
@endsection
