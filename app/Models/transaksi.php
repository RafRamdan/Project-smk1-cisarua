<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_transaksi';
    // public function transaksi(){
    //     return $this->hasMany(Produk::class)
    // }

    // public function allData(){
    //     return DB::table('transaksi')
    //     ->Join('customers', 'customers.id_customer', '=', 'transaksi.id_customer')
    //     ->Join('produks', 'produks.id_produk', '=', 'transaksi.id_produk')
    //     ->get();
    // }
}
