<?php
session_start();
?>
<?php
if($_SESSION['user']=="loged in")
header("location:adminpanel.php");
else if($_SESSION['user']!="loged in")
$_SESSION['user']=="loged out";
?>
<?php
if($_SESSION['user']=="loged out")
{
require_once("admin.php");
}
if(isset($_POST['submit']))
{

$username=$_POST['usname'];
$password=$_POST['pass'];
$database=online_result;
$table_name1=admin;
$con=mysql_connect('localhost','root','');
if(!$con)
{
die("server not connected".mysql_error());
}
else
{
mysql_select_db($database,$con);
$sql="SELECT * FROM $table_name1";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
$usname=$row[0];
$pass=$row[1];
if($usname==$username && $pass==$password)
{
$_SESSION['user']="loged in";
header('location:adminpanel.php');
}
else
{
header('location:admin.php');
}
}
}
}
?>