<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',0);// to hide the warnings
//$fname=$_SESSION["name"];
$username=$_SESSION["username"];



$totcount=$_SESSION["totcount"];
echo $totcount;
 $date=date("l");

 
if(isset($_GET["id"]))  
 { 
     
      $connect = mysqli_connect("localhost", "root", "", "rmart");


                     
$query = "CREATE TABLE [IF NOT EXISTS] '.$fname.'(id,name,p_name,p_type,p_cost)" ;  
$result = mysqli_query($connect, $query); 


       if($result==-1)  
       {
                          
                echo '<script type="text/javascript">';
                echo'alert("Item added Successfully!!");';
                echo 'window.location.href="displaypage.php";';
                echo'</script>';

        }        
                
          

}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>
<body>

	

</body>
</html>