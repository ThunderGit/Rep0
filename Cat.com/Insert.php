<?php

$Id=$_POST['_ID'];
$Name=$_POST['_Name'];
$Age=$_POST['_Age'];
$Species=$_POST['_Species'];
$Color=$_POST['_Color'];

$conn=mysql_connect("localhost","root", "") or die(mysql_error());
	mysql_select_db("catsdb") or die("Cannot select DB");

$query=mysql_query("INSERT INTO cats(ID,Name,Age,Species,Color) VALUES ('$Id','$Name','$Age','$Species','$Color')");

$numrows=mysql_num_rows($query);

if($query)
{
	 echo "INSERT Querry executed successfully!";
}
else
 {
	 echo "Failed to execute INSERT Querry!";
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