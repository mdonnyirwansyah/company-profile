<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\UnitUsaha;
use Illuminate\Http\Request;

class UnitUsahaController extends Controller
{
    public function show(UnitUsaha $unit_usaha)
    {
        $unit_usaha->update([
            'dilihat' => $unit_usaha->dilihat + 1
        ]);
        
        return view('frontend.unit-usaha', compact('unit_usaha'));
    }

    public function search(Request $request)
    {
        if ($request->search) {
            $unit_usaha = UnitUsaha::where('nama', 'like', '%'.$request->search.'%')->get();
        } else {
            $unit_usaha = UnitUsaha::take(0)->get();
        }

        $response = array();

        foreach ($unit_usaha as $item) {
            $response[] = array(
                'id' => $item->id,
                'text' => $item->nama
            );
        }

        return response()->json($response);
    }

    public function find(Request $request)
    {
        $unit_usaha = UnitUsaha::where('id', $request->search)->first();

        return response()->json(['success' => route('unit-usaha', $unit_usaha)]);
    }
}
