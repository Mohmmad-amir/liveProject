@extends('layouts.dashboardapp')

@section('content')
<div class="warapper">
  <div class="content-wrapper">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="container  py-5">
            <h2 class="text-center mt-5 mb-4">
              Update Upcoming Product
            </h2>
            <form method="POST" action="{{route('upcomingProduct.update',['id'=>$products->id])}}" enctype="multipart/form-data">
              @csrf
              @method('put')
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
                <div class="col-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="image">Upcoming Image</label>
                        <input id="image" name="imageupcoming" type="file" class="form-control"
                            aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input id="image" name="image" type="file" class="form-control" aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="image">Image Two</label>
                        <input id="image" name="imagetwo" type="file" class="form-control" aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="image">Image Three</label>
                        <input id="image" name="imagethree" type="file" class="form-control" aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="image">Image Four</label>
                        <input id="image" name="imagefour" type="file" class="form-control" aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="ProductName"> Name</label>
                        <input name="product_name" value="{{ $products->name }}" type="text"
                            id="ProductName" class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <select class="form-control" id="brand" name="brand">
                            <option hidden selected>{{ $products->brand }}</option>
                            <option value="Samsung">Samsang</option>
                            <option value="Nokia">Nokia</option>
                            <option value="Xiaomi">Xiaomi</option>
                            <option value="Huawei">Huawei</option>
                            <option value="Iphone">Iphone</option>
                            <option value="Oneplus">Oneplus</option>
                            <option value="Apple">Apple</option>
                            <option value="sony">Sony</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ProductModel"> Model</label>
                        <input id="ProductModel" value="{{ $products->model }}" name="product_model"
                            type="text" class="form-control" aria-describedby="textHelp">
                    </div>


                    <div class="form-group">
                        <label for="price"> Price</label>
                        <input id="price" value="{{ $products->price }}" type="text" name="product_price"
                            class="form-control" aria-describedby="textHelp">
                    </div>
                    <h4 class="mt-4 mb-2">Network</h4>
                    <div class="form-group">
                        <label for="networkType">Network Type</label>
                        <select class="form-control" id="networkType" name="networkType">
                            <option hidden selected>{{ $products->network_type }}</option>
                            <option value="2G">2G</option>
                            <option value="2G,3G">2G,3G</option>
                            <option value="2G,3G,4G">2G,3G,4G</option>
                            <option value="2G,3G,4G,5G">2G,3G,4G,5G</option>

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="speed">Speed</label>
                        <input name="speed" value="{{ $products->speed }}" type="text" id="speed"
                            class="form-control" aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="GPRS">GPRS</label>
                        <input name="GPRS" value="{{ $products->gprs }}" id="GPRS" type="text"
                            class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="edge">EDGE</label>
                        <input name="edge" value="{{ $products->edge }}" id="edge" type="text"
                            class="form-control" aria-describedby="textHelp">
                    </div>


                    <h4 class="mt-4 mb-2">Body</h4>
                    <div class="form-group">
                        <label for="bodyDimensions">Body Dimensions</label>
                        <input name="bodyDimensions" value="{{ $products->body_dimensions }}"
                            id="bodyDimensions" type="text" class="form-control"
                            aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="bodyWeight">Body Weight</label>
                        <input name="bodyWeight" value="{{ $products->body_weight }}" id="bodyWeight"
                            type="text" class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="build">Build</label>
                        <input name="build" id="build" value="{{ $products->build }}" type="text"
                            class="form-control" aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="networkSim">Network Sim</label>
                        <input name="networkSim" value="{{ $products->network_sim }}" id="networkSim"
                            type="text" class="form-control" aria-describedby="textHelp">
                    </div>

                    <h4 class="mt-4 mb-4">Display</h4>

                    <div class="form-group">
                        <label for="displayType">Display Type</label>
                        <input name="displayType" value="{{ $products->display_type }}" id="displayType"
                            type="text" class="form-control" aria-describedby="textHelp">
                    </div>


                </div>




                <div class="col-4 col-sm-4 col-md-4">

                    <div class="form-group">
                        <label for="displaySize">Display Size</label>
                        <input name="displaySize" value="{{ $products->display_size }}" id="displaySize"
                            type="text" class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="displayResolution">Display Resolution</label>
                        <input name="displayResolution" value="{{ $products->display_resolution }}"
                            id="displayResolution" type="text" class="form-control"
                            aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="displayMultitouch">Display Multitouch</label>
                        <input name="displayMultitouch" value="{{ $products->display_multi_touch }}"
                            id="displayMultitouch" type="text" class="form-control"
                            aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="DisplayDensity">Display Density</label>
                        <input name="DisplayDensity" value="{{ $products->display_density }}"
                            id="DisplayDensity" type="text" class="form-control"
                            aria-describedby="textHelp">
                    </div>

                    <h4 class=" mb-2">Platfrom</h4>

                    <div class="form-group">
                        <label for="OperatingSystem">Operating System</label>
                        <input name="OperatingSystem" value="{{ $products->operating_system }}"
                            id="OperatingSystem" type="text" class="form-control"
                            aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="os-version">OS Version</label>
                        <input name="os_version" value="{{ $products->os_version }}" id="os-version"
                            type="text" class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="cpu">CPU</label>
                        <input name="cpu" id="cpu" value="{{ $products->cpu }}" type="text"
                            class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="chipSet">Chipset</label>
                        <input name="chipSet" value="{{ $products->chip_set }}" id="chipSet" type="text"
                            class="form-control" aria-describedby="textHelp">
                    </div>

                    <h4 class=" mb-2">Memory</h4>

                    <div class="form-group">
                        <label for="MemoryInternal">Memory Internal</label>
                        <input name="MemoryInternal" value="{{ $products->memory_internal }}"
                            id="MemoryInternal" type="text" class="form-control"
                            aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="MemoryExternal">Memory External</label>
                        <input name="MemoryExternal" value="{{ $products->memory_external }}"
                            id="MemoryExternal" type="text" class="form-control"
                            aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="Ram">Ram</label>
                        <input name="Ram" id="Ram" value="{{ $products->ram }}" type="text"
                            class="form-control" aria-describedby="textHelp">
                    </div>

                    <h4 class=" ">Camera</h4>
                    <div class="form-group">
                        <label for="PrimaryCamera">Primary Camera</label>
                        <input type="text" value="{{ $products->primary_camera }}" id="PrimaryCamera"
                            name="PrimaryCamera" class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="SecondaryCamera">Secondary Camera</label>
                        <input type="text" value="{{ $products->secondary_camera }}"
                            name="SecondaryCamera" id="SecondaryCamera" class="form-control"
                            aria-describedby="textHelp">
                    </div>


                    <div class="form-group">
                        <label for="CameraFeatures">Camera Features</label>
                        <input type="text" value="{{ $products->camera_features }}" name="CameraFeatures"
                            id="CameraFeatures" class="form-control" aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="Video">Video</label>
                        <input type="text" value="{{ $products->video }}" name="Video" id="Video"
                            class="form-control" aria-describedby="textHelp">
                    </div>



                    <h4 class="mt-4 mb-2">Sound</h4>
                    <div class="form-group">
                        <label for="Audio">Audio</label>
                        <input type="text" value="{{ $products->audio }}" name="Audio" id="Audio"
                            class="form-control" aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="Loudspeaker">Loudspeaker</label>
                        <input type="text" value="{{ $products->loudspeaker }}" name="Loudspeaker"
                            id="Loudspeaker" class="form-control" aria-describedby="textHelp">
                    </div>


                </div>



                <div class="col-4 col-sm-4 col-md-4">

                    <div class="form-group">
                        <label for="Jack">3.5mm Jack</label>
                        <input type="text" value="{{ $products->mm_jack }}" name="Jack" id="Jack"
                            class="form-control" aria-describedby="textHelp">
                    </div>


                    <h4 class="mt-4 mb-2">Connectivity</h4>

                    <div class="form-group">
                        <label for="WiFi">WiFi</label>
                        <input type="text" value="{{ $products->wifi }}" name="WiFi" id="WiFi"
                            class="form-control" aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="Bluetooth">Bluetooth</label>
                        <input type="text" value="{{ $products->bluetooth }}" name="Bluetooth"
                            id="Bluetooth" class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="NFC">NFC</label>
                        <input type="text" value="{{ $products->nfc }}" name="NFC" id="NFC"
                            class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="usb">USB</label>
                        <input type="text" name="usb" value="{{ $products->usb }}" id="usb"
                            class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="FmRadio">Fm Radio</label>
                        <input type="text" name="FmRadio" value="{{ $products->fm_radio }}" id="FmRadio"
                            class="form-control" aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="GPS">GPS</label>
                        <input type="text" name="GPS" value="{{ $products->gps }}" id="GPS"
                            class="form-control" aria-describedby="textHelp">
                    </div>

                    <h4 class="mt-4 mb-2">Features</h4>

                    <div class="form-group">
                        <label for="Sensors">Sensors</label>
                        <input type="text" value="{{ $products->sensors }}" name="Sensors" id="Sensors"
                            class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="Browser">Browser</label>
                        <input type="text" value="{{ $products->browser }}" name="Browser" id="Browser"
                            class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="Java">Java</label>
                        <input type="text" name="Java" value="{{ $products->java }}" id="Java"
                            class="form-control" aria-describedby="textHelp">
                    </div>

                    <h4 class="mt-4 mb-2">Battery</h4>

                    <div class="form-group">
                        <label for="BatteryType">Battery Type</label>
                        <input type="text" value="{{ $products->battery_type }}" name="BatteryType"
                            id="BatteryType" class="form-control" aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="BatteryCapacity">Battery Capacity</label>
                        <input type="text" value="{{ $products->battery_capacity }}"
                            name="BatteryCapacity" id="BatteryCapacity" class="form-control"
                            aria-describedby="textHelp">
                    </div>
                    <div class="form-group">
                        <label for="Charging">Charging</label>
                        <input type="text" value="{{ $products->charging }}" name="Charging"
                            id="Charging" class="form-control" aria-describedby="textHelp">
                    </div>

                    <h4 class="mt-4 mb-2">Launch</h4>
                    <div class="form-group">
                        <label for="LaunchDate">Launch Date</label>
                        <input type="text" value="{{ $products->launch_date }}" name="LaunchDate"
                            id="LaunchDate" class="form-control" aria-describedby="textHelp">
                    </div>

                    <h4 class="mt-4 mb-2">More</h4>

                    <div class="form-group">
                        <label for="MadeBy">Made By</label>
                        <input type="text" value="{{ $products->made_by }}" name="MadeBy" id="MadeBy"
                            class="form-control" aria-describedby="textHelp">
                    </div>

                    <div class="form-group">
                        <label for="BodyColor">Body Color</label>
                        <input type="text" value="{{ $products->body_color }}" name="BodyColor"
                            id="BodyColor" class="form-control" aria-describedby="textHelp">
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

