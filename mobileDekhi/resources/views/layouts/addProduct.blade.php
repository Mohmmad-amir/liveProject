@extends('layouts.dashboardapp')

@section('content')

<div class="warapper">
    <div class="content-wrapper">

        <div class="container">
            <div class="row">

                <div class="col-md-12 mt-4 mb-4">
                    <h4 class="text-center">Add Product</h4>
                </div>
        
                <div class="col-md-12">
                    <h4>Mobile Specifications</h4>
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input id="image" name="image" type="file" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="ProductName"> Name</label>
                                    <input name="product_name" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Brand</label>
                                    <select class="form-control" id="brand" name="brand">
                                        <option hidden selected>Select Type</option>
                                        <option value="2G,3G,4G,5G">Samsang</option>
                                        <option value="Nokia">Nokia</option>
                                        <option value="Xiaomi">Xiaomi</option>
                                        <option value="Huawei">Huawei</option>
                                        <option value="Iphone">Iphone</option>
        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ProductModel"> Model</label>
                                    <input id="ProductModel" name="product_model" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        

                                <div class="form-group">
                                    <label for="price"> Price</label>
                                    <input id="price" type="text" name="product_price" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="price_range">Price Range</label>
                                    <select class="form-control" id="price_range" name="price_range">
                                        <option hidden selected>Select Price Range</option>
                                        <option value="0-5,000">0-5,000</option>
                                        <option value="5,000-10,000">5,000-10,000</option>
                                        <option value="10,000-15,000">10,000-20,000</option>
                                        <option value="20,000-30,000">20,000-30,000</option>
                                        <option value="30,000-40,000">30,000-40,000</option>
                                        <option value="40,000-50,000">40,000-50,000</option>
                                        <option value="50,000-1,00,000">50,000-1,00,000</option>
                                        <option value="1,00,000-1,50,000">1,00,000-1,50,000</option>
        
                                    </select>
                                </div>
        
                                <h4 class="mt-4 mb-2">Network</h4>
                                <div class="form-group">
                                    <label for="networkType">Network Type</label>
                                    <select class="form-control" id="networkType" name="networkType">
                                        <option hidden selected>Select Network</option>
                                        <option value="2G">2G</option>
                                        <option value="2G,3G">2G,3G</option>
                                        <option value="2G,3G,4G">2G,3G,4G</option>
                                        <option value="2G,3G,4G,5G">2G,3G,4G,5G</option>
        
                                    </select>
                                </div>
        
        
                                <div class="form-group">
                                    <label for="speed">Speed</label>
                                    <input name="speed" type="text" id="speed" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">GPRS</label>
                                    <input name="GPRS" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="edge">EDGE</label>
                                    <input name="edge" id="edge" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
        
                                <h4 class="mt-4 mb-2">Body</h4>
                                <div class="form-group">
                                    <label for="bodyDimensions">Body Dimensions</label>
                                    <input name="bodyDimensions" id="bodyDimensions" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="bodyWeight">Body Weight</label>
                                    <input name="bodyWeight" id="bodyWeight" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="build">Build</label>
                                    <input name="build" id="build" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="networkSim">Network Sim</label>
                                    <input name="networkSim" id="networkSim" type="text" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">Display</h4>
                                
                                <div class="form-group">
                                    <label for="displayType">Display Type</label>
                                    <input name="displayType" id="displayType" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="displaySize">Display Size</label>
                                    <input name="displaySize" id="displaySize" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
        
        
                            </div>
        
        
        
        
        
                            <div class="col-4 col-sm-4 col-md-4">
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Display Resolution</label>
                                    <input name="DisplayResolution" type="text" class="form-control"
                                        aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Display Multitouch</label>
                                    <input name="DisplayMultitouch" type="text" class="form-control"
                                        aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Display Density</label>
                                    <input name="DisplayDensity" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <h4 class="mt-4 mb-2">Platfrom</h4>

                                <div class="form-group">
                                    <label for="exampleInputtext1">Operating System</label>
                                    <input name="OperatingSystem" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">OS Version</label>
                                    <input name="DisplayDensity" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">CPU</label>
                                    <input name="DisplayDensity" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Chipset</label>
                                    <input name="DisplayDensity" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <h4 class="mt-4 mb-2">Memory</h4>

                                <div class="form-group">
                                    <label for="exampleInputtext1">Memory Internal</label>
                                    <input name="MemoryInternal" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Memory External</label>
                                    <input name="MemoryExternal" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Ram</label>
                                    <input name="Ram" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <h4 class="mt-4 mb-2">Camera</h4>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Primary Camera</label>
                                    <input type="PrimaryCamera" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Secondary Camera</label>
                                    <input type="SecondaryCamera" class="form-control" aria-describedby="textHelp">
                                </div>
        
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Camera Features</label>
                                    <input type="CameraFeatures" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Video</label>
                                    <input type="Video" class="form-control" aria-describedby="textHelp">
                                </div>
        
        
        
                                <h4 class="mt-4 mb-2">Sound</h4>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Audio</label>
                                    <input type="Audio" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Loudspeaker</label>
                                    <input type="Loudspeaker" class="form-control" aria-describedby="textHelp">
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">3.5mm Jack</label>
                                    <input type="Jack" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">Connectivity</h4>

                                <div class="form-group">
                                    <label for="exampleInputtext1">WiFi</label>
                                    <input type="WiFi" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Bluetooth</label>
                                    <input type="Bluetooth" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">NFC</label>
                                    <input type="NFC" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">USB</label>
                                    <input type="NFC" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Fm Radio</label>
                                    <input type="FmRadio" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">GPS</label>
                                    <input type="GPS" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <h4 class="mt-4 mb-2">Features</h4>

                                <div class="form-group">
                                    <label for="exampleInputtext1">Sensors</label>
                                    <input type="Sensors" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Browser</label>
                                    <input type="Browser" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Java</label>
                                    <input type="Java" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">Battery</h4>
                                
                                <div class="form-group">
                                    <label for="exampleInputtext1">Battery Type</label>
                                    <input type="BatteryType" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Battery Capacity</label>
                                    <input type="BatteryCapacity" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Charging</label>
                                    <input type="Charging" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">Launch</h4>

                                <div class="form-group">
                                    <label for="exampleInputtext1">Launch Date</label>
                                    <input type="LaunchDate" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">More</h4>

                                <div class="form-group">
                                    <label for="exampleInputtext1">Made By</label>
                                    <input type="MadeBy" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Body Color</label>
                                    <input type="BodyColor" class="form-control" aria-describedby="textHelp">
                                </div>
        
                            </div>
                        </div>
        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
        
            </div>

    </div>
</div>

@endsection
