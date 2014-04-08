@extends('layouts.master')

@section('main-content')

		<h1>Show Login!</h1>
		<p>Form to Login!</p>
		<h3>Not a member yet?</h3>
		<p><a href="{{{ action('HomeController@showRegister') }}}">Click here to register!</p>

@stop