<?php
ob_start();
$Id=$_POST['_ID'];
$Name=$_POST['_Name'];
$Age=$_POST['_Age'];
$Species=$_POST['_Species'];
$Color=$_POST['_Color'];
$Picture=$_POST['_Picture'];

$cId=$_POST['chId'];
$cName=$_POST['chName'];
$cAge=$_POST['chAge'];
$cSpec=$_POST['chSpec'];
$cColor=$_POST['chColor'];
$cPic=$_POST['chPic'];

$rAND=$_POST['rAND'];

$conn=mysql_connect("localhost","root", "") or die(mysql_error());
	mysql_select_db("catsdb") or die("Cannot select DB");

	$sql="DELETE FROM cats WHERE";
	//ID
	if (isset($cId)) 
	{
           $sql.=" ID='".$Id."'";
        }
	//Name
	if (isset($cName)) 
	{
	if(isset($rAND))
	{
           $sql.=" AND Name='".$Name."'";
        }
	else
	{
	   $sql.=" OR Name='".$Name."'";
	}
	}
	//Age
	if (isset($cAge)) 
	{
	if(isset($rAND))
	{
           $sql.=" AND Age='".$Age."'";
        }
	else
	{
	   $sql.=" OR Age='".$Age."'";
	}
	}
	//Species
	if (isset($cSpec)) 
	{
	if(isset($rAND))
	{
           $sql.=" AND Species='".$Species."'";
        }
	else
	{
	   $sql.=" OR Species='".$Species."'";
	}
	}
	//Color
	if (isset($cColor)) 
	{
	if(isset($rAND))
	{
           $sql.=" AND Color='".$Color."'";
        }
	else
	{
	   $sql.=" OR Color='".$Color."'";
	}
	}
	//Picture
	if (isset($cPic)) 
	{
	if(isset($rAND))
	{
           $sql.=" AND Color='".$Picture."'";
        }
	else
	{
	   $sql.=" OR Color='".$Picture."'";
	}
	}
$query=mysql_query($sql);

$numrows=mysql_num_rows($query);

if($query)
{
         ob_end_clean();
	 echo "<br/> All specified data succesfully deleted in database";
}
else
 {
    ob_end_clean();
	 echo "<br/> Delete Error!";
 }
?>
<!DOCTYPE HTML>
<html ng-app>

<head>
  <meta charset="utf-8">
  <style>
  input[type=submit],[type=button]{
color:white;
font-weight:bold;
    padding:5px 15px; 
    background:blue; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}</style>
  <script>
  function _back()
  {
   var f=document.getElementById('forma');
   f.action="index.html";
  }
  </script>
</head>
<body>
<form  id="forma" method="POST" >
<input type="submit" onclick="_back()" value="Return To Main Page" >
</body>

</html>
