

       <?php

require("connection.php");



$fname=$_POST['fname'];
$lname=$_POST['lname'];

$email=$_POST['email'];
$mobile1=$_POST['mobile'];

$image=$_FILES["image"]["name"];
//echo $image;
$password=$_POST['password'];
$cnicimage=$_FILES["cnicimage"]["name"];
$userr=$_POST['username'];

    session_start();
    $_SESSION['user']=$userr;
	
//echo "1";
//include("Upload.php");

$target_dir = "owner/";
$target_file = $target_dir.basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
exit;}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "GIFF" && $imageFileType != "JPG" && $imageFileType != "JPEG" && $imageFileType != "PNG"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
	exit;
}
if (file_exists($target_file)) {
 echo "Sorry, file already exists.";
    $uploadOk = 0;
exit;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	exit;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
   exit; }
}               



$target_dir = "cnic/";
$target_file = $target_dir.basename($_FILES["cnicimage"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($_FILES["cnicimage"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
exit;}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "GIFF" && $imageFileType != "JPG" && $imageFileType != "JPEG" && $imageFileType != "PNG"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
	exit;
}

if (file_exists($target_file)) {
 echo "Sorry, file already exists.";
    $uploadOk = 0;
exit;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	exit;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["cnicimage"]["tmp_name"], $target_file)) {
      // echo "The file ". basename( $_FILES["cnicimage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
   exit; }
}               

$query="INSERT INTO `owner`(`first`, `last`, `username`, `password`, `email`, `mobile`, `image`, `cnicimage`) VALUES ('$fname','$lname','$userr','$password','$email','$mobile1','$image','$cnicimage')";

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




