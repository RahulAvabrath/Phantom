<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',0);// to hide the warnings



$totcount=$_SESSION["totcount"];
$username=$_SESSION["username"];
$check="checkout";

 $date=date("l");

$pid=$_SESSION["pid"];
 
  
      $connect = mysqli_connect("localhost", "root", "", "rmart");




                     
$query = "INSERT into ".$username."(id,name,p_name,p_type,p_cost,time_req)  SELECT * FROM ".$username.''.$check." " ;  
$result = mysqli_query($connect, $query); 



$q_check="SELECT time_req FROM ".$username.''.$check."";
$res_check=mysql_query($connect,$q_check);
while($roww = mysqli_fetch_array($res_check))
 {

  if($row['time_req']=="3")
  {
    
  }
  elseif ($row['time_req']=="4") 
  {
    # code...
  }
  elseif ($row['time_req']=="5") 
  {
    # code...
  }
  elseif ($row['time_req']=="7")
  {
    # code...
  }

  $q_up="UPDATE ".$username." set del_date=".$del." WHERE time_req=".$time_req." ";
  
} 
$qd = "TRUNCATE TABLE ".$username.''.$check."" ;  
$rd = mysqli_query($connect, $qd); 


       if($result==-1)  
       {
                          
                echo '<script type="text/javascript">';
                echo'alert("Item added Successfully!!");';
                echo 'window.location.href="displaypage.php";';
                echo'</script>';

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