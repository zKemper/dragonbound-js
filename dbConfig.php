<?php
error_reporting(0);
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "game";

	$server = "localhost";
	$bd = "game";
	$user = "root";
	$pass = "";
//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die( $db->connect_error);
}
try{
		
		$db_con = new PDO("mysql:host={$server};dbname={$bd}",$user,$pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>



