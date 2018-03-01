<?php
$database='online_result';
$table_name='batch';
$bid=$_POST['bid'];
$cid=$_POST['cid'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect database".mysql_error());
}
mysql_select_db($database,$con);
$sql="INSERT INTO $table_name VALUES('$bid','$cid')";
if(mysql_query($sql))
echo "true";
else echo "false";
?>

