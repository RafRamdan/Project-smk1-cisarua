<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_produk';
    protected $table = "produks";
    protected $fillable = ['id_produk', 'image', 'name_produk'];

    public function transaksis()
    {
        return $this->hasMany(transaksi::class);
    }
}
