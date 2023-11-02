<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setor';
    protected $guarded = ['id'];

    protected $with = ['JenisSetor', 'Cabang', 'Karyawan', 'ApproveAtasan'];
    use HasFactory;

    public function jenisSetor(){
        return $this->belongsTo(JenisSetor::class, 'jenis_setor');
    }

    public function cabang(){
        return $this->belongsTo(Cabang::class, 'id_cabang');
    }

    public function karyawan(){
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }

    public function approveAtasan(){
        return $this->belongsTo(ApproveAtasan::class, 'approve_atasan');
    }
}
