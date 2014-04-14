@extends('layouts.admin-master')

@section('header')
	<div class="row">
		<div class="container">
			<ul>
				<h1>{{{ $user->first_name }}} {{{ $user->last_name }}}</h1>
				<li class="admin-action"><a class="blue-text" href="{{{ action('UsersController@index') }}}"> Back to All Customers</a></li><hr>
			</ul>
		</div>
	<div>
@stop

@section('main-content')		
	<div class="container">	
		<div class="row">
			<div class="col-md-10">
					<!-- START FORM -->
				<div class="row">
					<div class="col-md-6">
						{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
						<div class="form-group">
							{{ Form::label('first_name', 'First Name', array('class' => 'col-sm-3 control-label')) }}
							<div class="col-sm-9">
								{{ Form::text('first_name', null, array('class' => 'form-control', 'value' => '{{{ Auth::user()->first_name }}}')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('last_name', 'Last Name', array('class' => 'col-sm-3 control-label')) }}
							<div class="col-sm-9">
								{{ Form::text('last_name', null, array('class' => 'form-control')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('email', 'Email', array('class' => 'col-sm-3 control-label' )) }}
							<div class="col-sm-9">
								{{ Form::text('email', null, array('class' => 'form-control')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('phone', 'Phone Number', array('class' => 'col-sm-3 control-label')) }}
						<div class="col-sm-9">
							{{ Form::text('phone', null, array('class' => 'form-control')) }}
						</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								{{ Form::submit('Update Account', array('class' => 'btn btn-sm'))}}
								<span><a class="btn btn-sm btn-danger" id="btnDeleteUser" href="{{{ action('UsersController@destroy', $user->id) }}}">Delete Account</a></span>
							</div>
						</div>

						{{ Form::close() }}

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								{{ Form::model($user, array('action' => array('UsersController@destroy', $user->id), 'method' => 'DELETE', 'id' => 'formDeleteUser')) }}
		            			{{ Form::close() }}
		            		</div>
		            	</div>
					</div>
				</div>
				<!-- END FORM -->
			</div>
		</div>
	</div>
@stop