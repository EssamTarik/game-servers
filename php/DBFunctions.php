<?php

require_once('DBConnection.php');

function getAllServers(){
	global $pdo;
	$query = $pdo->prepare('select * from servers');
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	return $results;
}

function getGameServers($id){
	global $pdo;
	$query = $pdo->prepare('select * from servers where game=?');
	$query->execute(array($id));
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
	$query = $pdo->prepare('insert into servers set name=?, game=?, capacity=?, map=?;');
	$query->execute(array($data->name, $data->game, $data->capacity, $data->map));
	return "success";
}

function findGameByName($name){
	global $pdo;
	$query = $pdo->prepare("select * from games where name like ?;");
	$query->execute(array('%'.$name.'%'));
	try{
		$results = $query->fetchAll(PDO::FETCH_ASSOC)[0];
	}catch(Exception $e){
		$results = false;
	}
	return $results;
}

function findGameById($id){
	global $pdo;
	$query = $pdo->prepare("select * from games where id = ?;");
	$query->execute(array($id));
	try{
		$results = $query->fetchAll(PDO::FETCH_ASSOC)[0];
	}catch(Exception $e){
		$results = false;
	}
	return $results;
}