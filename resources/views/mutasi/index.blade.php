<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>PWEB D - Membuat CRUD Tabel Mutasi</title>
</head>
<body>
    <div class="container my-5">

    <h2>Data Mutasi</h2>

	<a href="/mutasi/tambah"> + Tambah Mutasi Baru</a>

	<br/>
	<br/>

	<table class="table table-hover mt-3">
		<tr class="table-info" >
            <th>ID</th>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
            <td>{{ $m->mutasi_id }}</td>
			<td>{{ $m->mutasi_idPegawai }}</td>
			<td>{{ $m->mutasi_departemen }}</td>
			<td>{{ $m->mutasi_subDepartemen }}</td>
			<td>{{ $m->mutasi_mulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->mutasi_id }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->mutasi_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <div>
</body>
</html>
