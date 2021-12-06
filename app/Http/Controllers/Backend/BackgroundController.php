<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Background;
use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $background = Background::find(1);

        if ($background) {
            return view('backend.background.edit', compact('background'));
        } else {
            return view('backend.background.create');
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
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        Background::create([
            'gambar' => $request->file('gambar')->store('uploads/images')
        ]);

        return redirect()->back()->with('success', 'Background berhasil diperbarui.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Background $background)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        Storage::delete($background->gambar);

        $background->update([
            'gambar' => $request->file('gambar')->store('uploads/images')
        ]);

        return redirect()->back()->with('success', 'Background berhasil diperbarui.');
    }
}
