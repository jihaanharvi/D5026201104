<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Mutasi</h3>

	<a href="/mutasi/tambah"> + Tambah Mutasi Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
            <th>ID</th>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $p)
		<tr>
            <td>{{ $p->mutasi_id }}</td>
			<td>{{ $p->mutasi_idPegawai }}</td>
			<td>{{ $p->mutasi_departemen }}</td>
			<td>{{ $p->mutasi_subDepartemen }}</td>
			<td>{{ $p->mutasi_mulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $p->mutasi_id }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $p->mutasi_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
