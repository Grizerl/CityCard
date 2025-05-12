<!DOCTYPE html>
<html lang="uk">
@include('partials.header')
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand">CityCard</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    @include('partials.scripts')
</body>
</html>
