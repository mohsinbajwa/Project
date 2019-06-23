	
    <?php

require("nav.php");

?>
   <?php
error_reporting(0);
include ("connection.php");

//error_reporting(0);
if($_GET['action']=="delete" && $_GET['Tid']=="1"){
	
	$id = $_GET['id'];
	$query = "DELETE FROM `hostels` WHERE hostelid='$id'";
	$result = mysqli_query($connect,$query);
	if($result){
		
		header("location:hostelreview.php");
		
		}
		else{
			header("location:invalid.php");}
	}



?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Hostels
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Welcome
                            </li>
                                       
       
                            </div>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<?php  
include ("connection.php");
session_start();
$myhold=$_SESSION['user'];
$query = "SELECT * FROM `hostels` where username='$myhold'";

$ress=mysqli_query($connect,$query);
$rowcount=mysqli_num_rows($ress);

?>
			        <!-- Main content -->
			        <section class="content">
			        	<div class="row">
			        		<div class="col-md-12">
			        			<div class="box box-danger">
					                
					                <div class="box-body">
					                  	<table id="example1" class="table table-bordered table-striped">
						                    <thead>
						                      	<tr>
							                       
							                        <th class="text-center">Hostel Id</th>
							                        
                                                    <th>Hostel Name</th>
							                        <th style="width: 140px;">Date</th>
							                        <th>City</th>
							                        <th class="text-center">Address</th>
						                      	    <th class="text-center">Image</th>
						                      	
                                                    <th class="text-center">Action</th>
						                      	
                                                </tr>
						                    </thead>
					                    	<tbody>
					                    	
                                             </tr>
        <?php while($row = mysqli_fetch_array($ress))
	{?>
		
		<tr><td><?php echo $row['hostelid'];?></td>
          <td><?php echo $row['hostelname'];?></td>
          <td><?php echo $row['date'];?></td>
          <td><?php echo $row['city'];?></td>
          <td><?php echo $row['address'];?></td>
          <td><img src="<?php echo 'hostel/'.$row['image'];?>"  style="height:150px; width:145px;"></td>
         
         <td><div >
         <a href="hostelreview.php?action=delete&amp;Tid=1&amp;
         id=<?php echo $row['hostelid'];?>">Delete /<a href="hosteledit.php?action=edit&amp;Tid=2&amp;
         id=<?php echo $row['hostelid'];?>">  Edit </div></td>
 </tr>
		
		<?php } ?>
       

					                    	</tbody>
					                    </table>
					                </div>
					            </div>
			        		</div>
			        	</div>

			        </section><!-- /.content -->
			    </div><!-- /.content-wrapper -->
      			<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
     		
    	</div><!-- ./wrapper -->
     
  	</body>
</html>
	
			