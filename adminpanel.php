<?php
session_start();
?>
<?php
if($_SESSION['user']!="loged in")
{
header("location:check.php");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="css/adminpanel.css" />
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>
 <div id="sign"><a href="signout.php">sign out</a></div>
 <div id="header"><h3>Admin Panel</h3></div>
 <div id="main">
 <div id="content1">
  <div id="leftbar">
                               <p id="Categories">CATEGORIES</p>
                               <p id="solution" onClick="std_info()">Student Info</p>
                               <ul id="solutions">
                               <span onClick="basic()"><li>Basic Info</li></span>
                               <span onClick="academic()"><li>Academic Info</li></span>
                               <span onClick="teachers()"><li>Teachers Info</li></span>
                               <span onClick="course()"><li>Course Info</li></span>
                               <span onClick="batch()"><li>Batch Info</li></span>
                               <span onClick="result()"><li>Result Info</li></span>
                               
                              </ul>
                              </div>
 </div>
 <div id="content2">
 <span id="display"><h3>Information will show here</h3></span>
 </div>
 <span id="content3"></span>
 <span id="show"></span>
 </div>
</body>

</html>