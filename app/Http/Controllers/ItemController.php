<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ItemController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $query = DB::table('proyek')->insert([
            "nama" => $request["nama"],
            "tanggal_dimulai" => $request ["tanggal_dimulai"],
            "tanggal_akhir" => $request["tanggal_akhir"]
    ]);
    return redirect('/items')->with('success','Postingan Berhasil Disimpan');
}
public function index(){
    $posts = DB::table('pertanyaan')->get();
    // dd($posts);
    return view('index', compact('posts'));
}

}