<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;

class BukuController extends Controller
{
    public function index(){
        $no = 0;
        $data_buku = Buku::all();
        // Menampilkan total harga semua buku
        $totharga = Buku::all()->sum('harga');
        // Menampilkan jumlah data yang dimiliki
        $jumldata = Buku::all()->count();
        //mengurutkan dari buku paling baru
        // $data_buku = Buku::all()->sortByDesc('id');
        
        return view('buku', compact('data_buku','no','totharga','jumldata'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $buku = new Buku;
        $buku ->judul = $request->judul;
        $buku ->penulis = $request->penulis;
        $buku ->harga = $request->harga;
        $buku ->tgl_terbit = $request->terbit;
        // $buku ->updated_at = "";
        $buku ->save();
        return redirect('/buku');
    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku ->delete();
        return redirect('/buku');
    }

    public function update($id, Request $req){
        $buku = Buku::find($id);
        
        $buku ->judul = $req->judul;
        $buku ->penulis = $req->penulis;
        $buku ->harga = $req->harga;
        $buku ->tgl_terbit = $req->terbit;
        $buku ->update();
        return redirect('/buku');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('update', compact('buku'));
    }
}
