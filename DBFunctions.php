<?php

require_once('DBConnection.php');

function getAllServers(){
	global $pdo;
	$query = $pdo->prepare('select * from servers');
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	return $results;
}

function getServerInfo($id){
	global $pdo;
	$query = $pdo->prepare('select * from servers where id=?');
	$query->execute(array($id));
	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	return $results;
}

function addServer($data){
	global $pdo;
	$query = $pdo->prepare('insert into servers set name=?, capacity=?, map=?;');
	$query->execute(array($data->name, $data->capacity, $data->map));
	return "success";
}