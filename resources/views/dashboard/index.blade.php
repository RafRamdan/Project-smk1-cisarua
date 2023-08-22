@extends('layouts.master')

@section('page')
    Dashboard
@endsection
@section('content')
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
 @foreach ($transaksis as $transaksi)    
 <div class="col mb-5 ">
   <div class="card h-100">
     <!-- Sale badge-->
     
     <!-- Product image-->
     <img class="card-img-top" src="{{ asset('/storage/produks/'.$transaksi->produks->image) }}" alt="{{ $transaksi->produks->name_produk }}">
     <!-- Product details-->
     <div class="card-body card-body-custom pt-4">
       <div class="text-center">
         <!-- Product name-->
         <h5 class="fw-bolder"> {{ $transaksi->produks->name_produk }}</h5>
         <!-- Product price-->
         <div class="rent-price mb-3">
           <span class="text-primary"></span>
          </div>
          <ul class="list-unstyled list-style-group">
            <li class="border-bottom p-2 d-flex justify-content-between">
              <span>Max Panjang:</span>
              <span style="font-weight: 600">{{ $transaksi->produks->max_length }}</span>
            </li>
            <li class="border-bottom p-2 d-flex justify-content-between">
              <span>Panjang:</span>
              <span style="font-weight: 600">{{ $transaksi->produks->length }}</span>
            </li>
            <li class="border-bottom p-2 d-flex justify-content-between">
              <span>Lebar:</span>
              <span style="font-weight: 600">{{ $transaksi->produks->width }}</span>
            </li>
            <li class="border-bottom p-2 d-flex justify-content-between">
              <span>Tinggi:</span>
              <span style="font-weight: 600">{{ $transaksi->produks->height }}</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- Product actions-->
      <div class="card-footer border-top-0 bg-transparent">
        <div class="text-center">
          
          <a class="btn btn-info mt-auto text-white" href="/dashboard/{{ $transaksi->id_transaksi }}/detail">Detail</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
<div class="card-footer">
  {{ $transaksis->links()  }}
</div>
{{-- <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Transaksi</h6>
         
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Customer</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">email</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Barang</th>
                </tr>
              </thead>
              <tbody>
                

                
              </tbody>
            </table>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>   --}}
@endsection