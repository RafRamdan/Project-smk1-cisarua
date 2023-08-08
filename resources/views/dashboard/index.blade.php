@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Transaksi</h6>
          {{-- <a href="/produks/create" class="btn btn-primary float-end">Add</a> --}}
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
                <?php $no=1; ?>

                {{-- @foreach ($transaksi as $data)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $data->transaksi }}</td>
                      <td>{{ $data->name_customer }}</td>
                      <td>{{ $data->email }}</td>
                      <td>{{ $data->address }}</td>
                      <td>
                        <img src="{{ asset('/storage/produks/'.$data->image) }}" class="rounded" style="width: 150px">
                        {{ $data->name_produk }}
                      </td>
                    </tr>
                @endforeach --}}
                  {{-- @foreach ($produks as $produk) --}}
                  {{-- {{ dd($produk->pictures) }} --}}
                  {{-- <tr>
                    <td> --}}
                      {{-- @if($prodak->pictures->isNotEmpty()) --}}
                     {{-- <img  class="img-thumbnail" width="150" src="/uploads/{{ $prodak->pictures()->first()->filename }}" alt="" >
                     --}}
                      {{-- @endif --}}
                      {{-- <img src="{{ asset('/storage/produks/'.$produk->image) }}" class="rounded" style="width: 150px">
                      {{ $produk->name }}
                    </td>
                    <td>{{ $produk->max_length }} Kg </td>
                    <td>{{ $produk->length }} cm </td>
                    <td>{{ $produk->width }}</td>
                    <td>{{ $produk->height }}</td>
                    <td>
                        <a href="/produks/{{ $produk->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/produks/{{ $produk->id }}" method="POST"> --}}
                        {{-- @method("DELETE") --}}
                        {{-- @csrf --}}
                        {{-- <input type="submit"  class="btn btn-danger" value="Delete"> --}}
                        {{-- </form>
                    </td>
                  </tr> --}}
                  {{-- @endforeach --}}
              </tbody>
            </table>
           
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection