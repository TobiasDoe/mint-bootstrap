try {
	window.Popper = require('popper.js').default;
	window.$ = window.jQuery = require('jquery');

	require('bootstrap');
} catch (e) {}

// window.Fortawesome = require('@fortawesome/fontawesome-free/js/all');

// jQuery should work here xD

console.log('mint init()');
