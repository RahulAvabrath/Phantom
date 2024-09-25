<?php
  session_start();    // ---------------------------------------------------------------------------------------------------------------------------------------to call the variable to next page
  ini_set('display_errors',0);// to hide the warnings
  $cartcount=$_SESSION["cartcount"];
  $check="checkout";
  // $fname=$_SESSION["name"];
   $username=$_SESSION["username"];

   if($username=="")
   {
      $username="LOGIN";
                      echo '<script type="text/javascript">';
                echo'alert("Login to check cart");';
                echo 'window.location.href="test22.php";';
                echo'</script>';    
   }
   else
   {
      $username=$_SESSION["username"];
   }




      if($cartcount=="0")
   {
                echo '<script type="text/javascript">';
                echo'alert("Empty cart, Add items to view it..");';
                echo 'window.location.href="displaypage.php";';
                echo'</script>';       
   }

         if($cartcount=="")
   {
                echo '<script type="text/javascript">';
                echo'alert("Empty cart, Add items to view it..");';
                echo 'window.location.href="displaypage.php";';
                echo'</script>';       
   }


  
   
 

?><!-- Start of mic rec thing working-->
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
            <form id="labnol" method="post" action="search.php">
                  <input type="text" name="search" id="transcript" placeholder="         Say Something" style="position: absolute;top: 20%; left: 35%;" />
                  <img onclick="startDictation()" src="mic00.png"  width="60px;" height="53px;" style="position: absolute;top: 29%; left: 56.5%" />
      
          </form>
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
  background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(lbg6.jpg); height: 100vh;

      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      color: #000;
  
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
   <!-- end of mic rec thing working--> 


<?php 

error_reporting(E_ALL);
ini_set('display_errors',0);// to hide the warnings
 //$rr=$_POST['s'];
 
