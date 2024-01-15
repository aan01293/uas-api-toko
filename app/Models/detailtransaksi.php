<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class detailtransaksi extends Model
{
    protected $primaryKey = 'ID_DetailTransaksi';
    protected $table = 'detailtransaksi';
    protected $fillable = [
        'ID_DetailTransaksi','ID_Transaksi','ID_Produk','Jumlah','Harga_Produk'
    ];
    protected $hidden = [];
}