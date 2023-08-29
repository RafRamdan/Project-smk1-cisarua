<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Fancades\Storage;


class ProdukController extends Controller
{
    public function index(Request $request)
    {
        // $produks = Produk::paginate(10);
        if($request->has('search')) {
            $produks = Produk::where('name_produk', 'like' , '%' . $request->search . '%')
            ->orwhere('max_length','like','%'.$request->search.'%')
            ->orwhere('length','like','%'.$request->search.'%')
            ->orwhere('width','like','%'.$request->search.'%')
            ->orwhere('height','like','%'.$request->search.'%')->paginate(10);
           }else{
            $produks = Produk::paginate(10);
           }
   

        return view('produks.index',compact(['produks']));
    }

    public function create()
    {
        return view('produks.create');
    }

    public function store(Request $request)
    {
    //    dd($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'name_produk' => 'required|min:5',
            'max_length' => 'required',
            'length' => 'required',
            'width' => 'required',
            'height' => 'required',
        ]);

        $image =$request->file('image');
        $image->storeAs('public/produks', $image->hashName());
        $produk = Produk::create([
            'image' => $image->hashName(),
            'name_produk'=> $request->name_produk,
            'max_length'=> $request->max_length,
            'length'=> $request->length,
            'width'=> $request->width,
            'height'=> $request->height,
        ]);

        // foreach ($request->file('files') as $file) {
        //     $filename = time().rand(1,200).'.'.$file->extension();
        //     $file->move(public_path('uploads'),$filename);
        //     Picture::create([
        //         'produk_id' => $produk->id,
        //         'filename' => $filename
        //     ]);
        // }

        return redirect('/produks')->with('success','Data Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('produks.edit',compact(['produk']));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'name_produk' => 'required|min:5',
            'max_length' => 'required',
            'length' => 'required',
            'width' => 'required',
            'height' => 'required',
        ]);

        $image =$request->file('image');
        $image->storeAs('public/produks', $image->hashName());
        
        $produk = Produk::find($id);
        $produk->update([
            'image' => $image->hashName(),
            'name_produk'=> $request->name_produk,
            'max_length'=> $request->max_length,
            'length'=> $request->length,
            'width'=> $request->width,
            'height'=> $request->height,
        ]);

        // foreach ($request->file('files') as $file) {
        //     $filename = time().rand(1,200).'.'.$file->extension();
        //     $file->move(public_path('uploads'),$filename);
        //     Picture::create([
        //         'produk_id' => $produk->id,
        //         'filename' => $filename
        //     ]);
        // }

        return redirect('produks')->with('success','Data Produk berhasil diubah.');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);

       
        $produk->delete();
        return redirect('produks')->with('success','Data Produk berhasil dihapus');
    }
}
