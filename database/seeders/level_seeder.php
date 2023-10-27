<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LevelUser;

class level_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LevelUser::create([
            'kode_level' => 'SPADM',
            'nama_level' => 'SUPER ADMIN'
        ]);

        LevelUser::create([
            'kode_level' => 'ADM',
            'nama_level' => 'ADMIN'
        ]);

        LevelUser::create([
            'kode_level' => 'USR',
            'nama_level' => 'USER'
        ]);
    }
}
