<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //code untuk halaman utama

        $judul = "Data Barang";
        $deskripsi = "Ini adalah halaman Data Barang";

        return view('halaman.barang', 
        compact('judul', 'deskripsi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Ini adalah halaman create dari barang";
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Ini adalah halaman detail dari barang";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function tambahan()
    {
        return "ini adalah respon tambahan yang ada pada controller resource";
    }

}
