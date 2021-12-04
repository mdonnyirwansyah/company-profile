<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UnitUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UnitUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit_usaha = UnitUsaha::orderBy('dilihat', 'DESC')->get();

        return view('backend.unit-usaha.index', compact('unit_usaha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.unit-usaha.create');
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
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        UnitUsaha::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'gambar' => $request->file('gambar')->store('uploads/images'),
            'slug' => Str::slug($request->nama)
        ]);

        return redirect(route('unit-usaha.index'))->with('success', 'Unit Usaha berhasil ditambah.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UnitUsaha  $unit_usaha
     * @return \Illuminate\Http\Response
     */
    public function edit(UnitUsaha $unit_usaha)
    {
        return view('backend.unit-usaha.edit', compact('unit_usaha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UnitUsaha  $unit_usaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnitUsaha $unit_usaha)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        if ($request->file('gambar')) {
            Storage::delete($unit_usaha->gambar);

            $unit_usaha->update([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'gambar' => $request->file('gambar')->store('uploads/images'),
                'slug' => Str::slug($request->nama)
            ]);
        } else {
            $unit_usaha->update([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'gambar' => $unit_usaha->gambar,
                'slug' => Str::slug($request->nama)
            ]);
        }

        return redirect(route('unit-usaha.index'))->with('success', 'Unit Usaha berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UnitUsaha  $unit_usaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnitUsaha $unit_usaha)
    {
        Storage::delete($unit_usaha->gambar);
        $unit_usaha->delete();

        return redirect()->back()->with('success', 'Unit Usaha berhasil dihapus.');
    }
}
