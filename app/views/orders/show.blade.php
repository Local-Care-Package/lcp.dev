@extends('layouts.master')

@section('main-content')
	<h1>Order Details:</h1><hr>
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
			<td>
				@if ($order->packaged_at == NULL && $order->delivered_at == NULL)
				<i class="fa fa-tasks"></i><br>Procesing Order</p>
				@endif
				@if ($order->packaged_at != NULL && $order->delivered_at == NULL)
				<i class="fa fa-gift"></i><br>Ready For Delivery!</span>
				@endif
				@if ($order->packaged_at != NULL && $order->delivered_at != NULL)
				<span class="label label-success">Delivered!</span>
				@endif
			</td>
		</tr>
	</table>

@stop