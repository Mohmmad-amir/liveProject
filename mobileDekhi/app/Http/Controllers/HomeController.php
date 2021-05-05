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
        $this->middleware('auth');
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
        
        $upcomingProducts = upcomingProduct::all();

        $products = Product::all();
        
        return view('frontEnd/FEhome',compact('mainCarousels'),compact('upcomingProducts','products'));
    }

    function details(){
        return view('frontEnd/FEdetails');
    }
    

}
