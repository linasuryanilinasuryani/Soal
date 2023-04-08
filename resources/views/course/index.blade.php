@extends('master')

@section('tittle', 'course')

@section('content')
<div class="alert alert-info">course</div>

data course

<a href="#" class="btn btn-success float-end mb-3">Tambah Data</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Institution</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach ($data as $row)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $loop->name }}</td>
        <td>{{ $loop->description }}</td>
    </tr>
</tbody>
</table>
@endsection
