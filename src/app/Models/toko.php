<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    protected $connection = 'mysql';
    protected $fillable = [
        'nama_toko', 'alamat_toko', 'telp', 'product', 'created_at', 'updated_at'
    ];
}
