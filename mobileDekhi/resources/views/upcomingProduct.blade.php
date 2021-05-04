@extends('layouts.dashboardapp')
@section('content')

<div class="warapper">
    <div class="content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="container  py-5">
                        <h2 class="text-center mt-5">
                            Upcoming Products
                        </h2>
                        @if (session('message'))
                            <div class="alert alert-success">
                                <p>{{ session('message') }}</p>
                            </div>
                        @endif
                        <button class="btn btn-success float-right my-2 " id="addMainCarousel">Add <i class="fas fa-plus"></i></button>
                        <div id="showMainCarousel" style="display: none">
                            <form action="{{route('upcomingProduct.add')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="image" class="form-label">Carousel Image</label>
                                        <input name="image" type="file" class="form-control" id="image" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>  
        </div>   
    </div>
</div>

@endsection