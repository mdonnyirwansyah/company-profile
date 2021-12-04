<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\UnitUsaha;

class UnitUsahaController extends Controller
{
    public function show(UnitUsaha $unit_usaha)
    {
        $unit_usaha->update([
            'dilihat' => $unit_usaha->dilihat + 1
        ]);
        
        return view('frontend.unit-usaha', compact('unit_usaha'));
    }
}
