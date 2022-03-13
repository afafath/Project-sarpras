<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Barang;
use App\Models\Kategori;
use App\User;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bangunans = Bangunan::all();
        $users = User::all();
        $kategoris = Kategori::all();

        return view('barang.create', compact('bangunans', 'users', 'kategoris'));
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
            'nama_barang' => 'required',
            'bangunan_id' => 'required',
            'user_id' => 'required',
            'kategori_id' => 'required',
            'merk' => 'required',
            'no_seri' => 'required',
            'kondisi' => 'required',
            'tgl_pengadaan' => 'required',
            'sumber_perolehan' => 'required',
            'harga_perolehan' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'nilai_residu' => 'required',
            'umur_ekonomis' => 'required',
            'status' => 'required',
        ]);

        Barang::create($validateData);
        return redirect('/barang')->with('pesan', " $request->nama_barang Berhasil Ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        $bangunans = Bangunan::all();
        $users = User::all();
        $kategoris = Kategori::all();

        return view('barang.edit', compact('barangs', 'bangunans', 'users', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'nama_barang' => 'required',
            'bangunan_id' => 'required',
            'user_id' => 'required',
            'kategori_id' => 'required',
            'merk' => 'required',
            'no_seri' => 'required',
            'kondisi' => 'required',
            'tgl_pengadaan' => 'required',
            'sumber_perolehan' => 'required',
            'harga_perolehan' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'nilai_residu' => 'required',
            'umur_ekonomis' => 'required',
            'status' => 'required',
        ]);

        $barang->update($validateData);
        return redirect('/barang')->with('pesan', " $request->nama_barang Berhasil Ditambahkan!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
