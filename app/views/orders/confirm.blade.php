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

<!-- Disabled for web-demo -->
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

<!-- {{ Form::open(array('action' => 'OrdersController@makePayment', 'method'=>'post', 'id' => 'formConfirmAndPay'))}}
{{ Form::Submit('Confirm and Pay', array('class'=> 'btn', 'id' => 'btnConfirmPurchase'))}}
{{ Form::close()}} -->
@stop

@section('bottomscript')
<script>
  // $('#btnConfirmPurchase').click(function(e) {
  //   e.preventDefault();
  //   bootbox.confirm('This application is a web demo intended to showcase the development capabilities of our team.  To protect both our users and ourselves, We have decided to disable the credit card payment functionality to prevent undue credit card transactions, as we do not actively sell or deliver care packages.  If you would like to see full credit card functionality via the Stripe API, please contact one of our team members directly.', function(result) {
  //     if (result) {
  //       $('#formConfirmAndPay').submit();
  //     }
  //   });
  // });

  </script>
@stop