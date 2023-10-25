<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getDataId(){
        // get data laporan terakhir
        $data = Laporan::orderBy('id_laporan', 'desc')->first();
        return $data->id_laporan;
    }
}
