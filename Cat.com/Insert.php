<?php
ob_start();
$Id=$_POST['_ID'];
$Name=$_POST['_Name'];
$Age=$_POST['_Age'];
$Species=$_POST['_Species'];
$Color=$_POST['_Color'];
$Picture=$_POST['_Picture'];

$conn=mysql_connect("localhost","root", "") or die(mysql_error());
	mysql_select_db("catsdb") or die("Cannot select DB");
echo "INSERT INTO cats(ID,Name,Age,Species,Color,Picture) VALUES ('$Id','$Name','$Age','$Species','$Color','$Picture')";
$query=mysql_query("INSERT INTO cats(ID,Name,Age,Species,Color,Picture) VALUES ('$Id','$Name','$Age','$Species','$Color','$Picture')");

$numrows=mysql_num_rows($query);

if($query)
{
ob_end_clean();
	 echo "<br/> New data successfully inserted to database";
}
else
 {
 ob_end_clean();
	 echo "<br/> Insert Error!!";
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
