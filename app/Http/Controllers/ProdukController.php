<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produk;

class ProdukController extends Controller
{

    function index()
    {
        return view('produk.index');
    }


    function create()
    {
        return view('produk.create');
    }


    function store()
    {
        $produk = new Produk;
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->deskripsi = request('deskripsi');
        $produk->foto = request('foto');
        $produk->save();

        return view('produk.index');
    }
}
