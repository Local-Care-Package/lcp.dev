(function() {

	var StripeBilling = {
		console.log('hit');
		init: function() {
			console.log('hit');
			this.form = $('#billing-form');
			this.submitButton = this.form.find('input[type=submit]');
			this.submitButtonValue = this.submitButtonVal();

			var stripeKey = $('meta[name="publishable-key"]').attr('content');
			Stripe.setPublishableKey(stripeKey);
			console.log('hit');

			this.bindEvents();
		}, 

		bindEvents: function() {
			this.form.on('submit', $.proxy(this.sendToken, this));,
		},

		sendToken: function() {
			this.submitButton.val('One Moment').prop('disabled', true);

			Stripe.createToken(this.form, $.proxy(this.stripeResponseHandler, this));

			event.preventDefault();
		},

		stripeResponseHandler: function(status, response) {

			if (response.error) {
				this.form.find('.payment-errors').show().text(response.error.message);
				return this.submitButton.prop('disabled', false).val(this.submitButtonValue);
			}


			$('<input>', {
				type: 'hidden',
				name: 'stripeToken',
				value: response.id

			}).appendTo(this.form);

			this.form[0].submit();



		}
	};

	StripeBilling.init();
})();


