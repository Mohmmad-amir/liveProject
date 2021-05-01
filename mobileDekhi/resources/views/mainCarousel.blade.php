@extends('layouts.dashboardapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="offset-md-2 col-md-10">
          <div class="container  py-5">
            <h2 class="text-center">
              Add Main Carousel
            </h2>
            @if (session('message'))
                <div class="alert alert-success">
                    <p>{{ session('message') }}</p>
                </div>
            @endif
          <button class="btn btn-success float-right my-2" id="addMainCarousel">Add <i class="fas fa-plus"></i></button>
          <div id="showMainCarousel" style="display: none">
            <form method="POST" action="{{route('mainCarousel.add')}}" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="image" class="form-label">Carousel Image</label>
                <input name="image" type="file" class="form-control" id="image" aria-describedby="emailHelp">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($carousels as $carousel)
              <tr>
                <th scope="row">{{$carousel->id}}</th>
                <td><img class="" style="width: 80px"
                  src="{{ asset('assets/img/' . $carousel->image) }}" alt="">
          </td>
                <td><a class="btn btn-info" href="{{route('mainCarousel.edit',['id'=>$carousel->id])}}"> <i class="fas fa-edit"></i> Edit </a></td>
                <td>
                  <form action="{{route('mainCarousel.destroy',['id'=>$carousel->id])}}" method="POST" >
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

@endsection

