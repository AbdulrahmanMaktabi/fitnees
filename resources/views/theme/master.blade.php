<!DOCTYPE html>
<html lang="en">
@include('theme.partials.header')

<body>
    @include('theme.partials.nav')

    @include('theme.partials.slider')

    @yield('content')

    @include('theme.partials.footer')

    @include('theme.partials.scripts')
</body>

</html>
