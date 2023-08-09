@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Add Transaksi</h6>

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
            <form action="/transaksi" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan transaksi</label>
                  <input name="transaksi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama customer</label>
                  <select class="form-control select2" style="width: 100%" name="id_customer" id="id_customer">
                  <option disabled value>Pilih Customer</option>
                  @foreach ($transak as $item)
                  <option value="{{ $item->id_customer }}">{{ $item->name_customer }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email customer</label>
                  <select class="form-control select2" style="width: 100%" name="id_customer" id="id_customer">
                  <option disabled value>Pilih email</option>
                  @foreach ($transak as $item)
                  <option value="{{ $item->id_customer }}">{{ $item->email }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No telepon customer</label>
                  <select class="form-control select2" style="width: 100%" name="id_customer" id="id_customer">
                  <option disabled value>Pilih telepon</option>
                  @foreach ($transak as $item)
                  <option value="{{ $item->id_customer }}">{{ $item->phone }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat customer</label>
                  <select class="form-control select2" style="width: 100%" name="id_customer" id="id_customer">
                  <option disabled value>Pilih Alamat</option>
                  @foreach ($transak as $item)
                  <option value="{{ $item->id_customer }}">{{ $item->address }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama produk</label>
                  <select class="form-control select2" style="width: 100%" name="id_produk" id="id_produk">
                  <option disabled value>Pilih produk</option>
                  @foreach ($transik as $item)
                  <option value="{{ $item->id_produk }}">{{ $item->name_produk }}</option>
                  @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div> 
    </div>
</div>

            
@endsection