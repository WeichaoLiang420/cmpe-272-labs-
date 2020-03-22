<?php
$servername = "mydb272.cupuratwyho7.us-west-1.rds.amazonaws.com:3306";
$username = "admin";
$password = "12345678";
$dbname = "myDB";
//create connection
$mysqli = new mysqli($servername, $username, $password,$dbname);
// check connection 
/*if ($mysqli->connect_error)
 {   
     die("sorry : " . $mysqli->connect_error);
    }else{
        echo "thanks for you register ";
    }
/*

$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE){
    echo "DATABESE SUCCESSFULLY";
}else {
    echo "Error creating database: " . $conn->error;
}
*/

/*
$table= " CREATE TABLE GuestInfo(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    home_address VARCHAR(30) NOT NULL,
    home_phone VARCHAR(30) NOT NULL,
    cell_phone VARCHAR(30) NOT NULL
)";

if ($conn->query($table) === TRUE){

    echo "Table successully";
}
else{
    echo "error".$conn->error;
}
*/


/*
$record = "INSERT INTO MyGuests (username, pwd)
VALUES ('admin','124')";

if ($conn->query($record) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $record . "<br>" . $conn->error;
}

function CloseCon($conn)
{
    $conn -> close();
}*/
?>