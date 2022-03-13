@extends('layouts.layout')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-12">

            <div class="py-4 d-flex justify-content-end align-items-center">
                <h1 class="h2 mr-auto">Tabel Barang Inventaris</h1>
                <a href="{{url('/barang/create')}}" class="btn btn-primary">
                    Tambah Barang Inventaris
                </a>

            </div>


            @if(session()->has('pesan'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('pesan') }}
            </div>
            @endif

            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Kode Barang Inventaris </th>
                        <th>Nama Barang</th>
                        <th>Letak Barang</th>
                        <th>PJ Ruangan</th>
                        <th>Kategori Barang</th>
                        <th>Merk</th>
                        <th>No. Seri</th>
                        <th>Kondisi</th>
                        <th>Tanggal Pengadaan</th>
                        <th>Sumber Perolehan</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Nilai Residu</th>
                        <th>Umur Ekonomis</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barangs as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->bangunan->nama_bangunan }}</td>
                        <td>{{ $barang->user->username }}</td>
                        <td>{{ $barang->kategori->id }}</td>
                        <td>{{ $barang->merk }}</td>
                        <td>{{ $barang->no_seri }}</td>
                        <td>{{ $barang->kondisi }}</td>
                        <td>{{ $barang->tgl_pengadaan }}</td>
                        <td>{{ $barang->sumber_perolehan }}</td>
                        <td>{{ $barang->jumlah }}</td>
                        <td>{{ $barang->satuan }}</td>
                        <td>{{ $barang->nilai_residu }}</td>
                        <td>{{ $barang->umur_ekonomis }}</td>
                        <td>{{ $barang->status }}</td>
                        <td>
                            <a href="{{url('/barang/'.$barang->id.'/edit')}}" class="btn btn-success">
                                Edit
                            </a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    @endsection