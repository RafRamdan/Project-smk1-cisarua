<?php

namespace App\Http\Controllers;

use Illuminate\Support\Fancades\DB;
use Illuminate\Http\Request;
use App\Models\transaksi;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->transaksi = new transaksi();
    // }

    public function index()
    {
        $transaksis = transaksi::with('customers', 'produks')->latest()->paginate(3);

        return view('dashboard.index',compact(['transaksis']));
        // , $data);
    }

    public function detail($id)
    {
        $transaksi = transaksi::with('customers', 'produks')->find($id);

        return view('dashboard.detail',compact(['transaksi']));
    }
    
}
