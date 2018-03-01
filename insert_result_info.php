<?php
$database='online_result';
$table_name='result';
$sid=$_POST['sid'];
$bid=$_POST['bid'];
$c=$_POST['c'];
$oop=$_POST['oop'];
$java=$_POST['java'];

if($c>=80 && $c<=100)
$c_grade='A+';
else if($c>=75 && $c<=79)
$c_grade='A';
else if($c>=70 && $c<=74)
$c_grade='A-';
else if($c>=65 && $c<=69)
$c_grade='B+';
else if($c>=60 && $c<=64)
$c_grade='B';
else if($c>=55 && $c<=59)
$c_grade='B-';
else if($c>=50 && $c<=54)
$c_grade='$c+';
else if($c>=45 && $c<=49)
$c_grade='$c';
else if($c>=40 && $c<=44)
$c_grade='D';
else if($c>=0 && $c<=39)
$c_grade='F';
if($oop>=80&& $oop<=100)
//$oop grade
$oop_grade='A+';
else if($oop>=75 && $oop<=79)
$oop_grade='A';
else if($oop>=70 && $oop<=74)
$oop_grade='A-';
else if($oop>=65 && $oop<=69)
$oop_grade='B+';
else if($oop>=60 && $oop<=64)
$oop_grade='B';
else if($oop>=55 && $oop<=59)
$oop_grade='B-';
else if($oop>=50&& $oop<=54)
$c_grade='$c+';
else if($oop>=45 && $oop<=49)
$oop_grade='$c';
else if($oop>=40 && $oop<=44)
$oop_grade='D';
else if($oop>=0 && $oop<=39)
$oop_grade='F';
//$java grade
if($java>=80 && $java<=100)
$java_grade='A+';
else if($java>=75 && $java<=79)
$java_grade='A';
else if($java>=70 && $java<=74)

$java_grade='A-';

else if($java>=65 && $java<=69)

$java_grade='B+';

else if($java>=60 && $java<=64)

$java_grade='B';

else if($java>=55 && $java<=59)

$java_grade='B-';

else if($java>=50&& $java<=54)

$java_grade='$c+';

else if($java>=45 && $java<=49)

$java_grade='$c';

else if($java>=40 && $java<=44)

$java_grade='D';

else if($java>=0 && $java<=39)

$java_grade='F';
//$c point

if($c>=80 && $c<=100)

$c_point=4;

else if($c>=75 && $c<=79)

$c_point=3.75;

else if($c>=70&& $c<=74)

$c_point=3.50;

else if($c>=65 && $c<=69)

$c_point=3.25;

else if($c>=60 && $c<=64)

$c_point=3.00;

else if($c>=55 && $c<=59)

$c_point=2.75;

else if($c>=50 && $c<=54)

$c_point=2.50;

else if($c>=45 && $c<=49)

$c_point=2.25;

else if($c>=40 && $c<=44)

$c_point=2.00;

else if($c>=0 && $c<=39)

$c_point=0.00;

//$oop
if($oop>=80 && $oop<=100)

$oop_point=4;

else if($oop>=75 && $oop<=79)

$oop_point=3.75;

else if($oop>=70 && $oop<=74)

$oop_point=3.50;

else if(opp>=65 && $oop<=69)

$oop_point=3.25;

else if($oop>=60 && $oop<=64)

$oop_point=3.00;

else if($oop>=55 && $oop<=59)

$oop_point=2.75;

else if($oop>=50 && $oop<=54)

$oop_point=2.50;

else if($oop>=45 && $oop<=49)

$oop_point=2.25;

else if($c>=40 && $c<=44)

$oop_point=2.00;

else if($oop>=0 && $oop<=39)

$oop_point=0.00;

//$java
if($java>=80 && $java<=100)

$java_point=4;

else if($java>=75 && $java<=79)

$java_point=3.75;

else if($java>=70&& $java<=74)

$java_point=3.50;

else if($java>=65 && $java<=69)

$java_point=3.25;

else if($java>=60 && $java<=64)

$java_point=3.00;

else if($java>=55 && $java<=59)

$java_point=2.75;

else if($java>=50 && $java<=54)

$java_point=2.50;

else if($java>=45 && $java<=49)

$java_point=2.25;

else if($java>=40 && $java<=44)

$java_point=2.00;

else if($java>=0 && $java<=39)

$java_point=0.00;



/*echo $c_grade;
echo "<br />";
echo $oop_grade;
echo "<br />";
echo $java_grade;
echo "<br />";
echo $c_point;
echo "<br />";
echo $oop_point;
echo "<br />";
echo $java_point;
echo "<br />";
*/
$cgpa=($c_point+$oop_point+$java_point)/3;
echo $cgpa;



$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect database".mysql_error());
}
mysql_select_db($database,$con);
$sql="INSERT INTO $table_name VALUES('$sid','$bid','$c_grade','$oop_grade','$java_grade','$cgpa')";
if(mysql_query($sql))
echo "true";
else echo "false";

?>

