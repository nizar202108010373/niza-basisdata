<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $connection = 'mysql';
    protected $fillable = [
        'nama_supplier', 'alamat_supplier', 'telp', 'supply_product', 'created_at', 'updated_at'
    ];
}
