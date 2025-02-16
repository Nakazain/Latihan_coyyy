<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $data = Berita::paginate(3);
        return view('index', compact('data'));
    }
    public function masuk($id) {
        $data = Berita::findOrFail($id);
        return view('masuk', compact('data'));
    }
}
