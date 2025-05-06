<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>CityCard — Панель</title>
</head>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>