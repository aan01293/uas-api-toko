<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class kategoriproduk extends Model
{
    protected $primaryKey = 'ID_Kategori';
    protected $table = 'kategoriproduk';
    protected $fillable = [
        'ID_Kategori','Nama_Kategori'
    ];
    protected $hidden = [];
}