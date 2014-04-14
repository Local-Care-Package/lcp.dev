@extends('layouts.master')

@section('main-content')
	<h1>Edit Order</h1><hr>
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
		{{ Form::label('packageType', 'Package Type', array('class' => 'col-sm-3 control-label')) }}
		<div class="col-sm-9">
			{{ Form::select('package_type_id', ['1'=>'Package Type 1','2'=>'Package Type 2','3'=>'Package Type 3'], array('class' => 'form-control', 'required'=>'required')) }}
		</div>
	</div>
	{{ Form::submit('Submit') }}
	{{ Form::close() }}


@stop