@extends('layouts.master')

@section('main-content')
	<h1>New Order</h1><hr>
	{{ Form::open(array('action' => 'OrdersController@store', 'class' => 'form-horizontal')) }}
	<div class="form-group">
		{{ Form::label('recipient_name', 'Recipient Name', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('recipient_name', null, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('street', 'Recipient Street', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('street', null, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('city', 'Recipient City', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('city', null, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('state', 'Recipient State', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('state', null, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('zip', 'Recipient Zip', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('zip', null, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('gift_message', 'Gift Mesage', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('gift_message', null, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			{{ Form::label('package_type_id', 'Standard Package – $25.00') }}
				{{ Form::radio('package_type_id', '1', array('class' => 'form-control', 'required'=>'required')) }}<br>
			{{ Form::label('package_type_id', 'Premium Package - $45.00') }}
				{{ Form::radio('package_type_id', '2', array('class' => 'form-control', 'required'=>'required')) }}<br>
			{{ Form::label('package_type_id', 'Grand Package – $65.00') }}
				{{ Form::radio('package_type_id', '3', array('class' => 'form-control', 'required'=>'required')) }}<br>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			{{ Form::submit('Place Order', array('class' => 'btn btn-sm')) }}
		</div>
	</div>
	{{ Form::close() }}

@stop