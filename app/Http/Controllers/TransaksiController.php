<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Fancades\Storage;


class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = transaksi::all();

        return view('transaksi.index',compact(['transaksi']));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
    //    dd($request->all());
        $request->validate([
            'transaksi' => 'required',
            'name_customer' => 'required|min:5',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'name_produk' => 'required|min:5',
        ]);

        $image =$request->file('image');
        $image->storeAs('public/produks', $image->hashName());
        $transaksi = transaksi::create([
            'transaksi'=> $request->transaksi,
            'name_customer'=> $request->name_customer,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'image' => $image->hashName(),
            'name_produk'=> $request->name_produk,
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
        $transaksi = transaksi::find($id);
        return view('transaksi.edit',compact(['transaksi']));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'transaksi' => 'required',
            'name_customer' => 'required|min:5',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'name_produk' => 'required|min:5',
        ]);

        $image =$request->file('image');
        $image->storeAs('public/produks', $image->hashName());
        
        $transaksi = transaksi::find($id);
        $transaksi->update([
            'transaksi'=> $request->transaksi,
            'name_customer'=> $request->name_customer,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'image' => $image->hashName(),
            'name_produk'=> $request->name_produk,
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
