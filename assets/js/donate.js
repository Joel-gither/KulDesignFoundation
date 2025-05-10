function makePayment() {
	FlutterwaveCheckout({
		public_key: 'FLWPUBK_TEST-7f15b1a744fbd0d5303a80c95dda3b47-X',
		tx_ref: 'kdyfo-48981487343MDI0NzMx',
		amount: 54600,
		currency: 'UGX',
		payment_options: 'card, mobilemoneyghana, ussd',
		redirect_url: 'success.html',
		meta: {
			consumer_id: 23,
			consumer_mac: '92a3-912ba-1192a',
		},
		customer: {
			email: 'joelmukasa45@gmail.com',
			phone_number: '0757847529',
			name: 'Uncle Joe',
		},
		customizations: {
			title: 'Donation',
			description: 'Payment for construction',
			logo: 'https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg',
		},
	});
}