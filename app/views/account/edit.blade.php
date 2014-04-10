@extends('layouts.master')

@section('main-content')
		<div class="row">
			<div class="col-md-12">
				<h1>Edit Account Info </h1>	
			</div>
		</div>	
		<!-- START FORM -->
		<div class="row">
			<div class="col-md-6">
				{{ Form::open(array('action' => array('UsersController@update', 'method' => 'PUT', $userInfo->id), 'class' => 'form-horizontal')) }}
				<div class="form-group">
					{{ Form::label('first_name', 'First Name', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-9">
						{{ Form::text('first_name', $userInfo->first_name, array('class' => 'form-control', 'value' => '{{{ Auth::user()->first_name }}}')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('last_name', 'Last Name', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-9">
						{{ Form::text('last_name', $userInfo->last_name, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('email', 'Email', array('class' => 'col-sm-3 control-label' )) }}
					<div class="col-sm-9">
						{{ Form::text('email', $userInfo->email, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('phone', 'Phone Number', array('class' => 'col-sm-3 control-label')) }}
				<div class="col-sm-9">
					{{ Form::text('phone', $userInfo->phone, array('class' => 'form-control')) }}
				</div>
				</div>
				<div class="form-group">
					<div class="col-sm-9">
						{{ Form::hidden('password', 'password', array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-9">
						{{ Form::hidden('password_confirmation', 'password', array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						{{ Form::submit('Update Account', array('class' => 'btn btn-sm'))}}
					</div>
				</div>

				{{ Form::close() }}
			</div>
		</div>
		<!-- END FORM -->

@stop