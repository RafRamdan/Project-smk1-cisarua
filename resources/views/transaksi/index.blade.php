@extends('layouts.master')

@section('page')
    Transaksi
@endsection
@section('search')
<form action="/transaksi" >
  <div class="input-group">
    <span class="input-group-text text-body"><button class="btn " type="submit"><i class="fas fa-search" aria-hidden="true"></i></button></span>
    <input type="text" class="form-control" placeholder="Search..." name="keyword" >
  </div>
</form>    
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Daftar Transaksi</h6>
          <a href="/transaksi/create" class="btn btn-primary float-end">Tambahkan +</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Customer</th>
                  {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email Customer</th> --}}
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Telepon Customer</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat Customer</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar Produk</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Produk</th>
                  <th class="text-secondary opacity-7">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                  @foreach ($transaksis as $item)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->transaksi }}</td>
                    <td>{{ $item->name_customer }}</td>
                    {{-- <td>{{ $transaksi->customers->email }}</td> --}}
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    <td>
                      <img src="{{ asset('/storage/produks/'.$item->image) }}" class="rounded" style="width: 120px">
                    </td>
                    <td>
                      {{ $item->name_produk }}
                    </td>
                   
                    <td>
                        <a href="/transaksi/{{ $item->id_transaksi }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/transaksi/{{ $item->id_transaksi }}" method="POST">
                        @method("DELETE")
                        @csrf
                        <input type="submit"  class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                  </tr>
                 
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    {{ $transaksis->links()  }}
  </div>
@endsection