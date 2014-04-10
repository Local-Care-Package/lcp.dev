<?php namespace lcp.dev\app\billing;

use Stripe;
use Stripe_Charge;
use Config;

class stripeBilling implements billingInterface { 

	public _construct()
	{
		Stripe::setApiKey(Config::get('stripe.secret_key'));
	}

	public function charge(array $data)
	{
		try
		{

			return Stripe_Charge::create([
				'amount' => 25000,
				'currency' => 'usd',
				'description' => $data['email'],
				'number' => $data['stripeToken'],
				'cvc' => $data['cvc'],
				'exp_month' => $data['exp-month'],
				'exp_year' => $data['exp-year']
			]);
		}

		catch(Stripe_CardError $e)
		{
			dd('card was declined');

		}
	}
