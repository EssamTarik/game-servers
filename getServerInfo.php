<?php

require_once('config.php');
require_once('DBConnection.php');
require_once('DBFunctions.php');
require_once('functions.php');

if(!isset($_GET['id'])){
	writeJson(['error' => 'id not specified']);
	die();
}
writeJson(getServerInfo($_GET['id'])); 
