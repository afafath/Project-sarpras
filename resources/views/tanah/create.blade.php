@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-sm-8 col-md-6">
            <h1 class="h2 pt-4">Tambah Tanah</h1>
            <hr>

            <form action="{{url('tanah')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="id">Kode Tanah</label>
                    <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ old('id') }}">
                    @error('id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_sertifikat">No. Sertifikat</label>
                    <input type="text" class="form-control @error('no_sertifikat') is-invalid @enderror" id="no_sertifikat" name="no_sertifikat" value="{{ old('no_sertifikat') }}">
                    @error('no_sertifikat')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_pemilik">Nama Pemilik</label>
                    <input type="text" class="form-control @error('nama_pemilik') is-invalid @enderror" id="nama_pemilik" name="nama_pemilik" value="{{ old('nama_pemilik') }}">
                    @error('nama_pemilik')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status') }}">
                    @error('status')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="luas">Luas</label>
                    <input type="text" class="form-control @error('luas') is-invalid @enderror" id="luas" name="luas" value="{{ old('luas') }}">
                    @error('luas')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sumber_perolehan">Sumber Perolehan</label>
                    <input type="text" class="form-control @error('sumber_perolehan') is-invalid @enderror" id="sumber_perolehan" name="sumber_perolehan" value="{{ old('sumber_perolehan') }}">
                    @error('sumber_perolehan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_perolehan">Tanggal Perolehan</label>
                    <input type="date" class="form-control @error('tgl_perolehan') is-invalid @enderror" id="tgl_perolehan" name="tgl_perolehan" value="{{ old('tgl_perolehan') }}">
                    @error('tgl_perolehan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="letak_tanah">Letak Tanah</label>
                    <input type="text" class="form-control @error('letak_tanah') is-invalid @enderror" id="letak_tanah" name="letak_tanah" value="{{ old('letak_tanah') }}">
                    @error('letak_tanah')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="batas_utara">Batas Utara</label>
                    <input type="text" class="form-control @error('batas_utara') is-invalid @enderror" id="batas_utara" name="batas_utara" value="{{ old('batas_utara') }}">
                    @error('batas_utara')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="batas_barat">Batas Barat</label>
                    <input type="text" class="form-control @error('batas_barat') is-invalid @enderror" id="batas_barat" name="batas_barat" value="{{ old('batas_barat') }}">
                    @error('batas_barat')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="batas_selatan">Batas Selatan</label>
                    <input type="text" class="form-control @error('batas_selatan') is-invalid @enderror" id="batas_selatan" name="batas_selatan" value="{{ old('batas_selatan') }}">
                    @error('batas_selatan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="batas_timur">Batas Timur</label>
                    <input type="text" class="form-control @error('batas_timur') is-invalid @enderror" id="batas_timur" name="batas_timur" value="{{ old('batas_timur') }}">
                    @error('batas_timur')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}">
                    @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="penggunaan">Penggunaan</label>
                    <input type="text" class="form-control @error('penggunaan') is-invalid @enderror" id="penggunaan" name="penggunaan" value="{{ old('penggunaan') }}">
                    @error('penggunaan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary my-2">Tambah</button>
            </form>
        </div>
    </div>
</div>





@endsection