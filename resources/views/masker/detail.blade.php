@extends('layout.ceria')
@section('title', 'Data Masker')
@section('judulhalaman', 'View Detail Data Masker')

@section('konten')

	<a href="/masker"> Kembali</a>

	@foreach($masker as $m)
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="merk" class="col-md-2 col-sm-4 control-label">Merk</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="merk">
                    <label class="control-label">{{ $m->merkmasker }}</label>
                </div>
            </div>

            <div class="row mt-4">
                <label for="stock" class="col-md-2 col-sm-4 control-label">Stock</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="stock">
                    <label class="control-label">{{ $m->stockmasker }}</label>
                </div>
            </div>

            <div class="row my-4">
                <label for="tersedia" class="col-md-2 col-sm-4 control-label">Tersedia</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="tersedia">
                    <label class="control-label">{{ $m->tersedia }}</label>
                </div>
            </div>
        </div>
	@endforeach
@endsection
