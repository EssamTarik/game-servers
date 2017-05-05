<?php

require_once('config.php');
require_once('DBConnection.php');
require_once('DBFunctions.php');
require_once('functions.php');

$data = json_decode($_POST['json']);
$result = addServer($data);
writeJson($result);
