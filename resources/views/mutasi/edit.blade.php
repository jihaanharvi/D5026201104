<!DOCTYPE html>
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

	<h2>Edit Mutasi</h2>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->mutasi_id }}"> <br/>
        <div class="row mt-3">
            <div class="col-md-2 col-sm-4 col-form-label">ID Pegawai</div>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7">
                <input type="number" class="form-control" name="mutasi_idPegawai" required="required" value="{{ $m->mutasi_idPegawai }}"> <br/>
            </div>
        </div>
        <div class="row">
		    <div class="col-md-2 col-sm-4 col-form-label">Departemen</div>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7">
                <input type="text" class="form-control" name="mutasi_departemen" required="required" value="{{ $m->mutasi_departemen }}"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-4 col-form-label">Sub Departemen</div>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7">
                <input type="text" class="form-control" name="mutasi_subDepartemen" required="required" value="{{ $m->mutasi_subDepartemen }}"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-4 col-form-label">Mulai Bertugas</div>
            <div class="col-1">:</div>
            <div class="col-md-3 col-sm-7">
                <input type="datetime" class="form-control" name="mutasi_mulaiBertugas" required="required" value="{{ $m->mutasi_mulaiBertugas }}"> <br/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-2 col-sm-4 col-form-label"></div>
            <div class="col-1"></div>
            <div class="col-md-3 col-sm-7">
                <button type="submit" class="form-control btn-success">Simpan Data</button>
            </div>
        </div>
	</form>
	@endforeach

    </div>
</body>
</html>
