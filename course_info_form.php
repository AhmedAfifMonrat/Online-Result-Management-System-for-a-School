<?php
$database=online_result;
$table_name=academic_info;
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
      <td height="40"><label>Course ID</label></td>
      <td><input name="course_id" type="text" id="course_id" size="40" required="required" style="height:25px">
          <span id="tea_id_validate" style="color:#FF3300"></span>      </td>
    </tr>
    <tr>
      <td height="40"><label>Course Name</label></td>
      <td>
       <input name="course_name" type="text" id="course_name" size="40" required="required" style="height:25px">
       <span id="dept_name_validate" style="color:#FF3300"></span>      </td>
    </tr>
    <tr>
      <td height="40"><label>Course Duration</label></td>
      <td>
        
        <input name="course_dur" type="text" id="course_dur" size="40" required="required" style="height:25px">
        
        <span id="fname_validate" style="color:#FF3300"></span>      </td>
    </tr>
    <tr>
      <td height="40"><label>Course Fee</label></td>
      <td>
        
        <input name="course_fee" type="text" id="course_fee" size="40" required="required" style="height:25px">
        
        <span id="fname_validate" style="color:#FF3300"></span>      </td>
    </tr>
    <tr>
      <td height="40"><label>Department Name</label></td>
      <td>
       <select name="dept" id="dept" style="width: auto;height: 30px;"><option value="">--Please Select--</option>
	 <?php while($row=mysql_fetch_array($result))
echo "<option name=\"".$row['dept_name']."\" value=\"".$row['dept_name']."\">".$row['dept_name']."</option>";?></select>
       <span id="mname_validate" style="color:#FF3300"></span>      </td>
    </tr>
    <tr><td><input name="save" type="button" onClick="send_course_info();" value="Save" style="background-color:#FF0000;cursor: pointer; width: 100px;color: white;height: 25px;"/></td></tr>
  </table>
</form>
</div>
</body>
</html>

