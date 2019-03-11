<?php

	$site = $_SERVER['PHP_SELF'];
	$site = substr($site, 1);
	$query = isset($_GET['q']) ? $_GET['q'] : $site;
	// var_dump($query);
	switch (strtolower($query)) {
		case '':
		case '/':
		case 'index.php':
		case 'home':
			$currentSite = 'home';
			$currentTitle = 'Home';
			$loadPage = 'sites/home.php';
			break;

		default:
			$currentSite = '404';
			$currentTitle = '404';
			$loadPage = './404.php';
			break;
	}

?>
