<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\UnitUsaha;
use App\Models\Background;

class BerandaController extends Controller
{
    public function index()
    {
        $unit_usaha = UnitUsaha::orderBy('dilihat', 'DESC')->limit(3)->get();
        $background = Background::find(1);

        return view('frontend.beranda', compact('unit_usaha', 'background'));
    }
}
