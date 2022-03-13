@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-sm-8 col-md-6">
            <h1 class="h2 pt-4">Edit Bangunan</h1>
            <hr>

            <form action="{{Route('bangunan.update', ['bangunan' => $bangunan->id]) }}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="id">Kode Bangunan</label>
                    <input type="text" class="form-control  @error('id') is-invalid @enderror" id="id" name="id" value="{{ old('id', $bangunan->id ) }}">
                    @error('id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="id_gedung">Gedung </label>
                    <select name="id_gedung" id="id_gedung" class="custom-select col-md-12 @error('id_gedung') is-invalid @enderror">
                        @foreach ($gedungs as $gedung)
                        <option value="{{ $gedung->id }}" {{ ($bangunan['id_gedung'] ?? '') == $gedung->id ? 'selected' : ''}}>
                            {{ $gedung->nama_gedung }}
                        </option>
                        @endforeach
                    </select>
                    @error('keterangan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_bangunan">Nama Bangunan</label>
                    <input type="text" class="form-control @error('nama_bangunan') is-invalid @enderror" id="nama_bangunan" name="nama_bangunan" value="{{ old('nama_bangunan', $bangunan->nama_bangunan ) }}">
                    @error('nama_bangunan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_pembangunan">Tanggal Pembangunan</label>
                    <input type="date" class="form-control @error('tgl_pembangunan') is-invalid @enderror" id="tgl_pembangunan" name="tgl_pembangunan" value="{{ old('tgl_pembangunan', $bangunan->tgl_pembangunan ) }}">
                    @error('tgl_pembangunan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lantai">Lantai</label>
                    <input type="text" class="form-control @error('lantai') is-invalid @enderror" id="lantai" name="lantai" value="{{ old('lantai', $bangunan->lantai ) }}">
                    @error('lantai')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="panjang_bangunan">Panjang Bangunan (M)</label>
                    <input type="text" class="form-control @error('panjang_bangunan') is-invalid @enderror" id="panjang_bangunan" name="panjang_bangunan" value="{{ old('panjang_bangunan', $bangunan->panjang_bangunan ) }}">
                    @error('panjang_bangunan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lebar_bangunan">Lebar Bangunan (M)</label>
                    <input type="text" class="form-control @error('lebar_bangunan') is-invalid @enderror" id="lebar_bangunan" name="lebar_bangunan" value="{{ old('lebar_bangunan', $bangunan->lebar_bangunan ) }}">
                    @error('lebar_bangunan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="panjang_selasar">Panjang Selasar (M)</label>
                    <input type="text" class="form-control @error('panjang_selasar') is-invalid @enderror" id="panjang_selasar" name="panjang_selasar" value="{{ old('panjang_selasar', $bangunan->panjang_selasar ) }}">
                    @error('panjang_selasar')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lebar_selasar">Lebar Selasar (M)</label>
                    <input type="text" class="form-control @error('lebar_selasar') is-invalid @enderror" id="lebar_selasar" name="lebar_selasar" value="{{ old('lebar_selasar', $bangunan->lebar_selasar ) }}">
                    @error('lebar_selasar')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_basts">No. BASTS</label>
                    <input type="text" class="form-control @error('no_basts') is-invalid @enderror" id="no_basts" name="no_basts" value="{{ old('no_basts', $bangunan->no_basts ) }}">
                    @error('no_basts')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_basts">Tanggal BASTS</label>
                    <input type="date" class="form-control @error('tgl_basts') is-invalid @enderror" id="tgl_basts" name="tgl_basts" value="{{ old('tgl_basts', $bangunan->tgl_basts ) }}">
                    @error('tgl_basts')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="file_basts">File BASTS</label>
                    <input type="file" class="form-control @error('file_basts') is-invalid @enderror" id="file_basts" name="file_basts" value="{{ old('file_basts', $bangunan->file_basts ) }}">
                    @error('file_basts')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary my-2">Edit</button>
            </form>
        </div>
    </div>
</div>





@endsection