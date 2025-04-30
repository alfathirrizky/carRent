<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['nama_mobil','durasi','harga','bahan_bakar','tipe','seater','kategori','gambar_mobil'];
}
