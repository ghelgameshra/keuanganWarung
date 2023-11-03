<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ApproveAtasan;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cabang;
use App\Models\Checker;
use App\Models\JenisSetor;
use App\Models\Setor;

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
            toko_seeder::class
        ]);

        User::create([
            'name' => 'Super Admin',
            'karyawan_id' => 1,
            'email' => 'superadmin@gmail.com',
            'level' => 1,
        ]);

        User::create([
            'name' => 'Super Admin2',
            'karyawan_id' => 2,
            'email' => 'superadmin2@gmail.com',
            'level' => 1,
        ]);


        User::create([
            'name' => 'Rizky Andriawan',
            'karyawan_id' => 3,
            'email' => 'rizkyandriawan33478@gmail.com',
            'level' => 2,
        ]);

        User::create([
            'name' => 'Andriawan',
            'karyawan_id' => 4,
            'email' => 'rizkyandriawan@gmail.com',
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

        JenisSetor::create([
            'jenis_setor' => 'TRANSFER BANK'
        ]);

        JenisSetor::create([
            'jenis_setor' => 'CASH'
        ]);

        JenisSetor::create([
            'jenis_setor' => 'TOP UP'
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

        ApproveAtasan::create([
            'jenis_approve' => 'DALAM PENGECEKAN'
        ]);

        ApproveAtasan::create([
            'jenis_approve' => 'DISETUJUI'
        ]);

        ApproveAtasan::create([
            'jenis_approve' => 'DITOLAK'
        ]);

        ApproveAtasan::create([
            'jenis_approve' => 'BUTUH REVISI'
        ]);
    }
}
