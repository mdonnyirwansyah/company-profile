<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struktur_organisasi = StrukturOrganisasi::find(1);

        if ($struktur_organisasi) {
            return view('backend.struktur-organisasi.edit', compact('struktur_organisasi'));
        } else {
            return view('backend.struktur-organisasi.create');
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
            'nama' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        StrukturOrganisasi::create([
            'nama' => $request->nama,
            'gambar' => $request->file('gambar')->store('uploads/images'),
            'keterangan' => $request->keterangan
        ]);

        return redirect()->back()->with('success', 'Struktur Organisasi berhasil diperbarui.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StrukturOrganisasi  $struktur_organisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StrukturOrganisasi $struktur_organisasi)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        if ($request->file('gambar')) {
            Storage::delete($struktur_organisasi->gambar);

            $struktur_organisasi->update([
                'nama' => $request->nama,
                'gambar' => $request->file('gambar')->store('uploads/images'),
                'keterangan' => $request->keterangan
            ]);
        } else {
            $struktur_organisasi->update([
                'nama' => $request->nama,
                'gambar' => $struktur_organisasi->gambar,
                'keterangan' => $request->keterangan
            ]);
        }

        return redirect()->back()->with('success', 'Struktur Organisasi berhasil diperbarui.');
    }
}
