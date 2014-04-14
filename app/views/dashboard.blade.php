@extends('layouts.admin-master')

@section('header')
<!-- 		<h1>Welcome to your dashboard LCP admin!</h1><hr> -->
		<div class="row">
			<div class="col-sm-3 stat">
				<h3 class="blue-text">{{{ count($users) }}} customers<br>
				<h6 class="blue-text"><em>as of Today</em></h6></h3>
			</div>
			<div class="col-sm-3 stat">
				<h3 class="blue-text">{{{ count($newOrders) }}} new orders<br>
				<h6 class="blue-text"><em>as of Today</em></h6></h3>
			</div>
			<div class="col-sm-3 stat">
				<h3 class="blue-text">{{{ count($inPackage) }}} in package<br>
				<h6 class="blue-text"><em>as of Today</em></h6></h3>
			</div>
			<div class="col-sm-3 stat">
				<h3 class="blue-text">{{{ count($delivered) }}} delivered<br>
				<h6 class="blue-text"><em>as of Today</em></h6></h3>
			</div>
		<div>
@stop

@section('main-content')
@stop