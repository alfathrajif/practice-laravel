<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 9 - @yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/students">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/class">Class</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/extracurricular">Extracurricular</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/teachers">Teachers</a>
          </li>
        </ul>
        @auth
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        </ul>
        @else
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
        </ul>
        @endauth

      </div>
    </div>
  </nav>
  <div class="container py-5">
    @yield('content')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>