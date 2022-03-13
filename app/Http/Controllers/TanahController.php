<?php

namespace App\Http\Controllers;

use App\Models\Tanah;
use Illuminate\Http\Request;

class TanahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanahs = Tanah::all();
        return view('tanah.index', compact('tanahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tanah.create');
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
            'no_sertifikat' => 'required',
            'nama_pemilik' => 'required',
            'status' => 'required',
            'luas' => 'required',
            'sumber_perolehan' => 'required',
            'tgl_perolehan' => 'required',
            'letak_tanah' => 'required',
            'batas_utara' => 'required',
            'batas_barat' => 'required',
            'batas_selatan' => 'required',
            'batas_timur' => 'required',
            'harga' => 'required',
            'penggunaan' => 'required',
        ]);

        Tanah::create($validateData);
        return redirect('/tanah')->with('pesan', "Tanah Baru Berhasil Ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tanah  $tanah
     * @return \Illuminate\Http\Response
     */
    public function show(Tanah $tanah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tanah  $tanah
     * @return \Illuminate\Http\Response
     */
    public function edit(Tanah $tanah)
    {
        return view('tanah.edit', compact('tanah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tanah  $tanah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tanah $tanah)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'no_sertifikat' => 'required',
            'nama_pemilik' => 'required',
            'status' => 'required',
            'luas' => 'required',
            'sumber_perolehan' => 'required',
            'tgl_perolehan' => 'required',
            'letak_tanah' => 'required',
            'batas_utara' => 'required',
            'batas_barat' => 'required',
            'batas_selatan' => 'required',
            'batas_timur' => 'required',
            'harga' => 'required',
            'penggunaan' => 'required',
        ]);

        $tanah->update($validateData);
        return redirect('/tanah')->with('pesan', "Berhasil Diupdate!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tanah  $tanah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tanah $tanah)
    {
        //
    }
}
