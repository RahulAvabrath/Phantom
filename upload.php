<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "rmart");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get s_photo name
  	$s_photo = $_FILES['s_photo']['name'];
  	// Get text
  	$s_name = mysqli_real_escape_string($db, $_POST['s_name']);

  	// s_photo file directory
  	$target = "s_photo".basename($s_photo);

  	$sql = "INSERT INTO stockdata (s_photo, s_name) VALUES ('$s_photo', '$s_name')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['s_photo']['tmp_name'], $target)) {
  		$msg = "s_photo uploaded successfully";
  	}else{
  		$msg = "Failed to upload s_photo";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM stockdata");
?>
<!DOCTYPE html>
<html>
<head>
<title>s_photo Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='s_photo/".$row['s_photo']."' >";
      	echo "<p>".$row['s_name']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="upload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="s_photo">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="s_name" 
      	placeholder="Say something about this s_photo..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>