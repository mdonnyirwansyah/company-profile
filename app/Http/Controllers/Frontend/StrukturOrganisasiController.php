<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $struktur_organisasi = StrukturOrganisasi::all();

        return view('frontend.struktur-organisasi', compact('struktur_organisasi'));
    }
}
