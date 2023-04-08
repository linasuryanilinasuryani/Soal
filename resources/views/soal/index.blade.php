@extends('master')
@section('content')
<table>
<a href="{{ route('soal.create')}}" class="btn btn-info float-end mt-2"> Tambah Data </a>
<table  class="table table-bordered mt-5">
    <thead>
        <tr>
        <th>id</th>
            <th>nama mata Kuliah</th>
                <th>dosen</th>
                    <th>jumlah soal</th>
                    <th>keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $d->nama_mk }}</td>
        <td>{{  $d->dosen }}</td>
        <td>{{ $d->jumlah }}</td>
        <td>{{ $d->keterangan }}</td>
        <td>
            <a href="{{ route('soal.edit', $d->id) }}" class="btn btn-warning">Edit</a>
        </td>
        <td>
            <form action="{{ route('soal.delete', $d->id )}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class = "btn btn-danger">DELETE</button>

            </form>
    </td>
    </tr>
    @endsection
    </tbody>
</table>
</table>

    @endforeach



