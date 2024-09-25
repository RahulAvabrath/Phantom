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
        right: 1px;
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


   
      <div class="speech" style="width: 100%; height: 14%; top: 0%; position: absolute; left: 0%;">
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
  background-color: #333;
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
<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>

<style>
    body{
      background-image:linear-gradient(rgba(0,0,0,0.0),rgba(0,0,0,0.0)),url(lbg6.jpg); height: 100vh;
            background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      
    }
</style>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body  style="overflow-x: hidden;">


;
</style>

<div class="slideshow-container" onclick="location.href = 'displaypage.php';"

>
<br><br><br><br><br>
<div class="mySlides fade">
 
  <img src="product images/Banners/ban1.jpg"  style="position:absolute; left:-60%;  width:220%">

</div>

<div class="mySlides fade">
  
  <img src="product images/Banners/ban2.jpg"  style="position:absolute; left:-60%;  width:220%">
  
</div>

<div class="mySlides fade">
  
  <img src="product images/Banners/ban3.jpg"  style="position:absolute; left:-60%;  width:220%">
  
</div><br>
<div style="text-align:center; position: absolute; top: 420%; left: 49%;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
<br>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>














<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 



<div class="headding" style="background-color: #333; height:260px; width: 100%; position: relative;top: -0%; " >
<br><br><br>
<h1 style="color: #fff;  font-size: 43px; position: absolute;left: 10%; font-family: cursive;" >Latest Products</h1>


</div>





<div class="main_btn_mobile" onclick="location.href = 'displaypage.php'; " style="border: 2px solid black; background-color: #98F342; overflow-x: hidden;">
  <button style="position: absolute; top: 137%; left: 22%; width: 200px; height: 50px; border-radius:50px;background-color: red; color: white; font-size: 22px;">Explore more</button>
  <button type="button"  style="width: 100%; height: 10% ; opacity: 0.0;  ">Click Me!</button>
 
  <div class="data" style="  
  font: 100 45px/1.3 'Arizonia', Helvetica, sans-serif;
  color: #2b2b2b;
  text-shadow: 4px 4px 0px rgba(0,0,0,0.1);">


    <!--<p2 style="position: absolute; left: 7%; top: 40%;">People who smile while they are alone used to be called insane, until we invented smartphones and social media.</p2> -->
    <p3 style="position: absolute; left: 5%; top: 85%;" ><b>Smartphones are tools which fools fiddle with when they are around people </b> </p3>
    <p4 style="position: absolute; left: 7%; top: 90%;"><b>that they don't have the courage, or the intellect, to converse with.</b></p4>
  </div>  

  <div class="phone_data" style="  font: 100 45px/1.3 'URW Chancery L', Helvetica, sans-serif; font-family: cursive;color: #2b2b2b; text-shadow: 4px 4px 0px rgba(0,0,0,0.1);">
    <p1  style="position: absolute; left: 12%; top: 105%; font-size: 40px;"><b><u>Samsung Galaxy M51</u></b></p1>
    <p6 style="font-size: 80px; position: absolute;left: 13.5%; top: 111.5%;">.</p6>
    <p4  style="position: absolute; left: 15%; top: 112%; font-size: 25px;"><b>Upgrade to Meanest Monster</b></p4>
    <p6 style="font-size: 80px; position: absolute;left: 13.5%; top: 116.5%;">.</p6>
    <p2 style="position: absolute; left: 15%; top: 117%; font-size: 25px;"><b>Meanest battery - 7000mh</b></p2>
    <p6 style="font-size: 80px; position: absolute;left: 13.5%; top: 121.5%;">.</p6>
    <p3 style="position: absolute; left: 15%; top: 122%; font-size: 25px;"><b>Meanest performance</b></p3>
    <p6 style="font-size: 80px; position: absolute;left: 13.5%; top: 106.5%;">.</p6>
    <p5 style="position: absolute; left: 15%; top: 127%; font-size: 25px; "><b>64Mp Sony IMX 682 sensor Meanest camera</b></p5>
  </div>
 <img src="m51.png" style="position: relative; left: 55%;">
  <br><br><br>
