@extends('layout.ceria')
@section('title', 'Data Karyawan1')
@section('judulhalaman', 'Tambah Data Karyawan1')
@section('konten')

	<a href="/karyawan1"> Kembali</a>

	<form action="/karyawan1/store" method="post">
		{{ csrf_field() }}
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="NIP" class="col-md-2 col-sm-4 control-label">NIP</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="NIP">
                    <input type="text" class="form-control" name="NIP" required="required">
                </div>
            </div>

            <div class="row mt-4">
                <label for="Nama" class="col-md-2 col-sm-4 control-label">Nama</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="Nama">
                    <input type="text" class="form-control" name="Nama" required="required">
                </div>
            </div>

            <div class="row mt-4">
                <label for="Pangkat" class="col-md-2 col-sm-4 control-label">Pangkat</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="Pangkat">
                    <input type="text" class="form-control" name="Pangkat" required="required">
                </div>
            </div>

            <div class="row mt-4">
                <label for="Gaji" class="col-md-2 col-sm-4 control-label">Gaji</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="Gaji">
                    <input type="gaji" class="form-control" name="Gaji" required="required">
                </div>
            </div>

            <div class="row my-5">
                <div class="col-md-2 col-sm-4 col-form-label"></div>
                <div class="col-1"></div>
                <div class="col-md-3 col-sm-7">
                    <button type="submit" class="form-control btn-success">Simpan Data</button>
                </div>
            </div>
        </div>
	</form>

@endsection
