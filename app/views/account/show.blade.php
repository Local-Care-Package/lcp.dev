@extends('layouts.master')

@section('main-content')

		<h1>Good to see you again, {{{ Auth::user()->first_name }}}!</h1>

		<div class="row">
			<div class="col-md-3">
				<h3>Account Info:</h3>
				<div>
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
				<span><a href="{{{ action('UsersController@edit', $user->id) }}}" class="btn btn-sm">Edit Account Info</a></span>
			</div>
			<div class="col-md-9">
				@if (count($user->orders) < 1)
					<h3>You haven't sent a package yet!</h3>
					<span><a class="btn btn-sm" href="{{{ action('HomeController@showPackages') }}}">Send a package today!</a></span>
				@else
					<h3>Care packages you've sent:</h3>
					<table class="table table-striped">
						<tr>
							<th>Date</th>
							<th>Order ID</th>
							<th>Package</th>
							<th>Price</th>
							<th>Status</th>
						</tr>
						@foreach ($orders as $order)
							@foreach ($order->packages as $package)
						<tr>
							<td>{{ $order->created_at->format('l, F jS, Y') }}</td>
							<td>{{ $order->id }}</td>
							<td>{{ $package->packageType->description }}</td>
							<td>{{ $package->packageType->price }}</td>
							@if ($package->delivered_on == NULL)
								<td>In Package</td> 
							@else 
							<td>{{ $package->delivered_on }} </td>
							@endif
						</tr>
							@endforeach
						@endforeach
				@endif
				</table>
			</div>
		</div>

@stop