</div><br><br><br><br>





<div class="main_btn_laptop" onclick="location.href = 'displaypage.php';" style="border: 2px solid black; background-color: #CF8BF4;">

  <div class="data" style="  
  font: 100 48px/1.3 'Arizonia', Helvetica, sans-serif;
  color: #2b2b2b;
  text-shadow: 4px 4px 0px rgba(0,0,0,0.1);">


    <!--<p2 style="position: absolute; left: 7%; top: 40%;">People who smile while they are alone used to be called insane, until we invented smartphones and social media.</p2>-->
    <p3 style="position: absolute; left: 7%; top: 168%;"><b>A goal of Twitch is to be wherever gamers are, whether it's on laptops and  </b> </p3>
    <p4 style="position: absolute; left: 12%; top: 173%;"><b>handheld devices or integrated into gaming consoles and software.</b></p4>
  </div>  

  <div class="phone_data" style="  font: 100 45px/1.3 'URW Chancery L', Helvetica, sans-serif; font-family: cursive;color: #2b2b2b; text-shadow: 4px 4px 0px rgba(0,0,0,0.1);">
    <p1  style="position: absolute; left: 15%; top: 186%; font-size: 40px;"><b><u>Acer Nitro 5 Gaming Laptop</u></b></p1>
    <p6 style="font-size: 80px; position: absolute;left: 16.5%; top: 190%;">.</p6>
    <p4  style="position: absolute; left: 18%; top: 195%; font-size: 25px;"><b>Nitro Booster with fast cooling technology.</b></p4>
    <p6 style="font-size: 80px; position: absolute;left: 16.5%; top: 195%;">.</p6>
    <p2 style="position: absolute; left: 18%; top: 200%; font-size: 25px;"><b>NVIDIA GEFORCE GTX-1050T  Graphic Card.</b></p2>
    <p6 style="font-size: 80px; position: absolute;left: 16.5%; top: 200%;">.</p6>
    <p2 style="position: absolute; left: 18%; top: 205%; font-size: 25px;"><b>8GB RAM, WIN 10-Operating System.</b></p2>
   
    
  </div>

<br><br><br><br><br><br><br><br>
  <button style="position: absolute; top: 212%; left: 25%; width: 200px; height: 50px; border-radius:50px;background-color: red; color: white; font-size: 22px;">Explore more</button>
  <br><br><br><br>
  <img src="acer.png" style="position:relative; left: 67%;">
<br><br><br><br><br><br>
</div><br><br><br><br>





<div class="main_btn_tv" onclick="location.href = 'displaypage.php';" style="border: 2px solid black; background-color: #F6C156;">
  <br><br><br><br>

  <div class="data" style="  
  font: 100 40px/1.3 'Arizonia', Helvetica, sans-serif;
  color: #2b2b2b;
  text-shadow: 4px 4px 0px rgba(0,0,0,0.1);">


    <!--<p2 style="position: absolute; left: 7%; top: 40%;">People who smile while they are alone used to be called insane, until we invented smartphones and social media.</p2>-->
    <p3 style="position: absolute; left: 45%; top: 236%;"><b>  If you believe that your thoughts originate inside your brain,  </b> </p3>
    <p4 style="position: absolute; left: 40%; top: 241%;"><b>do you also believe that television shows are made inside your television set?.</b></p4>
  </div>  

  <div class="phone_data" style="  font: 100 45px/1.3 'URW Chancery L', Helvetica, sans-serif; font-family: cursive;color: #2b2b2b; text-shadow: 4px 4px 0px rgba(0,0,0,0.1);">
    <p1  style="position: absolute; left: 50%; top: 252%; font-size: 32px;"><b><u>Sony Bravia (45 inch) Full HD TV</u></b></p1>
        <p6 style="font-size: 80px; position: absolute;left: 51.5%; top: 255%;">.</p6>
    <p4  style="position: absolute; left: 53%; top: 260%; font-size: 25px;"><b>Resolution: Full HD (1920x1080) | HDR</b></p4>
    <p6 style="font-size: 80px; position: absolute;left: 51.5%; top: 260%;">.</p6>
    <p2 style="position: absolute; left: 53%; top: 265%; font-size: 25px;"><b>NVIDIA GEFORCE GTX-1050T  Graphic Card.</b></p2>

   
    
  </div>

  <button style="position: absolute; top: 275%; left: 62%; width: 200px; height: 50px; border-radius:50px;background-color: red; color: white; font-size: 22px;">Explore</button>
 <br><br>
  <img src="sonytv.png" style="position: relative; left: 7%;">
