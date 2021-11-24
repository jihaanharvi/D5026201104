<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    public function index()
    {
    	$mutasi = DB::table('mutasi')->get();

    	// mengirim data mutasi ke view index
    	return view('mutasi.index',['mutasi' => $mutasi]);

    }

public function tambah()
{

	// memanggil view tambah
	return view('mutasi.tambah');

}

// method untuk insert data ke tabel mutasi
public function store(Request $request)
{
	// insert data ke table mutasi
	DB::table('mutasi')->insert([
		'mutasi_id' => $request->mutasi_id,
		'mutasi_idPegawai' => $request->mutasi_idPegawai,
		'mutasi_departemen' => $request->mutasi_departemen,
		'mutasi_subDepartemen' => $request->mutasi_subDepartemen,
        'mutasi_mulaiBertugas' => $request->mutasi_mulaiBertugas
	]);
	// alihkan halaman ke halaman mutasi
	return redirect('/mutasi');

}

// method untuk edit data mutasi
public function edit($id)
{
	$mutasi = DB::table('mutasi')->where('mutasi_id',$id)->get();

	return view('mutasi.edit',['mutasi' => $mutasi]);

}

// update data mutasi
public function update(Request $request)
{
	DB::table('mutasi')->where('mutasi_id',$request->id)->update([
		'mutasi_idPegawai' => $request->mutasi_idPegawai,
		'mutasi_departemen' => $request->mutasi_departemen,
		'mutasi_subDepartemen' => $request->mutasi_subDepartemen,
		'mutasi_mulaiBertugas' => $request->mutasi_mulaiBertugas
	]);

	return redirect('/mutasi');
}

// method untuk hapus data mutasi
public function hapus($id)
{
	DB::table('mutasi')->where('mutasi_id',$id)->delete();

	return redirect('/mutasi');
}

}
