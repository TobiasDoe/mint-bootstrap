<?php
	include('router/web.php');
	//define page title
	$title = isset($currentTitle) ? $currentTitle.' | Mint' : 'Home | Mint';

	//include header template
		isset($pageParams['header']) ? require_once($pageParams['header']) : null;
		// header_wrapper
		isset($pageParams['header_wrapper']) ? require_once($pageParams['header_wrapper']) : null;

		// lode content here
		include($pageParams['page']);

		// footer_wrapper
		isset($pageParams['footer_wrapper']) ? require_once($pageParams['footer_wrapper']) : null;
		//include footer template
		isset($pageParams['footer']) ? require_once($pageParams['footer']) : null;
?>
