<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    use HasFactory;


    // relasi tabel laporan (karyawan has many laporan) dengan key ditabel karyawan=id, laporan=id_karyawan
    public function laporan(){
        /*
        cara baca :
        laporan.id_karyawan atau SELECT id_karyawan FROM laporan
        */
        return $this->hasMany(Laporan::class, 'id_karyawan');
    }
}
