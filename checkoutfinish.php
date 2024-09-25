<?php
  session_start();    // ---------------------------------------------------------------------------------------------------------------------------------------to call the variable to next page
  
  ini_set('display_errors',0);// to hide the warnings
  $cartcount=$_SESSION["cartcount"];
   //$fname=$_SESSION["name"];
  $username=$_SESSION["username"];
$ttt="twwhite.png";
$check="checkout";



   if($username=="")
   {
      $username="Login";
   }
   else
   {
      $username=$_SESSION["username"];
   }
$date=date("d-m-Y");
?>



<!-- Start of mic rec thing working-->
<!-- position:fixed;-->
<link rel="icon" href="http:phantom6.jpg" type="image/gif" sizes="30x30">
    <style>
      *{

      }
      .speech {
        background-color: #000;#F6B46F;#000;
      
        width:100%;
        padding:0;
        margin:0;
        top: -10%;

      }

      .speech input {
        border:10;

        width:400px;
        display:inline-block;
        height:75px;
        font-size: 25px;
        position: absolute;
        left: 33%;



      }


      .speech img {
        position: absolute;

        
        }

        body {
        font-family: Arial, Helvetica, sans-serif; overflow-x: hidden;

        }

      .notification {
        
        
        text-decoration: none;
        padding: 15px 26px;
        position: relative;
        display: inline-block;
        border-radius: 2px;
        
        position: absolute;
        right: 4%;
        top: 4%;
      }

      .notification:hover {
        background: white;
        border-radius: 100%;
      }

      .notification .badge {
        position: absolute;
        top: 0px;
        right: 0px;
        padding: 5px 10px;
        border-radius: 50%;
        background-color: red;
        color: white;
      }


      .chatlogo .badge {
        position: absolute;
        top: 10px;
        right: 87px;
        padding: 5px 10px;
        border-radius: 50%;
        background-color: red;
        color: white;
      }      


    </style>


<center>


   
      <div class="speech" style="width: 100%; height: 15%; top: 0%; position: absolute; left: 0%;">

    </div>



      <a href="test22.php" class="acc">
        <input type="submit" name="account" value="Account" style="width:100px; height: 50px; position: absolute; top: 5%; right: 30%;">
      </a>
            <span class="accname" style="color:#fff ; font-size: 35px; position: absolute; right: 21%; top: 5%; text-transform:uppercase;"><b><?php echo "$username";?><b></span>



    <a href="check.php" class="notification" style="position: absolute; right: 5.4%;">
        <img   src="cart.png"  width="50px;" height="50px;" />
        <span class="badge"><?php echo "$cartcount" ?></span>
    </a>
    
    
</center><br><br>

        <div class="clogo" style="position: absolute; top: -0.5%; left: 20%;">
            <a href="displaypage.php"><img src="phantom6.jpg" width="130px;" height="130px;"></a>
        </div>


        <div class="chatlogo" style=" position: absolute; top: 3%; left: 7%;">
            <a href="pchatmainpage.php"><img src="msg2.jpg" width="100px;" height="100px;" ></a>
            
        </div>

<br><br><br><br><br><br><br><br><br>


<div class="nnn">
  <style >
  .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
.sidenav b1 {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #f1f1f1;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;


}

.dark-mode {
  background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(lbg6.jpg); height: 100%;
        background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      
  color: white;

  
}




@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <b1 ><u>Hello <a1111 style="text-transform:uppercase;"><?php echo "$username";?></a1111></u></b1><hr style="color: white;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="orders.php">Orders</a>
  <a href="#"onclick="myFunction()">Dark Mode</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<!-- dark mode-->
<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

<span style="font-size:30px;cursor:pointer; position: absolute; top: 4%; left: 2%; color: white; font-size: 40px; " onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</div>
    <script>

      function startDictation()   // when clicked on mic image, this func is called to rec the audio
      {

        if (window.hasOwnProperty('webkitSpeechRecognition')) 
        {

          var recognition = new webkitSpeechRecognition();

          recognition.continuous = false;
          recognition.interimResults = false;
          recognition.lang = "en-US"; //language
          recognition.start();

          recognition.onresult = function (e)
           {
            document.getElementById('transcript').value = e.results[0][0].transcript;    //dump the recognised word/sentence in the text box
            recognition.stop();  
            document.getElementById('labnol').submit();   
           };
          recognition.onerror = function(e) 
          {
            recognition.stop();
          }
        }
        else
        {
          //print that mic problem/mic cant run in your system
        }
      }

    </script>






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


$t_id=uniqid();



                     
$query = "INSERT into ".$username."(id,name,p_name,p_type,p_cost,time_req,day,del_date,img2,img3,img4,f1,f2,f3,f4,f5)  SELECT * FROM ".$username.''.$check." " ;  
$result = mysqli_query($connect, $query);
 while($rowwee = mysqli_fetch_array($result))
 {

$id=$row['id'];
$query22 = "UPDATE ".$username." SET del_date='".$t_id."'  " ;  
$result22 = mysqli_query($connect, $query22); 

 }


 






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


       if($result!=-1)  
       {
                          
                echo '<script type="text/javascript">';
                echo'alert("Payment Failed!!");';
                echo 'window.location.href="displaypage.php";';
                echo'</script>';

        }        
                
          




?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="checkoutfinish.css">
<script type="text/javascript" href="card.js"></script>

<head>
  <title>Phanthom.com</title>
</head>
<body>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="checkout-panel">
  <div class="panel-body">
    <h2 class="title">Checkout</h2>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active"></div>
      <div class="step" ></div>
      <div class="step" ></div>
    </div>

 <span style="position: relative;top: 40%; font-size: 40px; left: 20%; "><b>Order Placed Successfully</b></span>
 


    
    <div class="image" style="position: relative; left: 18%; top: 5%;">
       
      <img src="orderplace2.gif" width="150px;" height="130px;" style="position: relative;left: 24%;">
<br><br><br><br><br><br><br><br><br>

 <span style="position: relative;top: 40%; font-size: 20px; left: 10%; "><b>Your transaction id - <?php echo $t_id; ?></b></span>

    </div>
  </div>
 
  <div class="panel-footer">
   
    <button class="btn next-btn" onclick="location.href = 'displaypage.php';" style="position: relative;left: 40%;">Continue Shoping</button>
  </div>
</div>

</body>
</html>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>


           <style>

            .container_bot {
              padding: 50px;
              background-color: #111;
              position: absolute;
              top: 20%;
              left: 22%;
              border-radius: 20px;
              height: 45%;
              width: 17%;

            }



            hr {
              border: 1px solid #f1f1f1;
              
            }

            </style>

             <style>
    body{
      background-image:linear-gradient(rgba(0,0,0,0.0),rgba(0,0,0,0.0)),url(lbg6.jpg); height: 100vh;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      
      color: #000;
      margin: 0;
      overflow-y: hidden;
    }
  </style>


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
