<?php
   session_start();  // ---------------------------------------------------------------------------------------------------------------------------------------to call the variable to next page
   ini_set('display_errors',0);// to hide the warnings
  $cartcount=$_SESSION["cartcount"];
  $username=$_SESSION["username"];
  $check="checkout";

     $username=$_SESSION["username"];

   if($username=="")
   {
      $username="LOGIN";
                      echo '<script type="text/javascript">';
                echo'alert("Login to add items to the cart");';
                echo 'window.location.href="test22.php";';
                echo'</script>';    
   }
   else
   {
      $username=$_SESSION["username"];
   }

?>
<!-- Start of mic rec thing working-->

  


<?php 
$date=date("d-m-Y");


error_reporting(E_ALL);
ini_set('display_errors',0);// to hide the warnings
 //$rr=$_POST['s'];
 
if(isset($_GET["id"]))  
 { 
     
      $connect = mysqli_connect("localhost", "root", "", "rmart");


                     
	$query = "INSERT into ".$username.''.$check." (id,name,p_name,p_type,p_cost,time_req,img2,img3,img4,f1,f2,f3,f4,f5)  SELECT * FROM tbl_images WHERE id='{$_GET["id"]}'" ;  
	$result = mysqli_query($connect, $query);


  $query2="UPDATE ".$username.''.$check."  SET day='".$date."'  WHERE id='{$_GET["id"]}'  ";
  $result2 = mysqli_query($connect, $query2);
    
       if($result==-1)  
       {
                          
                echo '<script type="text/javascript">';
                echo'alert("Item added Successfully!!");';
                echo 'window.location.href="displaypage.php";';
                echo'</script>';

        }
}
else
{
	echo '<script type="text/javascript">';
                echo'alert("!!!!  Error in adding item to cart...!!!");';
                echo 'window.location.href="displaypage.php";';
                echo'</script>';

}

?>
<!-- cart quantity-->
<?php  
session_start();  
   $connect = mysqli_connect("localhost", "root", "", "rmart");


                   
                      
$query = "SELECT COUNT(C.id) as count FROM ".$username.''.$check." C " ;  
$result = mysqli_query($connect, $query); 


if($row = mysqli_fetch_array($result))  
{
    
}

$_SESSION["cartcount"] = $row['count'];

?>
