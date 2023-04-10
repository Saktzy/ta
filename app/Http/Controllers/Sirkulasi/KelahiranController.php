<?php

namespace App\Http\Controllers\Sirkulasi;

use App\Models\Kelahiran;
use App\Http\Controllers\Controller;

class KelahiranController extends Controller
{
    function index(){
        $data['list_kelahiran'] = Kelahiran::all();
        return view('content.sirkulasi.kelahiran.index', $data);
    }
    function create(){
        return view('content.sirkulasi.kelahiran.create');
    }
    function store()
    {
        $kelahiran = new Kelahiran();
        $kelahiran->nama_bayi = request('nama_bayi');
        $kelahiran->tanggal_lahir = request('tanggal_lahir');
        $kelahiran->tempat_lahir = request('tempat_lahir');
        $kelahiran->no_nik_ibu = request('no_nik_ibu');
        $kelahiran->no_nik_ayah = request('no_nik_ayah');
        $kelahiran->nama_ayah = request('nama_ayah');
        $kelahiran->nama_ibu = request('nama_ibu');
        $kelahiran->save();

        return redirect('kelahiran')->with('success', 'Data Berhasil Ditambahkan');
    }
    function edit(Kelahiran $kelahiran)
    {
        $data['kelahiran'] =  $kelahiran;
        return view('content.sirkulasi.kelahiran.edit', $data);
    }
    function update(Kelahiran $kelahiran)
    {
        $kelahiran->nama_bayi = request('nama_bayi');
        $kelahiran->tanggal_lahir = request('tanggal_lahir');
        $kelahiran->tempat_lahir = request('tempat_lahir');
        $kelahiran->no_nik_ibu = request('no_nik_ibu');
        $kelahiran->no_nik_ayah = request('no_nik_ayah');
        $kelahiran->nama_ayah = request('nama_ayah');
        $kelahiran->nama_ibu = request('nama_ibu');
        $kelahiran->save();

        return redirect('kelahiran')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Kelahiran $kelahiran)
    {
        $kelahiran->delete();
        return redirect('kelahiran')->with('danger', 'Data Berhasil Dihapus');
    }
}
