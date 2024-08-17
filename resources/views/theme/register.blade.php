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
        <form method="POST" action="{{ route('theme.register.store') }}" style="margin-top: 120px">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputname1" aria-describedby="emailHelp"
                    placeholder="Enter name" name="name">
                @error('name')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
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
            <!-- Confirm Password -->
            <div class="form-group">
                <label for="exampleInputPassword2">Password Confirmation</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"
                    name="password_confirmation">
                @error('password_confirmation')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <a href="{{ route('theme.login') }}">already have account ???</a>

            <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
