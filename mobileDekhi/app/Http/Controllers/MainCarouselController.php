<?php

namespace App\Http\Controllers;

use App\Models\mainCarousel;
use Illuminate\Http\Request;
use Image;

class MainCarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mainCarousel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carousels = mainCarousel::all();
        return view('mainCarousel', compact('carousels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image'
        ]);
        $product = new mainCarousel();
        $image = $request->file('image');
        $imageName = "mainCarousel_" . time() . '.' . $image->extension();
        $image->move(public_path('assets/img/'), $imageName);
        $product->image = $imageName;
        $product->save();
        return redirect()->back()->with("message", "added Successful");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mainCarousel  $mainCarousel
     * @return \Illuminate\Http\Response
     */
    public function show(mainCarousel $mainCarousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mainCarousel  $mainCarousel
     * @return \Illuminate\Http\Response
     */
    public function edit(mainCarousel $mainCarousel, $id)
    {
        $mainCarousel = mainCarousel::findOrFail($id);
        return view('mainCarouselEdit', compact('mainCarousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mainCarousel  $mainCarousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mainCarousel $mainCarousel, $id)
    {
        $product = mainCarousel::findOrFail($id);


        if ($request->file('image')) {
            $image = $request->file('image');
            @unlink(public_path() . '/assets/img/' . $product->image);
            $imageName = "mainCarousel_" . time() . '.' . $image->extension();
            $image->move(public_path('/assets/img/'), $imageName);
            $product->image = $imageName;
        }



        $product->save();
        return redirect()->action('MainCarouselController@create')->with("message", "updated Successful");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mainCarousel  $mainCarousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(mainCarousel $mainCarousel, $id)
    {
        $mainCarousel = mainCarousel::findOrFail($id);
        @unlink(public_path() . '/assets/img/' . $mainCarousel->image);
        $mainCarousel->delete();
        return redirect()->back()->with("message", "Deleted Successful");
    }
}
