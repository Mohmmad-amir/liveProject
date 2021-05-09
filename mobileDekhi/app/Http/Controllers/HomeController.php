<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mainCarousel;
use App\Models\Product;
use App\Models\upcomingProduct;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    function mainCarosul() {
        $mainCarousels = mainCarousel::all();

        $upcomingProducts = upcomingProduct::limit(3)->get();

        $products = Product::paginate(12);

        return view('frontEnd/FEhome',compact('mainCarousels'),compact('upcomingProducts','products'));
    }

    function details($id){
        $Product=Product::where('id',$id)->firstOrFail();
        return view('frontEnd/FEdetails')->with('Product',$Product);
    }




    function search(Request $request ){

    $search=$_GET['query'];

    $Products =Product::where('name','LIKE','%'.$search.'%')->get();

    return view('frontEnd.FEsearch',compact('Products'));


    }




}
