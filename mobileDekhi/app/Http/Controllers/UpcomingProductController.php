<?php

namespace App\Http\Controllers;

use App\Http\Controllers\upcomingProductController as ControllersUpcomingProductController;
use App\Models\UpcomingProduct;
use Illuminate\Http\Request;
use Image;

class upcomingProductController extends Controller
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
        $upcomingProducts = upcomingProduct::all();
        return view('upcomingProduct',compact('upcomingProducts'));
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
            $image = "upcomingProduct_" . time() . "." . $extension;

            Image::make($file)->save(public_path() . '/assets/img/' . $image);
        }

        $product = new upcomingProduct();
        $product->image = $image;
        $product->name = $request->name;

        $product->save();
        return redirect()->back()->with("message", "added Successful");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $upcomingProduct = UpcomingProduct::findorFail($id);
        return view('upcomingProductEdit',compact('upcomingProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $upcomingProduct = UpcomingProduct::findorFail($id);
        $request->validate([
            'image' => 'required|image'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = "upcomingProduct_" . time() . "." . $extension;

            Image::make($file)->save(public_path() . '/assets/img/' . $image);
        }

        $upcomingProduct->image = $image;
        $upcomingProduct->name = $request->name;

        $upcomingProduct->save();
        return redirect("upcomingProducts/add")->with("message", "updated Successful"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upcomingProduct = UpcomingProduct::findOrFail($id);
        @unlink(public_path() . '/assets/img/' . $upcomingProduct->image);
        $upcomingProduct->delete();
        return redirect()->back()->with("message", "Deleted Successful");
    }
}
