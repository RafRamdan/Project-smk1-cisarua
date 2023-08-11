@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Customers</h6>
          <a href="/customers/create" class="btn btn-primary float-end">Tambahkan+</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Email</th>
                  <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telepon</th>
                  <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                  <th class="text-secondary opacity-7">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1;  ?>
                  @foreach ($customers as $customer)
                  
                  <tr>
                    <td>{{ $no++ }}</td>
                    {{-- <td>{{ $customer->transaksis->transaksi ?? 'None' }}</td> --}}
                    <td>{{ $customer->name_customer }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>
                        <a href="/customers{{ $customer->id_customer }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/customers/{{ $customer->id_customer }}" method="POST">
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