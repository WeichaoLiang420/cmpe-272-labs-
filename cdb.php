<?php
/*
function login(){

// server info
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'myDB';

// connect to the database
$mysqli = new mysqli($server, $username, $password, $db);

//show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);
}
*/



$server = 'localhost';
$username = 'cmpe272wei';
$password = 'cmpe272af!';
$database = 'cmpe';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}







?>