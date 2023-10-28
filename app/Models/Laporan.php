<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $guarded = ['id'];


    protected $with = ['karyawan', 'checker'];
    use HasFactory;

    public function  getRouteKeyName(){
        return 'id_laporan';
    }

    // relasi tabel laporan (karyawan has many laporan) dengan key ditabel karyawan=id, laporan=id_karyawan
    public function karyawan(){
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }

    public function checker(){
        return $this->belongsTo(Karyawan::class, 'checker_id');
    }
}
