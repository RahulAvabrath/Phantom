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

?>
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

if($cartcount=='0')
{

}
else
{
  
}
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
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
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
            <span class="accname" style="color:#fff ; font-size: 35px; position: absolute; right: 22%; top: 5%; text-transform:uppercase;"><b><?php echo "$username";?><b></span>



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
   <!-- end of mic rec thing working--> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phantom.com</title>

</head>
<body >
  <style>
    body{
      background-image:linear-gradient(rgba(0,0,0,0.0),rgba(0,0,0,0.0)),url(lbg6.jpg); height: 100vh;
            background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      color: #000;
     
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
  font-size: 16px;
  width: 163px;
  height: 48px;
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























<!-- side bar line -->
  <style>
.vl {
  border-left: 5px solid black;
  height: 1300px;
}
</style>
  <script type="text/javascript">

   function changeFunc($i) {
   //alert($i);
    if($i=="0")
    {
      
        location.replace(href="displaypage.php")
    }
    if($i=="1")
    {
      
        location.replace(href="displaypage_l_h.php")
    }
    if($i=="2")
    {
      
        location.replace(href="diaplaypage_ll.php")
    }
   }



   function price_check()
   {
   // alert($_SESSION["min"]);
    location.replace(href="displaypage_p.php")
   }

  </script>






  <div class="side_options" style="position: fixed;left: 3%; top: 20%;">
      <h1></h1>
      <br><br><br><br>

      <!-- ------------------------------------------------------------------------------->
      <div class="custom-select" >
            Sort by:
            <select style="width:170px; height: 40px; font-size: 15px; text-align: center; border-radius: 8px;" onchange="changeFunc(value);">
              <option value="0" >  Price high to low</option>
              <option value="1"><a href="detail_display.php">Price low to high</a></option>
              <option value="2">Latest</option>
              
            </select>
      </div>

      <!-- ------------------------------------------------------------------------------->

      <br>
      <div class="hr1" style="border-bottom: 2px solid black"></div>
      <br>


      <!-- ------------------------------------------------------------------------------->
      <div class="price">
        <h1 style="font-size: 20px;">Price range</h1><br>
        <form id="001" method="post" action="displaypage_p.php">
        <input type="number" id="transcript" name="min" style="width: 80px; height: 35px;border-radius: 8px;" > -
        <input type="number" id="transcript" name="max" style="width: 80px; height: 35px;border-radius: 8px;  ">
        <input type="submit" name="sbtn" value="Go" style="width: 50px; height: 35px; position: relative;left: 5%; border-radius: 10px;">


        <p style="position: fixed; left: 4.2%;">Min</p>
        <p style="position: fixed; left: 8.5%;">Max</p>
        </form>
        <?php 

        $_SESSION["min"]=$_POST['min'];
        $_SESSION["max"]=$_POST['max'];

        ?>
      </div>


      <!-- ------------------------------------------------------------------------------->

      <br><br><br>
      <div class="hr1" style="border-bottom: 2px solid black"></div>
      <br>

      <!-- ------------------------------------------------------------------------------->

      <div class="e_data" style="position: fixed;left: 3%; ">
        <h1 style="font-size: 23px;">Category</h1>
      
        <li>Mobiles</li>
        <li>Laptops</li>
        <li>Tv</li>
        <li>Washing Machines</li>


      </div>

      <!-- ------------------------------------------------------------------------------->
      <br><br><br><br><br><br><br><br><br><br><br>
      <div class="hr1" style="border-bottom: 2px solid black"></div>
      <br>

      <!-- ------------------------------------------------------------------------------->



      <div>
        <h1 style="font-size: 20px;">Brand Partners</h1>
        <li>Apple</li>
        <li>Samsung</li>
        <li>LG</li>
        <li>HP</li>
        <li>Acer</li>
      </div>


      <!-- ------------------------------------------------------------------------------->


  </div>
<div class="vl" style="position: absolute;left: 17%; top: 21%;"></div>














  <form>
    <center style="position: relative;left: -5%;" >
    <table class="table table-bordered" align="center">  


<br><br><br><br>
<h1 style="position: relative;left: -15%; font-size: 40px;">Search results</h1>

                <?php  
                      $connect = mysqli_connect("localhost", "root", "", "rmart");
                      $rr=$_POST['search'];
                      $rand_num=rand(1,4);   //-------------------------------------------------------------------------------------------------------------------print rand number
                      $s_count=0;
                      $limit=2;
                       //---------------------------------------------------------------------------------------------------------session to call variable to next page


                   
                      

                      $query = "SELECT * FROM tbl_images where p_name='$rr' ORDER BY p_cost desc" ;  
                      $result = mysqli_query($connect, $query); 
                     

                      //echo "<table border='2'>";
                while($row = mysqli_fetch_array($result))  
                {  
                  if($s_count<$limit)
                  {
                    if($s_count==0)
                    {

                      echo "<table><tr>";

                    }
                    echo '

                   
                        <center><div class="displaypage" >
                          <th><a  href="detail_display.php?id='.$row['id'].'" style="color:#fff;position:relative; left:0%;"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="300" width="300" class="img-thumnail" style="margin-right:100px; margin-bottom:50px;" /> </a>
                          
                          <td><br><br><a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:40%; font-size:27px;"><strong>'.$row['p_name'].'&nbsp'.$row['p_type'].'</strong></p1></a>

                          <h4 class="text-danger" style="position:relative; left:40%; color:red;font-size:25px;">Rs.'.$row['p_cost'].'</h4>
                          

                          <a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:35%; font-size:20px;"><li>'.$row['f1'].'</li></p1></a>
                          <br>
                          <a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:35%; font-size:20px;"><li>'.$row['f2'].'</li></p1></a>
                          <p style="position:relative; left:60%;"><strong> </strong></p>
                          <br>
                          <a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:45%; font-size:20px;">Check more features <p2 style="color:blue;">here</p2></p1></a>

                          <br><br><br>
                          <div class="panel-footer" style="position:relative; left:30%;"> <p2 ><button class="btn next-btn"><a  href="checkout.php?id='.$row['id'].'" style="color:#fff;">ADD To CART</a></button></p2></div>    <br><br> </td>

                          

   

                        </center><div class="line" style="border: 2px solid black;background-color: black; width:70%;position:relative; left:10%;"> </div>
                     </div>   
                     



                     </tr></table><br><br> 



                  ';
                  }
                  else
                  {
                    $s_count=0;
                    echo "";
                    echo '<table ><tr>

                   

                        <center><div class="displaypage" >
                          <th><a  href="detail_display.php?id='.$row['id'].'" style="color:#fff;"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="300" width="300" class="img-thumnail" style="margin-right:100px; margin-bottom:50px;" /> </a>
                          
                          <td><br><br><a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:40%; font-size:27px;"><strong>'.$row['p_name'].'&nbsp'.$row['p_type'].'</strong></p1></a>

                          <h4 class="text-danger" style="position:relative; left:40%; color:red;font-size:25px;">Rs.'.$row['p_cost'].'</h4>
                          

                          <a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:35%; font-size:20px;"><li>'.$row['f1'].'</li></p1></a>
                          <br>
                          <a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:35%; font-size:20px;"><li>'.$row['f2'].'</li></p1></a>
                          <p style="position:relative; left:60%;"><strong> </strong></p>
                          <br>
                          <a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:45%; font-size:20px;">Check more features <p2 style="color:blue;">here</p2></p1></a>

                          <br><br><br>
                          <div class="panel-footer" style="position:relative; left:30%;"> <p2 ><button class="btn next-btn"><a  href="checkout.php?id='.$row['id'].'" style="color:#fff;">ADD To CART</a></button></p2></div>    <br><br> </td>


   

                        </center>
                     </div>   
                     



                     </tr></table><br><br> 




                    ';
                    
                  }
      echo '<div class="line" style="border: 2px solid black;background-color: black; width:70%;position:relative; left:10%;"> </div>';
                  $s_count++;
                }
                echo "</tr></table";
                
            ?> 

</table>
</center>
    

</form>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
