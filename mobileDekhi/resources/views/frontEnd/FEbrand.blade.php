@extends('frontEnd.masterFE')

@section('content')

<div style="margin-top:6%;" class="container">

    <h3 style="font-weight: bold;" class="headingText mt-5 mb-3 text-center "></h3>



</div>








<!-- end price -->
<!-- card section -->
<div class="container ">
    <div class="row">


        @forelse ($Products as $product)
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

        @empty
            <h1>There Is No Product</h1>
        @endforelse


    </div>
    <!-- end card -->
    <!-- pagination -->
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    {{ $Products->links() }}
                </ul>
            </nav>
        </div>
    </div>
    <!-- end pagination -->
</div>

</div>

@endsection
