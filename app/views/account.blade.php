@extends('layouts.master')

@section('main-content')

		<h1>Good to see you again, {{{ Auth::user()->first_name }}}!</h1>

		<h3>Care packages you've sent:</h3>
		<table class="table table-bordered">
			<tr>
				<th>Customer Name:</th>
				<td>{{{ Auth::user()->first_name }}} {{{ Auth::user()->last_name }}}</td>
			</tr>
			<tr>	
				<th>Email:</th>
				<td>{{{ Auth::user()->email }}}</td>
			</tr>
			<tr>
				<th>Phone Number:</th>
				<td>{{{ Auth::user()->email }}}</td>
			</tr>
			<tr>
				<th>Member Since:</th>
				<td>{{{ Auth::user()->created_at->format('l, F jS, Y') }}}</td>
			</tr>
			<tr>
				<th>Last Profile Update: </th>
				<td>{{{ Auth::user()->updated_at->format('l, F jS, Y') }}}</td>
			</tr>
		</table>

@stop