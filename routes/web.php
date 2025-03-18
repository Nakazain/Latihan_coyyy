<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/bpd', function () {
    return view('bpd');
});
Route::get('/karangtaruna', function () {
    return view('karangtaruna');
});
Route::get('/bumdes', function () {
    return view('bumdes');
});
Route::get('/struktur', function () {
    return view('struktur');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/add', [HomeController::class, 'add'])->name('add');
Route::get('/masuk/{id}', [BeritaController::class, 'masuk'])->name('masuk');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::post('/input', [HomeController::class, 'input'])->name('input');
Route::post('/update/{id}', [HomeController::class, 'update'])->name('update');
Route::get('/', [BeritaController::class, 'index'])->name('index');
Route::delete('/home/{id}', [HomeController::class, 'destroy'])->name('home.destroy');

