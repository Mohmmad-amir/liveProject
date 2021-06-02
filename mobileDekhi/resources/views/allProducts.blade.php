@extends('layouts.dashboardapp')

@section('content')
    <div class="warapper">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" col-md-10">
                        <div class="container  py-5">
                            <h2 class="text-center mt-5">
                                All Product
                            </h2>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Model</th>
                                        <th scope="col">Price</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td scope="row">{{ $product->id }}</td>
                                            <td><img class="" style="width: 80px"
                                                    src="{{ asset('assets/img/' . $product->image) }}" alt="">
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->brand }}</td>
                                            <td>{{ $product->model }}</td>
                                            <td>{{ $product->price }}</td>
                                            </td>
                                            <td><a class="btn btn-info"
                                                    href="{{ route('products.edit', ['id' => $product->id]) }}"> <i
                                                        class="fas fa-edit"></i> Edit </a></td>
                                            <td>
                                                <form action="{{ route('products.destroy', ['id' => $product->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="btn btn-danger"> <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                            @if ($product->postStatus == 1)
                                                <td><a class="btn-sm btn-danger"
                                                        href="{{ route('products.unpublish', ['id' => $product->id]) }}">
                                                        <i class="fas fa-sort-down"></i>
                                                    </a></td>
                                            @else
                                                <td><a class="btn-sm btn-success"
                                                        href="{{ route('products.publish', ['id' => $product->id]) }}">
                                                        <i class="fas fa-sort-up"></i>
                                                    </a></td>
                                            @endif
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
