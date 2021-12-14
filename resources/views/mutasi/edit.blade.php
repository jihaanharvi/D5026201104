@extends('layout.ceria')
@section('title', 'Data Mutasi')
@section('judulhalaman', 'Edit Data Mutasi')
@section('konten')

	<a href="/mutasi"> Kembali</a>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->mutasi_id }}">
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="id" class="col-md-2 col-sm-4 control-label">Nama Pegawai</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="id">
                    <select class="form-control" name="IDPegawai">
                        @foreach($pegawai as $p )
                            <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$m->mutasi_idPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mt-4">
                <label for="departemen" class="col-md-2 col-sm-4 control-label">Departemen</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="departemen">
                    <input type="text" class="form-control" name="mutasi_departemen" required="required" value="{{ $m->mutasi_departemen }}">
                </div>
            </div>

            <div class="row mt-4">
                <label for="subdepartemen" class="col-md-2 col-sm-4 control-label">Sub Departemen</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-7" id="subdepartemen">
                    <input type="text" class="form-control" name="mutasi_subDepartemen" required="required" value="{{ $m->mutasi_subDepartemen }}">
                </div>
            </div>

            <div class="row mt-4">
                <label for="dtpickerdemo" class="col-md-2 col-sm-4 control-label">Mulai Bertugas</label>
                <div class="col-1">:</div>
                <div class="col-md-3 ml-4 col-sm-7 input-group date" id='dtpickerdemo'>
                    <input type='text' class="form-control" name="mutasi_mulaiBertugas" required="required" value="{{ $m->mutasi_mulaiBertugas }}" />
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

