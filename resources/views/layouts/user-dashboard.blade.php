<!DOCTYPE html>
<html lang="uk">
@include('partials.header')
<body>
<nav class="navbar bg-body-tertiary px-3 mb-3">
  <a class="navbar-brand">CityCard</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
        <form action="{{ route('user.logout') }}" method="post">
            @csrf
            <button class="nav-link" type="submit">Log out</button>
        </form>
    </li>
  </ul>
</nav>
    <div class="container">
        @yield('content')
    </div>
    @include('partials.scripts')
</body>
</html>