<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //masukan logic dibawah dalam bentuk function.
public function barang()
    {
        $judul = "Data Barang";
        $deskripsi = "Ini adalah halaman Data Barang";
        $barang = Barang::paginate(10);

        // return view('halaman.barang', compact('judul', 'deskripsi'));
        return view('halaman.barang',[
            'judul' => $judul,
            'desc' => $deskripsi,
            'data' => $barang
        ]);
    }

    public function detail($parameter)
    {
        $data = Barang::findOrFail($parameter);
        return view('halaman.detail', compact('data'));
    }

    public function index()
    {
        // code
        return "Ini adalah respon index dari Halaman Controller";
    }

    

}
