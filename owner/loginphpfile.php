<?php
require("connection.php");

$name=$_GET['username'];
$pwd=$_GET['password'];


try{
$query = "SELECT * FROM `owner` WHERE username='$name' AND password='$pwd'";

$ress=mysqli_query($connect,$query);
$rowcount=mysqli_num_rows($ress);
//echo($rowcount);

if($rowcount>0){
	session_start();
    $_SESSION['user']=$name;
 	header("location:dashboard.php");
	exit;
	}
	else{
	//echo "bye";
header("location:invalid.php");
mysqli_close($connect);
exit;
}
}catch (MySQLDuplicateKeyException $e) {
    // duplicate entry exception
    $e->getMessage();
	exit;
}
catch (MySQLException $e) {
    // other mysql exception (not duplicate key entry)
    $e->getMessage();
exit;
}
catch (Exception $e) {
    // not a MySQL exception
    $e->getMessage();

exit;}


