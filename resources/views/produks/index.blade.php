@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>produks</h6>
          <a href="/produks/create" class="btn btn-primary float-end">Add</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Max Length</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Length</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Weight</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Height</th>
                  <th class="text-secondary opacity-7">Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($produks as $produk)
                  {{-- {{ dd($produk->pictures) }} --}}
                  <tr>
                    <td>
                      {{-- @if($prodak->pictures->isNotEmpty()) --}}
                     {{-- <img  class="img-thumbnail" width="150" src="/uploads/{{ $prodak->pictures()->first()->filename }}" alt="" >
                     --}}
                      {{-- @endif --}}
                      <img src="{{ asset('/storage/produks/'.$produk->image) }}" class="rounded" style="width: 150px">
                      {{ $produk->name_produk }}
                    </td>
                    <td>{{ $produk->max_length }} Kg </td>
                    <td>{{ $produk->length }} cm </td>
                    <td>{{ $produk->width }}</td>
                    <td>{{ $produk->height }}</td>
                    <td>
                        <a href="/produks/{{ $produk->id_produk }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/produks/{{ $produk->id_produk }}" method="POST">
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