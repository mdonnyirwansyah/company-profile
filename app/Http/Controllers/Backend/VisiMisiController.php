<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visi_misi = VisiMisi::find(1);

        if ($visi_misi) {
            return view('backend.visi-misi.edit', compact('visi_misi'));
        } else {
            return view('backend.visi-misi.create');
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
            'visi' => 'required',
            'misi' => 'required'
        ]);

        VisiMisi::create($request->all());

        return redirect()->back()->with('success', 'Visi dan Misi berhasil diperbarui.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisiMisi  $visi_misi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisiMisi $visi_misi)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required'
        ]);

        $visi_misi->update($request->all());

        return redirect()->back()->with('success', 'Visi dan Misi berhasil diperbarui.');
    }
}
