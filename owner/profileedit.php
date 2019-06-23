<?php

require("nav.php");

?>
<?php

require("connection.php");

if($_GET['action']=="edit" && $_GET['Tid']=="2"){
$hold=$_GET['username'];
$query = "SELECT * FROM `owner` where username='$hold'";

$ress=mysqli_query($connect,$query);
$rowcount=mysqli_num_rows($ress);


?>
<br><br>
  <form action="ownerprofilephp.php" method="get">
<div class="container-fluid well span6">
	<div class="row-fluid">
        <div class="span2" >
		    <img src="https://secure.gravatar.com/avatar/de9b11d0f9c0569ba917393ed5e5b3ab?s=140&r=g&d=mm" class="img-circle">
        </div>
        <ul style="float:right;" class="dropdown-menu">
            <li><a href="#"><span class="icon-wrench"></span> Modify</a></li>
                   
                    <!--  <li><a href="#"><span class="icon-trash"></span> Delete</a></li> -->
                    
                </ul>

        <div class="span8"><?php while($row = mysqli_fetch_array($ress)){
			?>
            <!--
             <div class="form-group">
                                <label>Image</label>
                                <input type="text"  required name="hostelname" id="hostelname" class="form-control" value="">
                            </div>
                -->            
             <div class="form-group">
                                <label>User Name</label>
                                <input type="text" readonly  required name="username"  class="form-control" value="<?php echo $row['username'];?>">
                            </div>
           <div class="form-group">
                                <label>first name</label>
                          <input type="text"   required name="fname" class="form-control" 
                          value="<?php echo $row['first'];?>">
                            </div>
                             <div class="form-group">
                                <label>last Name</label>
                                <input type="text"  required name="lname"  class="form-control" value="<?php echo $row['last'];?>">
                            </div>
                             <div class="form-group">
                                <label>Email</label>
                                <input type="text"  required name="email" class="form-control" value="<?php echo $row['email'];?>">
                            </div>
                            
                             <div class="form-group">
                                <label>Mobile 1</label>
                                <input type="number"  required name="mobile1"  class="form-control" value="<?php echo $row['mobile'];?>">
                            </div>
                        
                            
                            
                </div><?php }} ?>
        
      
       <span class="input-group-btn"><button class="btn btn-default" type="submit">Update</button></span>
</div>
</div>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
