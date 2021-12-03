<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DasarHukum;

class DasarHukumController extends Controller
{
    public function index()
    {
        $dasar_hukum = DasarHukum::all();

        return view('frontend.dasar-hukum', compact('dasar_hukum'));
    }
}
