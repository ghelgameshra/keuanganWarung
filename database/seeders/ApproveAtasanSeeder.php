<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApproveAtasan;

class ApproveAtasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
