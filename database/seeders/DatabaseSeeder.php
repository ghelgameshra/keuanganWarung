<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Toko;
use App\Models\User;
use App\Models\Cabang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Toko::create([
            'kode_toko' => 'TSBY',
            'alamat' => 'Jl. Terusan Surabaya',
            'kode_cabang' => 1,
            'pimshift1' => 1,
            'pimshift2' => 2,
        ]);

        User::create([
            'name' => 'Rizky Andriawan',
            'email' => 'rizkyandriawan33478@gmail.com',
            'shift' => 1,
            'kode_toko' => 1,
            'password' => bcrypt('1234')
        ]);

        User::create([
            'name' => 'Andriawan',
            'email' => 'rizkyandriawan@gmail.com',
            'shift' => 2,
            'kode_toko' => 1,
            'password' => bcrypt('1234')
        ]);

        Cabang::create([
            'kode_cabang' => 'MLG'
        ]);

        Cabang::create([
            'kode_cabang' => 'JBR'
        ]);
    }
}
