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
    protected $table = "transaksis";
    protected $fillable = ['id_transaksi', 'transaksi','id_customer','id_produk'];
    
    public function customers()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
    public function produks()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
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
