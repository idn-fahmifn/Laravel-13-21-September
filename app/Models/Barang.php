<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //define nama tabel yang akan dipegang.

    use HasFactory;
    protected $table = 'barang';
    protected $fillable = [
        'merk', 'harga', 'stok', 'nama_barang'
    ];
}
