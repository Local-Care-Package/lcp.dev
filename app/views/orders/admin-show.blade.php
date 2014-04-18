@extends('layouts.admin-master')

@section('header')
	<div class="row">
		<div class="container">
			<ul>
				<h1>Order ID Number: {{{ $order->id }}}</h1>
				<li class="admin-action"><a class="blue-text" href="{{{ action('OrdersController@index') }}}"> Back to All Orders</a></li><hr>
			</ul>
		</div>
	<div>
@stop

@section('main-content')		
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<table class="table table-bordered">
					<tr>
						<th><h4>Recipient Information</h4></th>
						<th><h4>Package Contents</h4></th>
						<th><h4>Package Status</h4></th>
					</tr>
					<tr>
						<td>
							{{ $order->recipient_name }}<br>
							{{ $order->street }}<br>
							{{ $order->city }}, {{ $order->state }} {{ $order->zip }}<br>
						</td>
						<td>
							{{ $order->packageType->description }}<br><hr>
							<strong>Personal Message</strong><br>
							{{ $order->gift_message }}
						</td>
						<td style="text-align: center">
							@if ($order->packaged_at == NULL && $order->delivered_at == NULL)
							<span class="blue-text"><i class="fa fa-tasks status-icon"></i><br>Procesing Order</span>
							@endif
							@if ($order->packaged_at != NULL && $order->delivered_at == NULL)
							<span class="blue-text"><i class="fa fa-gift status-icon"></i><br>In Package!</span>
							@endif
							@if ($order->packaged_at != NULL && $order->delivered_at != NULL)
							<span class="blue-text"><i class="fa fa-check status-icon"></i><br>Delivered!</span>
							@endif
						</td>
					</tr>
				</table>
				<a href="{{{ action('OrdersController@edit', $order->id) }}}" class="btn">Edit Order</a>
			</div>
		</div>
	</div>
@stop