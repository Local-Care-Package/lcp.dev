@extends('layouts.admin-master')

@section('main-content')

{{ Form::open(array('action' => 'HomeController@sendMessage', 'class' => 'well col-sm-10', 'role'=>'form', 'method'=> 'post')) }}
  <div class="form-group">
    <h1>Send an SMS message</h1>
    <label for="phone">Customer Phone</label>
    <input type='phone' class="form-control" id="phone" name="phone" placeholder="##########" style="text-align:center" required="required")>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <input type="text" class="form-control" id="message" name="message" required="required">
  </div>
  <button type="submit" class="btn btn-default">Send Message</button>
{{ Form::close() }}
	
@if (Session::has('phone'))
	<div class="alert alert-info col-sm-10">
		<p>"{{ Session::get('message') }}" to {{ Session::get('phone') }} sent</p>
	</div>
@endif

@stop