<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Toko;
use App\Models\User;
use App\Models\Cabang;
use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\Laporan;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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

        User::create([
            'name' => 'Rizky Andriawan',
            'nik' => '2015451256',
            'email' => 'rizkyandriawan33478@gmail.com',
        ]);

        User::create([
            'name' => 'Andriawan',
            'nik' => '2015451200',
            'email' => 'rizkyandriawan@gmail.com',
        ]);

        Cabang::create([
            'kode_cabang' => 'MLG'
        ]);

        Cabang::create([
            'kode_cabang' => 'JBR'
        ]);



        Jabatan::create([
            'nama_jabatan' => 'OWNER'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'MANAGER'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'SUPERVISOR'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'ADMIN'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'CHIEF OF STORE'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'CASHIER'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'CHEF'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'WAITER'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'DRIVER'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'INTERN'
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


        Laporan::create([
            'id_laporan' => '231022TSBY1',
            'docno' => 1,
            'nik' => '2015451256',
            'kode_toko' => 'TSBY',
            'shift' => 1,
            'input_aktual_kas' => 1215000,
            'tabungan' => 1215000*2.5/100,
            'aktual_kas' => 1215000-(1215000*2.5/100),
            'approved' => 'N'
        ]);

        Laporan::create([
            'id_laporan' => '231023TSBY1',
            'docno' => 2,
            'nik' => '2015451256',
            'kode_toko' => 'TSBY',
            'shift' => 1,
            'input_aktual_kas' => 2000000,
            'tabungan' => 2000000*2.5/100,
            'aktual_kas' => 2000000-(2000000*2.5/100),
            'approved' => 'Y'
        ]);

        Laporan::create([
            'id_laporan' => Carbon::yesterday()->format('ymd')."TSBY1",
            'docno' => 3,
            'nik' => '2015451256',
            'kode_toko' => 'TSBY',
            'shift' => 1,
            'input_aktual_kas' => 1300000,
            'tabungan' => 1300000*2.5/100,
            'aktual_kas' => 1300000-(1300000*2.5/100),
            'approved' => ''
        ]);
    }
}
