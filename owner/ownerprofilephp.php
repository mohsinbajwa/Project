

       <?php

require("connection.php");



$fname=$_GET['fname'];
$lname=$_GET['lname'];

$email=$_GET['email'];
$mobile1=$_GET['mobile1'];

 
$userr=$_GET['username'];

   $query="UPDATE `owner` SET `first`='$fname',`last`='$lname',`username`='$userr',`email`='$email',`mobile`='$mobile1', WHERE username='$userr'";
   
$myresult = mysqli_query($connect,$query);

if($myresult){
	header("location:dashboard.php");
	
	exit;
	}
	else{
	header("location: 404.php");
	//echo("2");
		exit;
		
	}
?>




