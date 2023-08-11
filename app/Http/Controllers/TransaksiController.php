<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\Customer;
use App\Models\Produk;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Fancades\Storage;


class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = transaksi::with('customers', 'produks')->latest()->paginate(100);

        return view('transaksi.index',compact(['transaksis']));
    }

    public function create()
    {
        $transak = Customer::all();
        $transik = Produk::all();
        return view('transaksi.create', compact('transak', 'transik'));
    }

    public function store(Request $request)
    {
    //    dd($request->all());
        $request->validate([
            'transaksi' => 'required',
            'id_customer' => 'required',
            'id_produk' => 'required',
        ]);

        $image =$request->file('image');
        $transaksi = transaksi::create([
            
            'transaksi'=> $request->transaksi,
            'id_customer' => $request->id_customer,
            'id_produk' => $request->id_produk,
        ]);

        // foreach ($request->file('files') as $file) {
        //     $filename = time().rand(1,200).'.'.$file->extension();
        //     $file->move(public_path('uploads'),$filename);
        //     Picture::create([
        //         'produk_id' => $produk->id,
        //         'filename' => $filename
        //     ]);

        // }
        
        return redirect('/transaksi')->with('success','Data Transaksi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $transik = Produk::all();
        $transak = Customer::all();
        $transaksi = transaksi::with('customers', 'produks')->find($id);
        return view('transaksi.edit',compact(['transaksi', 'transak', 'transik']));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'transaksi' => 'required',
            'id_customer' => 'required',
            'id_produk' => 'required',
        ]);

      
        $image =$request->file('image');
        
        $transaksi = transaksi::find($id);
        $transaksi->update([
            'transaksi'=> $request->transaksi,
            'id_customer' => $request->id_customer,
            'id_produk' => $request->id_produk,
        ]);

        // foreach ($request->file('files') as $file) {
        //     $filename = time().rand(1,200).'.'.$file->extension();
        //     $file->move(public_path('uploads'),$filename);
        //     Picture::create([
        //         'produk_id' => $produk->id,
        //         'filename' => $filename
        //     ]);
        // }

        return redirect('transaksi')->with('success','Data Transaksi berhasil diubah.');
    }

    public function destroy($id)
    {
        $transaksi = transaksi::find($id);

        $transaksi->delete();
        return redirect('transaksi')->with('success','Data Transaksi berhasil dihapus');
    }
}
