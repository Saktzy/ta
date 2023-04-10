<?php

namespace App\Http\Controllers\Keloladata;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;


class PendudukController extends Controller
{
    function index()
    {

        $data['list_penduduk'] = Penduduk::all();
        return view('content.keloladata.penduduk.index', $data);
    }

    function create()
    {
        return view('content.keloladata.penduduk.create');
    }

    function store()
    {
        $penduduk = new Penduduk;
        $penduduk->nik = request('nik');
        $penduduk->nama = request('nama');
        $penduduk->tempat_lh = request('tempat_lh');
        $penduduk->tgl_lh = request('tgl_lh');
        $penduduk->jekel = request('jekel');
        $penduduk->desa = request('desa');
        $penduduk->rt = request('rt');
        $penduduk->rw = request('rw');
        $penduduk->agama = request('agama');
        $penduduk->status = request('status');
        $penduduk->pekerjaan = request('pekerjaan');
        $penduduk->save();

        return redirect('penduduk');
    }

    function show(Penduduk $penduduk)
    {
        $data['penduduk'] = $penduduk;
        return view('content.keloladata.penduduk.show', $data);
    }

    function edit(Penduduk $penduduk)
    {
        $data['penduduk'] = $penduduk;
        return view('content.keloladata.penduduk.edit', $data);
    }

    function update(Penduduk $penduduk)
    {
        $penduduk->nik = request('nik');
        $penduduk->nama = request('nama');
        $penduduk->tempat_lh = request('tempat_lh');
        $penduduk->tgl_lh = request('tgl_lh');
        $penduduk->jekel = request('jekel');
        $penduduk->desa = request('desa');
        $penduduk->rt = request('rt');
        $penduduk->rw = request('rw');
        $penduduk->agama = request('agama');
        $penduduk->status = request('status');
        $penduduk->pekerjaan = request('pekerjaan');
        $penduduk->save();

        return redirect('penduduk');
    }

    function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();

        return redirect('penduduk');
    }
}
