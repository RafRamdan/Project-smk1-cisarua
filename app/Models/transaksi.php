<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function allData(){
        return DB::table('transaksi')
        ->leftJoin('customers', 'customers.id_customer', '=', 'transaksi.id_customer')
        ->leftJoin('produks', 'produks.id_produk', '=', 'transaksi.id_produk')
        ->get();
    }
}
