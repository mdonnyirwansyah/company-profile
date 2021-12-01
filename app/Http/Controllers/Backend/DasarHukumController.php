<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DasarHukum;
use Illuminate\Http\Request;

class DasarHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dasar_hukum = DasarHukum::find(1);

        if ($dasar_hukum) {
            return view('backend.dasar-hukum.edit', compact('dasar_hukum'));
        } else {
            return view('backend.dasar-hukum.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required'
        ]);

        DasarHukum::create($request->all());

        return redirect()->back()->with('success', 'Dasar Hukum berhasil diperbarui.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DasarHukum  $dasar_hukum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DasarHukum $dasar_hukum)
    {
        $request->validate([
            'keterangan' => 'required'
        ]);

        $dasar_hukum->update($request->all());

        return redirect()->back()->with('success', 'Dasar Hukum berhasil diperbarui.');
    }
}
