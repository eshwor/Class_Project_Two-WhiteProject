<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<script language="javascript">
var xmlhttp

function showHint(a)
{
if (a.length==0)
  {
  document.getElementById("showme").innerHTML="";
  return;
  }
xmlhttp=GetXmlHttpObject();

if (xmlhttp==null)
  {
  alert ("Your browser does not support XMLHTTP!");
  return;
  }
  
  
var url="example.php";
url=url+"?id="+a;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function stateChanged()
{
if (xmlhttp.readyState==4)
  {
  document.getElementById("showme").innerHTML=xmlhttp.responseText;
  }
}

function GetXmlHttpObject()
{
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
function remove()
{
document.getElementById("showme").innerHTML="";
}


</script>

</head>

<body>
Username <input type="text" id="rajendra" onkeyup="showHint(this.value);"  onblur="remove();" />
<hr />
<div id="showme"></div>
</body>
</html>
