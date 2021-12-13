@extends('layout.ceria')
@section('css')
<link rel="stylesheet" href="/css/container.css">
@endsection
@section('title', 'Data Pegawai')
@section('judulhalaman', 'Data Pegawai')
@section('konten')

	<a href="/pegawai/tambah" class="btn btn-success btn-sm" role="button"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

    <div class="container-fluid my-5" align="center">
        <p>Cari Data Pegawai berdasarkan Nama dan Alamat :</p>
	    <form action="/pegawai/cari" method="GET">
		    <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		    <input type="submit" class="form-control btn-warning" value="Cari Data">
	    </form>
    </div>

	<table class="table table-hover mt-3">
		<tr class="table-info">
            <th>No</th>
			<th>Nama</th>
            <!--
			<th>Jabatan</th>
			<th>Umur</th>
            -->
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<!--
            <td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			-->
            <td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-default btn-sm" role="button">View Detail</a>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-info btn-sm" role="button">Edit</a>

				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links()  }}

@endsection
