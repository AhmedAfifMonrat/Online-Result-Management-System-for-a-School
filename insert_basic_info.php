<?php
$database=online_result;
$table_name=student_info;
$id=$_POST['id'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$cadd=$_POST['cadd'];
$cnum=$_POST['cnum'];
$email=$_POST['email'];
$db=$_POST['db'];
$reg=$_POST['reg'];
$nation=$_POST['nation'];

$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect database".mysql_error());
}
mysql_select_db($database,$con);
$sql="INSERT INTO $table_name VALUES('$id','$name','$fname','$mname','$cadd','$cnum','$email','$db','$reg','$nation')";
if(mysql_query($sql))
echo "true";
else echo "false";



?>
