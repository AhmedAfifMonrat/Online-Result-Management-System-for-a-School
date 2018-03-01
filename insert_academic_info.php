<?php
$database='online_result';
$table_name='academic_info';
$id=$_POST['id'];
$name=$_POST['name'];
$dept=$_POST['dept'];
$sem=$_POST['sem'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect database".mysql_error());
}
mysql_select_db($database,$con);
$sql="INSERT INTO $table_name VALUES('$name','$dept','$sem','$id')";
if(mysql_query($sql))
echo "true";
else echo "false";
?>