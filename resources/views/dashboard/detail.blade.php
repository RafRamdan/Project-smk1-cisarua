@extends('layouts.master')

@section('page')
    Detail
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        {{-- <div class="card-header pb-0">
          <h6>Detail transaksi</h6>
        </div> --}}
        <header class="bg-white py-5">
          <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-dark">
              <h1 class="display-4 fw-bolder">Detail Transaksi</h1>
            </div>
          </div>
        </header>
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 mb-5">
            <div class="card h-100">
              <!-- Product image-->
              <img class="card-img-top" src="{{ asset('/storage/produks/'.$transaksi->produks->image) }}" alt="{{ $transaksi->produks->name_produk }}">
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
                      class="border-bottom p-2 d-flex justify-content-between">
                        <span>Max Panjang</span>
                        <span style="font-weight: 600">{{ $transaksi->produks->max_length }}</span>
                    </li>
                    <li 
                      class="border-bottom p-2 d-flex justify-content-between">
                        <span>Panjang</span>
                        <span style="font-weight: 600">{{ $transaksi->produks->length }}</span>
                    </li>
                    <li 
                      class="border-bottom p-2 d-flex justify-content-between">
                        <span>Lebar</span>
                        <span style="font-weight: 600">{{ $transaksi->produks->width }}</span>
                      </li>
                    <li 
                      class="border-bottom p-2 d-flex justify-content-between">
                        <span>Tinggi</span>
                        <span style="font-weight: 600">{{ $transaksi->produks->height }}</span>
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
              <div class="col-lg-4 mb-5">
                <div class="card">
                  <!-- Product details-->
                  <div class="card-body card-body-custom pt-4">
                    <div class="text-center">
                      <!-- Product name-->
                      <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-bolder">Special Item</h5>
                        <div class="rent-price mb-3">
                          <span style="font-size: 1rem" class="text-primary">Rp.200.000/</span>day
                        </div>
                      </div>
                      <ul class="list-unstyled list-style-group">
                        <li class="border-bottom p-2 d-flex justify-content-between">
                          <span>Bahan Bakar</span>
                          <span style="font-weight: 600">Bensin</span>
                        </li>
                        <li class="border-bottom p-2 d-flex justify-content-between">
                          <span>Jumlah Kursi</span>
                          <span style="font-weight: 600">5</span>
                        </li>
                        <li class="border-bottom p-2 d-flex justify-content-between">
                          <span>Transmisi</span>
                          <span style="font-weight: 600">Manual</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- Product actions-->
                  {{-- <div class="card-footer border-top-0 bg-transparent">
                    <div class="text-center">
                      <a class="btn d-flex align-items-center justify-content-center btn-primary mt-auto" href="#" style="column-gap: 0.4rem">Sewa Mobil <i class="ri-whatsapp-line"></i></a>
                    </div>
                  </div> --}}
                </div>
              </div> 
            </div> 
          </div>
        </div>
      </div>
    </section>    
</div>         
@endsection 