<br><br><br><br><br><br><br>
</div><br><br><br><br>




<div class="main_btn_washingmachine" onclick="location.href = 'displaypage.php';" style="border: 2px solid black; background-color: #DEDB2F;">
<br><br><br>
  <div class="data" style="  
  font: 100 48px/1.3 'Arizonia', Helvetica, sans-serif;
  color: #2b2b2b;
  text-shadow: 4px 4px 0px rgba(0,0,0,0.1);">


    <!--<p2 style="position: absolute; left: 7%; top: 40%;">People who smile while they are alone used to be called insane, until we invented smartphones and social media.</p2>-->
    <p3 style="position: absolute; left: 18%; top: 301%;"><b>Soap operas have the same hypnotic power as witnessing clothes turning in a washing machine</b> </p3>
    <p4 style="position: absolute; left: 37%; top: 307%;"><b> - if you don't look away quickly, you'll be watching until the end.</b></p4>
  </div>  <br><br><br><br><br><br><br><br><br><br>
    <img src="lgwm.png" width="500px;" height="500px;" style="position: relative; left: 10%;">

  <div class="phone_data" style="  font: 100 45px/1.3 'URW Chancery L', Helvetica, sans-serif; font-family: cursive;color: #2b2b2b; text-shadow: 4px 4px 0px rgba(0,0,0,0.1);">
    <p1  style="position: absolute; left: 50%; top: 320%; font-size: 40px;"><b><u>Haler Washing Machine</u></b></p1>
    <p6 style="font-size: 80px; position: absolute;left: 51.5%; top: 324.5%;">.</p6>
    <p4  style="position: absolute; left: 53%; top: 330%; font-size: 25px;"><b>Fully Automatic,Best Wash Quality, Energy and Water efficient</b></p4>
    <p6 style="font-size: 80px; position: absolute;left: 51.5%; top: 329.5%;">.</p6>
    <p2 style="position: absolute; left: 53%; top: 335%; font-size: 25px;"><b>Capacity 6 Kg: Suitable for bachelors & couples</b></p2>
    <p6 style="font-size: 80px; position: absolute;left: 51.5%; top: 334.5%;">.</p6>
    <p2 style="position: absolute; left: 53%; top: 340%; font-size: 25px;"><b>Wash Programs: 8 wash programs</b></p2>
    <p6 style="font-size: 80px; position: absolute;left: 51.5%; top: 339.5%;">.</p6>
    <p2 style="position: absolute; left: 53%; top: 345%; font-size: 25px;"><b>5 Star energy rating - Best in class efficiency</b></p2>
   
    
  </div>






<button style="position: absolute; top: 357%; left: 62%; width: 200px; height: 50px; border-radius:50px; background-color: red; color: white; font-size: 22px;">Explore</button>
    <br><br><br><br><br><br>

  
</div>


<br><br><br><br><br><br><br>
  <div class="footer" style="width: 100%; height: 400px; background-color: #000; bottom: 0%;">
     
     <style >

      body{
        margin: 0;
      }
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
              height: 70%;
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

             

                  <div class="container_bot" style="color: white; position: absolute; bottom: 75%; left: 45%;" >
                    <form action="displaypage.php">
                    <h1 style="font-size: 18.5px;"><b>Any querry? mail us </b></h1>
                         <hr><br>

                                <input type="email" name="email" placeholder=" Enter your email-id" style="border-radius: 5px; height: 40px; width: 100%;"><br>
                                <input type="text" name="querry" placeholder=" Type your querry here" style="border-radius: 5px;height: 40px;width: 100%;"><br>
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
