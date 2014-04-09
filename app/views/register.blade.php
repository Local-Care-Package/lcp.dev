@extends('layouts.master')

@section('main-content')
		<div class="row">
			<div class="col-md-12">
				<h1>Don't have an account with us? <small>Sign up today!</small></h1>	
			</div>
		</div>	
		<!-- START FORM -->
		<div class="row">
			<div class="col-md-6">
				{{ Form::open(array('class' => 'form-horizontal')) }}
				<div class="form-group">
					{{ Form::label('first_name', 'First Name', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-9">
						{{ Form::text('first_name', null, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('last_name', 'Last Name', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-9">
						{{ Form::text('last_name', null, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('email', 'Email', array('class' => 'col-sm-3 control-label')) }}
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
					{{ Form::label('password', 'Password', array('class' => 'col-sm-3 control-label')) }}
					<div class="col-sm-9">
						{{ Form::password('password', array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						{{ Form::submit('Create Account', array('class' => 'btn btn-sm'))}}
					</div>
				</div>

				{{ Form::close() }}
			</div>
		</div>
		<!-- END FORM -->

@stop