@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-12">

            <div class="py-4 d-flex justify-content-end align-items-center">
                <h1 class="h2 mr-auto">Tabel Kategori Barang</h1>
                <a href="{{url('/kategori/create')}}" class="btn btn-primary">
                    Tambah Kategori
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
                        <th>Id Kategori</th>
                        <th>Kategori Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategoris as $kategori)
                    <tr>
                        <td>{{ $kategori->id }}</td>
                        <td>{{ $kategori->nama_kategori }}</td>
                        <td>
                            <form action="{{ Route('kategori.destroy', ['kategori' => $kategori->id]) }}" method="POST">
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