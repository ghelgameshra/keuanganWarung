<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jabatan;

class jabatan_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
