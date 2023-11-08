<?php

namespace Database\Seeders;

use App\Models\JenisSetor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSetorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisSetor::create([
            'jenis_setor' => 'TRANSFER BANK'
        ]);

        JenisSetor::create([
            'jenis_setor' => 'CASH'
        ]);

        JenisSetor::create([
            'jenis_setor' => 'TOP UP'
        ]);
    }
}
