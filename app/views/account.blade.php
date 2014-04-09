@extends('layouts.master')

@section('main-content')

		<h1>Good to see you again, {{{ Auth::user()->first_name }}}!</h1>

		<div class="row">
			<div class="col-md-3">
				<h3>Account Info:</h3>
				<div>
					<p>
						<strong>{{{ Auth::user()->first_name }}} {{{ Auth::user()->last_name }}}</strong><br>
						{{{ Auth::user()->email }}}<br>
						{{{ Auth::user()->phone }}}<br>
					</p>
					<p>
						Package Sender Since: <em>{{{ Auth::user()->created_at->format('l, F jS, Y') }}}</em><br>
					</p>
					<p>	
						Profile Last Updated On: <em>{{{ Auth::user()->updated_at->format('l, F jS, Y') }}}</em><br>
					</p>
				</div>
				<div>
					<p>
						<strong>Billing Address:</strong><br>
						Name on Card<br>
						Address<br>
						City, State Zip<br>
					</p>
					<p>
						<strong>Card Information:</strong><br>
						Name on Card<br>
						XXXX-XXXX-XXXX-0000<br>
						Expires 00/00<br>
					</p>
				</div>
				<span><a href="{{{ action('HomeController@showEditAccount') }}}" class="btn btn-sm">Edit Account Info</a></span>
			</div>
			<div class="col-md-9">
				<h3>Care packages you've sent:</h3>
				<table class="table table-striped">
					<tr>
						<th>Date</th>
						<th>Order ID</th>
						<th>Package</th>
						<th>Price</th>
						<th>Status</th>
					</tr>
					<!-- foreach (order as order) -->
					@foreach ($orders as $order)
					<tr>
						<td>$order->created_at->format('l, F jS, Y')</td>
						<td>$order->id</td>
						<td>$order->package->description</td>
						<td>$order->package->price</td>
						<td>$order->package->status</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>

@stop