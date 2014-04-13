@extends('layouts.master')

@section('main-content')
	<h1>Orders Index</h1>
	<div class="container">
		<div class="col-md-12 text-center">
		<table class="table-bordered table-striped">
			<tr>
				<th>Order ID</th>
				<th>Recipient</th>
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
	    		<td><a href="{{{ action('OrdersController@show', $order->id) }}}">{{{$order->id}}}</a></td>
	    		<td>{{{$order->recipient_name}}}</td>
	    		<td>{{{$order->street}}}</td>
	    		<td>{{{$order->city}}}</td>
	    		<td>{{{$order->state}}}</td>
	    		<td>{{{$order->zip}}}</td>
	    		<td>{{{$order->gift_message}}}</td>
	    		<td>
	    			@if (is_null($order->packaged_at))
	    				{{{"N/A"}}}
	    			@else
						{{{$order->packaged_at}}}
	    			@endif
	    		</td>
	    		<td><a href="{{{ action('OrdersController@update', $order->id, 'pack') }}}">Pack</a></td>
	    		<td>
	    			@if (is_null($order->delivered_at))
	    				{{{"N/A"}}}
	    			@else
						{{{$order->delivered_at}}}
	    			@endif
	    		</td>
	    		<td><a href="{{{ action('OrdersController@update', $order->id, 'deliver') }}}">Deliver</a></td> 		
	    	</tr>
	    	@endforeach
		</table>
		</div>
		{{ $orders->links(); }}
	</div>

@stop