@extends('layouts.dashboardapp')

@section('content')
<div class="warapper">
  <div class="content-wrapper">
<div class="container">
    <div class="row justify-content-center">
        <div class=" col-md-10">
          <div class="container  py-5">
            <h2 class="text-center">
              All Product
            </h2>
            @if (session('message'))
                <div class="alert alert-success">
                    <p>{{ session('message') }}</p>
                </div>
            @endif
          
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Price</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
                <td scope="row">{{$product->id}}</td>
                <td><img class="" style="width: 80px"
                  src="{{ asset('assets/img/' . $product->image) }}" alt="">
                  <td>{{$product->name}}</td>
                  <td>{{$product->brand}}</td>
                  <td>{{$product->model}}</td>
                  <td>{{$product->price}}</td>
          </td>
                <td><a class="btn btn-info" href="{{route("products.edit",['id'=>$product->id])}}"> <i class="fas fa-edit"></i> Edit </a></td>
                <td>
                  <form action="" method="POST" >
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger"> <i class="fas fa-trash"></i> Delete </button>
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
@endsection

