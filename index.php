<?php
	require('mix.php');

	include('router/web.php');
	//define page title
	$title = isset($currentTitle) ? $currentTitle.' | Fitnessland' : 'Home | Fresh Project';

	//include header template
	require_once('meta/header.php');

	// header_wrapper
	require_once('layout/header_wrapper.php');
	// lode content here
	include($loadPage);
	// footer_wrapper
	require_once('layout/footer_wrapper.php');

	//include footer template
	require_once('meta/footer.php');
?>
