@extends('frontEnd.masterFE')

@section('content')


<div class="container">

    <div style="padding:5%;" class="row">
        @forelse ($Products as $product)
        <div class=" col-4 col-sm-4 col-md-3 mt-2" data-aos="fade-up" data-aos-offset="5" data-aos-delay="50" data-aos-duration="100">
            <div class="card w-100 shadow-sm">
                <img src="{{asset('assets/img')}}/{{$product->image}}" class="card-img-top card-image w-100 img-fluid mt-2" alt="...">
                <div class="card-body text-center">
                    <h6 class="card-title fw-bold">{{$product->name}}</h6>
                    <p class="card-text ">BDT-{{$product->price}}</p>
                    <a href="{{route('details',['id'=>$product->id])}}" class="btn  card-btn">View Details</a>
                </div>
            </div>
        </div>

        @empty
          <div class="col-md-12 text-center" >
              <img width="80%" src="{{asset('assets/img/no-product-found.png')}}" alt="">
          </div>
        @endforelse
    </div>
</div>

@endsection
