<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detailtransaksi;
// item_id,nama_detailtransaksi,jumlah,kondisi,lokasi_id
class detailtransaksiController extends Controller
{
    public function index()
    {
        $detailtransaksi = detailtransaksi::all();
        return response()->json($detailtransaksi);
    }

    public function show($id)
    {
        $detailtransaksi = detailtransaksi::find($id);
        return response()->json($detailtransaksi);
    }

    public function store(Request $request)
    {
        $detailtransaksi = detailtransaksi::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $detailtransaksi = detailtransaksi::find($id);
        $detailtransaksi->update($request->all());
        return response()->json("Berhasil diupdate");
        

    }

    public function destroy($id)
    {
        $detailtransaksi = detailtransaksi::find($id);
        $detailtransaksi->delete();
        return response()->json("Berhasil dihapus");
    }
}