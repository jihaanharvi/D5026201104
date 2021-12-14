@extends('layout.ceria')
@section('title', 'Data Masker')
@section('judulhalaman', 'Tambah Data Masker')
@section('konten')

	<a href="/masker"> Kembali</a>

	<form action="/masker/store" method="post">
		{{ csrf_field() }}
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="merk" class="col-md-2 col-sm-4 control-label">Merk</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="merk">
                    <input type="text" class="form-control" name="merk" required="required">
                </div>
            </div>

            <div class="row mt-4">
                <label for="stock" class="col-md-2 col-sm-4 control-label">Stock</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="stock">
                    <input type="number" class="form-control" name="stock" required="required">
                </div>
            </div>

            <div class="row mt-4">
                <label for="tersedia" class="col-md-2 col-sm-4 control-label">Tersedia</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="y">
                            <input type="radio" id="y" name="tersedia" value="Y">
                        Ya</label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="t">
                            <input type="radio" id="t" name="tersedia" value="T" checked="checked">
                        Tidak</label><br>
                    </div>
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
