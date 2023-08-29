<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    // Mass assigment
    protected $guarded = [];
    protected $primaryKey = 'id_produk';
    protected $table = "produks";
    protected $fillable = ['id_produk', 'image', 'name_produk', 'max_length', 'length', 'height','width'];

    public function transaksis()
    {
        // 1 produk dapat memiliki banyak transaksi
        return $this->hasMany(transaksi::class);
    }
}
