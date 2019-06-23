

<?php
error_reporting(0);
include ("connection.php");

//error_reporting(0);
if($_GET['action']=="delete" && $_GET['Tid']=="1"){
	
	$id = $_GET['id'];
	$query = "DELETE FROM `owner` WHERE username='$id'";
	$result = mysqli_query($connect,$query);
	if($result){
		
		header("location:adminview.php");
		
		}
		else{
			header("location:yolo.php");}
	}

else if($_GET['action']=="delete" && $_GET['Tid']=="2"){
	
	$id = $_GET['id'];
	$query = "DELETE FROM `hostels` WHERE hostelid='$id'";
	$result = mysqli_query($connect,$query);
	if($result){
		
		header("location:adminview.php");
		
		}
		else{
			header("location:yolo.php");}
	}



?>

<html>
<head>

<link rel="stylesheet" href="css/bootstrap-select.min.css"  />
<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
 <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
<style>
.n1{
	width: 920px;
	
	text-align:center;
	}
</style>
</head>
<body>

<div class="container">
<div class="panel-header">
  <table width="100%" border="0" class="bg-primary">
    <tr>
    <td width="96%" class="bg-primary"><img src="adminimage/admin.jpg" height="25%" width="25%" alt=""  /></td>
    <td width="4%"><table width="179" border="0" align="left">
      <tr>
        <td><table width="179" border="0" align="left" cellpadding="0" cellspacing="0" class="bg-primary">
          <tr>
            <td bgcolor="#007EAD" class="bg-primary"><pre><?php
            session_start();
			echo $_SESSION['name'];
			?></pre></td>
            <td bgcolor="#007EAD" class="bg-primary">
        </td>
          </tr>
          <tr>
            <td><pre><a href="logout.php" class="btn  btn-primary"> Logout </a></pre></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<div class="btn-primary">
<div class="alert-info">
  <pre><a href="about.php" class="btn btn-primary"> About </a> <a href="gall.php" class="btn btn-primary"> News </a> <a href="#" class="btn btn-primary"> Info </a> <a href="#" class="btn btn-primary"> Products </a> <a href="home.php" class="btn btn-primary"> Home </a></pre>
</div>
</div>
<br />


<?php 
 include ("connection.php");
 
 $query = "SELECT username FROM `owner`";


$ress=mysqli_query($connect,$query);
$rowcount=mysqli_num_rows($ress);


if($rowcount>0){
	?>
<table class="table table-striped" >
<tr> <th>User Names</th> <th> No of Hostels</th> 
        </tr>
        <?php while($row = mysqli_fetch_array($ress))
	{ ?>
		
		<tr><td><?php echo $row['username'];?></td>
         <td><?php  $queryy = "SELECT count(*) as bajwa FROM `hostels` where username='$row[username]'"; 
		 $rest=mysqli_query($connect,$queryy);
		$myrows = mysqli_fetch_array($rest);
		echo $myrows['bajwa'];
		 //echo $rest;
		 
		 
		 ?></td
     
 ></tr>
		
		<?php } ?>
        <?php }?>
</table>


<?php  
include ("connection.php");

$query = "SELECT * FROM `owner`";

$ress=mysqli_query($connect,$query);
$rowcount=mysqli_num_rows($ress);

if($rowcount>0){
	



?>


<table class="table table-striped" >
<tr> <th>First Name</th> <th> Last Name </th> <th>Email</th> <th>User Name</th><th>Password</th><th>Mobile 1</th><th>Image</th> <th> Take Action </th>
        </tr>
        <?php while($row = mysqli_fetch_array($ress))
	{?>
		
		<tr><td><?php echo $row['first'];?></td>
          <td><?php echo $row['last'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['username'];?></td>
          <td><?php echo $row['password'];?></td>
          <td><?php echo $row['mobile'];?></td>
          <td><?php echo $row['image'];?></td>
         
         <td><div align="center"><a href="adminview.php?action=delete&amp;Tid=1&amp;
         id=<?php echo $row['username'];?>">Delete </div></td>
 </tr>
		
		<?php } ?>
        <?php }?>
</table>
<br>
<?php  
include ("connection.php");

$query = "SELECT * FROM `hostels`";

$ress=mysqli_query($connect,$query);
$rowcount=mysqli_num_rows($ress);

if($rowcount>0){


?>


<table class="table table-striped" style="size:auto;" >
<tr> <th>Hostel Id</th> <th> Hostel Name </th> <th>Desc</th> <th>Date</th><th>Price</th><th>City</th><th>Address</th><th>Owner Name</th> <th> Take Action </th>
        </tr>
        <?php while($row = mysqli_fetch_array($ress))
	{?>
		
		<tr><td><?php echo $row['hostelid'];?></td>
          <td><?php echo $row['hostelname'];?></td>
          <td><?php echo $row['desc'];?></td>
          <td><?php echo $row['date'];?></td>
          <td><?php echo $row['price'];?></td>
          
          <td><?php echo $row['City'];?></td>
          
          <td><?php echo $row['address'];?></td>
         <td><?php echo $row['username'];?></td>
         <td><div align="center"><a href="adminview.php?action=delete&amp;Tid=2&amp;
         id=<?php echo $row['hostelid'];?>" onClick="return confirm('Are u Sure to Delete');">Delete </div></td>
 </tr>
		
		<?php } ?>
        <?php }?>
</table>



</div>

</body>
</html>