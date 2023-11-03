<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracelog extends Model
{
    protected $table = 'tracelog';
    protected $guraded = ['id'];
    protected $fillable = ['user_id', 'nik', 'menu', 'aktivitas', 'status', 'ip_user'];
    use HasFactory;
}
