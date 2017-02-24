<?php

$Id=$_POST['_ID'];
$Name=$_POST['_Name'];
$Age=$_POST['_Age'];
$Species=$_POST['_Species'];
$Color=$_POST['_Color'];

$cId=$_POST['chId'];
$cName=$_POST['chName'];
$cAge=$_POST['chAge'];
$cSpec=$_POST['chSpec'];
$cColor=$_POST['chColor'];

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
$query=mysql_query($sql);

$numrows=mysql_num_rows($query);

if($query)
{
	 echo "DELETE Querry executed successfully!";
}
else
 {
	 echo "Failed to execute DELETE Querry!";
 }
?>
<!DOCTYPE HTML>
<html ng-app>

<head>
  <meta charset="utf-8">
  <script>
  function _back()
  {
   var f=document.getElementById('forma');
   f.action="Angul.html";
  }
  </script>
</head>
<body>
<form  id="forma" method="POST" >
<input type="submit" onclick="_back()" value="Return To Main Page" >
</body>

</html>