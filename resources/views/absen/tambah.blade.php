@extends('layout.ceria')
@section('title', 'Data Absen')
@section('judulhalaman', 'Tambah Data Absen')

@section('konten')

    <a href="/absen"> Kembali</a>

    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="nama" class="col-md-2 col-sm-4 control-label">Nama Pegawai</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="nama">
                    <select class="form-control" name="IDPegawai" required="required">
                        @foreach($pegawai as $p )
                            <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mt-4">
                <label for="dtpickerdemo" class="col-md-2 col-sm-4 control-label">Tanggal</label>
                <div class="col-1">:</div>
                <div class='col-md-3 ml-4 col-sm-7 input-group date' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" required="required" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            </div>

            <div class="row mt-4">
                <label for="status" class="col-md-2 col-sm-4 control-label">Status</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="h">
                            <input type="radio" id="h" name="status" value="H">
                        Hadir</label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="a">
                            <input type="radio" id="a" name="status" value="A" checked="checked">
                        Tidak Hadir</label><br>
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

