<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
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
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image'
        ]);

        $image=$request->file('image');
        $imageName="Product_".time().'.'.$image->extension();
        $image->move(public_path('/assets/img/'),$imageName);

        $imagetwo=$request->file('imagetwo');
        $imageNametwo="Product_two_".time().'.'.$imagetwo->extension();
        $imagetwo->move(public_path('/assets/img/'),$imageNametwo);

        $imagethree=$request->file('imagethree');
        $imageNamethree="Product_three_".time().'.'.$imagethree->extension();
        $imagethree->move(public_path('/assets/img/'),$imageNamethree);

        $imagefour=$request->file('imagefour');
        $imageNamefour="Product_four_".time().'.'.$imagefour->extension();
        $imagefour->move(public_path('/assets/img/'),$imageNamefour);


        $product = new Product();
        $product->image = $imageName;
        $product->imagetwo=$imageNametwo;
        $product->imagethree=$imageNamethree;
        $product->imagefour=$imageNamefour;
        $product->name = $request->product_name;
        $product->brand = $request->brand;
        $product->model = $request->product_model;
        $product->price = $request->product_price;
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
    public function edit(Product $product, $id)
    {
        $products = Product::findOrFail($id);
        return view('productEdit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)

    {

        $product= Product::findorFail($id);

        if($request->file('image')){
            $image=$request->file('image');
            @unlink(public_path() .'/assets/img/'.$product->image);
            $imageName="Product_".time().'.'.$image->extension();
            $image->move(public_path('/assets/img/'),$imageName);
            $product->image=$imageName;

           }

           if($request->file('imagetwo')){
            $imagetwo=$request->file('imagetwo');
            @unlink(public_path() .'/assets/img/'.$product->imagetwo);
            $imageNametwo="Product_two".time().'.'.$imagetwo->extension();
            $imagetwo->move(public_path('/assets/img/'),$imageNametwo);
            $product->imagetwo=$imageNametwo;

           }


           if($request->file('imagethree')){
            $imagethree=$request->file('imagethree');
            @unlink(public_path() .'/assets/img/'.$product->imagethree);
            $imageNamethree="Product_three".time().'.'.$imagethree->extension();
            $imagethree->move(public_path('/assets/img/'),$imageNamethree);
            $product->imagethree=$imageNamethree;

           }

           if($request->file('imagefour')){
            $imagefour=$request->file('imagefour');
            @unlink(public_path() .'/assets/img/'.$product->imagefour);
            $imageNamefour="Product_four".time().'.'.$imagefour->extension();
            $imagefour->move(public_path('/assets/img/'),$imageNamefour);
            $product->imagefour=$imageNamefour;

           }

        $product->name = $request->product_name;
        $product->brand = $request->brand;
        $product->model = $request->product_model;
        $product->price = $request->product_price;
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
        return redirect()->action([ProductController::class,'index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $product= Product::findorFail($id);
        @unlink(public_path() . '/assets/img/' . $product->image);
        @unlink(public_path() . '/assets/img/' . $product->imagetwo);
        @unlink(public_path() . '/assets/img/' . $product->imagethree);
        @unlink(public_path() . '/assets/img/' . $product->imagefour);
        $product->delete();
        return redirect()->action([ProductController::class,'index']);

    }
}
