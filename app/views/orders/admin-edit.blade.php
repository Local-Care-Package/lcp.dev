@extends('layouts.admin-master')

@section('header')
	<div class="row">
		<div class="container">
			<ul>
				<h1>Order ID Number: {{{ $order->id }}}</h1>
				<li class="admin-action"><a class="blue-text" href="{{{ action('OrdersController@show', $order->id) }}}"> Back to All Orders</a></li><hr>
			</ul>
		</div>
	<div>
@stop

@section('main-content')		
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				{{ Form::model($order, array('action' => array('OrdersController@update', $order->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
				<div class="form-horizontal col-sm-10">
				<div class="form-group">
					{{ Form::label('recipient_name', 'Recipient Name', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{ Form::text('recipient_name', $order->recipient_name, array('class' => 'form-control', 'required'=>'required')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('street', 'Recipient Street', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{ Form::text('street', $order->street, array('class' => 'form-control', 'required'=>'required')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('city', 'Recipient City', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{ Form::text('city', $order->city, array('class' => 'form-control', 'required'=>'required')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('state', 'Recipient State', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{ Form::text('state', $order->state, array('class' => 'form-control', 'required'=>'required')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('zip', 'Recipient Zip', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{ Form::text('zip', $order->zip, array('class' => 'form-control', 'required'=>'required')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('gift_message', 'Gift Message', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{ Form::text('gift_message', $order->gift_message, array('class' => 'form-control', 'required'=>'required')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('packageType', 'Package Type', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{ $order->packageType->description }}
					</div>
				</div>
				@if ($order->packaged_at == NULL)
				<div class="form-group">
					{{ Form::label('packaged_at', 'Mark Packaged', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{Form::checkbox('packaged_at', 'packaged_at', array('class' => 'form-control'))}}
					</div>
				</div>
				@endif
				@if ($order->packaged_at != NULL && $order->delivered_at == NULL)
				<div class="form-group">
					{{ Form::label('packaged_at', 'Packaged Date', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{ $order->packaged_at }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('delivered_at', 'Mark Delivered', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{Form::checkbox('delivered_at', 'delivered_at', array('class' => 'form-control'))}}
					</div>
				</div>
				@endif
				@if ($order->packaged_at != NULL && $order->delivered_at != NUll)
				<div class="form-group">
					{{ Form::label('packaged_at', 'Date Packaged', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{ $order->packaged_at }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('delivered_at', 'Date Delivered', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-6">
						{{ $order->delivered_at }}
					</div>
				</div>
				@endif
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
					{{ Form::submit('Submit', array('class' => 'btn btn-sm')) }}
					</div>
				</div>
				</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop