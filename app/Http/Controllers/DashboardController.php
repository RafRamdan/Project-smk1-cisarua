<?php

namespace App\Http\Controllers;

use Illuminate\Support\Fancades\DB;
use Illuminate\Http\Request;
use App\Models\transaksi;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        // if($request->has('search')){
        //     $transaksis = transaksi::where('name_produk','LIKE','%' .$request->search.'%')->paginate(3);
        // }else{ 
            // $transaksis = transaksi::with('customers', 'produks')->latest()->paginate(3);
        // }
        $transaksis  = transaksi::join('customers', 'customers.id_customer', '=', 'transaksis.id_customer')
                      ->join('produks', 'produks.id_produk', '=', 'transaksis.id_produk')
                      ->orderBy('transaksis.created_at', 'desc')
                      ->paginate(3);
        // $transaksis = [
        //     'datatransaksi' => $this->transaksi->allData(),
        // ];
        if ($request->keyword != null) {
            $transaksis = transaksi::join('customers', 'customers.id_customer', '=', 'transaksis.id_customer')
                          ->join('produks', 'produks.id_produk', '=', 'transaksis.id_produk')
                          ->where('name_customer', 'like', '%'.$request->keyword. '%')
                          ->orwhere('name_produk', 'like' ,'%'.$request->keyword. '%')
                          ->orwhere('phone', 'like' ,'%'.$request->keyword. '%')
                          ->orwhere('address', 'like' ,'%'.$request->keyword. '%')
                          ->orwhere('transaksi', 'like' ,'%'.$request->keyword. '%')
                          ->orwhere('max_length', 'like' ,'%'.$request->keyword. '%')
                          ->orwhere('length', 'like' ,'%'.$request->keyword. '%')
                          ->orwhere('width', 'like' ,'%'.$request->keyword. '%')
                          ->orwhere('height', 'like' ,'%'.$request->keyword. '%')
                          ->orderBy('transaksis.created_at', 'desc')
                          ->paginate(3);

                        }
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
