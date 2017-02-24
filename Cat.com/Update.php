<?php

$sql=$_POST['zapros1'];

//echo $sql;


$conn=mysql_connect("localhost","root", "") or die(mysql_error());
	mysql_select_db("catsdb") or die("Cannot select DB");

	
$query=mysql_query($sql);

$numrows=mysql_num_rows($query);

if($query)
{
	 echo "UPDATE Querry executed successfully!";
}
else
 {
	 echo "Failed to execute UPDATE Querry!";
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