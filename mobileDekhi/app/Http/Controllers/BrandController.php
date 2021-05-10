<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    function show(string $brand){
        $Products=Product::where('brand',$brand)->paginate(4);
        return view('frontEnd/FEbrand',compact('Products'));
    }

}
