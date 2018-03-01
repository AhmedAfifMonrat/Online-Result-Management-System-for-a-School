<?php 
//get unique id
$up_id = uniqid(); 
?>

<?php

//process the forms and upload the files
if ($_POST) {

//specify folder for file upload
$folder = "tmp/"; 

//specify redirect URL
$redirect = "upload.php?success";

//upload the file
move_uploaded_file($_FILES["file"]["tmp_name"], "$folder" . $_FILES["file"]["name"]);

//do whatever else needs to be done (insert information into database, etc...)

//redirect user
header('Location: '.$redirect); die;
}
//

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Upload your file</title>

<!--Progress Bar and iframe Styling-->
<link href="style_progress.css" rel="stylesheet" type="text/css" />

<!--Get jQuery-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.js" type="text/javascript"></script>

<!--display bar only if file is chosen-->
<script>

$(document).ready(function() { 
//

//show the progress bar only if a file field was clicked
	var show_bar = 0;
    $('input[type="file"]').click(function(){
		show_bar = 1;
    });

//show iframe on form submit
    $("#form1").submit(function(){

		if (show_bar === 1) { 
			$('#upload_frame').show();
			function set () {
				$('#upload_frame').attr('src','upload_frame.php?up_id=<?php echo $up_id; ?>');
			}
			setTimeout(set);
		}
    });
//

});

</script>

</head>

<body>
<h1>Upload your file </h1>

<div>
  <?php if (isset($_GET['success'])) { ?>
  <span class="notice">Your file has been uploaded.</span>
  <?php } ?>
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    Name<br />
    <input name="name" type="text" id="name"/>
    <br />
    <br />
    Your email address <br />
    <input name="email" type="text" id="email" size="35" />
    <br />
    <br />
    Choose a file to upload<br />

<!--APC hidden field-->
    <input type="hidden" name="APC_UPLOAD_PROGRESS" id="progress_key" value="<?php echo $up_id; ?>"/>
<!---->

    <input name="file" type="file" id="file" size="30"/>

<!--Include the iframe-->
    <br />
    <iframe id="upload_frame" name="upload_frame" frameborder="0" border="0" src="" scrolling="no" scrollbar="no" > </iframe>
    <br />
<!---->

    <input name="Submit" type="submit" id="submit" value="Submit" />
  </form>
  </div>

</body>

</html>
