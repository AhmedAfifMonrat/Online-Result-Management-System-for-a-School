
<?php
$database=online_result;
$table_name=student_info;
$stdid=$_POST['id'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect database".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * FROM $table_name WHERE std_id='$stdid'";
$result=mysql_query($sql,$con);
   echo "<table border='1' width='1000px' style='border-collapse:collapse;text-align:center'";
			echo "<tr>";
			echo "<th>"."Student ID"."</th>";
			echo "<th>"."Name"."</th>";
			echo "<th>"."Father's Name"."</th>";
			echo "<th>"."Mother's Name"."</th>";
			echo "<th>"."Addres"."</th>";
			echo "<th>"."Contact NO"."</th>";
			echo "<th>"."Email"."</th>";
			echo "<th>"."DATE OF BIRTH"."</th>";
			echo "<th>"."Religion"."</th>";
			echo "<th>"."Nationality"."</th>";
			echo "</tr>";
           while($row = mysql_fetch_array($result)) {
		    echo "<tr>";
			echo "<td>".$row['std_id']."</td>";
			echo "<td>".$row['std_name']."</td>";
			echo "<td>".$row['father_name']."</td>";
			echo "<td>".$row['mother_name']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['contact_no']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['date_of_birth']."</td>";
			echo "<td>".$row['religion']."</td>";
			echo "<td>".$row['nationality']."</td>";
			
			
			echo "</tr>";
			echo "</table>";
			$a=$row['contact_no'];
			
            
            echo "<input type='button' name='update' value='UPDATE' onClick='load_update_basic_info($a)' style='width:100px; background:#FF0000; height:30px; cursor:pointer; color:#ffffff; margin-top:30px; font-weight:bold ' />";
			
			echo "<input type='button' name='update' value='DELETE' onClick='load_delete_basic_info($a)' style='width:100px; background:#FF0000; height:30px; cursor:pointer; color:#ffffff; margin-top:30px; margin-left:15px;font-weight:bold ' />";
            
			}
?>