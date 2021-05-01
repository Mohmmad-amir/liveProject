@extends('layouts.dashboardapp')

@section('content')

<div class="warapper">
    <div class="content-wrapper">

        <div class="container">
            <div class="row">
        
                <div class="col-md-12">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="row">
        
        
                            <div class="col-4 col-sm-4 col-md-4">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputtext1">Brand</label>
                                    <select class="form-control" name="brand">
                                        <option hidden selected>Select Type</option>
                                        <option value="Travel">Travel</option>
                                        <option value="Movie">Movie</option>
                                        <option value="Business">Business</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Science">Science</option>
        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ProductName"> Model</label>
                                    <input name="Product_name" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="ProductName"> Name</label>
                                    <input name="Product_name" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1"> Price</label>
                                    <input type="Product_price" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Price Range</label>
                                    <select class="form-control" name="Price_range">
                                        <option hidden selected>Select Price Range</option>
                                        <option value="Travel">Travel</option>
                                        <option value="Movie">Movie</option>
                                        <option value="Business">Business</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Science">Science</option>
        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Image</label>
                                    <input name="image" type="file" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Network Type</label>
                                    <select class="form-control" name="networkType">
                                        <option hidden selected>Select Network</option>
                                        <option value="Travel">2G</option>
                                        <option value="Business">2G,3G</option>
                                        <option value="Sports">2G,3G,5G</option>
                                        <option value="Science">2G,3G,5G,6G</option>
        
                                    </select>
                                </div>
        
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Speed</label>
                                    <input name="speed" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">GPRS</label>
                                    <input name="GPRS" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">EDGE</label>
                                    <input name="EDGE" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
        
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Body Dimensions</label>
                                    <input name="BodyDimensions" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Body Weight</label>
                                    <input name="BodyWeight" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Build</label>
                                    <input name="Build" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleInputtext1">Network Sim</label>
                                    <input name="NetworkSim" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Display Type</label>
                                    <input name="DisplayType" type="text" class="form-control" aria-describedby="textHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtext1">Display Size</label>
                                    <input name="DisplaySize" type="text" class="form-control" aria-describedby="textHelp">
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
                                <div class="form-group">
                                    <label for="exampleInputtext1">Launch Date</label>
                                    <input type="LaunchDate" class="form-control" aria-describedby="textHelp">
                                </div>
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
