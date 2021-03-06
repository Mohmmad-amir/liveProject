<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/FEstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/FEhome.css') }}">
    <link rel="stylesheet" href="{{ asset('Carousel/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('Carousel/dist/assets/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="mediumScreen.css">
    <link rel="stylesheet" href="smScreen.css">




    <title>MobileDekhi</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg--color fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('mainCarosul') }}"><strong
                    class="nav-header-color">M</strong>obile<strong class="nav-header-color">D</strong>ekhi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request()->Route()->named('mainCarosul')
    ? 'active'
    : '' }}"
                            aria-current="page" href="{{ route('mainCarosul') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  href=" #" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Brand
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('brand', 'Samsung') }}">Samsung</a></li>
                            <li><a class="dropdown-item" href="{{ route('brand', 'Nokia') }}">Nokia</a></li>
                            <li><a class="dropdown-item" href="{{ route('brand', 'Oneplus') }}">Oneplus</a></li>
                            <li><a class="dropdown-item" href="{{ route('brand', 'Apple') }}">Apple</a></li>
                            <li><a class="dropdown-item" href="{{ route('brand', 'Xiaomi') }}">Xiaomi</a></li>
                            <li><a class="dropdown-item" href="{{ route('brand', 'Vivo') }}">Vivo</a></li>
                            <li><a class="dropdown-item" href="{{ route('brand', 'realme') }}">Realme</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request()->Route()->named('filter.index')
    ? 'active'
    : '' }}"
                            href="{{ route('filter.index') }}">Filter</a>
                    </li>
                </ul>
                <form class="d-flex  " method="" action="{{ route('search') }}">
                    <input required name="query" class="form-control searchInput" id="" type="search"
                        placeholder="Search your mobile..." aria-label="Search">
                    <button class="btn text-white searchBarBtn" type="submit"><i class="fas fa-search"></i>
                    </button>

                </form>

            </div>
        </div>
    </nav>






    <main>
        @yield('content')
    </main>






    <div class="bg--color ">
        <div class="container pt-4">
            <div class="row">
                <div class="col-md-4 text-white ">
                    <h4 class="text-center">Address</h4>
                    <hr class="dropdown-divider">
                    <p class="right-divider m-screen">
                        House #8, Road # 14, <br>
                        Dhanmondi, Dhaka-1209. <br><br>

                        Email: mobiledakhi@gmail.com <br><br>

                        Contact no: +8800000000
                    </p>
                </div>
                <div class="col-md-4 text-white text-center">
                    <h4>Get In Touch</h4>
                    <hr class="dropdown-divider">
                    <div class="d-flex pt-5 justify-content-center">
                        <li class="social-icon  px-2"><a href="" class="text-white  fs-2"><i
                                    class="fab fa-facebook sm-social-icon"></i></a></li>
                        <li class="social-icon  px-1"><a href="" class="text-white  fs-2"><i
                                    class="fab fa-instagram sm-social-icon"></i></a></li>
                        <li class="social-icon  px-2"><a href="" class="text-white  fs-2"><i
                                    class="fab fa-youtube sm-social-icon"></i></a></li>
                    </div>
                </div>
                <div class="col-md-4 text-white ">
                    <h4 class="text-center">About Us</h4>
                    <hr class="dropdown-divider">
                    <p class="left-divider text-width m-screen">
                        Gsmarena is one of the most
                        comprehensive and up-to-date
                        mobile phone information website.
                        Our mission is to keep our readers
                        informed about latest phone
                        specifications, news and reviews.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <hr class="top-divider">
                    <p class="text-white">All coppy right resorved by Team C</p>
                </div>
            </div>
        </div>
    </div>

    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/navSearchBar.js') }}"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <script src="{{ asset('Carousel/docs/assets/vendors/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut("slow");
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });

    </script>

</body>

</html>
