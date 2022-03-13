@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-sm-8 col-md-6">
            <h1 class="h2 pt-4">Tambah Kategori</h1>
            <hr>

            <form action="{{url('kategori')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="id">Id Kategori</label>
                    <input type="text" class="form-control  @error('id') is-invalid @enderror" id="id" name="id" value="{{ old('id') }}">
                    @error('id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori') }}">
                    @error('nama_kategori')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary my-2">Tambah</button>
            </form>
        </div>
    </div>
</div>





@endsection