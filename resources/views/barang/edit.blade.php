@extends('layouts.layout')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-sm-8 col-md-6">
            <h1 class="h2 pt-4">Edit Barang Inventaris</h1>
            <hr>

            <form action="{{Route('barang.update', ['barang' => $barang->id])) }}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="id">Kode Barang Inventaris</label>
                    <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{  old('id', $barang->id  }}">
                    @error('id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}">
                    @error('nama_barang')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bangunan_id">Letak Barang </label>
                    <select name="bangunan_id" id="bangunan_id" class="custom-select col-md-12 @error('bangunan_id') is-invalid @enderror">
                        @foreach ($bangunans as $bangunan)
                        <option value="{{ $bangunan->id }}" {{ ($bangunan['bangunan_id'] ?? '') == $bangunan->id ? 'selected' : ''}}>
                            {{ $bangunan->nama_bangunan }}
                        </option>
                        @endforeach
                    </select>
                    @error('bangunan->id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="user_id">PJ Ruangan </label>
                    <select name="user_id" id="user_id" class="custom-select col-md-12 @error('user_id') is-invalid @enderror">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ ($user['user_id'] ?? '') == $user->id ? 'selected' : ''}}>
                            {{ $user->username }}
                        </option>
                        @endforeach
                    </select>
                    @error('user->id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kategori_id">Kategori Barang </label>
                    <select name="kategori_id" id="kategori_id" class="custom-select col-md-12 @error('kategori_id') is-invalid @enderror">
                        @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ ($kategori['kategori_id'] ?? '') == $kategori->id ? 'selected' : ''}}>
                            {{ $kategori->nama_kategori }}
                        </option>
                        @endforeach
                    </select>
                    @error('kategori->id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="text" class="form-control @error('merk') is-invalid @enderror" id="merk" name="merk" value="{{ old('merk', $barang->merk) }}">
                    @error('merk')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_seri">No. Seri</label>
                    <input type="text" class="form-control @error('no_seri') is-invalid @enderror" id="no_seri" name="no_seri" value="{{  old('no_seri', $barang->no_seri  }}">
                    @error('no_seri')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kondisi">Kondisi Barang</label>
                    <input type="text" class="form-control @error('kondisi') is-invalid @enderror" id="kondisi" name="kondisi" value="{{  old('kondisi', $barang->kondisi  }}">
                    @error('kondisi')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_pengadaan">Tanggal Pengadaan</label>
                    <input type="date" class="form-control @error('tgl_pengadaan') is-invalid @enderror" id="tgl_pengadaan" name="tgl_pengadaan" value="{{  old('tgl_pengadaan', $barang->tgl_pengadaan  }}">
                    @error('tgl_pengadaan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sumber_perolehan">Sumber Perolehan</label>
                    <input type="text" class="form-control @error('sumber_perolehan') is-invalid @enderror" id="sumber_perolehan" name="sumber_perolehan" value="{{  old('sumber_perolehan', $barang->sumber_perolehan  }}">
                    @error('sumber_perolehan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga_perolehan">Harga Perolehan</label>
                    <input type="text" class="form-control @error('harga_perolehan') is-invalid @enderror" id="harga_perolehan" name="harga_perolehan" value="{{  old('harga_perolehan', $barang->harga_perolehan  }}">
                    @error('harga_perolehan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{  old('jumlah', $barang->jumlah  }}">
                    @error('jumlah')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" class="form-control @error('satuan') is-invalid @enderror" id="satuan" name="satuan" value="{{  old('satuan', $barang->satuan  }}">
                    @error('satuan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nilai_residu">Nilai Residu</label>
                    <input type="text" class="form-control @error('nilai_residu') is-invalid @enderror" id="nilai_residu" name="nilai_residu" value="{{ old('nilai_residu', $barang->nilai_residu }}">
                    @error('nilai_residu')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="umur_ekonomis">Umur Ekonomis</label>
                    <input type="text" class="form-control @error('umur_ekonomis') is-invalid @enderror" id="umur_ekonomis" name="umur_ekonomis" value="{{  old('umur_ekonomis', $bangunan->umur_ekonomis  }}">
                    @error('umur_ekonomis')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status',$barang->status) }}">
                    @error('status')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary my-2">Edit</button>
            </form>
        </div>
    </div>
</div>





@endsection