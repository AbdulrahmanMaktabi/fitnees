<!DOCTYPE html>
<html lang="en">

@include('theme.partials.header')

<body>
    <div class="navbar-nav " style="display:flex; justify-content:space-around; padding:12px;">
        <a class="nav-link" style="background-color: yellow; width:120px; margin: 10px 0;"
            href="{{ route('theme.home') }}">Back Home
        </a>
    </div>


    <div class="container">
        <form method="POST" action="{{ route('theme.login.store') }}" style="margin-top: 120px">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email" name="email">
                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                    name="password">
                @error('password')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <a href="{{ route('theme.register') }}">new account ???</a>

            <br><br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        @if (session('register'))
            {{ session('register') }}
        @endif
    </div>
</body>

</html>
