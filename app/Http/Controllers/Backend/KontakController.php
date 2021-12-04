<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::find(1);

        if ($kontak) {
            return view('backend.kontak.edit', compact('kontak'));
        } else {
            return view('backend.kontak.create');
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
            'alamat' => 'required',
            'email' => 'required|email',
            'jam_kerja' => 'required'
        ]);

        kontak::create($request->all());

        return redirect()->back()->with('success', 'Kontak berhasil diperbarui.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'alamat' => 'required',
            'email' => 'required|email',
            'jam_kerja' => 'required'
        ]);

        $kontak->update($request->all());

        return redirect()->back()->with('success', 'Kontak berhasil diperbarui.');
    }
}
