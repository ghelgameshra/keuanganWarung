<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laporan;
use Carbon\Carbon;

class laporan_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laporan::create([
            'id_laporan' => '231022TSBY1',
            'docno' => 1,
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
            'kode_toko' => 'TSBY',
            'shift' => 1,
            'input_aktual_kas' => 1300000,
            'tabungan' => 1300000*2.5/100,
            'aktual_kas' => 1300000-(1300000*2.5/100),
            'approved' => ''
        ]);
    }
}
