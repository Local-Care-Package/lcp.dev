@extends('layouts.master')

@section('main-content')
<h1>Reset Your Password</h1><hr>
<form class="form-horizontal" action="{{ action('RemindersController@postReset') }}" method="POST">
	<div class="form-group">
		<input type="hidden" name="token" value="{{ $token }}">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="col-md-6">
			<div class="col-sm-3">
	    		<label for="email" class="control-label">Email Address:</label>
	    	</div>
    		<div class="col-sm-9">
    			<input type="email" name="email" id="email" class="form-control"><br>
    		</div>
    		<div class="col-sm-3">
	    		<label for="password" class="control-label">New Password:</label>
	    	</div>
    		<div class="col-sm-9">
    			<input type="password" name="password" id="password" class="form-control"><br>
    		</div>
    		<div class="col-sm-3">
	    		<label for="password_confirmation" class="control-label">Confirm New Password:</label>
	    	</div>
    		<div class="col-sm-9">
    			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control"><br>
    		</div>
    		<div class="col-sm-offset-3 col-sm-9">
    			<input type="submit" class="btn btn-sm" value="Reset Password">
    		</div>
    	</div>
    </div>
</form>
@stop