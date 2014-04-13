@extends('layouts.master')

@section('main-content')
<h1>Can't remember your password? <small>No problem! We'll help with that.</small></h1>

<form class="form-horizontal" action="{{ action('RemindersController@postRemind') }}" method="POST">
	<div class="form-group">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="col-md-6">
			<div class="col-sm-3">
	    		<label for="email" class="control-label">Email Address:</label>
	    	</div>
    		<div class="col-sm-9">
    			<input type="email" name="email" id="email" class="form-control"><br>
    		</div>
    		<div class="col-sm-offset-3 col-sm-9">
    			<input type="submit" class="btn btn-sm" value="Send Password Reset Email">
    		</div>
    	</div>
    </div>
</form>
@stop