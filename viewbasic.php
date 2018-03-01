<?php
$database=online_result;
$table_name=student_info;
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect database".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * FROM $table_name";
$result=mysql_query($sql,$con);


?>
<form>
<table border="0">
<tr>
<td>
Student ID:
</td>
<td>
<select name="std_info" onChange="load_std_info(this)" style="height:25px; width:200px; font-size:16px">
<option style="font-size:16px">Choose any ID</option>
<?php while($row=mysql_fetch_array($result))
echo "<option name=\"".$row['std_id']."\" value=\"".$row['std_id']."\">".$row['std_id']."</option>";?></select>
</td>
</tr>
</table>
</form>
