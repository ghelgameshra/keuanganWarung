<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Toko;

class toko_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Toko::create([
            'kode_toko' => 'TSBY',
            'kode_cabang' => 1,
            'pimshift1' => 1,
            'pimshift2' => 2,
        ]);

        Toko::create([
            'kode_toko' => 'TGJY',
            'kode_cabang' => 1,
            'pimshift1' => 3,
            'pimshift2' => 4,
        ]);
    }
}
