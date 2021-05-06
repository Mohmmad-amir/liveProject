@extends('frontEnd.masterFE')

@section('content')

<div class="container">

    <h3 style="font-weight: bold;" class="headingText mt-5 mb-3 text-center headingText">Filer Prize Range</h3>

    <form action="" method="post">
        <div class="d-flex p-2 justify-content-center my-2">
            <div class="p-2 ">
                <div class="form-check m-font-size">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label fw-bold" for="flexRadioDefault1">
                        Tk 0-5,000 Tk
                    </label>
                </div>
            </div>
            <div class="p-2 ">
                <div class="form-check m-font-size">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label fw-bold" for="flexRadioDefault1">
                        Tk 5,000-10,000 Tk
                    </label>
                </div>
            </div>
            <div class="p-2 ">
                <div class="form-check m-font-size">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label fw-bold" for="flexRadioDefault1">
                        Tk 10,000-20,000 Tk
                    </label>
                </div>
            </div>
            <div class="p-2 ">
                <div class="form-check m-font-size">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label fw-bold" for="flexRadioDefault1">
                        Tk 20,000-30,000 Tk
                    </label>
                </div>
            </div>
        </div>
    </form>
    <!-- end price -->
    <!-- card section -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12  my-3">
                <div class="card w-100">
                    <img src="Xiaomi-Mi-11-Pro.png" class="card-img-top card-image w-100 img-fluid mt-1" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold card-short-text">Samsung Galaxy M42 5G </h5>
                        <p class="card-text ">BDT-12,000</p>
                        <a href="#" class="btn  card-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 my-3">
                <div class="card w-100">
                    <img src="Xiaomi-Mi-11-Pro.png" class="card-img-top card-image w-100 img-fluid mt-1" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold card-short-text">Samsung Galaxy M42 5G </h5>
                        <p class="card-text ">BDT-12,000</p>
                        <a href="#" class="btn  card-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 my-3">
                <div class="card w-100">
                    <img src="Xiaomi-Mi-11-Pro.png" class="card-img-top card-image w-100 img-fluid mt-1" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold card-short-text">Samsung Galaxy M42 5G </h5>
                        <p class="card-text ">BDT-12,000</p>
                        <a href="#" class="btn card-btn">View Details</a>
                    </div>
                </div>
            </div>
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
