// JavaScript Document


var xmlhttp;
 
 /////////////////////////////////////////////////////
 function GetXmlHttpObject()
{ //"use strict"; 
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  }
return null;
}

	
 
 
 //======================================
 
	 
 
function myfunc()
{

	 
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return null;
  }
else{
var name = document.getElementById("name").value;
var password = document.getElementById("password").value;


if(name=="" ||password=="")
			{
				document.getElementById("response").innerHTML="Kindly fill the form properly !";
exit;
				//alert("Kindly! Fill the form");
			
				}
		
 
var url = "adminsigninphp.php";
url = url + "?func=insert&name="+name+"&password="+password;
//alert(url);
xmlhttp.onreadystatechange=abc_callback;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
} 
}

function abc_callback()
{
	

if (xmlhttp.readyState===4)
{
	
	var responcee= xmlhttp.responseText;
	//alert(responcee);
	
	if(responcee.match("connected1")){
	window.location="adminhome.php";
	}
	
	else{
		document.getElementById("response").innerHTML="";
document.getElementById("response").innerHTML="Invalid password or username !";		
		}

//document.getElementById("ajax_response").innerHTML=xmlhttp.responseText;
}

}