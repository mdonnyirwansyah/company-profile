<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visi_misi = VisiMisi::all();

        return view('frontend.visi-misi', compact('visi_misi'));
    }
}
