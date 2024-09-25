<?php  
session_start();  
   $connect = mysqli_connect("localhost", "root", "", "rmart");


                   
                      
$query = "SELECT COUNT(C.id) as count FROM checkout C " ;  
$result = mysqli_query($connect, $query); 


if($row = mysqli_fetch_array($result))  
{
    echo $row['count']; 
}

$_SESSION["cartcount"] = $row['count'];

echo $_SESSION["cartcount"];
?>