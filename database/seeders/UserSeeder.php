<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
            'name' => 'KARYAWAN 1',
            'karyawan_id' => 5,
            'email' => 'karyawan1@gmail.com',
            'level' => 3
        ]);
    }
}
