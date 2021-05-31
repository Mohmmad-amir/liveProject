@extends('frontEnd.masterFE')

@section('content')

<div class="container mt-5">
	<div class="row">
		<div class="col-12 col-sm-8 col-md-12 text-center">
			<h3 class="mt-5">{{$upcomingProduct->name}} </h3>
			<h6>Price in Bangladesh</h6>
			<p>BDT-{{$upcomingProduct->price}}</p>
		</div>
	</div>
	<div class="row">
		<div style="text-align: center;" class="col-md-12 mt-3 mb-3">
			<img style="width: 300px" src="{{asset('assets/img')}}/{{$upcomingProduct->image}}">
		</div>
        <div class="col-md-6 offset-md-3">
            <div class="owl-carousel owl-theme">
                <div class="item"><img src="{{asset('assets/img')}}/{{$upcomingProduct->imagetwo}}" alt=""></div>
                <div class="item"><img src="{{asset('assets/img')}}/{{$upcomingProduct->imagethree}}" alt=""></div>
                <div class="item"><img src="{{asset('assets/img')}}/{{$upcomingProduct->imagefour}}" alt=""></div>
            </div>
        </div>

	</div>
	<div class="row mt-4">
		<div class="col-md-12">
			<h4 class="mb-2">{{$upcomingProduct->name}} Full Specifications</h4>
			<table class="table table-striped mt-3 table-bordered">
				<thead>
					<tr>
						<th scope="col">Brand</th>
						<td>{{$upcomingProduct->brand}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Model</th>
						<td> {{$upcomingProduct->model}}</td>
					</tr>
					<tr>
						<th scope="row">Price</th>
						<td>৳{{$upcomingProduct->price}}</td>
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
						<td>{{$upcomingProduct->network_type}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Speed</th>
						<td>{{$upcomingProduct->speed}}</td>
					</tr>
					<tr>
						<th scope="row">GPRS</th>
						<td>{{$upcomingProduct->gprs}}</td>
					</tr>
					<tr>
						<th scope="row">EDGE</th>
						<td>{{$upcomingProduct->edge}}</td>
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
						<td>{{$upcomingProduct->body_dimensions}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Body Weight</th>
						<td>{{$upcomingProduct->body_weight}}</td>
					</tr>
					<tr>
						<th scope="row">Build</th>
						<td>{{$upcomingProduct->build}}</td>
					</tr>
					<tr>
						<th scope="row">Network Sim</th>
						<td>{{$upcomingProduct->network_sim}}</td>
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
						<td>{{$upcomingProduct->display_type}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Display Size</th>
						<td>{{$upcomingProduct->display_size}}</td>
					</tr>
					<tr>
						<th scope="row">Display Resolution</th>
						<td>{{$upcomingProduct->display_resolution}}</td>
					</tr>
					<tr>
						<th scope="row">Display Multitouch</th>
						<td>{{$upcomingProduct->display_multi_touch}}</td>
					</tr>
					<tr>
						<th scope="row">Display Density</th>
						<td>{{$upcomingProduct->display_density}}</td>
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
						<td>{{$upcomingProduct->operating_system}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">OS Version</th>
						<td>{{$upcomingProduct->os_version}}</td>
					</tr>
					<tr>
						<th scope="row">CPU</th>
						<td>{{$upcomingProduct->cpu}}</td>
					</tr>
					<tr>
						<th scope="row">Chipset</th>
						<td>{{$upcomingProduct->chip_set}}</td>
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
						<td>{{$upcomingProduct->memory_internal}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Memory External</th>
						<td>{{$upcomingProduct->memory_external}}</td>
					</tr>
					<tr>
						<th scope="row">Ram</th>
						<td>{{$upcomingProduct->ram}}</td>
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
						<td>{{$upcomingProduct->primary_camera}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Secondary Camera</th>
						<td>{{$upcomingProduct->secondary_camera}}</td>
					</tr>
					<tr>
						<th scope="row">Camera Features</th>
						<td>{{$upcomingProduct->camera_features}}</td>
					</tr>
					<tr>
						<th scope="row">Video</th>
						<td>{{$upcomingProduct->video}}</td>
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
						<td>{{$upcomingProduct->audio}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Loudspeaker</th>
						<td>{{$upcomingProduct->loudspeaker}}</td>
					</tr>
					<tr>
						<th scope="row">3.5mm Jack</th>
						<td>{{$upcomingProduct->mm_jack}}</td>
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
						<td>{{$upcomingProduct->wifi}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Bluetooth</th>
						<td>{{$upcomingProduct->bluetooth}}</td>
					</tr>
					<tr>
						<th scope="row">NFC</th>
						<td>{{$upcomingProduct->nfc}}</td>
					</tr>
					<tr>
						<th scope="row">USB</th>
						<td>{{$upcomingProduct->usb}}</td>
					</tr>
					<tr>
						<th scope="row">Fm Radio</th>
						<td>{{$upcomingProduct->fm_radio}}</td>
					</tr>
					<tr>
						<th scope="row">GPS</th>
						<td>{{$upcomingProduct->gps}}</td>
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
						<td>{{$upcomingProduct->sensors}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Browser</th>
						<td>{{$upcomingProduct->browser}}</td>
					</tr>
					<tr>
						<th scope="row">Java</th>
						<td>{{$upcomingProduct->java}}</td>
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
						<td>{{$upcomingProduct->battery_type}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Battery Capacity</th>
						<td>{{$upcomingProduct->battery_capacity}}</td>
					</tr>
					<tr>
						<th scope="row">Charging</th>
						<td>{{$upcomingProduct->charging}}</td>
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
						<td>{{$upcomingProduct->launch_date}}</td>
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
						<td>{{$upcomingProduct->made_by}}</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="col">Body Color</th>
						<td>{{$upcomingProduct->body_color}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection
