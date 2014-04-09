@extends('layouts.master')

@section('main-content')

		<h1>Returning customer? <small>Sign in!</small></h1>
				<hr>

			<div class="col-md-6">
			<!-- START FORM -->
				{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-horizontal')) }}
				<div class="form-group">
					{{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
					<div class="col-sm-10">
						{{ Form::text('email', null, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}
					<div class="col-sm-10">
						{{ Form::password('password', array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						{{ Form::submit('Login', array('class' => 'btn btn-sm'))}}
					</div>
				</div>

				{{ Form::close() }}
			</div>
			<!-- END FORM -->
		
		<div class="col-md-6">
			<h3>Not a member yet?</h3>
			<p><a href="{{{ action('HomeController@showRegister') }}}">Click here to register!</a></p>
		</div>
@stop