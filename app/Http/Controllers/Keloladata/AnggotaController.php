<?php

namespace App\Http\Controllers\Keloladata;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Keluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;


class AnggotaController extends Controller
{
    function index()
    {
        $data['list_keluarga'] = Keluarga::all();
        $data['list_anggota'] = Anggota::all();
        return view('content.keloladata.keluarga.anggota.index', $data);
    }

    function create()
    {


        return view('content.keloladata.keluarga.anggota.index');
    }

    function store()
    {
        $anggota = new Anggota;
        $anggota->id_kk = request('id_kk');
        $anggota->id_pend = request('id_pend');
        $anggota->no_kk = request('no_kk');
        $anggota->kepala = request('kepala');
        $anggota->hubungan = request('hubungan');
        $anggota->desa = request('desa');
        $anggota->rt = request('rt');
        $anggota->rt = request('rw');
        $anggota->nama = request('nama');
        $anggota->save();

        return back();
    }

    function show(Keluarga $keluarga)
    {
        $data['keluarga'] = $keluarga;
        $data['anggota'] = Anggota::all();
        return view('content.keloladata.keluarga.show', $data);
    }

    function showAnggota(Keluarga $keluarga)
    {
        $data['list_anggota'] = Anggota::all();
        $data['keluarga'] = $keluarga;
        $data['list_penduduk'] = Penduduk::all();
        $data['list_keluarga'] = Keluarga::all();
        $data['anggota'] = Anggota::all();
        return view('content.keloladata.keluarga.anggota.index', $data);
    }

    function edit(Anggota $anggota)
    {
        $data['anggota'] = $anggota;
        return view('content.keloladata.keluarga.edit', $data);
    }

    function update(Anggota $anggota)
    {
        $anggota->no_kk = request('no_kk');
        $anggota->kepala = request('kepala');
        $anggota->hubungan = request('hubungan');
        $anggota->desa = request('desa');
        $anggota->rt = request('rt');
        $anggota->rt = request('rw');
        $anggota->nama = request('nama');
        $anggota->save();

        return redirect('anggota');
    }

    function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return redirect('anggota');
    }
}
