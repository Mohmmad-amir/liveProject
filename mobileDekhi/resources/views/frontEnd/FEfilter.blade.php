@extends('frontEnd.masterFE')

@section('content')

    <div style="margin-top:6%;" class="container">

        <h3 style="font-weight: bold;" class="headingText mt-5 mb-3 text-center ">Filer Prize Range</h3>

        <form action="" method="post">
            <div class="row">
                <div class="col-md-12">
                    <select class="form-select" aria-label="Default select example">
                        <option  hidden selected>Select Price Range</option>
                        <option value="0-5,000">0-5,000</option>
                        <option value="5,000-10,000">5,000-10,000</option>
                        <option value="10,000-15,000">10,000-20,000</option>
                        <option value="20,000-30,000">20,000-30,000</option>
                        <option value="30,000-40,000">30,000-40,000</option>
                        <option value="40,000-50,000">40,000-50,000</option>
                        <option value="50,000-1,00,000">50,000-1,00,000</option>
                        <option value="1,00,000-1,50,000">1,00,000-1,50,000</option>
                      </select>
                </div>
            </div>
        </form>

    </div>








    <!-- end price -->
    <!-- card section -->
    <div class="container ">
        <div class="row">

            @foreach ($product as $product)

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
        <!-- end card -->
        <!-- pagination -->
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item "><a class="page-link text-dark" href="#">Previous</a></li>
                        <li class="page-item "><a class="page-link text-dark" href="#">1</a></li>
                        <li class="page-item "><a class="page-link text-dark" href="#">2</a></li>
                        <li class="page-item "><a class="page-link text-dark" href="#">3</a></li>
                        <li class="page-item "><a class="page-link text-dark" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- end pagination -->
    </div>

    </div>

@endsection
