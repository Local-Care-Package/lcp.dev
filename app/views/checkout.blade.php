@extends('layouts.master')

@section('main-content')

	<div class="row">
			<div class="col-md-12">
				<h1>Time to Checkout!</h1>	
			</div>
		</div>	
	
<form action="" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_VlCCHDzP5R9iEC4JrMy9lQnc"
    data-amount="2500"
    data-name="Local Care Package"
    data-description="Package #1 ($25.00)"
    data-image="img/lcp_background.jpg">
  </script>
</form>



 <script type="text/javascript">
  // This identifies your website in the createToken call below
  Stripe.setPublishableKey('pk_test_VlCCHDzP5R9iEC4JrMy9lQnc');
  // ...
 </script>






		<!-- END FORM -->



@stop

