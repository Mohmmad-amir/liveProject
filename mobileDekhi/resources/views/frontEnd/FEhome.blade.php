@extends('frontEnd.masterFE')

@section('content')

<div class="">

    <!-- carosal start -->


    {{$key=0}}
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        <div class="carousel-inner">
            @foreach($mainCarousels as $mainCarosul)

            <div class="carousel-item {{{$key == 0 ? 'active' : '' }}}" data-bs-interval="10000">
                {{-- <a href="#">
                    <img style="height:600px;" src="{{asset('assets/img')}}/{{$mainCarosul->image}}" class="d-block w-100" alt="...">
                </a> --}}
                <img src="{{asset('assets/img')}}/{{$mainCarosul->image}}" class="d-block w-100" alt="...">

            </div>

            {{$key++}}

            @endforeach
        </div>
      </div>

    <!-- carosal end -->

    <!-- upcaming mobile card start -->

    <div class="container">
        <h3 class="headingText mt-5 mb-5 text-center">Upcoming Mobiles</h3>
        <div class="row">

            @foreach ($upcomingProducts as $upcomingProduct)
            <div class="col-md-4">
                <a href="{{route('upcomingDetails',['id'=>$upcomingProduct->id])}}">
                    <div class="card umCardBorder mt-2 shadow-lg" style="width: 100%;">
                        <div class="card-body cardHadingText">
                            <h4 class="card-title text-center headingText">{{$upcomingProduct->name}}</h4>
                          </div>
                        <img style="border-radius: 20px;" src="{{asset('assets/img')}}/{{$upcomingProduct->image}}" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <!-- upcaming mobile card end -->

    <!-- latest mobile section start-->

    <h3 class="headingText mt-5 mb-5 text-center">Latest Mobiles</h3>
    <div class="container">
        <div class="row">

            @foreach ($products as $product)

            <div class="col-md-3  mt-2" data-aos="fade-up" data-aos-offset="5" data-aos-delay="50" data-aos-duration="100">
                <div class="card w-100 shadow-sm">
                    <img style="height: 250px; width: 30px; padding-top: 20px; padding-left: 20px; padding-right: 20px; padding-buttom: 10px;" src="{{asset('assets/img')}}/{{$product->image}}" class="card-img-top card-image w-100 img-fluid mt-2" alt="...">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">{{$product->name}}</h6>
                        <p class="card-text ">BDT-{{$product->price}}</p>
                        <a href="{{route('details',['id'=>$product->id])}}" class="btn  card-btn">View Details</a>

                    </div>
                </div>
            </div>

            @endforeach

        </div>
        <!-- pagination -->

        <div class="row">
            <div class="col-md-12 col-sm-12 mt-4 ">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <a href="{{route('Allproduct')}}"> <button style="background-color:orangered;color:white" class="btn">More</button></a>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- end pagination -->
    </div>
    <!-- latest mobile section end -->

    <!-- latest mobile review start -->

    <h3 class="headingText mt-5 mb-5 text-center">Latest Mobiles Review</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/1C07F3BgI_k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 mb-3">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/YB3ClDYHcOU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 mb-5">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/VwaNOw2mHYI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- latest mobile review end -->

</div>

@endsection
