<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $data = Berita::all();
        return view('home', compact('data'));
    }

    public function add(){
        return view('add');
    }

    public function input(Request $request){
        $image = $request->file('gambar')->store('berita', 'public');

        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $image,
        ]);
        
        return redirect('home');
    }

    public function edit($id) {
        $data = Berita::findOrFail($id);
        return view('edit', compact('data'));
    }
    
    public function masuk($id) {
        $data = Berita::findOrFail($id);
        return view('masuk', compact('data'));
    }

    public function update(Request $request, $id){
        $data = Berita::findOrFail($id);
    
        if ($request->hasFile('gambar')) {
            Storage::delete('public/' . $data->gambar);
            $data->gambar = $request->file('gambar')->store('berita', 'public');
        }
    
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
    
        return redirect()->route('home');
    }

    public function destroy($id){
        $data = Berita::findOrFail($id);

        if ($data->gambar) {
            Storage::delete('public/' . $data->gambar);
        }

        $data->delete();

        return redirect()->route('home')->with('success', 'Berita berhasil dihapus');
    }

    }
