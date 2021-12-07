@extends('layout.ceria')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')

	<a href="/pegawai"> Kembali</a>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="nama" class="col-md-2 col-sm-4 control-label">Nama</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="nama">
                    <input type="text" class="form-control" name="nama" required="required" value="{{ $p->pegawai_nama }}">
                </div>
            </div>

            <div class="row mt-4">
                <label for="jabatan" class="col-md-2 col-sm-4 control-label">Jabatan</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="id">
                    <input type="text" class="form-control" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>

            <div class="row mt-4">
                <label for="umur" class="col-md-2 col-sm-4 control-label">Umur</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="umur">
                    <input type="number" class="form-control" name="umur" required="required" value="{{ $p->pegawai_umur }}">
                </div>
            </div>

            <div class="row mt-4">
                <label for="alamat" class="col-md-2 col-sm-4 control-label">Alamat</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="alamat">
                    <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-2 col-sm-4 col-form-label"></div>
                <div class="col-1"></div>
                <div class="col-md-3 col-sm-7">
                    <button type="submit" class="form-control btn-success">Simpan Data</button>
            </div>
        </div>
	</form>
	@endforeach
@endsection
