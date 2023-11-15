<?php

namespace Database\Seeders;

use App\Models\JenisAbsen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisAbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisAbsen::create([
            'jenis_absen' => 'HADIR'
        ]);

        JenisAbsen::create([
            'jenis_absen' => 'TERLAMBAT'
        ]);

        JenisAbsen::create([
            'jenis_absen' => 'PULANG'
        ]);

        JenisAbsen::create([
            'jenis_absen' => 'SAKIT'
        ]);

        JenisAbsen::create([
            'jenis_absen' => 'CUTI'
        ]);

        JenisAbsen::create([
            'jenis_absen' => 'PENUGASAN'
        ]);
    }
}
