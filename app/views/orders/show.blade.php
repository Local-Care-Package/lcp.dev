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
			<td style="text-align: center">
				@if ($order->packaged_at == NULL && $order->delivered_at == NULL)
				<span class="blue-text"><i class="fa fa-tasks status-icon"></i><br>Procesing Order</span>
				@endif
				@if ($order->packaged_at != NULL && $order->delivered_at == NULL)
				<span class="blue-text"><i class="fa fa-truck status-icon"></i><br>Ready For Delivery!</span>
				@endif
				@if ($order->packaged_at != NULL && $order->delivered_at != NULL)
				<span class="blue-text"><i class="fa fa-check status-icon"></i><br>Delivered!</span>
				@endif
			</td>
		</tr>
	</table>
	@if (Auth::check())
		@if (Auth::user()->is_admin)
			<a class="btn btn-sm" href="{{{ action('OrdersController@index') }}}">Back to Order Index</a>
		@else
			<a class="btn btn-sm" href="{{{ action('UsersController@show', $order->user_id) }}}">My Account Profile</a>
		@endif
	@endif
@stop