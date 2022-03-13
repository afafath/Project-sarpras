@extends('layouts.layout')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-12">

            <div class="py-4 d-flex justify-content-end align-items-center">
                <h1 class="h2 mr-auto">Tabel Tanah</h1>
                <a href="{{url('/tanah/create')}}" class="btn btn-primary">
                    Tambah Tanah
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
                        <th>Kode Tanah </th>
                        <th>No. Sertifikat</th>
                        <th>Nama Pemilik</th>
                        <th>Status</th>
                        <th>Luas</th>
                        <th>Sumber Perolehan</th>
                        <th>Tanggal Perolehan</th>
                        <th>Letak Tanah</th>
                        <th>Batas Utara</th>
                        <th>Batas Barat</th>
                        <th>Batas Selatan</th>
                        <th>Batas Timur</th>
                        <th>Harga</th>
                        <th>Penggunaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tanahs as $tanah)
                    <tr>
                        <td>{{ $tanah->id }}</td>
                        <td>{{ $tanah->no_sertifikat }}</td>
                        <td>{{ $tanah->nama_pemilik }}</td>
                        <td>{{ $tanah->status}}</td>
                        <td>{{ $tanah->luas }}</td>
                        <td>{{ $tanah->sumber_perolehan }}</td>
                        <td>{{ $tanah->tgl_perolehan }}</td>
                        <td>{{ $tanah->letak_tanah }}</td>
                        <td>{{ $tanah->batas_utara }}</td>
                        <td>{{ $tanah->batas_barat }}</td>
                        <td>{{ $tanah->batas_selatan }}</td>
                        <td>{{ $tanah->batas_timur }}</td>
                        <td>{{ $tanah->harga }}</td>
                        <td>{{ $tanah->penggunaan }}</td>
                        <td>
                            <a href="{{url('/tanah/'.$tanah->id.'/edit')}}" class="btn btn-success">
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