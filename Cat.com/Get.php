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
//$conn=new mysqli("127.0.0.1", "root", "", "catsdb");

	 $sql="SELECT * FROM cats WHERE";
	//ID
	
           $sql.=" ID='".$Id."'";
        
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
//$numrows=mysql_num_rows($query);
if($query)
{
        if($result = mysql_query($sql))
	{
          if(mysql_num_rows($result) > 0){
        echo "<table border='7' bordercolor='blue'>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Name</th>";
                echo "<th>Age</th>";
                echo "<th>Species</th>";
                echo "<th>Color</th>";
            echo "</tr>";
        while($row = mysql_fetch_array($result))
	{
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Age'] . "</td>";
                echo "<td>" . $row['Species'] . "</td>";
                echo "<td>" . $row['Color'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysql_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error($conn);
}
	 echo "<br/><br/> GET Querry executed successfully!";
}
else
 {
	 echo "<br/><br/> Failed to execute GET Querry!";
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