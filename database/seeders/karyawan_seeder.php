<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class karyawan_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karyawan::create([
            'nama_karyawan' => 'RIZKY ANDRIAWAN SADM',
            'nik' => '2015451300',
        ]);

        Karyawan::create([
            'nama_karyawan' => 'RIZKY ANDRIAWAN',
            'nik' => '2015451256',
            'kode_toko' => 'TSBY'
        ]);

        Karyawan::create([
            'nama_karyawan' => 'ANDRIAWAN',
            'nik' => '2015451200',
            'kode_toko' => 'TGJY'
        ]);
    }
}
