@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Edit Transaksi</h6>

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
            <form action="/transaksi/{{ $transaksi->id_transaksi }}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan transaksi</label>
                  <input name="transaksi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" value="{{ $transaksi->transaksi }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Nama Customer</label>
                  <select class="form-control select2" style="width: 100%" name="id_customer" id="id_customer">
                  <option disabled value>Pilih Customer</option>
                  <option value="{{ $transaksi->id_customer }}">{{ $transaksi->customers->name_customer }}</option>
                  @foreach ($transak as $item)
                  <option value="{{ $item->id_customer }}">{{ $item->name_customer }}</option>
                  @endforeach
                  </select>
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Email Customer</label>
                  <select class="form-control select2" style="width: 100%" name="id_customer" id="id_customer">
                  <option disabled value>Pilih Customer</option>
                  <option value="{{ $transaksi->id_customer }}">{{ $transaksi->customers->email }}</option>
                  @foreach ($transak as $item)
                  <option value="{{ $item->id_customer }}">{{ $item->email }}</option>
                  @endforeach
                  </select>
                </div> --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih No Telepon Customer</label>
                  <select class="form-control select2" style="width: 100%" name="id_customer" id="id_customer">
                  <option disabled value>Pilih Customer</option>
                  <option value="{{ $transaksi->id_customer }}">{{ $transaksi->customers->phone }}</option>
                  @foreach ($transak as $item)
                  <option value="{{ $item->id_customer }}">{{ $item->phone }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Alamat Customer</label>
                  <select class="form-control select2" style="width: 100%" name="id_customer" id="id_customer">
                  <option disabled value>Pilih Customer</option>
                  <option value="{{ $transaksi->id_customer }}">{{ $transaksi->customers->address }}</option>
                  @foreach ($transak as $item)
                  <option value="{{ $item->id_customer }}">{{ $item->address }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Nama Produk</label>
                  <select class="form-control select2" style="width: 100%" name="id_produk" id="id_produk">
                  <option disabled value>Pilih produk</option>
                  <option value="{{ $transaksi->id_produk }}">{{ $transaksi->produks->name_produk }}</option>
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