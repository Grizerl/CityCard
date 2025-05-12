<!DOCTYPE html>
<html lang="uk">
@include('partials.header')
<body>
    <nav class="navbar bg-body-tertiary px-3 mb-3">
      <a class="navbar-brand">CityCard</a>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cities</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('city.create') }}">Add New City</a></li>
                        <li><a class="dropdown-item" href="{{ route('city.index') }}">View All Cities</a></li>
                    </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Ticket Categories</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('tiket.create') }}">Add New</a></li>
                        <li><a class="dropdown-item" href="{{ route('tiket.index') }}">View All Ticket Types</a></li>
                    </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Transport</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('transport.create') }}">Add New Transport</a></li>
                        <li><a class="dropdown-item" href="{{ route('transport.index') }}">View All Transport</a></li>
                    </ul>
            </li>
            <li class="nav-item">
              <form action="{{ route('admin.logout') }}" method="post">
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