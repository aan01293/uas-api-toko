<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategoriproduk;
// item_id,nama_kategoriproduk,jumlah,kondisi,lokasi_id
class kategoriprodukController extends Controller
{
    public function index()
    {
        $kategoriproduk = kategoriproduk::all();
        return response()->json($kategoriproduk);
    }

    public function show($id)
    {
        $kategoriproduk = kategoriproduk::find($id);
        return response()->json($kategoriproduk);
    }

    public function store(Request $request)
    {
        $kategoriproduk = kategoriproduk::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $kategoriproduk = kategoriproduk::find($id);
        $kategoriproduk->update($request->all());
        return response()->json("Berhasil diupdate");
        

    }

    public function destroy($id)
    {
        $kategoriproduk = kategoriproduk::find($id);
        $kategoriproduk->delete();
        return response()->json("Berhasil dihapus");
    }
}