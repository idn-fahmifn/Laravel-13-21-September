<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //masukan logic dibawah dalam bentuk function.
public function barang()
    {
        $judul = "Data Barang";
        $deskripsi = "Ini adalah halaman Data Barang";
        $barang = Barang::all();

        // return view('halaman.barang', compact('judul', 'deskripsi'));
        return view('halaman.barang',[
            'judul' => $judul,
            'desc' => $deskripsi,
            'data' => $barang
        ]);
    }
    public function index()
    {
        // code
        return "Ini adalah respon index dari Halaman Controller";
    }

    

}
