require('@fortawesome/fontawesome-free/js/all.js');

try {
	window.Popper = require('popper.js').default;
	window.$ = window.jQuery = require('jquery');

	require('bootstrap');
} catch (e) {}

console.log('mint init()');
