<?php

  session_start();    // ---------------------------------------------------------------------------------------------------------------------------------------to call the variable to next page
  
  ini_set('display_errors',0);// to hide the warnings
  $cartcount=$_SESSION["cartcount"];
   //$fname=$_SESSION["name"];
  $username=$_SESSION["username"];
$ttt="twwhite.png";
$check="checkout";

                      $connect = mysqli_connect("localhost", "root", "", "rmart");
                      
                      $rand_num=rand(1,4);   //-------------------------------------------------------------------------------------------------------------------print rand number
                      $s_count=0;
                      $limit=1;
                       //---------------------------------------------------------------------------------------------------------session to call variable to next page


                   
                      
//$query = "SELECT T.*, COUNT(C.id) as count FROM tbl_images T, checkout C ORDER BY p_cost desc" ;  
                      $query = "SELECT * FROM register where username=".$username."" ;  
                      $result = mysqli_query($connect, $query); 

                     
//echo $row[p_name];

                       while($row = mysqli_fetch_array($result))  
                        {

                          $fname=$row['fname'];
                          $lname=$row['lname'];
                          $phoneno=$row['phoneno'];
                          $Email=$row['email'];
                          $username=$row['username'];
                          $password=$row['password'];
                          $address=$row['address'];
                        }




$fname="rahulaaaa";
                  ?>



<!DOCTYPE html>
<html>
<head>
  <title>Phantom-Login</title>
</head>
<link rel="icon" href="http:phantom6.jpg" type="image/gif" sizes="30x30">
<body style="
background-image: url(lbg6.jpg); height: 100vh;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;

">


<link rel="stylesheet" type="text/css" href="test2.css">
<script type="text/javascript" href="test.js"></script>


<h2 style="color:#000; font-size: 35px;"><b><u>Phantom.com</u></b></h2>
<br>


<div class="container" id="container" style="height: 70%; width: 50%; background: #333;">
  <div class="form-container sign-up-container">

  </div>
  <div class="form-container sign-in-container">
    <form action="signup.php" method="post">
      <h1>Create Account</h1>
  
      <br>
      <input type="text" name="fname" placeholder="First Name" value="<?php  echo "$fname"; ?>   "  />
      <input type="text" name="lname" placeholder="Last Name" />
      <input type="text" name="phoneno" placeholder="Mob number"  />
      <input type="email" name="email" placeholder="Email" />
      <input type="text" name="username" placeholder="Username" />
      <input type="password" name="password" placeholder="Password" />
      <input type="text" name="address" placeholder="Address" />
      

      <button >Sign Up</button>
    </form>
  </div>



  <div class="overlay-container" >

    </div>
  </div>
</div>


<script src="test.js"></script>


<div class="adminbtn" action="chat.php" style="position: absolute;top: 5%;right: 5%; ">
      <form action="admin.php" method="post" style="background: #000;">
           <!-- <button onclick="admin.php">Admin</button>-->
      </form>
      
</div>
</body>
</html>

