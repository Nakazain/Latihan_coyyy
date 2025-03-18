<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <img src="/logo.png" width="60px" alt="Logo desa">
    <a class="navbar-brand" style="margin-left: 10px;" href="#">Pemerintah <br> Kabupaten Banyumas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-center" style="margin-right: 15%;" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/struktur">struktur</a>
        </li>
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lembaga desa
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/bpd">BPD</a></li>
            <li><a class="dropdown-item" href="/karangtaruna">Karang Taruna</a></li>
            <li><a class="dropdown-item" href="/bumdes">Bumdes</a></li>
          </ul>
        </div>
      </ul>
    </div>
  </div>
</nav>
<div style="background-image: url('/12.jpg'); height:100vh; background-size:cover;" class="d-flex justify-content-center align-items-center text-white">
<h1 style="font-weight: 600;">Ini halaman karang taruna</h1>
</div>
</body>
</html>