<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = Profil::find(1);

        if ($profil) {
            return view('backend.profil.edit', compact('profil'));
        } else {
            return view('backend.profil.create');
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
            'tentang' => 'required',
            'tugas_pokok' => 'required',
            'fungsi' => 'required'
        ]);

        Profil::create($request->all());

        return redirect()->back()->with('success', 'Profile berhasil diperbarui.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $request->validate([
            'tentang' => 'required',
            'tugas_pokok' => 'required',
            'fungsi' => 'required'
        ]);

        $profil->update($request->all());

        return redirect()->back()->with('success', 'Profile berhasil diperbarui.');
    }
}
