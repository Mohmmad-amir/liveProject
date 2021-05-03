<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        return view('layouts.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $request->validate([
            'image' => 'required|image'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = "products_" . time() . "." . $extension;

            Image::make($file)->save(public_path() . '/assets/img/' . $image);
        }

        $product = new Product();
        $product->image = $image;
        $product->name = $request->product_name;
        $product->brand = $request->brand;
        $product->model = $request->product_model;
        $product->price = $request->product_price;
        $product->price_range = $request->price_range;
        $product->network_type = $request->networkType;
        $product->speed = $request->speed;
        $product->edge = $request->edge;
        $product->body_dimensions = $request->bodyDimensions;
        $product->body_weight = $request->bodyWeight;
        $product->build = $request->build;
        $product->network_sim = $request->networkSim;
        $product->display_type = $request->displayType;
        $product->display_size = $request->Product_name;
        $product->display_resolution = $request->Product_name;
        $product->display_multi_touch = $request->Product_name;
        $product->display_density = $request->Product_name;
        $product->operating_system = $request->Product_name;
        $product->os_version = $request->Product_name;
        $product->cpu = $request->Product_name;
        $product->chip_set = $request->Product_name;
        $product->memory_internal = $request->Product_name;
        $product->memory_external = $request->Product_name;
        $product->ram = $request->Product_name;
        $product->primary_camera = $request->Product_name;
        $product->secondary_camera = $request->Product_name;
        $product->camera_features = $request->Product_name;
        $product->video = $request->Product_name;
        $product->audio = $request->Product_name;
        $product->loudspeaker = $request->Product_name;
        $product->mm_jack = $request->Product_name;
        $product->wifi = $request->Product_name;
        $product->bluetooth = $request->Product_name;
        $product->nfc = $request->Product_name;
        $product->usb = $request->Product_name;
        $product->fm_radio = $request->Product_name;
        $product->gprs = $request->Product_name;
        $product->sensors = $request->Product_name;
        $product->browser = $request->Product_name;
        $product->java = $request->Product_name;
        $product->gps = $request->Product_name;
        $product->battery_type = $request->Product_name;
        $product->battery_capacity = $request->Product_name;
        $product->charging = $request->Product_name;
        $product->launch_date = $request->Product_name;
        $product->made_by = $request->Product_name;
        $product->body_color = $request->Product_name;

        $product->save();
        return redirect()->back()->with("message", "added Successful");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
