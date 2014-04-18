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
	<div class="row">
		<div class="col-md-10 centered">
		<h1><i class="fa fa-cogs"></i> This page is still being worked on <i class="fa fa-cogs"></i></h1>
	</div>
	</div>
	<div class="row">
		<div class="col-md-10 centered">
		<h3>Admin Dashboard</h3>
			<p><em>The intent of this page is the following:</em></p>
			<ul>
			  <li>Provide visualized data with d3.js and chart.js</li>
			  <li>Data visualized would include sales information, page views, account logins, orders placed, etc.</li>
			  <li>Highlight top customers for potential reward system</li>
			  <li>Have running "TO-DO" list or admin message board</li>
			  <li>Show or link to Google calendar</li>
			</ul>
		</div>
	</div>
@stop