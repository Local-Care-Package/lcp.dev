@extends('layouts.master')

@section('main-content')

	<div class="row">
			<div class="col-md-12">
				<h1>Show Checkout!</h1>	
			</div>
		</div>	
		<!-- START FORM -->
		<div class="row">
		
		<div class="col-md-6">
				<div class="row">
				{{ Form::open(array('id' => 'billing-form', 'class' => 'form-horizontal' )) }}

				<div class="form-group">
					{{ Form::label('card_number', 'Credit Card Number', array('class' => 'col-sm-3 control-label' )) }}
					<div class="col-sm-9">
						<input type = "text" data-stripe = "number">
					</div>
				</div>
			</div>
		</div>
			<div class="row">		
				<div class="form-group">
					<div class="col-sm-9">
						{{ Form::label('cvc', 'CVC', 'Security Code', array('class' => 'col-sm-3 control-label')) }}
						<input type = "text" data-stripe = "cvc">
					</div>
				</div>
		<div class="row">		
				<div class="form-group">
					{{ Form::label('month', 'Expiration Month', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-9">
						{{ Form::selectMonth(null, null, ['data-stripe' => 'exp-month']) }}
					</div>
				</div>
		</div>
		<div class="row">
				<div class="form-group">
					{{ Form::label('year', 'Expiration Year', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-9">
						{{ Form::selectYear(null, date('Y'), date('Y') + 10, null, ['data-stripe' => 'exp-year']) }}
					</div>
				</div>
		</div>
		<div class="row">

				<div class="form-group">
					{{ Form::label('first_name', 'First Name', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-9">
						{{ Form::text('first_name', null, array('class' => 'form-control')) }}
					</div>
				</div>

		</div>
		<div class="row">

				<div class="form-group">
					{{ Form::label('last_name', 'Last Name', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-9">
						{{ Form::text('last_name', null, array('class' => 'form-control')) }}
					</div>
				</div>

		<div class="form-group">
					{{ Form::label('email', 'Email', array('class' => 'col-sm-3 control-label' )) }}
					<div class="col-sm-9">
						{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'ilovelcp@lcp.com')) }}
					</div>
		</div>

				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						{{ Form::submit('Buy Now!', array('class' => 'btn btn-sm')) }}
					</div>
				</div>
		</div>
				<div class="payment-errors">

				{{ Form::close() }}
			</div>
		</div>
	</div> 
		<!-- END FORM -->

		<script src="/js/checkout.js"></script>

@stop

