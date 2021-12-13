@extends('layout.ceria')
@section('css')
<link rel="stylesheet" href="/css/container.css">
@endsection
@section('title', 'Data Masker')
@section('judulhalaman','Data Masker')
@section('konten')

	<a href="/masker/tambah" class="btn btn-success btn-sm" role="button"> + Tambah Masker Baru</a>

	<br/>
	<br/>

    <div class="container-fluid my-5" align="center">
        <p>Cari Data Masker berdasarkan Merk:</p>
	    <form action="/masker/cari" method="GET">
		    <input class="form-control" type="text" name="cari" placeholder="Cari Masker .." value="{{ old('cari') }}">
            <input type="submit" class="form-control btn-warning" value="Cari Data">
	    </form>
    </div>

	<table class="table table-hover mt-3">
		<tr class="table-info">
            <th>No</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($masker as $m)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $m->merkmasker }}</td>
            <td>{{ $m->stockmasker }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>
                <a href="/masker/detail/{{ $m->kodemasker }}" class="btn btn-default btn-sm" role="button">View Detail</a>

				<a href="/masker/edit/{{ $m->kodemasker }}" class="btn btn-info btn-sm" role="button">Edit</a>

				<a href="/masker/hapus/{{ $m->kodemasker }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $masker->links()  }}

@endsection
