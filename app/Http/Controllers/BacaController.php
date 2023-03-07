<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\baca;
class BacaController extends Controller
{
    public function baca(){
        $data = baca::all();
        return view('baca.tablesbaca', ['data' => $data]);
    }
    public function save(Request $request)
    {
        $data = new baca;
        $data->judul_novel = $request->novel;
        $data->cover = $request->cover;
        $data->penulis = $request->penulis;
        $data->rating = $request->rating;
        $data->kategori = $request->kategori;
        $data->jumlah_pembaca = $request->pembaca;
        $data->save();
        return redirect('baca');
    }
    public function haleditbaca($id)
    {
        $data = baca::find($id);
        return view('baca.editbaca', ['data' => $data]);
    }
    public function editbaca (Request $request)
    {
        $data = baca::find($request->id);
        $data->judul_novel = $request->novel;
        $data->cover = $request->cover;
        $data->penulis = $request->penulis;
        $data->rating = $request->rating;
        $data->kategori = $request->kategori;
        $data->jumlah_pembaca = $request->pembaca;
        $data->save();
        return redirect('tablesbaca');
    }
    public function deletebaca($id){
        $data = baca::Find($id);
        $data -> delete();
        return redirect('baca');
        }
}
