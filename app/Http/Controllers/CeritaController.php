<?php

namespace App\Http\Controllers;

use App\Models\cerita;
use Illuminate\Http\Request;

class CeritaController extends Controller
{
    public function baca(){
        $data = cerita::all();
        return view('cerita.tablescerita', ['data' => $data]);
    }
    public function save(Request $request)
    {
        $data = new cerita;
        $data->judul_novel = $request->novel;
        $data->cover = $request->cover;
        $data->penulis = $request->penulis;
        $data->rating = $request->rating;
        $data->kategori = $request->kategori;
        $data->jumlah_pembaca = $request->pembaca;
        $data->save();
        return redirect('tablesbaca');
    }
    
}
