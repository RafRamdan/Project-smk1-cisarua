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
            <form action="/produks/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{ $produk->name }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Max Length</label>
                  <input name="max_length" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Max Length"value="{{ $produk->max_length }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Length</label>
                  <input name="length" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Length"value="{{ $produk->length }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Weight</label>
                  <input name="width" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Width"value="{{ $produk->width }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Height</label>
                  <input name="height" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Height"value="{{ $produk->height }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pictures</label>
                  <input name="image" type="file" class="form-control" multiple id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Height">
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