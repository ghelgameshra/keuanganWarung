<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSetor extends Model
{
    protected $table = 'jenis_setor';
    protected $guarded = ['id'];
    use HasFactory;
}
