<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class produk extends Model
{
    protected $primaryKey = 'ID_Produk';
    protected $table = 'produk';
    protected $fillable = [
        'ID_Produk','Nama_Produk','Harga','Stok','ID_Kategori'
    ];
    protected $hidden = [];
}