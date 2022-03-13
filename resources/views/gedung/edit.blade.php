@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-sm-8 col-md-6">
            <h1 class="h2 pt-4">Edit Gedung</h1>
            <hr>

            <form action="{{Route('gedung.update', ['gedung' => $gedung->id]) }}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="id">Kode Gedung</label>
                    <input type="text" class="form-control  @error('id') is-invalid @enderror" id="id" name="id" value="{{ $gedung->id }}">
                    @error('id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_gedung">Nama Gedung</label>
                    <input type="text" class="form-control @error('nama_gedung') is-invalid @enderror" id="nama_gedung" name="nama_gedung" value="{{ $gedung->nama_gedung }}">
                    @error('nama_gedung')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ $gedung->status }}">
                    @error('status')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kondisi">Kondisi</label>
                    <input type="text" class="form-control @error('kondisi') is-invalid @enderror" id="kondisi" name="kondisi" value="{{ $gedung->kondisi }}">
                    @error('kondisi')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="panjang_gedung">Panjang Gedung(M)</label>
                    <input type="text" class="form-control @error('panjang_gedung') is-invalid @enderror" id="panjang_gedung" name="panjang_gedung" value="{{ $gedung->panjang_gedung }}">
                    @error('panjang_gedung')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lebar_gedung">Lebar Gedung (M)</label>
                    <input type="text" class="form-control @error('lebar_gedung') is-invalid @enderror" id="lebar_gedung" name="lebar_gedung" value="{{ $gedung->lebar_gedung }}">
                    @error('lebar_gedung')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="konstruksi">Konstruksi</label>
                    <input type="text" class="form-control @error('konstruksi') is-invalid @enderror" id="konstruksi" name="konstruksi" value="{{ $gedung->konstruksi }}">
                    @error('konstruksi')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ $gedung->keterangan }}">
                    @error('keterangan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary my-2">Edit</button>
            </form>
        </div>
    </div>
</div>





@endsection