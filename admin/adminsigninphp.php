

       <?php


	$func= $_GET['func']?$_GET['func']:$_POST['func'];
	
if($func=="insert"){
	

$serverr = "localhost";
$userr = "root";
$pwod = "";
$dbnamee = "homstel";

$connect = mysqli_connect($serverr,$userr,$pwod,$dbnamee);
if(!$connect){
	echo("connection failed: " . mysqli_connect_error());
} else{
	
	echo "connected";
	}

//echo("yala");
$name=$_GET['name'];
$pwd=$_GET['password'];

//$_SESSION['myemail']=$email;

//exit;
try{
$query = "SELECT * FROM `admin` WHERE username='$name' AND password='$pwd'";

$ress=mysqli_query($connect,$query);
$rowcount=mysqli_num_rows($ress);
//echo($rowcount);

if($rowcount>0){
	session_start();
$_SESSION['name']=$name;
	
	  echo("1"); 
	exit;
	}
	else{
		echo("2");
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

}

?>




