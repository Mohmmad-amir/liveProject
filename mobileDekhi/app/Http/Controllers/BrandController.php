<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    function show($brand){
        $Products=Product::where('brand',$brand)->get();
        return view('frontEnd/FEbrand',compact('Products'));
    }

}
