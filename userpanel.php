<?php
$id=$_POST['std_id'];
$dept=$_POST['dept'];
$database='online_result';
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect database".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT student_info.std_id,student_info.std_name,student_info.father_name,student_info.mother_name,result.cgpa,result.c,result.oop,result.java
FROM student_info
INNER JOIN result
ON student_info.std_id=result.std_id
WHERE student_info.std_id='$id'";
$result=mysql_query($sql);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="css/adminpanel.css" />
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>
 <div id="header"><h3>Result</h3></div>
 <div id="view" style="float:left; color:#000000; font-family:'myriad Pro; font-size:14px; margin-left:300px; margin-top:50px ">
 <?php
 while($row=mysql_fetch_array($result))
 {

 echo "<table border='1' width='500px' style='text-align:center; margin-left:400px; margin-top:20px; border-collapse:collapse;'>";
 echo "<tr>";
 echo "<th>"."Student ID"."</th>";
 echo "<td>".$row['std_id']."</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>"."Student Name"."</th>";
 echo "<td>".$row['std_name']."</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>"."Father's Name"."</th>";
 echo "<td>".$row['father_name']."</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>"."Mother's Name"."</th>";
 echo "<td>".$row['mother_name']."</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>"."Course"."</th>";
 echo "<th>"."Grade"."</th>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>"." Programming C"."</th>";
 echo "<td>".$row['c']."</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>"."OOP"."</th>";
 echo "<td>".$row['oop']."</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>"."JAVA"."</th>";
 echo "<td>".$row['java']."</td>";
 echo "</tr>";
 echo "<tr>";
 echo "<th>"."CGPA"."</th>";
 echo "<td>".$row['cgpa']."</td>";
 echo "</tr>";
 
 
 echo "</table>";

 }
 ?>
 </div>
 </body></html>