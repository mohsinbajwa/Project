<?php
//error_reporting(0);
$serverr = "localhost";
$userr = "root";
//$pwod = "Umar@pixels1";
$pwod = "";

$dbnamee = "homstel";

$connect = mysqli_connect("localhost","root","","homstel");
if(!$connect){
	echo("connection failed: " . mysqli_connect_error());
} else{
	
	echo("connected");
	}
    
