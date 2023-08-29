<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class transaksi extends Model
{
    use HasFactory;
    // Mass assigment 
    protected $guarded = [];
    protected $primaryKey = 'id_transaksi';
    protected $table = "transaksis";
    protected $fillable = ['id_transaksi', 'transaksi','id_customer','id_produk'];
    
    public function customers()
    {
        // 1 transaksi memiliki 1 customer
        return $this->belongsTo(Customer::class, 'id_customer');
    }
    public function produks()
    {
        // 1 transaksi memiliki 1 produk 
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    
}
