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
    <title>Phantom- About</title>

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


  </style>













<!--            ------------------------------------------------------------------------------------------------------------------   -->
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p></p>
  <p></p>
  <br><br>
</div>

<!-- <h2 style="text-align:center"><b>Our Team</b></h2>  -->
<br><br><br>

<center>

<div class="row">
  <div class="column" style="position: relative;left: 12%;">
    <div class="card">
      <img src="rahul.jpg" style="width:100%">
      <div class="container">
        <h2>Rahul Avabrath</h2>
        <p class="title">CEO & Founder</p>
        <p>Phantom.com</p>
        <p>rahulavabrath@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>


  
  <div class="column" style="position: relative;left: 21%;">
    <div class="card">
      <img src="gn.jpg"  style="width:100%; height: 84%;">
      <div class="container">
        <h2>Rahul G N</h2>
        <p class="title">Co-Founder</p>
        <p>Phantom.com</p>
        <p>rahulgn14@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>
</center>

</body>
</html>




























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
                        <div class="applogo" style="width: 30%; height: 30%; position: absolute; bottom: 40%; left: 69%;  ">
                            <a0><img src="applogo.jpg"></a0>
                        </div></div></td> 

                    <div class="web_desc" style="position: absolute; bottom: 27%; left: 12%; font-style: italic;font-family: Comic Sans MS, cursive, sans-serif; ">    
                      <p4> Phantom.com is a shoping website where  </p4><br>
                      <p5>you can shop gadgets,electronic items</p5><br>
                      <p6> and also chat with the other users.</p6>
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
                    <div class="facebook" style="font-size: 20px; "><a href="https://www.facebook.com/profile.php?id=100018661033536"> <img src="fb4.png" style="border-radius: 10px; width: 50px;height: 50px; position: absolute; bottom: -20%; right: 100%;" ></a> </div><br>
                    <div class="instagram" style="font-size: 20px;"> <a href="https://www.instagram.com/avabrathrahul/"><img src="insta.jpg" style="width: 50px;height: 50px; position: absolute; bottom: -20%; right: 50%; " ></a> </div><br>
                    <div class="twitter" style="font-size: 20px;"><a href="https://twitter.com/AvabrathRahul"> <img src="tw1.png" style="border-radius: 10px; width: 50px;height: 50px;  position: absolute; bottom: -20%; right: 0%; " ></a> </div><br>
                    
                  </div>
              </td>

        <!-- <div class="bot_left">Help center 24x7</div>-->
        
       </div><hr5 style="color: white; ">

       <div class="bot_foot">
                <div class="bot" ><p1 style="position: relative; left: 45%;">&copy;  Phantom.com | Created by RR Brothers</p1></div>
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
