@extends('layouts.dashboardapp')

@section('content')
<div class="warapper">
  <div class="content-wrapper">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="container  py-5">
            <h2 class="text-center mt-5">
              Update Main Carousel
            </h2>
            <form method="POST" action="" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="mb-3">
                <label for="image" class="form-label"></label>
                <input name="image" type="file" class="form-control" id="image" aria-describedby="emailHelp">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>

@endsection

