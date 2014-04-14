@extends('layouts.admin-master')

@section('main-content')
	<h1>Orders Index</h1><hr>
	<div class="row">
		<div class="container">
			<div class="col-md-10 col-sm-10">
			<table class="table table-bordered table-striped table-responsive">
				<tr>
					<th>Order ID</th>
					<th>Customer ID</th>
					<th>Placed On</th>
					<th>Status</th>
					<th></th>
					<th></th>
				</tr>
		    	@foreach ($orders as $order)
		    	<tr>
		    		<td>{{{ $order->id }}}</td>
	    			<td>{{{ $order->user->id }}}</td>
	    			<td>{{{ $order->created_at->format('l, F jS, Y') }}}</td>
	    			<td style="text-align: center">
						@if ($order->packaged_at == NULL && $order->delivered_at == NULL)
						<i class="fa fa-tasks status-icon-sm blue-text"></i>
						@endif
						@if ($order->packaged_at != NULL && $order->delivered_at == NULL)
						<i class="fa fa-truck status-icon-sm blue-text"></i><br>Ready For Delivery!</span>
						@endif
						@if ($order->packaged_at != NULL && $order->delivered_at != NULL)
						<i class="fa fa-gift status-icon-sm blue-text"></i>Delivered!<br>{{ $order->delivered_at }}</span>
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