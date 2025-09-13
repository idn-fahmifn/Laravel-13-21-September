<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function formUmur () 
    {
        return view('umur.form');
    }

    public function success () 
    {
        return view('umur.success');
    }

    public function prosesUmur(Request $request){

        // session untuk mengirimkan data umur pada middlware
        $request->session()
        ->put('age', $request->umur);

        return redirect()->route('success');
    }
    
}

