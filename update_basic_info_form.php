<?php
session_start();
?>
<?php
if(isset($_POST['no']))
{
$stdno=$_POST['no'];
$_SESSION['delete_basic_info']=$stdno;
$_SESSION['update_basic_info']=$stdno;
}
?>
<form id="accounts" style="margin-top:20px">
  <table width="100%" border="0">
    <tr>
      <td width="13%" height="40"><label>Student ID</label></td>
      <td width="87%"><input name="std_id" type="text" id="std_id" size="40" required="required" style="height:25px"><span style="padding-left:10px">Format:XXX-XX-XX</span>
          <span id="stdid_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Name:</label></td>
      <td><input name="std_name" type="text" id="std_name" size="40" required="required" style="height:25px">
      <span style="padding-left:10px">Letters Only</span>
       <span id="stdname_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Father's Name</label></td>
      <td><input name="fname" type="text" id="fname" size="40" required="required" style="height:25px">
      <span style="padding-left:10px">Letters Only</span>
        <span id="fname_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Mother's Name</label></td>
      <td><input name="mname" type="text" id="mname" size="40" required="required" style="height:25px">
      <span style="padding-left:10px">Letters Only</span>
       <span id="mname_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Contact Address</label></td>
      <td><input name="cadd" type="text" id="cadd" size="40" required="required" style="height:25px">
      <span style="padding-left:10px">Letters Only</span>
       <span id="cadd_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Contact Number</label></td>
      <td><input name="cnum" type="text" id="cnum" size="40" required="required" style="height:25px">
      
          <span id="cnum_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Email</label></td>
      <td><input name="email" type="text" id="email" size="40" required="required" style="height:25px">
          <span id="email_validate" style="color:#FF3300"></span>
      </td>
    </tr>
    <tr>
    <tr>
      <td height="40"><label>Date of Birth</label></td>
      <td><input name="db" type="text" id="db" size="40" required="required" style="height:25px"><span style="padding-left:10px">(Y/M/D)</span>
       <span id="db_validate" style="color:#FF3300"></span> 
      </td>
      
    </tr>
    <tr>
      <td height="40"><label>Religion</label></td>
      <td><input name="reg" type="text" id="reg" size="40" required="required" style="height:25px">
      <span style="padding-left:10px">Letters Only</span>
       <span id="reg_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
    <tr>
      <td height="40"><label>Nationality</label>
      </td>
      <td><input name="nation" type="text" id="nation" size="40" required="required" style="height:25px">
      <span style="padding-left:10px">Letters Only</span>
      <span id="nation_validate" style="color:#FF3300"></span> 
      </td>
    </tr>
     
    <tr><td><input name="save" type="button" onClick="send_update_basic_info();" value="Update" style="background-color:#FF0000;cursor: pointer; width: 100px;color: white;height: 25px;"/></td></tr>
  </table>
</form>


