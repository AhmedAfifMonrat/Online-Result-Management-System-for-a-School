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
<html>
<head>
<script type="text/javascript" src="javascript.js"></script>
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div style="float:left; padding:0px">


<form id="academic_info">
  <table width="100%" border="0">
    <tr>
      <td height="40"><label>University Name</label></td>
      <td><input name="uni_name" type="text" id="uni_name" size="40" required="required" style="height:25px">
          <span id="uni_name_validate" style="color:#FF3300"></span>      </td>
    </tr>
    <tr>
      <td height="40"><label>Department Name</label></td>
      <td>
      <select name="dept" id="dept">
        <option id="CSIT" value="CSIT">CSIT</option>
        <option id="EEE" value="EEE">EEE</option>
        <option id="ECE" value="ECE">ECE</option>
                </select>
       <span id="dept_name_validate" style="color:#FF3300"></span>      </td>
    </tr>
    <tr>
      <td height="40"><label>Semister</label></td>
      <td>
        
        <select name="semister" id="semister">
        <option id="summer" value="summer">Summer</option>
        <option id="fall" value="Fall">fall</option>
        <option id="winter" value="Winter">winter</option>
                </select>
        
        <span id="fname_validate" style="color:#FF3300"></span>      </td>
    </tr>
    <tr>
      <td height="40"><label>Student ID</label></td>
      <td>
      <select name="std_id" id="std_id" style="width: auto;height: 30px;"><option value="">--Please Select--</option>
	 <?php while($row=mysql_fetch_array($result))
echo "<option name=\"".$row['std_id']."\" value=\"".$row['std_id']."\">".$row['std_id']."</option>";?></select>
       <span id="mname_validate" style="color:#FF3300"></span>      </td>
    </tr>
    <tr><td><input name="save" type="button" onClick="send_academic_info();" value="Save" style="background-color:#FF0000;cursor: pointer; width: 100px;color: white;height: 25px;"/></td></tr>
  </table>
</form>
</div>
</body>
</html>

