<?php

	$site = $_SERVER['PHP_SELF'];
	$site = substr($site, 1);
	$query = isset($_GET['q']) ? $_GET['q'] : $site;
	// var_dump($query);
	switch (strtolower($query)) {
		case '':
		case '/':
		case 'index.php':
			$currentSite = 'home';
			$currentTitle = 'Home';
			$loadPage = 'sites/home.php';
			break;

		case 'gewinnspiel': // after "/" -> "url.at/custom-path"
			$currentSite = 'gewinnspiel';
			$currentTitle = 'Gewinnspiel';
			$loadPage = 'sites/gewinnspiel.php';
			break;

		case 'mein-fitnessland': // after "/" -> "url.at/custom-path"
			$currentSite = 'mein-fitnessland';
			$currentTitle = 'Mein Fitnessland';
			$loadPage = 'sites/mein-fitnessland.php';
			break;

		case 'mitgliedschaft': // after "/" -> "url.at/custom-path"
			$currentSite = 'mitgliedschaft';
			$currentTitle = 'Mitgliedschaft';
			$loadPage = 'sites/mitgliedschaft.php';
			break;

		case 'training': // after "/" -> "url.at/custom-path"
			$currentSite = 'training';
			$currentTitle = 'Training';
			$loadPage = 'sites/training.php';
			break;

		case 'kontakt': // after "/" -> "url.at/custom-path"
			$currentSite = 'kontakt';
			$currentTitle = 'Kontakt';
			$loadPage = 'sites/kontakt.php';
			break;

		case 'impressum': // after "/" -> "url.at/custom-path"
			$currentSite = 'impressum';
			$currentTitle = 'Impressum';
			$loadPage = 'sites/impressum.php';
			break;
		case 'datenschutz': // after "/" -> "url.at/custom-path"
			$currentSite = 'datenschutz';
			$currentTitle = 'Datenschutz';
			$loadPage = 'sites/datenschutz.php';
			break;
		case 'karriere-bei-fitnessland': // after "/" -> "url.at/custom-path"
			$currentSite = 'karriere-bei-fitnessland';
			$currentTitle = 'Karriere bei Fitnessland';
			$loadPage = 'sites/karriere-bei-fitnessland.php';
			break;

		default:
			$currentSite = '404';
			$currentTitle = '404';
			$loadPage = './404.php';
			break;
	}

?>
