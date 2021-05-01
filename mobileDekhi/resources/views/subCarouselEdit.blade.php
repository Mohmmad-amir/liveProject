@extends('layouts.dashboardapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="container  py-5">
            <h2 class="text-center">
              Update Sub Carousel
            </h2>
            <form method="POST" action="{{route('subCarousel.update',['id'=>$Carousel->id])}}" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="mb-3">
                <label for="image" class="form-label">Carousel Image</label>
                <input name="image" type="file" class="form-control" id="image" aria-describedby="emailHelp">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
