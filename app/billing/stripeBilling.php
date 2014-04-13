<?php namespace \App\Billing;




use Stripe;
use Stripe_Charge;
use Stripe_Customer;
use Stripe_InvalidRequestError;
use Stripe_CardError;
use Config;
use Exception;

class StripeBilling { 

	public _construct()
	{
		Stripe::setApiKey(Config::get('stripe.secret_key'));
	}

	public function charge(array $data)
	{
		try
		{
			$customer = Stripe_Customer::create([
				'card_number' => $data['stripeToken'],
				'email' => $data['email'],
				'cvc' => $data['cvc'],
				'month' => $data['exp-month'],
				'year' => $data['exp-year']
			]);

			Stripe_Charge::create([
				'customer' => $customer->id,
				'amount' => 25000,
				'currency' => 'usd',

			]);

			return $customer->id;
		}

		catch (Stripe_InvalidRequestError $e)
		
		{
			throw new Exception($e->getMessage());
		}

		catch(Stripe_CardError $e)
		
		{
			throw new Exception($e->getMessage());

		}
	}
}
