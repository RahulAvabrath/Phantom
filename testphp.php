<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="registerPHPc.css">
      <title></title>
</head>
<body>

   <header>
         




<form action="" method="POST" enctype="multipart/form-data">
    
    <input type="file" name="image" id="image">
    <input type="submit" name="Upload" value="Upload">




</form>




  </header>   

</body>
</html>



<?php
  // Create database connection
  $connection = mysqli_connect("localhost","root","");
  $db=mysqli_select_db($connection,'rmart');
  // Initialize message variable
  

  // If upload button is clicked ...
  if (isset($_POST['Upload'])) 
  {
    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

    $sql = "INSERT INTO test (image) VALUES ('$file')";
    // execute query
    $querry_run=mysqli_query($connection,$sql);

    if($querry_run)
    {
      echo'<script type="text/javascript"> alert("Image uploaded")</script>';
    }
    else
    {
      echo'<script type="text/javascript"> alert("Image not uploaded")</script>';
    }
  }

?>