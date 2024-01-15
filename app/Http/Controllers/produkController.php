<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
// item_id,nama_produk,jumlah,kondisi,lokasi_id
class produkController extends Controller
{
    public function index()
    {
        $produk = produk::all();
        return response()->json($produk);
    }

    public function show($id)
    {
        $produk = produk::find($id);
        return response()->json($produk);
    }

    public function store(Request $request)
    {
        $produk = produk::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $produk = produk::find($id);
        $produk->update($request->all());
        return response()->json("Berhasil diupdate");
        

    }

    public function destroy($id)
    {
        $produk = produk::find($id);
        $produk->delete();
        return response()->json("Berhasil dihapus");
    }
}