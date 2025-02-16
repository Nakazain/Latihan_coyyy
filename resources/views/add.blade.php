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
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        Halo hitam
      </div>
      <div class="card-body">
      <form action="/input" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Judul</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="judul" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="deskripsi" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <input type="file" class="form-control" id="exampleInputEmail1" name="gambar" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</body>
</html>