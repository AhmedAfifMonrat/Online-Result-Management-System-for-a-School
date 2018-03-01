<?php 
session_start();
?>
<?php
$delete_basic_info=$_POST['no'];
$database='online_result';
$table_name='student_info';
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect database".mysql_error());
}
mysql_select_db($database,$con);
$sql="DELETE from $table_name WHERE contact_no='$delete_basic_info'";
mysql_query($sql,$con);
echo "Delete Record Successfully";




?>