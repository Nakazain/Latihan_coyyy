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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="/logo.png" width="60px" alt="Logo desa">
    <a class="navbar-brand" style="margin-left: 10px;" href="#">Pemerintah <br> Kabupaten Banyumas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-center" style="margin-right: 15%;" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            lain
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
      </ul>
    </div>
  </div>
</nav>
<div style="background-image: url('/bg.png'); height:100vh; background-size:cover;" class="d-flex justify-content-center align-items-center text-white">
<h1 style="font-weight: 600;">Selamat datang di desa</h1>
</div>
<div class="container my-5">
  <div class="row align-items-center">
    <div class="col-md-8">
      <h2>Sambutan kepala desa</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti architecto exercitationem doloribus reiciendis, sit rem quaerat eius saepe minus possimus esse aliquam accusantium sint aperiam, quae accusamus quas nemo officia.</p>
    </div>
    <div class="col-md-4">
      <img src="/kepala.png" class="rounded-circle" style="background-color: red; width:250px; height:250px" alt="Gambar kepala desa">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    @foreach ($data as $item)
    <div class="col-md-4 mb-3">
      <a href="/masuk/{{$item->id}}" class="">
      <div class="card" style="width: 23rem;">
        <img src="/storage/{{$item->gambar}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$item->judul}}</h5>
          <p class="card-text">{{$item->deskripsi}}</p>
        </div>
      </div>
      </a>
    </div>
    @endforeach
  </div>
  {{$data->links('pagination::bootstrap-5')}}
</div>
</body>
</html>