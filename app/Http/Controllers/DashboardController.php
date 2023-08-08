<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->transaksi = new transaksi();
    }

    public function index()
    {
        $data = [
            'transaksi'=> $this->transaksi->allData(),
        ];
        return view('dashboard.index', $data);
    }
}
