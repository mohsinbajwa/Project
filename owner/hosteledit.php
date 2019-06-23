<?php

require("nav.php");

?>

<?php
include("connection.php");
if($_GET['action']=="edit" && $_GET['Tid']=="2"){
	
	$id = $_GET['id'];
$query = "SELECT * FROM `hostels` where hostelid='$id'";

$ress=mysqli_query($connect,$query);
$rowcount=mysqli_num_rows($ress);
	
	
	?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Modify Hostel
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Edit
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
	<?php while($row = mysqli_fetch_array($ress)){?>
                        <form action="edithostelphp.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Hostel Id(must be unique)</label>
                          <input type="number"  readonly required name="hostelid" id="hostelid" class="form-control" 
                          value="<?php echo $row['hostelid'];?>">
                            </div>

                            <div class="form-group">
                                <label>Hostel Name</label>
                                <input type="text"  required name="hostelname" id="hostelname" class="form-control" value="<?php echo $row['hostelname'];?>">
                            </div>

                             <div class="form-group">
                                <label> Hostel Description</label>
<?php
   echo "<textarea class='form-control' required rows='3' name='desc' wrap='physical'>" . $row['desc'] . "</textarea>";

?>
                            </div>
 <div class="form-group">
                                <label>No of rooms</label>
                              
            <input type="number" name="room"  required id="room" class="form-control" value="<?php echo $row['rooms'];?>" >  
                            
                            </div>

                             <div class="form-group">
                                <label>Date</label>
<input  type="date" value="<?php echo $row['date'];?>" required class="form-control" name="date" id="date" >
           
                            </div>
                            
                             <div class="form-group">
                                <label>Approximate Price Per Person</label>
<input  type="number" value="<?php echo $row['price'];?>" class="form-control"  required name="price" id="price" >
           
                            </div>
                            
                            
                            <div class="form-group">
                                <label> previous Image</label>
                                <input name="images"  required id="images" type="text" value="<?php echo $row['image'];?>">
                            </div>
                            
                              <div class="form-group">
                                <label> new Image </label>
                                <input name="image"  required id="image" type="file" value="<?php echo $row['image'];?>" >
                            </div>

                           

                            <div class="form-group">
                                <label>City</label>
                                <select name="city"  required id="city" class="form-control" >
                                    <?php if( $row['city']=="Islamabad"){?>
                                    <option  selected>Islamabad</option>
                                    <option>Lahore</option> <?php }
                                    else{?>
                                    <option  selected>Lahore</option>
                                    <option>Islamabad</option> <?php } ?>
                                    
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Address</label>
                              
            <input type="text"  value="<?php echo $row['address'];?> " name="area"  required id="area" class="form-control" >  
                            
                            </div>
                            
                         
             <span class="input-group-btn"><button class="btn btn-default" type="submit">Update</button></span>
                            </div>

                        </form>
<?php }} ?>

<script>

function funct1(){
	
var var1=document.getElementById("name").value;
	alert(var1);
	
}
</script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
