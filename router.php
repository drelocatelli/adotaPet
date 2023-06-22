<?php

$dir[1] = array('\\', 'C:/');
$dir[2] = array('/', 'C://');
$dir = str_replace($dir[1], $dir[2], getcwd());

$url = (isset($_GET['url'])) ? $_GET['url'] : 'home.php';
$url = array_filter(explode('/', $url));
$file = $url[0] . '.php';

if (is_file($file)) {
	if ($_GET) {
		$url = explode('/', $_GET['url']);
		if (isset($url)) {
			require_once $url[0] . '.php';

		}
	}
	require_once $file;
} else {
	if (!strpos($url, 'admin')) { // Added opening brace here

	} else {
		header("Location: 404.php");
	}
}

?>