@extends('layout.ceria')
@section('title', 'Data Masker')
@section('judulhalaman', 'Edit Data Masker')
@section('konten')

	<a href="/masker"> Kembali</a>

	@foreach($masker as $m)
	<form action="/masker/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->kodemasker }}">
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="merk" class="col-md-2 col-sm-4 control-label">Merk</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="merk">
                    <input type="text" class="form-control" name="merk" required="required" value="{{ $m->merkmasker }}">
                </div>
            </div>

            <div class="row mt-4">
                <label for="stock" class="col-md-2 col-sm-4 control-label">Stock</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="stock">
                    <input type="number" class="form-control" name="stock" required="required" value="{{ $m->stockmasker }}">
                </div>
            </div>

            <div class="row mt-4">
                <label for="tersedia" class="col-md-2 col-sm-4 control-label">Tersedia</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="y">
                            <input type="radio" id="y" name="tersedia" value="Y" @if($m->tersedia==='Y') checked="checked" @endif>
                        Ya </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="t">
                            <input type="radio" id="t" name="tersedia" value="T" @if($m->tersedia==='T') checked="checked" @endif>
                        Tidak </label>
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
	@endforeach
    
@endsection
