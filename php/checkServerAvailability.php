<?php

require_once('config.php');
require_once('DBConnection.php');
require_once('DBFunctions.php');
require_once('functions.php');

	$host = $_GET['url'];
	if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
	echo 'online';
	fclose($socket);
	} else {
	echo 'offline';
	}
?>