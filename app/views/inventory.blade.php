@extends('layouts.admin-master')

@section('main-content')

<h1>Inventory Page</h1>
<p>The intent of this page is the following</p>
<ul>
	<li>Provide a running list of current inventory levels</li>
	<li>Automatically update inventory based on delivered packages and contents</li>
	<li>Provide user inputs for inventory changes (i.e. new inventory and loss and addition)</li>
	<li>Graphical representation of delta between inventory required to fill all orders and availible inveontory</li>
	<li>Allow for creation of new packages, inventory items, and linking of inventory items to packges</li>
</ul>

@stop