@extends('frontEnd.masterFE')

@section('content')

<div class="container mt-4">
	<div class="row">
		<div class="col-12 col-sm-8 col-md-12 text-center">
			<h3 class="mt-5 ">{{$Product->name}} {{$Product->model}} </h3>
			<h6>Price in Bangladesh</h6>
			<p>BDT-{{$Product->price}}</p>
		</div>
	</div>
	<div class="row">
		<div style="position: relative;
left: 38%;" class="col-md-12 text-center MyText">
			{{-- <table class="table-bordered mt-2">
				<tbody>
					<tr>
						<td style="padding: 10px;">Official ✭</td>
						<td style="padding: 10px;">৳17,990 ৳18,990</td>
					</tr>
				</tbody>
			</table> --}}
		</div>
	</div>
	<div class="row ">
		<div style="text-align: center;" class="col-md-12 mt-3 mb-3">
			<img style="width: 300px" src="{{asset('assets/img')}}/{{$Product->image}}">
		</div>
        <div class="col-md-6 offset-md-3">
            <div class="owl-carousel owl-theme">
                <div class="item"><img src="{{asset('assets/img')}}/{{$Product->imagetwo}}" alt=""></div>
                <div class="item"><img src="{{asset('assets/img')}}/{{$Product->imagethree}}" alt=""></div>
                <div class="item"><img src="{{asset('assets/img')}}/{{$Product->imagefour}}" alt=""></div>
            </div>
        </div>

	</div>
	<div class="row mt-4">
		<div class="col-md-12">
			<h4 class="mb-2">{{$Product->name}}  Full Specifications</h4>
			<table class="table table-striped mt-3 table-bordered">
				<thead>
					<tr>
						<th scope="col">Brand</th>
						<td>{{$Product->brand}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Model</th>
						<td> {{$Product->model}}</td>
					</tr>
					<tr>
						<th scope="row">Price</th>
						<td>৳{{$Product->price}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>Network</h4>
			<table class="table table-striped mt-3 table-bordered">
				<thead>
					<tr>
						<th scope="col">Network Type</th>
						<td>{{$Product->network_type}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Speed</th>
						<td>{{$Product->speed}}</td>
					</tr>
					<tr>
						<th scope="row">GPRS</th>
						<td>{{$Product->gprs}}</td>
					</tr>
					<tr>
						<th scope="row">EDGE</th>
						<td>{{$Product->edge}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>Body</h4>
			<table class="table table-striped mt-3 table-bordered">
				<thead>
					<tr>
						<th scope="col">Body Dimensions</th>
						<td>{{$Product->body_dimensions}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Body Weight</th>
						<td>{{$Product->body_weight}}</td>
					</tr>
					<tr>
						<th scope="row">Build</th>
						<td>{{$Product->build}}</td>
					</tr>
					<tr>
						<th scope="row">Network Sim</th>
						<td>{{$Product->network_sim}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>Display</h4>
			<table class="table table-striped mt-3 table-bordered">
				<thead>
					<tr>
						<th scope="col">Display Type</th>
						<td>{{$Product->display_type}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Display Size</th>
						<td>{{$Product->display_size}}</td>
					</tr>
					<tr>
						<th scope="row">Display Resolution</th>
						<td>{{$Product->display_resolution}}</td>
					</tr>
					<tr>
						<th scope="row">Display Multitouch</th>
						<td>{{$Product->display_multi_touch}}</td>
					</tr>
					<tr>
						<th scope="row">Display Density</th>
						<td>{{$Product->display_density}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>Platfrom</h4>
			<table class="table table-striped mt-3 table-bordered">
				<thead>
					<tr>
						<th scope="col">Operating System</th>
						<td>{{$Product->operating_system}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">OS Version</th>
						<td>{{$Product->os_version}}</td>
					</tr>
					<tr>
						<th scope="row">CPU</th>
						<td>{{$Product->cpu}}</td>
					</tr>
					<tr>
						<th scope="row">Chipset</th>
						<td>{{$Product->chip_set}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>Memory</h4>
			<table class="table table-striped mt-3 table-bordered ">
				<thead>
					<tr>
						<th scope="col">Memory Internal</th>
						<td>{{$Product->memory_internal}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Memory External</th>
						<td>{{$Product->memory_external}}</td>
					</tr>
					<tr>
						<th scope="row">Ram</th>
						<td>{{$Product->ram}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>Camera</h4>
			<table class="table table-striped mt-3 table-bordered ">
				<thead>
					<tr>
						<th scope="col">Primary Camera</th>
						<td>{{$Product->primary_camera}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Secondary Camera</th>
						<td>{{$Product->secondary_camera}}</td>
					</tr>
					<tr>
						<th scope="row">Camera Features</th>
						<td>{{$Product->camera_features}}</td>
					</tr>
					<tr>
						<th scope="row">Video</th>
						<td>{{$Product->video}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>Sound</h4>
			<table class="table table-striped mt-3 table-bordered ">
				<thead>
					<tr>
						<th scope="col">Audio</th>
						<td>{{$Product->audio}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Loudspeaker</th>
						<td>{{$Product->loudspeaker}}</td>
					</tr>
					<tr>
						<th scope="row">3.5mm Jack</th>
						<td>{{$Product->mm_jack}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>Connectivity</h4>
			<table class="table table-striped mt-3 table-bordered ">
				<thead>
					<tr>
						<th scope="col">WiFi</th>
						<td>{{$Product->wifi}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Bluetooth</th>
						<td>{{$Product->bluetooth}}</td>
					</tr>
					<tr>
						<th scope="row">NFC</th>
						<td>{{$Product->nfc}}</td>
					</tr>
					<tr>
						<th scope="row">USB</th>
						<td>{{$Product->usb}}</td>
					</tr>
					<tr>
						<th scope="row">Fm Radio</th>
						<td>{{$Product->fm_radio}}</td>
					</tr>
					<tr>
						<th scope="row">GPS</th>
						<td>{{$Product->gps}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>Features</h4>
			<table class="table table-striped mt-3 table-bordered ">
				<thead>
					<tr>
						<th scope="col">Sensors</th>
						<td>{{$Product->sensors}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Browser</th>
						<td>{{$Product->browser}}</td>
					</tr>
					<tr>
						<th scope="row">Java</th>
						<td>{{$Product->java}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>Battery</h4>
			<table class="table table-striped mt-3 table-bordered ">
				<thead>
					<tr>
						<th scope="col">Battery Type</th>
						<td>{{$Product->battery_type}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Battery Capacity</th>
						<td>{{$Product->battery_capacity}}</td>
					</tr>
					<tr>
						<th scope="row">Charging</th>
						<td>{{$Product->charging}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>Launch</h4>
			<table class="table table-striped mt-3 table-bordered ">
				<thead>
					<tr>
						<th scope="col">Launch Date</th>
						<td>{{$Product->launch_date}}</td>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
		<div class="col-md-12">
			<h4>More</h4>
			<table class="table table-striped mt-3 table-bordered ">
				<thead>
					<tr>
						<th scope="col">Made By</th>
						<td>{{$Product->made_by}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="col">Body Color</th>
						<td>{{$Product->body_color}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection
