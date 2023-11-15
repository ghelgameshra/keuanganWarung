<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Absensi;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cabang;
use App\Models\Checker;
use App\Models\Setor;
use App\Models\WebApp;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            jabatan_seeder::class,
            karyawan_seeder::class,
            laporan_seeder::class,
            level_seeder::class,
            toko_seeder::class,
            JenisSetorSeeder::class,
            ApproveAtasanSeeder::class,
            JenisAbsenSeeder::class,
            UserSeeder::class
        ]);

        Cabang::create([
            'kode_cabang' => 'MLG',
            'nama_cabang' => 'MALANG'
        ]);

        Cabang::create([
            'kode_cabang' => 'JBR',
            'nama_cabang' => 'JEMBER'
        ]);

        Checker::create([
            'karyawan_id' => 1,
        ]);

        Checker::create([
            'karyawan_id' => 2,
        ]);


        Setor::create([
            'invno' => 'STRMLG' . now()->format('Ymd') . '00001',
            'docno' => 1,
            'id_karyawan' => 1,
            'jenis_setor' => 1,
            'id_cabang' => 1,
            'nominal_setor' => 6400000,
            'keterangan' => 'test',
            'approve_atasan' => 1,
        ]);

        Setor::create([
            'invno' => 'STRJBR' . now()->format('Ymd') . '00002',
            'docno' => 2,
            'id_karyawan' => 2,
            'jenis_setor' => 2,
            'id_cabang' => 2,
            'nominal_setor' => 6400000,
            'keterangan' => 'test juga',
            'approve_atasan' => 2,
        ]);


        WebApp::create([
            'code_name' => 'Alpha',
            'major_version' => 0,
            'minor_version' => 0,
            'patch_version' => 3
        ]);
    }
}
