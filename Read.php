<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
            * {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('img/pp.jpg');
  background-repeat: no-repeat;
   background-attachment: fixed;
  background-size: 100% 100%;
}

.header {
  overflow: hidden;
  background-color: black;
  
  padding: 10px 10px;
}
.h{
color:white;}
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 50px;
  font-weight: bold;
}



.header a.active {
  background-color: red;
  color: white;
}
.header-right a:hover{
 background-color: red;
  color: white;
  }
.header-right {
  float: right;
 
}
 table{
            width: 60%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            border: 1px solid #040404;
            border-collapse: collapse;
            padding: 12px;
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #040404;
			color: white;
        }
		tr:nth-child(odd){
            background-color: #C6C3C3;
			color: black;
        }
    </style>
</head>
<body>

 <div class="header">
  <a class="logo"> STUDENT DETAILS</a>
  <div class="header-right">
    <a href="Home2.html" >Home</a>
    <a href="New_Course.html" style="color:white">Add Student</a>
    <a href="Update.html" style="color:white">Modify Student</a>
	<a href="Remove.html" style="color:white">Remove Student</a>
	<a href="Read.php" style="color:white" class="active">View Details</a>
  </div>
</div>
    <?php

$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
//echo 'Connection Success...<br>';

$sql="select * from details";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center' >";
    while($row=$res->fetch_assoc())
    {
        echo "<BR><BR><tr>";
      echo '<td>'.$row['ID'].'</td>';
      echo '<td>'.$row['NAME'].'</td>';
      echo '<td>'.$row['NUMBER'].'</td>';
	    echo '<td>'.$row['ADDRESS'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo '<br><h2 align="center">Record is empty...</h2>';
}

$conn->close();
?>
<BR><BR>
<center><button style="padding:10px;border-color:red; width:10%;"><a href="New_Course.html" style="text-decoration:none;text-size:50px"> click to add student!</a></button><center>
</body>
</html>