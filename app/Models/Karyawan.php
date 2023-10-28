<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Attribute\WithLogLevel;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    use HasFactory;


    // relasi tabel laporan (karyawan has many laporan) dengan key ditabel karyawan=id, laporan=id_karyawan
    protected $with = ['laporan', 'jabatan'];
    public function laporan(){
        /*
        cara baca :
        laporan.id_karyawan atau SELECT id_karyawan FROM laporan
        */
        return $this->hasMany(Laporan::class, 'id_karyawan', 'checker_id');
    }

    // protected $with = ['user'];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class, 'id');
    }

    // public function checker(){
    //     return $this->belongsTo(Karyawan::class, 'checker_id');
    // }
}
