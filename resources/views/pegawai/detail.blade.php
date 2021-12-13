@extends('layout.ceria')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'View Detail Data Pegawai')

@section('konten')

	<a href="/pegawai"> Kembali</a>

	@foreach($pegawai as $p)
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="nama" class="col-md-2 col-sm-4 control-label">Nama</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="nama">
                    <label class="control-label">{{ $p->pegawai_nama }}</label>
                </div>
            </div>

            <div class="row mt-4">
                <label for="jabatan" class="col-md-2 col-sm-4 control-label">Jabatan</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="jabatan">
                    <label class="control-label">{{ $p->pegawai_jabatan }}</label>
                </div>
            </div>

            <div class="row mt-4">
                <label for="umur" class="col-md-2 col-sm-4 control-label">Umur</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="umur">
                    <label class="control-label">{{ $p->pegawai_umur }}</label>
                </div>
            </div>

            <div class="row my-4">
                <label for="alamat" class="col-md-2 col-sm-4 control-label">Alamat</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="alamat">
                    <label class="control-label">{{ $p->pegawai_alamat }}</label>
                </div>
            </div>
        </div>
	@endforeach
@endsection
