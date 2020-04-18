<?php
	session_start();

	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "ua";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "ua")
			$_SESSION['lang'] = "ua";
		else if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
	}

	require_once "languages/" . $_SESSION['lang'] . ".php";


	function url(){
	  return sprintf( "%s://%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME'] );
	}
?>