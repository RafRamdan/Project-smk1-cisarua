<?php

namespace App\Http\Controllers;

use Illuminate\Support\Fancades\DB;
use Illuminate\Http\Request;
use App\Models\transaksi;

class DashboardController extends Controller
{

    public function index()
    {
        // if($request->has('search')){
        //     $transaksis = transaksi::where('name_produk','LIKE','%' .$request->search.'%')->paginate(3);
        // }else{ 
            $transaksis = transaksi::with('customers', 'produks')->latest()->paginate(3);
        // }
        
        // if(request('search')){
        //     $transaksis->where('name_produk','like', '%' . request('search') . '%');
        // }
        // $transaksis = transaksi::with('customers', 'produks')->get();
        return view('dashboard.index',compact(['transaksis']));
        // , $data);
    }

    public function detail($id)
    {
        $transaksi = transaksi::with('customers', 'produks')->find($id);

        return view('dashboard.detail',compact(['transaksi']));
    }
    
}
