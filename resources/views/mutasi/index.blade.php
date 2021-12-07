@extends('layout.ceria')
@section('css')
<link rel="stylesheet" href="/css/container.css">
@endsection
@section('konten')


    <div class="container my-5">

    <h3>Data Mutasi</h3>

	<a href="/mutasi/tambah" class="btn btn-success btn-sm" role="button"> + Tambah Mutasi Baru</a>

	<br/>
	<br/>

	<table class="table table-hover mt-3">
		<tr class="table-info">
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td>{{ $m->mutasi_idPegawai }}</td>
			<td>{{ $m->mutasi_departemen }}</td>
			<td>{{ $m->mutasi_subDepartemen }}</td>
			<td>{{ $m->mutasi_mulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->mutasi_id }}" class="btn btn-info btn-sm" role="button">Edit</a>

				<a href="/mutasi/hapus/{{ $m->mutasi_id }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    </div>

@endsection

