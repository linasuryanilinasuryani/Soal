@extends('master')
@section('content')

<div class="card-body">

    <form action="{{ route('soal.update', $tabel_soal->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nama_mk">nama mata kuliah</label>
            <input type="text" class="form-control" name="nama_mk" value="{{ $tabel_soal->nama_mk }}">
        </div>
        <div>
            <label for="dosen">dosen</label>
            <input type="text" class="form-control" name="dosen" value="{{ $tabel_soal->dosen }}">
        </div>
        <div>
            <label for="jumlah">jumlah soal</label>
            <input type="text" class="form-control" name="jumlah" value="{{ $tabel_soal->jumlah }}">
        </div>
        <div>
            <label for="keterangan">keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="{{ $tabel_soal->keterangan }}">
        </div>
        <div class="card-header">
            <input type="submit" value="Simpan" class="btn btn-primary float-right">
        </div>
        <div class="card-header">
            <input type="submit" value="Ubah" class="btn btn-warning float-right">
        </div>
    </form>
</div>
</div>

@endsection
