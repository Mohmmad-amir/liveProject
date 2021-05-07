@extends('frontEnd.masterFE')

@section('content')


<div class="container">

    <div style="padding:5%;" class="row">

        @foreach ($Products as $product)

        <div class="col-md-3 col-sm-4 mt-2" data-aos="fade-up" data-aos-offset="5" data-aos-delay="50" data-aos-duration="100">
            <div class="card w-100 shadow-sm">
                <img src="{{asset('assets/img')}}/{{$product->image}}" class="card-img-top card-image w-100 img-fluid mt-2" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{$product->name}}</h5>
                    <p class="card-text ">BDT-{{$product->price}}</p>
                    <a href="{{route('details',['id'=>$product->id])}}" class="btn  card-btn">View Details</a>

                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection
