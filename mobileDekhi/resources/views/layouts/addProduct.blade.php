@extends('layouts.dashboardapp')

@section('content')

    <div class="warapper">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="container  py-5">
                            <h2 class="text-center mt-5 mb-4">
                                Add Products
                            </h2>

                            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input id="image" name="image" type="file" accept="image/*" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label for="image">Side Image</label>
                                            <input id="image" name="imagetwo" type="file" accept="image/*"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>

                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label for="image">Front Image</label>
                                            <input id="image" name="imagethree" type="file" accept="image/*"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3">
                                        <div class="form-group">
                                            <label for="image">Back Image</label>
                                            <input id="image" name="imagefour" type="file" accept="image/*"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="ProductName"> Name</label>
                                            <input name="product_name" type="text" id="ProductName" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="brand">Brand</label>
                                            <select class="form-control" id="brand" name="brand">
                                                <option disabled hidden selected>Select Type</option>
                                                <option value="Samsung">Samsang</option>
                                                <option value="Nokia">Nokia</option>
                                                <option value="Xiaomi">Xiaomi</option>
                                                <option value="Huawei">Huawei</option>
                                                <option value="Oneplus">Oneplus</option>
                                                <option value="Apple">Apple</option>
                                                <option value="sony">Sony</option>
                                                <option value="realme">Realme</option>
                                                <option value="oppo">Oppo</option>
                                                <option value="vivo">Vivo</option>
                                                <option value="asus">Asus</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">

                                        <div class="form-group">
                                            <label for="ProductModel">Model</label>
                                            <input id="ProductModel" name="product_model" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>


                                    <div class="col-4 col-sm-4 col-md-4">

                                        <div class="form-group">
                                            <label for="price"> Price</label>
                                            <input id="price" type="text" name="product_price" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label class="" for="BodyColor">Body Color</label>
                                            <input type="text" name="BodyColor" id="BodyColor" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="LaunchDate">Launch Date</label>
                                            <input type="text" name="LaunchDate" id="LaunchDate" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h4 class="mt-2">Network</h4>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
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
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="networkSim">Network Sim</label>
                                            <input name="networkSim" id="networkSim" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="speed">Speed</label>
                                            <input name="speed" type="text" id="speed" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="GPRS">GPRS</label>
                                            <input name="GPRS" id="GPRS" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="edge">EDGE</label>
                                            <input name="edge" id="edge" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h4 class="mt-2">Body</h4>
                                    </div>


                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="bodyDimensions">Body Dimensions</label>
                                            <input name="bodyDimensions" id="bodyDimensions" type="text"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="bodyWeight">Body Weight</label>
                                            <input name="bodyWeight" id="bodyWeight" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="build">Build</label>
                                            <input name="build" id="build" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>



                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h4 class="mt-2">Display</h4>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="displayType">Display Type</label>
                                            <input name="displayType" id="displayType" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="displaySize">Display Size</label>
                                            <input name="displaySize" id="displaySize" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="displayResolution">Display Resolution</label>
                                            <input name="displayResolution" id="displayResolution" type="text"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="displayMultitouch">Display Multitouch</label>
                                            <input name="displayMultitouch" id="displayMultitouch" type="text"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="DisplayDensity">Display Density</label>
                                            <input name="DisplayDensity" id="DisplayDensity" type="text"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>



                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h4 class="mt-2">Platfrom</h4>
                                    </div>


                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="OperatingSystem">Operating System</label>
                                            <input name="OperatingSystem" id="OperatingSystem" type="text"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="os-version">OS Version</label>
                                            <input name="os_version" id="os-version" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="cpu">CPU</label>
                                            <input name="cpu" id="cpu" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="chipSet">Chipset</label>
                                            <input name="chipSet" id="chipSet" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h4 class="mt-2">Memory</h4>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="MemoryInternal">Memory Internal</label>
                                            <input name="MemoryInternal" id="MemoryInternal" type="text"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="MemoryExternal">Memory External</label>
                                            <input name="MemoryExternal" id="MemoryExternal" type="text"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Ram">Ram</label>
                                            <input name="Ram" id="Ram" type="text" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h4 class="mt-2">Camera</h4>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="PrimaryCamera">Primary Camera</label>
                                            <input type="text" id="PrimaryCamera" name="PrimaryCamera" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="SecondaryCamera">Secondary Camera</label>
                                            <input type="text" name="SecondaryCamera" id="SecondaryCamera"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="CameraFeatures">Camera Features</label>
                                            <input type="text" name="CameraFeatures" id="CameraFeatures"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Video">Video</label>
                                            <input type="text" name="Video" id="Video" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h4 class="mt-2">Sound</h4>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Audio">Audio</label>
                                            <input type="text" name="Audio" id="Audio" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Loudspeaker">Loudspeaker</label>
                                            <input type="text" name="Loudspeaker" id="Loudspeaker" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Jack">3.5mm Jack</label>
                                            <input type="text" name="Jack" id="Jack" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>



                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h4 class="mt-2">Connectivity</h4>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="WiFi">WiFi</label>
                                            <input type="text" name="WiFi" id="WiFi" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Bluetooth">Bluetooth</label>
                                            <input type="text" name="Bluetooth" id="Bluetooth" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="NFC">NFC</label>
                                            <input type="text" name="NFC" id="NFC" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="usb">USB</label>
                                            <input type="text" name="usb" id="usb" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="FmRadio">Fm Radio</label>
                                            <input type="text" name="FmRadio" id="FmRadio" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="GPS">GPS</label>
                                            <input type="text" name="GPS" id="GPS" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h4 class="mt-2">Features</h4>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Sensors">Sensors</label>
                                            <input type="text" name="Sensors" id="Sensors" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Browser">Browser</label>
                                            <input type="text" name="Browser" id="Browser" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Java">Java</label>
                                            <input type="text" name="Java" id="Java" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h4 class="mt-2">Battery</h4>
                                    </div>


                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="BatteryType">Battery Type</label>
                                            <input type="text" name="BatteryType" id="BatteryType" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="BatteryCapacity">Battery Capacity</label>
                                            <input type="text" name="BatteryCapacity" id="BatteryCapacity"
                                                class="form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Charging">Charging</label>
                                            <input type="text" name="Charging" id="Charging" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h4 class="mt-2">More</h4>
                                    </div>

                                    <div class="col-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label class="" for="MadeBy">Made By</label>
                                            <input type="text" name="MadeBy" id="MadeBy" class="form-control"
                                                aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <label class="form-label px-1">Post Status </label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="postStatus" type="radio"
                                                name="exampleRadios" id="publish" value="1">
                                            <label class="form-check-label" for="publish">
                                                publish
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="postStatus" type="radio"
                                                name="exampleRadios" id="unpublish" value="0">
                                            <label class="form-check-label" for="unpublish">
                                                Unpublish
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <button onclick="sweetalert()" type="submit" class="btn btn-primary">Submit</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
