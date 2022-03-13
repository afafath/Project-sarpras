<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gedungs = Gedung::all();
        return view('/gedung.index', compact('gedungs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gedung.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'nama_gedung' => 'required',
            'status' => 'required',
            'kondisi' => 'required',
            'panjang_gedung' => 'nullable',
            'lebar_gedung' => 'nullable',
            'konstruksi' => 'required',
            'keterangan' => 'nullable',
        ]);

        Gedung::create($validateData);
        return redirect('/gedung')->with('pesan', "Gedung $request->gedung Berhasil Ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function show(Gedung $gedung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function edit(Gedung $gedung)
    {

        return view('gedung.edit', compact('gedung'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gedung $gedung)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'nama_gedung' => 'required',
            'status' => 'required',
            'kondisi' => 'required',
            'panjang_gedung' => 'nullable',
            'lebar_gedung' => 'nullable',
            'konstruksi' => 'required',
            'keterangan' => 'nullable',
        ]);

        $gedung->update($validateData);
        return redirect('/gedung')->with('pesan', "Gedung $gedung->nama_gedung Berhasil Diupdate!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gedung $gedung)
    {
        $gedung->delete();
        return redirect('/gedung')->with('pesan', "Gedung $gedung->nama_gedung Berhasil Dihapus!");
    }
}
