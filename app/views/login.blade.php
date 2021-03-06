@extends('layouts.master')

@section('main-content')
	<div class="container">
		<h1>Returning customer? <small>Sign in!</small></h1><hr>

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
						<h4>Don't have an account with us yet? <small>Click <a href="{{{ action('UsersController@create') }}}">here</a> to make one!</h4>
						<p>Forgot your password? Click <a href="{{ action('RemindersController@getRemind') }}">here</a> to reset it.</p>
						{{ Form::submit('Login', array('class' => 'btn btn-sm'))}}
					</div>
				</div>
				{{ Form::close() }}
			</div>
			<!-- END FORM -->
		<div class="col-md-6">
		</div>
	</div>
@stop