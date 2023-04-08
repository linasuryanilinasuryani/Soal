@extends('master')
@section('content')

<div class="card mt-3">
    <div class="card-header">
        Tambah Data Soal
        <a href="{{ route('soal.index') }}" class="btn btn-warning float-right">Kembali</a>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card-body">

        <form action="{{ route('soal.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">nama mata kuliah</label>
                <input type="text" class="form-control" name="nama_mk">
            </div>
            <div>
                <label for="">dosen</label>
                <input type="text" class="form-control" name="dosen">
            </div>
            <div>
                <label for="">jumlah soal</label>
                <input type="text" class="form-control" name="jumlah">
            </div>
            <div>
                <label for="">keterangan</label>
                <input type="text" class="form-control" name="keterangan">
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

