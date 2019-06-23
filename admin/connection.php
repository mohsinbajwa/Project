<?php
error_reporting(0);
$serverr = "localhost";
$userr = "root";
$pwod = "";
$dbnamee = "homstel";

$connect = mysqli_connect($serverr,$userr,$pwod,$dbnamee);
if(!$connect){
	//echo("connection failed: " . mysqli_connect_error());
} else{
	
	//echo("connected");
	}
    
