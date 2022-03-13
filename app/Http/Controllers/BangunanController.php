<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Gedung;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bangunans = Bangunan::all();
        return view('bangunan.index', compact('bangunans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gedungs = Gedung::all();
        $gedungs->firstwhere('id', 'gedungs');
        return view('bangunan.create', compact('gedungs'));
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
            'gedung_id' => 'required',
            'nama_bangunan' => 'required',
            'tgl_pembangunan' => 'required',
            'lantai' => 'nullable',
            'panjang_bangunan' => 'required',
            'lebar_bangunan' => 'required',
            'panjang_selasar' => 'nullable',
            'lebar_selasar' => 'nullable',
            'no_basts' => 'nullable',
            'tgl_basts' => 'nullable',
            'file_basts' => 'nullable',
        ]);

        Bangunan::create($validateData);
        return redirect('/bangunan')->with('pesan', " $request->bangunan Berhasil Ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bangunan  $bangunan
     * @return \Illuminate\Http\Response
     */
    public function show(Bangunan $bangunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bangunan  $bangunan
     * @return \Illuminate\Http\Response
     */
    public function edit(Bangunan $bangunan)
    {
        $gedungs = Gedung::all();
        $gedungs->firstwhere('id', 'gedungs');
        return view('bangunan.edit', compact('bangunan', 'gedungs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bangunan  $bangunan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bangunan $bangunan)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'nama_bangunan' => 'required',
            'tgl_pembangunan' => 'required',
            'lantai' => 'nullable',
            'panjang_bangunan' => 'required',
            'lebar_bangunan' => 'required',
            'panjang_selasar' => 'nullable',
            'lebar_selasar' => 'nullable',
            'no_basts' => 'nullable',
            'tgl_basts' => 'nullable',
            'file_basts' => 'nullable',

        ]);

        $bangunan->update($validateData);
        return redirect('/bangunan')->with('pesan', "$bangunan->nama_bangunan Berhasil Diupdate!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bangunan  $bangunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bangunan $bangunan)
    {
        $bangunan->delete();
        return redirect('/bangunan')->with('pesan', "$bangunan->nama_bangunan Berhasil Dihapus!");
    }
}
