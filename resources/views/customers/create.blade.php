@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Add Customer</h6>

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
            <form action="/customers" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address">
                
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div> 
    </div>
</div>

            
@endsection