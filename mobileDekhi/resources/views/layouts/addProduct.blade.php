@extends('layouts.dashboardapp')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputtext1">Type</label>
                                <select class="form-control" name="type">
                                    <option hidden selected>Select Type</option>
                                    <option  value="Travel">Travel</option>
                                    <option  value="Movie">Movie</option>
                                    <option  value="Business">Business</option>
                                    <option  value="Sports">Sports</option>
                                    <option  value="Science">Science</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Brand</label>
                                <select class="form-control" name="brand">
                                    <option hidden selected>Select Brand</option>
                                    <option  value="Travel">Travel</option>
                                    <option  value="Movie">Movie</option>
                                    <option  value="Business">Business</option>
                                    <option  value="Sports">Sports</option>
                                    <option  value="Science">Science</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ProductName"> Name</label>
                                <input name="Product_name" type="text" class="form-control" aria-describedby="textHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1"> Price</label>
                                <input type="Product_price" class="form-control" aria-describedby="textHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Price Range</label>
                                <select class="form-control" name="Price_range">
                                    <option hidden selected>Select Price Range</option>
                                    <option  value="Travel">Travel</option>
                                    <option  value="Movie">Movie</option>
                                    <option  value="Business">Business</option>
                                    <option  value="Sports">Sports</option>
                                    <option  value="Science">Science</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Image</label>
                                <input name="image" type="file" class="form-control" aria-describedby="textHelp">
                            </div>


                        </div>

                        <div class="col-4 col-sm-4 col-md-4">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputtext1">Release Date</label>
                                <input name="release_date" type="text" class="form-control" aria-describedby="textHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Colors</label>
                                <input name="color" type="text" class="form-control" aria-describedby="textHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Network</label>
                                <select class="form-control" name="network">
                                    <option hidden selected>Select Network</option>
                                    <option  value="Travel">2G</option>
                                    <option  value="Business">2G,3G</option>
                                    <option  value="Sports">2G,3G,5G</option>
                                    <option  value="Science">2G,3G,5G,6G</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Sim</label>
                                <select class="form-control" name="sim">
                                    <option hidden selected>Select Sim</option>
                                    <option  value="Travel">Single Nano SIM</option>
                                    <option  value="Business">Dual Nano SIM</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Type</label>
                                <input type="text" class="form-control" aria-describedby="textHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Type</label>
                                <input type="text" class="form-control" aria-describedby="textHelp">
                            </div>


                        </div>


                        <div class="col-4 col-sm-4 col-md-4">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputtext1">Type</label>
                                <input type="text" class="form-control" aria-describedby="textHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Type</label>
                                <input type="text" class="form-control" aria-describedby="textHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Type</label>
                                <input type="text" class="form-control" aria-describedby="textHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Type</label>
                                <input type="text" class="form-control" aria-describedby="textHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Type</label>
                                <input type="text" class="form-control" aria-describedby="textHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Type</label>
                                <input type="text" class="form-control" aria-describedby="textHelp">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>





                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
