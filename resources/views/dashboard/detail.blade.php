@extends('layouts.master')

@section('page')
    Detail
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Detail transaksi</h6>
        </div>
        <div class="col-lg-8 mb-5">
            <div class="card h-100">
              <!-- Product image-->
              <img class="card-img-top" src="{{ asset('/storage/produks/'.$transaksi->produks->image) }}" alt="...">
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div>
                  <!-- Product name-->
                  <h3 class="fw-bolder text-primary"> {{ $transaksi->produks->name_produk }}</h3>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Keterangan</span>
                      <span style="font-weight: 600">{{ $transaksi->transaksi }}</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Nama Customer</span>
                      <span style="font-weight: 600">{{ $transaksi->customers->name_customer }}</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Nomor headphone</span>
                      <span style="font-weight: 600">{{ $transaksi->customers->phone }}</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Email</span>
                      <span style="font-weight: 600">{{ $transaksi->customers->email }}</span>
                    </li>
                    <li
                    class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Alamat Customer</span>
                      <span style="font-weight: 600">{{ $transaksi->customers->address }}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
      </div>  
    </div>
</div>         
@endsection 