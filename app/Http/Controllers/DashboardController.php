<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Setor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function profile(){
        return view('dashboard.profile.profile', [
            'user' => auth()->user()
        ]);
    }

    public function rangkuman(){
        if( auth()->user()->level > 1 ){
            abort(403);
        }

        return view('admin.rangkuman.rangkuman', [
            'laporan' => Laporan::orderBy('docno', 'desc')->get(),
            'setoran' => Setor::orderBy('docno', 'desc')->get()
        ]);
    }
}