if(isset($_GET["id"]))  
 { 
     
      $connect = mysqli_connect("localhost", "root", "", "rmart");
$c = mysqli_connect("localhost", "root", "", "rmart");

                     
	$query = "DELETE FROM ".$username.''.$check." WHERE id='{$_GET["id"]}'" ;  
	$q="SELECT COUNT(id) as count from checkout";
	
    $result = mysqli_query($connect, $query);
    

    	        echo '<script type="text/javascript">';
                echo'alert("Item deleted Successfully!!");';
                echo 'window.location.href="check.php";';
                echo'</script>';
            
                

    $r=mysqli_fetch_array($c,$q);
    if($rm = mysqli_fetch_array($r))  
    {  
    	        echo "y";
    } 

                
                
          

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phantom-Cart</title>

   

    <!-- Bootstrap CDN 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">-->
</head>
<body>
<div class="pcart">
  <center>
      
      
  </center>
</div>


<style>

</style>

  <form>
   
    	  <div class="header" style="width: 100%; height: 15%;">
    
  		</div>
    <table class="table table-bordered" align="center" style="width: 80%;">  
      <div class="checkout_table_data" >
    
</div>


<div style="background-color: #999; width: 90%; position: relative; left: 4%;">
<hr style="width:99.8%; position:relative;  ;border: 2px solid black; background-color: #000; ">
<br><br><br>
<P1 style="font-size: 40px;position: relative; left:15%;">Phantom Cart</P1>
<P1 style="font-size: 22px;position: relative; left:63.5%;">Price</P1>
<br>

<hr style="width:99.8%; position:relative;  ;border: 2px solid black; background-color: #000; "></div>
 <center>
<div class="table_data" style="color: #fff;">

                <?php
/*                  if($darkmode_color=="true")
                  {
                    $color="#fff";
                  }
                  else
                  {
                    $color="#000";
                  }  */


                      $connect = mysqli_connect("localhost", "root", "", "rmart");
                      
                      $rand_num=rand(1,4);   //-------------------------------------------------------------------------------------------------------------------print rand number
                      $s_count=0;
                      $limit=1;
                      
                      
                      $query = "SELECT *  FROM ".$username.''.$check." " ;  
                      $result = mysqli_query($connect, $query); 

                     

                      //echo "<table border='2'>";
                while($row = mysqli_fetch_array($result))  
                {  
                  if($s_count<$limit)
                  {
                    if($s_count==0)
                    {
                      echo '<tr>';

                    }
                     echo '<th>'.$color.'
                        <center><div class="displaypage"  >
                          
                          <td><a  href="detail_display.php?id='.$row['id'].'" ><div class="disp_img" style=""><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="250" width="250" class="img-thumnail"  /> </div></a></td>
                          
                          <td><a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="position:relative;left:-30%; font-size:25px;"><strong>'.$row['p_name'].'&nbsp'.$row['p_type'].'</strong></p1></a><br>
                          <p style="position:relative;left:-30%; font-size:18px;color:green;">In Stock</p><br><br><br>


                          <label style=" position:relative;left:-31%;"><b>Qty:</b></label><input type="number" value="1" style=" width:45px; height:30px;padding-left: 5px;border: 3px solid black; border-radius:7px; position:relative;left:-30%;"/>

                          
                           <p2 style="position:relative;left:-26%; font-size:20px;">| &nbsp&nbsp&nbsp&nbsp<a href="check.php?id='.$row['id'].'" class="btn btn-success">Delete</a></p2></td>
                          
                          <td><br><br><br><br><h4 class="text-danger" style=" color:red;position:relative;left:-30%; font-size:26px;">Rs.'.$row['p_cost'].'</h4>
                          <br>
  <br><br><br><br><br><br>                       

                          
                          </td>
                          </th>
   
   

                  
                     </div>   
                     


                  ';
                  }

                  else
                  {
                    $s_count=0;
                    echo "</tr><tr>";
                    echo '<th>'.$color.'
                        <center><div class="displaypage"  >
                          
                          <td>

<hr style="width:270%; position:relative; left:-7%;border: 1px solid black; background-color: #000;">

                        <a  href="detail_display.php?id='.$row['id'].'" ><div class="disp_img" style=""><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="250" width="250" class="img-thumnail"  /> </div></a></td>
                          
                          <td><a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="position:relative;left:-30%; font-size:25px;"><strong>'.$row['p_name'].'&nbsp'.$row['p_type'].'</strong></p1></a><br>
                          <p style="position:relative;left:-30%; font-size:18px;color:green;">In Stock</p><br><br><br>


                          <label style=" position:relative;left:-31%;"><b>Qty:</b></label><input type="number" value="1" style=" width:45px; height:30px;padding-left: 5px;border: 3px solid black; border-radius:7px; position:relative;left:-30%;"/>

                          
                           <p2 style="position:relative;left:-26%; font-size:20px;">| &nbsp&nbsp&nbsp&nbsp<a href="check.php?id='.$row['id'].'" class="btn btn-success">Delete</a></p2></td>
                          
                          <td><br><br><br><br><h4 class="text-danger" style=" color:red;position:relative;left:-30%; font-size:26px;">Rs.'.$row['p_cost'].'</h4>
                          <br>
  <br><br><br><br><br><br>                       

                          
                          </td>
                          </th>
   
   

                  
                     </div>   

                    ';
                    
                  }
                  $s_count++;
                }

   
                echo "</tr></table";


                echo "-------------------------------------------------------------";
                
                 
                
            ?> 
            <?php 

  $q="SELECT SUM(p_cost) as total FROM ".$username.''.$check." " ;  
  $result = mysqli_query($connect, $q); 

  while($row = mysqli_fetch_array($result))  
                {   $total=$row['total'];
              
            }


?>

                          <tr>  
                               <td colspan="2" align="right" style="font-size: 25px;">  <br><br><br>
                                <hr style="width:310%; position:relative; left:-21%;border: 2px solid black; background-color: #000;"><br><br>
                                <b style="text-align: center; font-size: 30px;  position: relative; left: 95%; ">Total : </b></td>  
                               <td align="right" style="text-align: center; font-size: 30.075px; color: red; position: relative; left: 22%; "> <br><br><br><br><br><b>Rs. <?php echo number_format($total, 2); ?></b>

                                  <div class="checkout" style="color: white; position: absolute; bottom: 75%; left: 17%; text-align: left;" >


                                        <h1 style="font-size: 27px; text-align: left;position: relative; left: 27%;"><b>Final Checkout</b></h1>
                                        <hr><br>

                                        <label style="position: relative;left: 15%; font-size: 24px;"> Total Price : </label> <span style="position: relative; left:18%;font-size: 24px;">Rs. <?php echo number_format($total, 2); ?></span><br><br>
                                        <label style="position: relative;left: 18.5%;font-size: 24px;"> Tax (1%) : </label> <span style="position: relative; left:22%;font-size: 24px;">Rs. <?php echo number_format($total/100, 2); ?></span><br><br>
                                        <label style="position: relative;left: 5.5%;font-size: 24px;"> Deliver charge : </label> <span style="position: relative; left:9.5%;font-size: 24px;">Rs.50</span><br><br><br>
                                        <hr><br>
                                        <?php $total_all=$total+(($total)/'100')+'50'; ?>
                                        <label style="position: relative;left: 15%;"> Subtotal : </label> <span style="position: relative; left:83;">Rs. <?php echo number_format($total_all, 2); ?> </span><br><br>
                                          <br>
                                                    <div class="proceed_to_checkout" style=" position:relative; left:22%;  ">
                                                              
                                                              <p2 ><button class="btn next-btn"><a  href="billingaddress.php?id='.$row['id'].'" style="color:#fff;">Proceed to Checkout</a></button></p2>

                                                    </div> 
                                   </div></td> 

                               <td></td>  

                          </tr>  

<style>
  .checkout{
                  padding: 50px;
              background-color: green;
              position: relative;
              top: 200%;
            
              border-radius: 20px;
              height: 280%;
              width: 60%;
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
    }


  .panel-footer {
  display: flex;
  width: 100%;
  height: 96px;
  padding: 0 80px;
  
  justify-content: space-between;
  align-items: center;
}
.btn {
  font-size: 22px;
  width: 273px;
  height: 58px;
  cursor: pointer;
  transition: all .2s ease-in-out;
  letter-spacing: 1px;
  border: none;
  border-radius: 23px;

}
 
.back-btn {
  color: #f62f5e;
  background: #fff;
}
 
.next-btn {
  color: #fff;
  background: #f62f5e;
}
 
.btn:focus {
  outline: none;
}
 
.btn:hover {
  transform: scale(1.1);
}

.blue-border {
  border: 1px solid rgb(110, 178, 251);
}

.warning {
  border-color: #f62f5e;
}
  </style>




</table>   <br><br><br> 



</div>
<?php 

  $q2="SELECT COUNT(id) as totcount FROM ".$username.''.$check." " ;  
  $r2 = mysqli_query($connect, $q2); 

while($row = mysqli_fetch_array($r2))  
{  
     $totcount=$row['totcount'];
       
}

$_SESSION["totcount"]=$totcount; 
?>
                
</center>
      
  </form>

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <div class="footer" style="width: 100%; height: 400px; background-color: #000; bottom: 0%;">
     
     <style >
             .footer-main{

              background: #000;
              color: #fff;
              height: 500px;
              width: 100%;
              bottom: 0%;
              position: relative;
              text-align: center;
             }






            .footer-main .bot{
             bottom: 0%;
              left: 44%;
              position: absolute;
              text-align: center;
             }

             .bot_foot{
              background: #000;
              color: #fff;

              bottom: 0%;
              position: relative;
              
             }

           .footer-main .bot_left{
             bottom: 0%;
              left: 15%;
              position: absolute;
              text-align: center;
             }



           </style>
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

            input[type=text], input[type=password], textarea, select{
       
              padding: 2px;
              margin: 5px 0 22px 0;
              display: inline-block;
              border: none;
              background: #f1f1f1;
            }


            hr {
              border: 1px solid #f1f1f1;
              
            }

            </style>


           <div class="footer-main">
             <td><div class="f-details">
                        <div class="applogo" style="width: 30%; height: 30%; position: absolute; bottom: 35%; left: 69%;  ">
                            <a0><img src="applogo.jpg"></a0>
                        </div></div></td> 

                    <div class="web_desc" style="position: absolute; bottom: 27%; left: 8.5%; font-style: italic;font-family: Comic Sans MS, cursive, sans-serif; ">    
                      <p4> Phantom.com is a shoping website where  </p4><br>
                      <p5>you can shop gadgets,electronic items.</p5><br>
                      <p6>Users can also chat with the other users using Phantom Chat.</p6>
                    </div>  
              <td><div class="f-logo">
                      <div class="clogo" style=" position: absolute; bottom: 45%; left: 15%; ">
                            <a href="displaypage.php"><img src="phantom6.jpg" width="200px;" height="200px;" ></a>
                        </div>
              </div></td>

             

                  <div class="container_bot" style="color: white; position: absolute; bottom: 75%; left: 41%;" >
                    <form action="displaypage.php">
                    <h1 style="font-size: 23px;"><b>Any querry? mail us </b></h1>
                         <hr><br>

                                <input type="email" name="email" placeholder=" Enter your email-id" style="border-radius: 5px; height: 40px; width: 70%;"><br>
                                <input type="text" name="querry" placeholder=" Type your querry here" style="border-radius: 5px;height: 40px;width: 70%;"><br>
                                <input type="submit" name="send" value="SEND" style="width:20%; height: 10%; position: absolute; left: 38%;">
                     </form>           
                </div>



                 <!-- <div class="hr" >
                  
                  <hr style="position: absolute;bottom: -3.5%; width: 100%;   ">
                  
                                
                </div>-->

                </form>
                

              





             <!-- <div class="vl" style="position: absolute; left: 35%; top: 25%;  border-left: 6px solid white; height: 300px;"></div>-->
              <td><div class="f-socialmedias" style="position: absolute; bottom: 20%;right: 10%;">
                 <h3 style=" ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3> <br><br>
                    <div class="facebook" style="font-size: 20px; "><a href="https://www.facebook.com/profile.php?id=100018661033536"> <img src="fb4.png" style="border-radius: 10px; width: 50px;height: 50px; position: absolute; bottom: -20%; right: 150%;" ></a> </div><br>
                    <div class="instagram" style="font-size: 20px;"> <a href="https://www.instagram.com/avabrathrahul/"><img src="insta.jpg" style="width: 50px;height: 50px; position: absolute; bottom: -20%; right: 75%; " ></a> </div><br>
                    <div class="twitter" style="font-size: 20px;"><a href="https://twitter.com/AvabrathRahul"> <img src="tw1.png" style="border-radius: 10px; width: 50px;height: 50px;  position: absolute; bottom: -20%; right: 0%; " ></a> </div><br>
                    
                  </div>
              </td>

        <!-- <div class="bot_left">Help center 24x7</div>-->
        
       </div>
        <div class="hr1" style="border-bottom: 1px solid white"></div>

       <div class="bot_foot" style="height: 30px;">
        <p style="font-size: 1px;">a</p>
                <div class="bot" ><p1 style="position: relative; left: 45%; ">&copy;  Phantom.com | Created by RR Brothers</p1></div>
      </div>

  </div>
</html>        


<!-- cart quantity-->
<?php  
session_start();  
   $connect = mysqli_connect("localhost", "root", "", "rmart");


                   
                      
$query = "SELECT COUNT(C.id) as count FROM ".$username.''.$check." C " ;  
$result = mysqli_query($connect, $query); 


if($row = mysqli_fetch_array($result))  
{
    echo $row['count']; 
}

$_SESSION["cartcount"] = $row['count'];

echo $_SESSION["cartcount"];
?>
