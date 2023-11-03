<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Tracelog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getDataId(){
        // get data laporan terakhir
        return Laporan::orderBy('id_laporan', 'desc')->first();
    }

    // tracelog
    public function tracelog($menu, $aktivitas, $ip){
        $tracelog = [
            'user_id' => auth()->user()->id,
            'nik' => auth()->user()->Karyawan->nik,
            'menu' => $menu,
            'ip_user' => $ip,
            'aktivitas' => $aktivitas
        ];

        Tracelog::create($tracelog);
    }
}
