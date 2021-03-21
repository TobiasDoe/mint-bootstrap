try {
	const Popper = require('@popperjs/core');
	window.Popper = Popper;
	window.$ = window.jQuery = require('jquery');

	require('bootstrap');
} catch (e) {}
