<?php
$database=online_result;
$table_name=student_info;
$id=$_POST['id'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect database".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * FROM $table_name WHERE std_id=$id";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
if($id==row['std_id'])
{
echo "Record Added Successfully";
}
}
?>
