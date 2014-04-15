@extends('layouts.admin-master')

@section('header')
	<div class="row">
		<div class="container">
			<ul>
				<h1>Order Index </h1><hr>
				<li class="admin-action"><a class="sort-orders btn btn-sm" href="">All Orders</a></li>
				<li class="admin-action"><a class="sort-orders btn btn-sm" href="">New Orders</a></li>
				<li class="admin-action"><a class="sort-orders btn btn-sm" href="">In Package Orders</a></li>
				<li class="admin-action"><a class="sort-orders btn btn-sm" href="">Delivered Orders</a></li>
			</ul>
		</div>
	<div>
@stop

@section('main-content')
	<div class="row">
		<div class="container">
			<div class="col-md-10 col-sm-10">
			<table class="table table-bordered table-striped table-responsive table-index">
				<tr>
					<th>Order ID</th>
					<th>Cust. ID</th>
					<th>Placed On</th>
					<th>Status</th>
					<th></th>
					<th></th>
				</tr>
		    	@foreach ($orders as $order)
		    	<tr>
		    		<td>{{{ $order->id }}}</td>
	    			<td>{{{ $order->user_id }}}</td>
	    			<td>{{{ $order->created_at->format('l, F jS, Y') }}}</td>
	    			<td>
						@if ($order->packaged_at == NULL && $order->delivered_at == NULL)
						<i class="fa fa-tasks status-icon-sm blue-text"></i>
						@endif
						@if ($order->packaged_at != NULL && $order->delivered_at == NULL)
						<i class="fa fa-gift status-icon-sm blue-text"></i><br></span>
						@endif
						@if ($order->packaged_at != NULL && $order->delivered_at != NULL)
						<i class="fa fa-check status-icon-sm blue-text"></i></span>
						@endif
					</td>
					<td style="text-align: center"><a href="{{{ action('OrdersController@show', $order->id) }}}" class="btn btn-sm">Details</a></td>
					<td style="text-align: center"><a href="{{{ action('OrdersController@edit', $order->id) }}}"><i class="fa fa-pencil-square-o blue-text status-icon-sm"></i></a></td>	
		    	</tr>
		    	@endforeach
			</table>
			<tr>{{ $orders->links(); }}</tr>
			</div>
		</div>
	</div>

@stop