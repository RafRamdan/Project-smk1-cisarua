@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Edit Customer</h6>

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
            <form action="/customers/{{ $customer->id_customer }}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Customer</label>
                  <input name="name_customer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{ $customer->name_customer }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email Customer</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"value="{{ $customer->email }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon Customer</label>
                  <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telepon"value="{{ $customer->phone }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Customer</label>
                  <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat"value="{{ $customer->address }}">
                
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div> 
    </div>
</div>

            
@endsection