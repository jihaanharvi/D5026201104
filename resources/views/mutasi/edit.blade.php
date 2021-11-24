<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>


	<h3>Edit Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $p)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->mutasi_id }}"> <br/>
        ID <input type="number" name="mutasi_id" required="required" value="{{ $p->mutasi_id }}"> <br/>
		ID Pegawai <input type="number" name="mutasi_idPegawai" required="required" value="{{ $p->mutasi_idPegawai }}"> <br/>
		Departemen <input type="text" name="mutasi_departemen" required="required" value="{{ $p->mutasi_departemen }}"> <br/>
        Sub Departemen <input type="text" name="mutasi_subDepartemen" required="required" value="{{ $p->mutasi_subDepartemen }}"> <br/>
        Mulai Bertugas <input type="datetime" name="mutasi_mulaiBertugas" required="required" value="{{ $p->mutasi_mulaiBertugas }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
