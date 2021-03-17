<?php

	$site = $_SERVER['PHP_SELF'];
	$site = substr($site, 1);
	$query = isset($_GET['q']) ? $_GET['q'] : $site;
	// var_dump($query);

	$pageParams = [
		'page' => 'sites/home.html',
		'header' => 'meta/header.php',
		'header_wrapper' => 'layout/header_wrapper.php',
		'footer' => 'meta/footer.php',
		'footer_wrapper' => 'layout/footer_wrapper.php'
	];

	switch (strtolower($query)) {
		case '':
		case '/':
		case 'index.php':
		case 'home':
			$currentSite = 'home';
			$currentTitle = 'Home';
			$pageParams['page'] = 'sites/home.php';
			break;

		default:
			http_response_code(404);
			$currentSite = '404';
			$currentTitle = '404';
			$pageParams['page'] = './404.php';
			$pageParams['header'] = null;
			$pageParams['header_wrapper'] = null;
			$pageParams['footer'] = null;
			$pageParams['footer_wrapper'] = null;
			break;
	}
?>
