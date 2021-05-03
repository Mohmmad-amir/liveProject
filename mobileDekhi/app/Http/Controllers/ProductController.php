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
        $product = Product::all();
        return view('allProducts', compact('products'));
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
        $product->display_size = $request->displaySize;
        $product->display_resolution = $request->displayResolution;
        $product->display_multi_touch = $request->displayMultitouch;
        $product->display_density = $request->DisplayDensity;
        $product->operating_system = $request->OperatingSystem;
        $product->os_version = $request->os_version;
        $product->cpu = $request->cpu;
        $product->chip_set = $request->chipSet;
        $product->memory_internal = $request->MemoryInternal;
        $product->memory_external = $request->MemoryExternal;
        $product->ram = $request->Ram;
        $product->primary_camera = $request->PrimaryCamera;
        $product->secondary_camera = $request->SecondaryCamera;
        $product->camera_features = $request->CameraFeatures;
        $product->video = $request->Video;
        $product->audio = $request->Audio;
        $product->loudspeaker = $request->Loudspeaker;
        $product->mm_jack = $request->Jack;
        $product->wifi = $request->WiFi;
        $product->bluetooth = $request->Bluetooth;
        $product->nfc = $request->NFC;
        $product->usb = $request->usb;
        $product->fm_radio = $request->FmRadio;
        $product->gprs = $request->GPRS;
        $product->sensors = $request->Sensors;
        $product->browser = $request->Browser;
        $product->java = $request->Java;
        $product->gps = $request->GPS;
        $product->battery_type = $request->BatteryType;
        $product->battery_capacity = $request->BatteryCapacity;
        $product->charging = $request->Charging;
        $product->launch_date = $request->LaunchDate;
        $product->made_by = $request->MadeBy;
        $product->body_color = $request->BodyColor;

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
