@extends('layout.ceria')
@section('css')
<link rel="stylesheet" href="/css/container.css">
@endsection
@section('title', 'Data Karyawan1')
@section('judulhalaman','Data Karyawan1')
@section('konten')

	<br/>
	<br/>

	<table class="table table-hover mt-3">
		<tr class="table-info">
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
            <th>Gaji</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $k)
		<tr>
			<td>{{ $k->NIP }}</td>
            <td>{{ $k->Nama }}</td>
			<td>{{ $k->Pangkat }}</td>
            <td>{{ number_format($k->Gaji)}}</td>
			<td>
                <a href="/karyawan1/tambah" class="btn btn-success btn-sm" role="button"> +Tambah</a>
				<a href="/karyawan1/hapus/{{ $k->NIP }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
