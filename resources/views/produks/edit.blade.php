@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Edit Produks</h6>

        </div>
        <div class="card-body px-2 pt-0 pb-2">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/produks/{{ $produk->id_produk }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Produk</label>
                  <input name="name_produk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{ $produk->name_produk }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Max Panjang</label>
                  <input name="max_length" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Max Panjang"value="{{ $produk->max_length }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Panjang</label>
                  <input name="length" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Panjang"value="{{ $produk->length }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Lebar</label>
                  <input name="width" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lebar"value="{{ $produk->width }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi</label>
                  <input name="height" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tinggi"value="{{ $produk->height }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar Produk</label>
                  <input name="image" type="file" class="form-control" multiple id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gambar">
                  @error('image')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div> 
    </div>
</div>

            
@endsection