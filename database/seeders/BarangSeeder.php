<?php

namespace Database\Seeders;

use App\Models\Barang; //import model barang
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang' => Hash::make('brownies'),
            'merk' => 'Beryls',
            'stok' => 30,
            'harga' => '30000'
        ]);

            

        // Barang::factory()->count(100)->create();
    }
}
