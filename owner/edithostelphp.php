

       <?php

require("connection.php");



$hostelid=$_POST['hostelid'];
$name=$_POST['hostelname'];

$desc=$_POST['desc'];
$date=$_POST['date'];
$price=$_POST['price'];

$image=$_FILES["image"]["name"];
$city=$_POST['city'];
$address=$_POST['address'];
$beds=$_POST['room'];


$target_dir = "hostel/";
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

$query="UPDATE `hostels` SET `hostelid`='$hostelid',`hostelname`='$name',`desc`='$desc',`rooms`='$beds',`date`='$date',`price`='$price',
`image`='$image',`city`='$city',`address`='$address' WHERE hostelid=$hostelid";

$myresult = mysqli_query($connect,$query);

if($myresult){
	header("location:dashboard.php");
	exit;
	}
	else{
	header("location:404.php");
	//echo("2");
		exit;
		
	}
?>




