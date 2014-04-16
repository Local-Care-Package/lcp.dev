@extends('layouts.master')

@section('main-content')
	<h1>Confirm Details:</h1><hr>
	<table class="table table-bordered">
		<tr>
			<th><h4>Recipient Information</h4></th>
			<th><h4>Package Contents</h4></th>
			<th><h4>Total Cost</h4></th>
		</tr>
		<tr>
			<td>
				{{ Session::get('recipient_name') }}<br>
				{{ Session::get('street') }}<br>
				{{ Session::get('city') }}, {{ Session::get('state') }} {{ Session::get('zip') }}<br>
			</td>
			<td>
				{{ Session::get('package_type_description') }}<br><hr>
				<strong>Personal Message</strong><br>
				{{ Session::get('gift_message') }}
			</td>
			<td style="text-align: left">
				{{ Session::get('package_type_price') }}
			</td>
		</tr>
	</table>

{{ Form::open(array('action' => 'OrdersController@makePayment', 'method'=>'post'))}}
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_VlCCHDzP5R9iEC4JrMy9lQnc"
    data-amount="{{ Session::get('package_type_price') * 100}}"
    data-name="Local Care Package"
    data-description="{{ Session::get('package_type_description') }}"
    data-image="/img/lcp_background.jpg">
  </script>
{{ Form::close()}}
@stop