@extends('frontEnd.masterFE')

@section('content')

    <div style="margin-top:6%;" class="container mb-4">

        <h3 style="font-weight: bold;" class="headingText mt-5 mb-3 text-center ">Filer Prize Range</h3>

        <form action="" method="post">
            <div class="row">
                <div class="col-md-12">
                    <select onchange="window.location.href=this.value" class="form-select" aria-label="Default select example">
                        <option value="/filter" hidden selected>Select Price Range</option>
                        <option value="/filter">Select Price Range</option>
                        <option value="/filter?min_price=2000&max_price=10000">2000 - 10,000</option>
                        <option value="/filter?min_price=10,001&max_price=15,000">10000 - 15000</option>
                        <option value="/filter?min_price=15,001&max_price=20,000">15000 - 20000</option>
                        <option value="/filter?min_price=20,001&max_price=50,000">20000 - 50000</option>
                        <option value="/filter?min_price=50,001&max_price=1,00,000">50000 - 100000</option>
                        <option value="/filter?min_price=1,00,001&max_price=2,00,000">100000 - 200000</option>
                      </select>
                </div>

            </div>
        </form>

    </div>








    <!-- end price -->
    <!-- card section -->
    <div class="container ">
        <div class="row">

            @foreach ($products as $product)

            <div class="col-md-3 col-sm-4 mt-2" data-aos="fade-up" data-aos-offset="5" data-aos-delay="50" data-aos-duration="100">
                <div class="card w-100 shadow-sm">
                    <img src="{{asset('assets/img')}}/{{$product->image}}" class="card-img-top card-image w-100 img-fluid mt-2" alt="...">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">{{$product->name}}</h6>
                        <p class="card-text ">BDT-{{$product->price}}</p>
                        <a href="{{route('details',['id'=>$product->id])}}" class="btn  card-btn">View Details</a>

                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <!-- end card -->
        <!-- pagination -->
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-4">
                       {{-- {{$products->links()}} --}}
                    </ul>
                </nav>
            </div>
        </div>
        <!-- end pagination -->
    </div>

    </div>

@endsection
