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
      <td height="40"><label>Student ID</label></td>
      <td>
       <select name="student_id" id="student_id" style="width: auto;height: 30px;"><option value="">--Please Select--</option>
	 <?php while($row=mysql_fetch_array($result))
echo "<option name=\"".$row['std_id']."\" value=\"".$row['std_id']."\">".$row['std_id']."</option>";?></select>
    </tr>
    <?php
$database=online_result;
$table_name=batch;
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect database".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * FROM $table_name";
$result=mysql_query($sql,$con);
?>
    <tr>
      <td height="40"><label>Batch ID</label></td>
      <td>
        <select name="batch_id" id="batch_id" style="width: auto;height: 30px;"><option value="">--Please Select--</option>
	 <?php while($row=mysql_fetch_array($result))
echo "<option name=\"".$row['batch_id']."\" value=\"".$row['batch_id']."\">".$row['batch_id']."</option>";?></select>  
        
        
        <span id="fname_validate" style="color:#FF3300"></span>      </td>
    </tr>
    <tr>
      <td height="40"><label>SUBJECT</label></td>
      <td><label>Obtaining Marks</label>
                </td>
    </tr>
    <tr>
      <td height="40"><label>C</label></td>
      <td>  <select id="result_c" name="result_c">
            <option value="80">80-100</option>
            <option value="75">75-79</option>
            <option value="70">70-74</option>
            <option value="65">65-69</option>
            <option value="55">55-59</option>
            <option value="50">50-54</option>
            <option value="45">45-49</option>
            <option value="40">40-44</option>
            <option value="30">0-39</option>
           </select>
          
          
          </td>
    </tr>
     <td height="40"><label>OOP</label></td>
      <td>  <select id="result_oop" name="result_oop">
            <option value="80">80-100</option>
            <option value="75">75-79</option>
            <option value="70">70-74</option>
            <option value="65">65-69</option>
            <option value="55">55-59</option>
            <option value="50">50-54</option>
            <option value="45">45-49</option>
            <option value="40">40-44</option>
            <option value="30">0-39</option>
           </select>
          
          
          </td>
    </tr>
     <td height="40"><label>JAVA</label></td>
      <td>  <select id="result_java" name="result_java">
            <option value="80">80-100</option>
            <option value="75">75-79</option>
            <option value="70">70-74</option>
            <option value="65">65-69</option>
            <option value="55">55-59</option>
            <option value="50">50-54</option>
            <option value="45">45-49</option>
            <option value="40">40-44</option>
            <option value="30">0-39</option>
           </select>
          
          
          </td>
    </tr>
    <tr><td><input name="save" type="button" onClick="send_result_info();" value="Save" style="background-color:#FF0000;cursor: pointer; width: 100px;color: white;height: 25px;"/></td></tr>
  </table>
</form>
</div>
</body>
</html>

