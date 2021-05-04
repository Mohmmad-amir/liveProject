@extends('layouts.dashboardapp')

@section('content')

<div class="warapper">
    <div class="content-wrapper">

        <div class="container">
            <div class="row">

                <div class="col-md-12 mt-4 mb-4">
                    <h4 class="text-center mt-5">Add Product</h4>
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
                                    <input name="product_name" type="text" id="ProductName" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Brand</label>
                                    <select class="form-control" id="brand" name="brand">
                                        <option hidden selected>Select Type</option>
                                        <option value="Samsung">Samsang</option>
                                        <option value="Nokia">Nokia</option>
                                        <option value="Xiaomi">Xiaomi</option>
                                        <option value="Huawei">Huawei</option>
                                        <option value="Iphone">Iphone</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ProductModel">Model</label>
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
                                    <label for="GPRS">GPRS</label>
                                    <input name="GPRS" id="GPRS" type="text" class="form-control" aria-describedby="textHelp">
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
                                    <label for="displayResolution">Display Resolution</label>
                                    <input name="displayResolution" id="displayResolution" type="text" class="form-control"
                                        aria-describedby="textHelp">
                                </div>

                                <div class="form-group">
                                    <label for="displayMultitouch">Display Multitouch</label>
                                    <input name="displayMultitouch" id="displayMultitouch" type="text" class="form-control"
                                        aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="DisplayDensity">Display Density</label>
                                    <input name="DisplayDensity" id="DisplayDensity" type="text" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">Platfrom</h4>

                                <div class="form-group">
                                    <label for="OperatingSystem">Operating System</label>
                                    <input name="OperatingSystem" id="OperatingSystem" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="os-version">OS Version</label>
                                    <input name="os_version" id="os-version" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="cpu">CPU</label>
                                    <input name="cpu" id="cpu" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="chipSet">Chipset</label>
                                    <input name="chipSet" id="chipSet" type="text" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">Memory</h4>

                                <div class="form-group">
                                    <label for="MemoryInternal">Memory Internal</label>
                                    <input name="MemoryInternal" id="MemoryInternal" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="MemoryExternal">Memory External</label>
                                    <input name="MemoryExternal" id="MemoryExternal" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Ram">Ram</label>
                                    <input name="Ram" id="Ram" type="text" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">Camera</h4>
                                <div class="form-group">
                                    <label for="PrimaryCamera">Primary Camera</label>
                                    <input type="text" id="PrimaryCamera" name="PrimaryCamera" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="SecondaryCamera">Secondary Camera</label>
                                    <input type="text" name="SecondaryCamera" id="SecondaryCamera" class="form-control" aria-describedby="textHelp">
                                </div>


                                <div class="form-group">
                                    <label for="CameraFeatures">Camera Features</label>
                                    <input type="text" name="CameraFeatures" id="CameraFeatures" class="form-control" aria-describedby="textHelp">
                                </div>

                                <div class="form-group">
                                    <label for="Video">Video</label>
                                    <input type="text" name="Video" id="Video" class="form-control" aria-describedby="textHelp">
                                </div>



                                <h4 class="mt-4 mb-2">Sound</h4>
                                <div class="form-group">
                                    <label for="Audio">Audio</label>
                                    <input type="text" name="Audio" id="Audio" class="form-control" aria-describedby="textHelp">
                                </div>

                                <div class="form-group">
                                    <label for="Loudspeaker">Loudspeaker</label>
                                    <input type="text" name="Loudspeaker" id="Loudspeaker" class="form-control" aria-describedby="textHelp">
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <label for="Jack">3.5mm Jack</label>
                                    <input type="text" name="Jack" id="Jack" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">Connectivity</h4>

                                <div class="form-group">
                                    <label for="WiFi">WiFi</label>
                                    <input type="text" name="WiFi" id="WiFi" class="form-control" aria-describedby="textHelp">
                                </div>

                                <div class="form-group">
                                    <label for="Bluetooth">Bluetooth</label>
                                    <input type="text" name="Bluetooth" id="Bluetooth" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="NFC">NFC</label>
                                    <input type="text" name="NFC" id="NFC" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="usb">USB</label>
                                    <input type="text" name="usb" id="usb" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="FmRadio">Fm Radio</label>
                                    <input type="text" name="FmRadio" id="FmRadio" class="form-control" aria-describedby="textHelp">
                                </div>

                                <div class="form-group">
                                    <label for="GPS">GPS</label>
                                    <input type="text" name="GPS" id="GPS" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">Features</h4>

                                <div class="form-group">
                                    <label for="Sensors">Sensors</label>
                                    <input type="text" name="Sensors" id="Sensors" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Browser">Browser</label>
                                    <input type="text" name="Browser" id="Browser" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Java">Java</label>
                                    <input type="text" name="Java" id="Java" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">Battery</h4>

                                <div class="form-group">
                                    <label for="BatteryType">Battery Type</label>
                                    <input type="text" name="BatteryType" id="BatteryType" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="BatteryCapacity">Battery Capacity</label>
                                    <input type="text" name="BatteryCapacity" id="BatteryCapacity" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Charging">Charging</label>
                                    <input type="text" name="Charging" id="Charging" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">Launch</h4>
                                <div class="form-group">
                                    <label for="LaunchDate">Launch Date</label>
                                    <input type="text" name="LaunchDate" id="LaunchDate" class="form-control" aria-describedby="textHelp">
                                </div>

                                <h4 class="mt-4 mb-2">More</h4>

                                <div class="form-group">
                                    <label for="MadeBy">Made By</label>
                                    <input type="text" name="MadeBy" id="MadeBy" class="form-control" aria-describedby="textHelp">
                                </div>

                                <div class="form-group">
                                    <label for="BodyColor">Body Color</label>
                                    <input type="text" name="BodyColor" id="BodyColor" class="form-control" aria-describedby="textHelp">
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
