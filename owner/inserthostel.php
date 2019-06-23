<?php

require("nav.php");

?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Add Hostel
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Insert
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form action="inshostel.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Hostel Id(must be unique)</label>
                                <input type="number"  required name="hostelid" id="hostelid" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Hostel Name</label>
                                <input type="text"  required name="hostelname" id="hostelname" class="form-control" placeholder="Enter name">
                            </div>

                             <div class="form-group">
                                <label> Hostel Description</label>
<textarea class="form-control" required name="desc" id="desc" rows="3"></textarea>
           
                            </div>
 <div class="form-group">
                                <label>No of rooms</label>
                              
            <input type="number" name="room"  required id="room" class="form-control" >  
                            
                            </div>

                             <div class="form-group">
                                <label>Date</label>
<input  type="date"  required class="form-control" name="date" id="date" >
           
                            </div>
                            
                             <div class="form-group">
                                <label>Approximate Price Per Person</label>
<input  type="number" class="form-control"  required name="price" id="price" >
           
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Image</label>
                                <input name="image"  required id="image" type="file">
                            </div>

                          

                            <div class="form-group">
                                <label>City</label>
                                <select name="city"  required id="city" class="form-control">

                                    <option>Lahore</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Address(Complete)</label>
                              
            <input type="text" name="address"  required id="address" class="form-control" >  
                            
                            </div>
                            
                         
             <span class="input-group-btn"><button class="btn btn-default" type="submit">Insert</button></span>
                            </div>

                        </form>


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
