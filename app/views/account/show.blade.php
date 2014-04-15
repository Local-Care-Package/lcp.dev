@extends('layouts.master')

@section('main-content')

		<h1>Good to see you again, {{{ Auth::user()->first_name }}}!</h1><hr>

		<div class="row">
			<div class="col-md-4">
					<h4 class="blue-text">User Account Information</h4>
					<p>
						<strong>{{{ $user->first_name }}} {{{ $user->last_name }}}</strong><br>
						{{{ $user->email }}}<br>
						{{{ $user->phone }}}<br>
					</p>
					<p>
						Package Sender Since:<br><em>{{{ $user->created_at->format('l, F jS, Y') }}}</em><br>
					</p>
					<p>	
						Profile Last Updated On:<br><em>{{{ $user->updated_at->format('l, F jS, Y') }}}</em><br>
					</p>
					<a href="{{{ action('UsersController@edit', $user->id) }}}" class="btn btn-sm">Edit Account Info</a>
			</div>
			<div class="col-md-4">
					<h4 class="blue-text">Billing Account Information</h4>
					<p>
						<strong>Billing Address:</strong><br>
						Name on Card<br>
						Address<br>
						City, State Zip<br>
					</p>
					<p>
						<strong>Card Information</strong><br>
						Name on Card<br>
						XXXX-XXXX-XXXX-0000<br>
						Expires 00/00<br>
					</p>
					<a href="" class="btn btn-sm">Edit Billing Info</a>
			</div>
			<div class="col-md-4">
				<h4 class="blue-text"></h4>
				<img src="/img/package.png">
			</div>
		</div><hr>

		<div class="row">
			<div class="col-md-12">
				@if (count($user->orders) < 1)
					<h3>You haven't sent a package yet!</h3>
					<span><a class="btn btn-sm" href="{{{ action('HomeController@showPackages') }}}">Send a package today!</a></span>
				@else
					<h3 class="blue-text">Package History</h3>
					<table class="table table-striped table-bordered table-index">
						<tr>
							<th>Date</th>
							<th>Order ID</th>
							<th>Package</th>
							<th>Price</th>
							<th>Status</th>
							<th></th>
						</tr>
						@foreach ($orders as $order)
						<tr>
							<td>{{ $order->created_at->format('l, F jS, Y') }}</td>
							<td>{{ $order->id }}</td>
							<td>{{ $order->packageType->description }}</td>
							<td>${{ $order->packageType->price }}</td>
							@if ($order->delivered_at == NULL && $order->packaged_at == NULL)
							<td><span class="blue-text"><i class="fa fa-tasks status-icon"></i><br>Procesing Order</span></td> 
							@endif
							@if ($order->delivered_at == NULL && $order->packaged_at != NULL)
							<td><span class="blue-text"><i class="fa fa-truck status-icon"></i><br>Ready For Delivery!</span></td>
							@endif
							@if ($order->delivered_at != NULL && $order->packaged_at != NULL)
							<td><span class="blue-text"><i class="fa fa-check status-icon"></i><br>Delivered!</span></td>
							@endif
							<td style="text-align: center"><a href="{{{ action('OrdersController@show', $order->id) }}}" class="btn btn-sm">See Details</a></td>
						</tr>
						@endforeach
				@endif
				</table>
			</div>
		</div>

@stop