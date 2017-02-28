<?php
ob_start();
$sql=$_POST['zapros1'];

//echo $sql;


$conn=mysql_connect("localhost","root", "") or die(mysql_error());
	mysql_select_db("catsdb") or die("Cannot select DB");

	
$query=mysql_query($sql);

$numrows=mysql_num_rows($query);

if($query)
{
       ob_end_clean();
	 echo "<br/> All specified data has been successfully updated in database!";
}
else
 {
  ob_end_clean();
	 echo "<br/> Update Error!!";
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
