<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cabang;

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
            'nik' => '0000000000',
            'email' => 'superadmin@gmail.com',
            'level' => 1,
        ]);


        User::create([
            'name' => 'Rizky Andriawan',
            'nik' => '2015451256',
            'email' => 'rizkyandriawan33478@gmail.com',
            'level' => 2,
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
    }
}
