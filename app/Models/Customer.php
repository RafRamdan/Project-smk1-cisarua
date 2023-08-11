<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_customer';
    protected $guarded = [];
    protected $table = "customers";
    protected $fillable = ['id_customer','transaksi_id', 'name_customer', 'email','phone', 'address'];

    public function transaksis()
    {
        return $this->hasMany(transaksi::class);
    }

}
