@extends('layout.ceria')
@section('css')
<link rel="stylesheet" href="/css/container.css">
@endsection
@section('konten')

<div class="container my-5">

<h3>Data Absen</h3>

<a href="/absen/tambah" class="btn btn-success btn-sm" role="button"> + Tambah Absen Baru</a>

<br/>
<br/>

<table class="table table-hover mt-3">
    <tr class="table-info">
        <th>ID Pegawai</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Opsi</th>
    </tr>
    @foreach($absen as $a)
    <tr>
        <td>{{ $a->IDPegawai }}</td>
        <td>{{ $a->Tanggal }}</td>
        <td>{{ $a->Status }}</td>
        <td>
            <a href="/absen/edit/{{ $a->ID}}" class="btn btn-info btn-sm" role="button">Edit</a>

            <a href="/absen/hapus/{{ $a->ID}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

</div>

@endsection
