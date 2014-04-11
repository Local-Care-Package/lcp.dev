@extends('layouts.master')

@section('main-content')
	<h1>Orders Index</h1>
	<div class="container">
		<div class="col-md-12">
		<table class="table-bordered table-striped">
			<tr>
				<th>Order ID</th>
				<th>Street</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>Gift Message</th>
				<th>Packaged Date</th>
				<th>Package</th>
				<th>Delivered Date</th>
				<th>Deliver</th>
			</tr>
	    	@foreach ($orders as $order)
	    	<tr>
	    		<td>{{{$order->id}}}</td>
	    		<td>{{{$order->street}}}</td>
	    		<td>{{{$order->city}}}</td>
	    		<td>{{{$order->state}}}</td>
	    		<td>{{{$order->zip}}}</td>
	    		<td>{{{$order->gift_message}}}</td>
	    		<td>{{{$package->packaged_at}}}</td>
	    		<td><a href="">Package</a></td>
	    		<td>{{{$package->delivered_at}}}</td>
	    		<td><a href="">Deliver</a></td>
	    		
	    	</tr>
	    	@endforeach
		</table>
		</div>
		{{ $orders->links(); }}
	</div>

@stop