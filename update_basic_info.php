<?php 
session_start();
?>
<?php
if(isset($_SESSION['update_basic_info']))
{
$update_basic_info=$_SESSION['update_basic_info'];
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
$sql="UPDATE $table_name SET std_id='$id',std_name='$name',father_name='$fname',mother_name='$mname',address='$cadd',contact_no='$cnum',email='$email',date_of_birth='$db', religion='$reg',nationality='$nation' WHERE contact_no='$update_basic_info'";
mysql_query($sql,$con);
echo "Record Updated Successfully";

}

?>