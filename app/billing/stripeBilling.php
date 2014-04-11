<?php namespace \app\billing;

use Stripe;
use Stripe_Charge;
use Stripe_Customer;
use Stripe_InvalidRequestError;
use Stripe_CardError;
use Config;
use Exception;

class stripeBilling implements billingInterface { 

	public _construct()
	{
		Stripe::setApiKey(Config::get('stripe.secret_key'));
	}

	public function charge(array $data)
	{
		try
		{
			$customer = Stripe_Customer::create([
				'number' => $date['stripeToken'],
				'description' => $data['email'],
				'cvc' => $data['cvc'],
				'exp_month' => $data['exp-month'],
				'exp_year' => $data['exp-year']
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
