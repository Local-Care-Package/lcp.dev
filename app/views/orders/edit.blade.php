@extends('layouts.master')

@section('main-content')
	<h1>Edit Order</h1><hr>
	{{ Form::model($order, array('action' => array('OrdersController@update', $order->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
	<div class="form-group">
		{{ Form::label('recipient_name', 'Recipient Name', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('recipient_name', $order->recipient_name, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('street', 'Recipient Street', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('street', $order->street, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('city', 'Recipient City', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('city', $order->city, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('state', 'Recipient State', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('state', $order->state, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('zip', 'Recipient Zip', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('zip', $order->zip, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('gift_message', 'Gift Mesage', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::text('gift_message', $order->gift_message, array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('packageType', 'Package Type', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ $order->packageType->description }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('packed_at', 'Packed Date', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{Form::input('date', 'date', $order->packaged_at, ['class' => 'form-control')}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('delivered_at', 'Delivered Date', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{Form::input('date', 'date', $order->delivered_at, ['class' => 'form-control'])}}
		</div>
	</div>
	{{ Form::submit('Submit') }}
	{{ Form::close() }}


@stop