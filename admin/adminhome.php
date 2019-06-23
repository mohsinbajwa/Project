

<html>
<head>

<link rel="stylesheet" href="css/bootstrap-select.min.css"  />
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
    <td width="96%" class="bg-primary"><img src="adminimage/admin.jpg"  height="5%" width="15%" ""alt=""  /></td>
    <td width="4%"><table width="179" border="0" align="left">
      <tr>
        <td><table width="179" border="0" align="left" cellpadding="0" cellspacing="0" class="bg-primary">
          <tr>
            <td bgcolor="#007EAD" style="color:#306;" class="bg-primary"><pre><?php
           session_start();
		   echo $_SESSION['name']; 
			?></pre></td>
            <td bgcolor="#007EAD" class="bg-primary">
		</td>
          </tr>
          <tr>
            <td><pre><a href="logout.php" class="btn btn-primary"> Logout </a></pre></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<div class="btn-primary">
<div class="alert-info">
  <pre><a href="adminhome.php" class="btn btn-primary"> About </a> <a href="#" class="btn btn-primary"> News </a> <a href="#" class="btn btn-primary"> Info </a> <a href="#" class="btn btn-primary"> Products </a> <a href="adminhome.php" class="btn btn-primary"> Home </a></pre>
</div>
</div>
<p style="font:40px; color:#900; font:bold;">Welcome to administrator area! You can View , delete things from here!</p>


<p class="text-info" align="center">
<br />
<div class="btn-success">
<div class="btn-primary">
  <pre> <a href="adminview.php" class="btn btn-success"> View/Delete </a> 
</div>
</div>
</p>
</div>
</body>
</html>