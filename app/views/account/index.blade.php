@extends('layouts.admin-master')

@section('header')
	<div class="row">
		<div class="container">

			<ul>
				<h1>Customer Index</h1><hr>
				<li class="admin-action"><a class="sort-orders btn btn-sm" href="?show=all">All Customers</a></li>
				{{ Form::open(array('action' => array('UsersController@index'), 'method' => 'GET', 'class' => 'form-inline')) }}
                <label for="search">Search: </label>
                {{ Form::text('search', null, array('class' => 'form-control input-sm'))}}      
                {{ Form::submit('Go', array('class' => 'btn btn-sm'))}}
                {{ Form::close() }}
			</ul>
		</div>
	<div>
@stop

@section('main-content')
	<div class="row">
		<div class="container">
			<div class="col-md-10 col-sm-10">
			<table class="table table-bordered table-striped table-responsive table-index">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Member Since</th>
					<th></th>
					<th></th>
				</tr>
		    	@foreach ($users as $user)
		    	@if ($user->is_admin != true)
		    	<tr>
		    		<td>{{{ $user->id }}}</td>
	    			<td>{{{ $user->last_name }}}, {{{ $user->first_name }}}</td>
	    			<td>{{{ $user->created_at->format('l, F jS, Y') }}}</td>
					<td style="text-align: center"><a href="{{{ action('UsersController@show', $user->id) }}}" class="btn btn-sm">Details</a></td>
					<td style="text-align: center"><a href="{{{ action('UsersController@edit', $user->id) }}}"><i class="fa fa-pencil-square-o blue-text status-icon-sm"></i></a></td>	
		    	</tr>
		    	@endif
		    	@endforeach
			</table>
			<tr>{{ $users->links(); }}</tr>
			</div>
		</div>
	</div>
@stop
