<?php
$database='online_result';
$table_name='course';
$id=$_POST['id'];
$name=$_POST['name'];
$dur=$_POST['dur'];
$fee=$_POST['fee'];
$dept=$_POST['dept'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect database".mysql_error());
}
mysql_select_db($database,$con);
$sql="INSERT INTO $table_name VALUES('$id','$name','$dur','$fee','$dept')";
if(mysql_query($sql))
echo "true";
else echo "false";
?>

