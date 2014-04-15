@extends('layouts.master')

@section('main-content')
	<h1>Confirm Details:</h1><hr>
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
				{{ $order->packageType->price}}
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
				<span class="blue-text"><i class="fa fa-check status-icon"></i><br>Delivered!<br>{{ $order->delivered_at }}</span>
				@endif
			</td>
		</tr>
	</table>

<form action="{{{homeController@buyCheckout}}}" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_VlCCHDzP5R9iEC4JrMy9lQnc"
    data-amount=" {{ $order->packageType->price * 100 }} "
    data-name="Local Care Package"
    data-description="{{ $order->packageType->description }}"
    data-image="img/lcp_background.jpg">
  </script>
</form>



 <script type="text/javascript">
  // This identifies your website in the createToken call below
  Stripe.setPublishableKey('pk_test_VlCCHDzP5R9iEC4JrMy9lQnc');
  // ...
 </script>

@stop