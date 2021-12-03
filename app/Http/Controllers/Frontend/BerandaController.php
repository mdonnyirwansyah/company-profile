<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\UnitUsaha;

class BerandaController extends Controller
{
    public function index()
    {
        $unit_usaha = UnitUsaha::orderBy('id', 'DESC')->limit(3)->get();

        return view('frontend.beranda', compact('unit_usaha'));
    }
}
