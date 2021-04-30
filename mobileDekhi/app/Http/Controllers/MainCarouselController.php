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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mainCarousel');
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

        if ($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = "product_" . time() . "." . $extension;

            Image::make($file)->save(public_path() . '/asset/image/' . $image);
        }

        $product = new mainCarousel();
        $product->image = $image;

        $product->save();
        return redirect()->back();
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
    public function edit(mainCarousel $mainCarousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mainCarousel  $mainCarousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mainCarousel $mainCarousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mainCarousel  $mainCarousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(mainCarousel $mainCarousel)
    {
        //
    }
}
