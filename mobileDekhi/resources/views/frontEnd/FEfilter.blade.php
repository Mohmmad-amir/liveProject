@extends('frontEnd.masterFE')

@section('content')

    <div style="margin-top:6%;" class="container">

        <h3 style="font-weight: bold;" class="headingText mt-5 mb-3 text-center ">Filer Prize Range</h3>

        <form action="" method="post">
            <div class="row">
                <div class="col-md-12">
                    <select onchange="window.location.href=this.value" class="form-select" aria-label="Default select example">
                        <option value="/filter" hidden selected>Select Price Range</option>
                        <option value="/filter">Select Price Range</option>
                        <option value="/filter?min_price=0&max_price=5000">0 TK - 5,000 TK</option>
                        <option value="/filter?min_price=50001&max_price=10000">5,000 TK - 10,000 TK</option>
                        <option value="/filter?min_price=10001&max_price=15000">10,000 TK - 15,000 TK</option>
                        <option value="/filter?min_price=15001&max_price=20000">15,000 TK - 20,000 TK</option>
                        <option value="/filter?min_price=20001&max_price=30000">20,000 TK - 30,000 TK</option>
                        <option value="/filter?min_price=30001&max_price=40000">30,000 TK - 40,000 TK</option>
                        <option value="/filter?min_price=30001&max_price=40000">30,000 TK - 40,000 TK</option>
                        <option value="/filter?min_price=40001&max_price=50000">40,000 TK - 50,000 TK</option>
                        <option value="/filter?min_price=50001&max_price=100000">50,000 TK - 1,00,000 TK</option>
                        <option value="/filter?min_price=100001&max_price=200000">1,00,000 TK - 2,00,000 TK</option>
                      </select>
                </div>

            </div>
        </form>

    </div>







    <!-- end price -->
    <!-- card section -->
    <div class="container ">
        <div class="row">

        @forelse ($products as $product)
        <div class="col-md-3 col-sm-4 mt-2" data-aos="fade-up" data-aos-offset="5" data-aos-delay="50" data-aos-duration="100">
            <div class="card w-100 shadow-sm">
                <img src="{{asset('assets/img')}}/{{$product->image}}" class="card-img-top card-image w-100 img-fluid mt-2" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{$product->name}}</h5>
                    <p class="card-text ">BDT- {{$product->price}}</p>
                    <a href="{{route('details',['id'=>$product->id])}}" class="btn  card-btn">View Details</a>
                </div>
            </div>
        </div>
        @empty

        @endforelse




        </div>
        <!-- end card -->
        <!-- pagination -->
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{-- {{$products->links()}} --}}
                    </ul>
                </nav>
            </div>
        </div>

        <!-- end pagination -->
    </div>

    </div>

@endsection
