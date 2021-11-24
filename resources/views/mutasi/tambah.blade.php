<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
        ID <input type="number" name="mutasi_id" required="required"> <br/>
		ID Pegawai <input type="number" name="mutasi_idPegawai" required="required"> <br/>
		Departemen <input type="text" name="mutasi_departemen" required="required"> <br/>
		Sub Departemen <input type="text" name="mutasi_subDepartemen" required="required"> <br/>
        Mulai Bertugas <input type="datetime" name="mutasi_mulaiBertugas" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
