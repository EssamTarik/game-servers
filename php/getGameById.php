<?php

require_once('config.php');
require_once('DBConnection.php');
require_once('DBFunctions.php');
require_once('functions.php');

$gameInfo = findGameById($_GET['id']);

if($gameInfo != false){
	$gameServers =  getGameServers($gameInfo['id']);
	writeJson(array('info' => $gameInfo, 'servers' => $gameServers));
}else{
	writeJson(array('error' => 'game not found'));
}

//should add get by game id