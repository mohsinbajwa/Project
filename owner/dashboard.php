<?php

require("nav.php");

?>
<?php

require("connection.php");

$hold=$_SESSION['user'];
$query = "SELECT * FROM `owner` where username='$hold'";

$ress=mysqli_query($connect,$query);
$rowcount=mysqli_num_rows($ress);


?>
<?php while($row = mysqli_fetch_array($ress))
	{?>

<br><br>
<div class="container-fluid well span6">
	<div class="row-fluid">
        <div class="span2" style="width:55%; height:55%%;">
		    <img src="<?php echo 'owner/'.$row['image'];?>" style="width:25%; height:25%%;" class="img-circle">
        </div>
        <ul style="float:right;" class="dropdown-menu">
            <li><a href="#"><span class="icon-wrench"></span> Modify</a></li>
                   
                    <!--  <li><a href="#"><span class="icon-trash"></span> Delete</a></li> -->
                    
                </ul>
        <div class="span8">
            <br><h3><b>User Name : </b><?php echo $row['username'];?></h3><br>
            <h4><b>Name : </b><?php echo $row['first'] ; echo $row['last'];?> </h4><br>
            <h4><b>Email : </b><?php echo $row['email'];?></h4><br>
            <h4><b>phone : </b><?php echo $row['mobile'];}?></h4><br>
            
                </div>
        
        <div class="span2">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                    Action 
                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="profileedit.php?action=edit&amp;Tid=2&amp;username=<?php echo $hold;?>"><span class="icon-wrench"></span> Modify</a></li>
                   
                    <!--  <li><a href="#"><span class="icon-trash"></span> Delete</a></li> -->
                    
                </ul>
            </div>
        </div>
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
