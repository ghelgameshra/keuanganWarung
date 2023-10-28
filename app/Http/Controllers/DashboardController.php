<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function profile(){
        return view('dashboard.profile.profile', [
            'user' => auth()->user()
        ]);
    }
}
