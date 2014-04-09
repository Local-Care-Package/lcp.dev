@extends('layouts.master')

@section('main-content')

		<h1>Good to see you again, {{{ Auth::user()->first_name }}}!</h1>

		<table class="table table-bordered">
			<tr>
				<td>Customer Name:</td>
				<td>{{{ Auth::user()->first_name }}} {{{ Auth::user()->last_name }}}</td>
			</tr>
			<tr>	
				<td>Email:</td>
				<td>{{{ Auth::user()->email }}}</td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td>{{{ Auth::user()->email }}}</td>
			</tr>
			<tr>
				<td>Member Since:</td>
				<td>{{{ Auth::user()->created_at->format('l, F jS, Y') }}}</td>
			</tr>
			<tr>
				<td>Last Profile Update: </td>
				<td>{{{ Auth::user()->updated_at->format('l, F jS, Y') }}}</td>
			</tr>
		</table>

@stop