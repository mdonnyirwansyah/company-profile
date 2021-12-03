<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::all();

        return view('frontend.profil', compact('profil'));
    }
}
