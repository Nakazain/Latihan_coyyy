@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="card" style="margin-top: 10px;">
                <div class="card-header">Tambah</div>

                <div class="card-body">
                    <a href="/add" class="btn btn-outline-primary">Tambah data</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="card" style="margin-top: 10px;">
    <div class="card-header">Kelola Post</div>

    <div class="card-body">
    <div class="row">
        @foreach ($data as $item)
        <div class="col-md-4 mb-3">
        <div class="card" style="width: 21rem;">
            <img src="/storage/{{$item->gambar}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$item->judul}}</h5>
            <p class="card-text">{{$item->deskripsi}}</p>
            <div style="margin-top: 10px;">
            <a href="/masuk/{{$item->id}}" class="btn btn-primary">Lihat</a>
            <a href="/edit/{{$item->id}}" class="btn btn-success">Edit</a>
            <form action="{{ route('home.destroy', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        </div>
        </div>
        </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
</div>
@endsection
