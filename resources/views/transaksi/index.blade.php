@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Customers</h6>
          <a href="/transaksi/create" class="btn btn-primary float-end">Add</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama customer</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Phone</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama produk</th>
                  {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th> --}}
                  <th class="text-secondary opacity-7">Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($transaksis as $transaksi)
                  
                  <tr>
                    <td>{{ $transaksi->transaksi }}</td>
                    <td>{{ $transaksi->customers->name_customer }}</td>
                    <td>{{ $transaksi->customers->email }}</td>
                    <td>{{ $transaksi->customers->phone }}</td>
                    <td>{{ $transaksi->customers->address }}</td>
                    <td>{{ $transaksi->produks->name_produk }}</td>
                    {{-- <td>{{ $transaksi->email }}</td>
                    <td>{{ $transaksi->phone }}</td>
                    <td>{{ $transaksi->address }}</td> --}}
                    <td>
                        <a href="/transaksi/{{ $transaksi->id_transaksi }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/transaksi/{{ $transaksi->id_transaksi }}" method="POST">
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
@endsection