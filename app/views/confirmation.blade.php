@extends('layouts.master')

@section('main-content')

		<h1>Show Order Confirmation!</h1>

		

		@if (Session::has('flash_message'))
			<div class="flash_message" id='confirm'>
				{{ Session::get('flash_message') }}
			</div>
		@endif
		

@stop