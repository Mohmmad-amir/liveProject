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
        //
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
    public function edit(SubCarousel $subCarousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCarousel  $subCarousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCarousel $subCarousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCarousel  $subCarousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCarousel $subCarousel)
    {
        //
    }
}
