@extends('layouts.layout')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-12">

            <div class="py-4 d-flex justify-content-end align-items-center">
                <h1 class="h2 mr-auto">Tabel Bangunan</h1>
                <a href="{{url('/bangunan/create')}}" class="btn btn-primary">
                    Tambah Bangunan
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
                        <th>Gedung</th>
                        <th>Kode Bangunan</th>
                        <th>Nama Bangunan</th>
                        <th>Tanggal Pembangunan</th>
                        <th>Lantai</th>
                        <th>Panjang Bangunan (M)</th>
                        <th>Lebar Bangunan (M)</th>
                        <th>Panjang Selasar (M)</th>
                        <th>Lebar Selasar (M)</th>
                        <th>No. BASTS</th>
                        <th>Tanggal BASTS</th>
                        <th>File BASTS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bangunans as $bangunan)
                    <tr>
                        <td>{{ $bangunan->gedung->nama_gedung }}</td>
                        <td>{{ $bangunan->id }}</td>
                        <td>{{ $bangunan->nama_bangunan }}</td>
                        <td>{{ $bangunan->tgl_pembangunan }}</td>
                        <td>{{ $bangunan->lantai }}</td>
                        <td>{{ $bangunan->panjang_bangunan }}</td>
                        <td>{{ $bangunan->lebar_bangunan }}</td>
                        <td>{{ $bangunan->panjang_selasar }}</td>
                        <td>{{ $bangunan->lebar_selasar }}</td>
                        <td>{{ $bangunan->no_basts }}</td>
                        <td>{{ $bangunan->tgl_basts }}</td>
                        <td>{{ $bangunan->file_basts }}</td>
                        <td></td>
                        <td>
                            <a href="{{url('/bangunan/'.$bangunan->id.'/edit')}}" class="btn btn-success">
                                Edit
                            </a>
                            <form action="{{ Route('bangunan.destroy', ['bangunan' => $bangunan->id]) }}" method="POST">
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