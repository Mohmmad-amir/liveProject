<?php

namespace App\Http\Controllers;

use App\Models\SubCarousel;
use Illuminate\Http\Request;
use Image;

class SubCarouselController extends Controller
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
        $subCarousels = SubCarousel::all();
        return view('subCarousel', compact('subCarousels'));
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
            $image = "subCarousel_" . time() . "." . $extension;

            Image::make($file)->save(public_path() . '/assets/img/' . $image);
        }

        $product = new SubCarousel();
        $product->image = $image;

        $product->save();
        return redirect()->back()->with("message", "added Successful");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCarousel  $subCarousel
     * @return \Illuminate\Http\Response
     */
    public function show(SubCarousel $subCarousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCarousel  $subCarousel
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCarousel $subCarousel, $id)
    {
        $Carousel = SubCarousel::findOrFail($id);
        return view('subCarouselEdit', compact('Carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCarousel  $subCarousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCarousel $subCarousel, $id)
    {
        $product = SubCarousel::findOrFail($id);

        if ($request->file('image')) {
            @unlink(public_path() . '/assets/img/' . $product->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = "subCarousel_" . time() . "." . $extension;

            Image::make($file)->save(public_path() . '/assets/img/' . $image);
            $product->image = $image;
        }


        $product->save();
        return redirect()->action('SubCarouselController@create')->with("message", "updated Successful");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCarousel  $subCarousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCarousel $subCarousel, $id)
    {
        $Carousel = SubCarousel::findOrFail($id);
        @unlink(public_path() . '/assets/img/' . $Carousel->image);
        $Carousel->delete();
        return redirect()->back()->with("message", "Deleted Successful");
    }
}
