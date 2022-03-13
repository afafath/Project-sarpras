@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-12">

            <div class="py-4 d-flex justify-content-end align-items-center">
                <h1 class="h2 mr-auto">Tabel Gedung</h1>
                <a href="{{url('/gedung/create')}}" class="btn btn-primary">
                    Tambah Gedung
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
                        <th>Kode Gedung</th>
                        <th>Nama Gedung</th>
                        <th>Status</th>
                        <th>Kondisi</th>
                        <th>Panjang Gedung (M)</th>
                        <th>Lebar Gedung (M)</th>
                        <th>Luas Gedung (M Persegi)</th>
                        <th>Konstruksi</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gedungs as $gedung)
                    <tr>
                        <td>{{ $gedung->id }}</td>
                        <td>{{ $gedung->nama_gedung }}</td>
                        <td>{{ $gedung->status }}</td>
                        <td>{{ $gedung->kondisi }}</td>
                        <td>{{ $gedung->panjang_gedung }}</td>
                        <td>{{ $gedung->lebar_gedung }}</td>
                        <td>{{ $gedung->panjang_gedung*$gedung->lebar_gedung }}</td>
                        <td>{{ $gedung->konstruksi }}</td>
                        <td>{{ $gedung->keterangan }}</td>
                        <td>
                            <a href="{{url('/gedung/'.$gedung->id.'/edit')}}" class="btn btn-success">
                                Edit
                            </a>
                            <form action="{{ Route('gedung.destroy', ['gedung' => $gedung->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger in-line" type="submit">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    @endsection