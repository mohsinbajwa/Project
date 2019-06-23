<html>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
      <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
<body>    
    
    <div class="container col-lg-12 col-md-12" style="padding-top:4%;">

    <form class="well form-horizontal" action="ownerregphpfile.php " enctype="multipart/form-data"
     method="POST"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Owner's Registration</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name" class="form-control"  type="text" pattern="[A-Za-z]{2,8}" title="maximum length is 8 character and must in a valid format"  required />

    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" placeholder="Last Name" class="form-control"  type="text" pattern="[A-Za-z]{2,8}" title="maximum length is 8 character and must in a valid format" required  />
    </div>
  </div>
</div>

 

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="username" placeholder="Username" class="form-control"  type="text" pattern="[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$" title="enter valid username" required>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="password" id="user_password" placeholder="Password" class="form-control"  type="password" title="password must be minimum 5 character with one special character" required>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control"  type="password"  title="password must be minimum 5 character with no special character" required>
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address"  class="form-control"  type="email" pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" required/>
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="mobile" placeholder="(+92)" class="form-control" type="text" pattern="[0-9]{11,11}" title="phone must be 11 numbers and in valid format" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Your Image</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="image"  class="form-control" type="file">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">CNIC Image.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="cnicimage"  class="form-control" type="file">
    </div>
  </div>
</div>
<!-- Select Basic -->



  <div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4"><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button type="submit"
      class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT
        <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
    </div>
  </div>


s


</fieldset>
</form>
</div>
</body></html><!-- /.container -->


<script>
  function myfunc(){

    var pass1= document.getElementById("user_password").value;
    var pass2= document.getElementById("confirm_password").value;


    if(pass1.localeCompare(pass2) != 0)


    {alert("password dont match !");}


  }





</script>


