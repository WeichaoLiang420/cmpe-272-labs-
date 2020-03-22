
<?php
require "head.php"
?>
<?php
	header("content-type:text/html;charset=utf-8");
    //session_start();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $home_address=$_POST['home_address'];
    $home_phone=$_POST['home_phone'];
    $cell_phone=$_POST['cell_phone'];
    include("mm.php");
			$query="insert into GuestInfo(first_name,last_name,email,home_address,home_phone,cell_phone) values('{$first_name}','{$last_name}','{$email}','{$home_address}','{$home_phone}','{$cell_phone}')";
 
			$mysqli->query($query);
 
			

	
?>
