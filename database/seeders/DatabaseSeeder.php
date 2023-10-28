<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cabang;
use App\Models\Checker;

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
            'name' => 'Rizky Andriawan',
            'karyawan_id' => 2,
            'email' => 'rizkyandriawan33478@gmail.com',
            'level' => 2,
        ]);

        User::create([
            'name' => 'Andriawan',
            'karyawan_id' => 3,
            'email' => 'rizkyandriawan@gmail.com',
        ]);

        Cabang::create([
            'kode_cabang' => 'MLG'
        ]);

        Cabang::create([
            'kode_cabang' => 'JBR'
        ]);

        Checker::create([
            'karyawan_id' => 1,
        ]);

        Checker::create([
            'karyawan_id' => 2,
        ]);
    }
}
