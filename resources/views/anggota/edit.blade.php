@extends('partials.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Anggota</h1>
    </div>

    <div class="col-lg-8">
        <a href="{{ route('anggota.index') }}" class="btn btn-primary mb-4">Kembali</a>

        <form method="POST" action="{{ route('anggota.store') }}" class="mb-3">
            @csrf
            @method('POST')
            <div class="mb-3">
                <input type="hidden" name="id" value="{{ $anggota->id }}">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autofocus value="{{ old('nama', $anggota->nama) }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control  @error('alamat') is-invalid @enderror" id="alamat" name="alamat" autofocus value="{{ old('alamat', $anggota->alamat) }}">

                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>

            <div class="mb-3">
                <label for="kota" class="form-label">kota</label>
                <input type="text" class="form-control  @error('kota') is-invalid @enderror" id="kota" name="kota" autofocus value="{{ old('kota', $anggota->kota) }}">

                @error('kota')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>

            <div class="mb-3">
                <label for="no_telp" class="form-label">No telepon</label>
                <input type="text" class="form-control  @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" autofocus value="{{ old('no_telp', $anggota->no_telp) }}">

                @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>

            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" autofocus value="{{ old('tgl_lahir', $anggota->tgl_lahir) }}">

                @error('tgl_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>
                <button type="submit" class="btn btn-primary">SImpan</button>
        </form>

        
    </div>

@endsection