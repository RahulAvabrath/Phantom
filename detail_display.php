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
      background-image:url(lbg6.jpg); height: 100vh;
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

  <form>
    <center>
    <table class="table table-bordered" align="center">  
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>



                <?php  

if(isset($_GET["id"]))  
 { 
     



                      $connect = mysqli_connect("localhost", "root", "", "rmart");
                      
                      $rand_num=rand(1,4);   //-------------------------------------------------------------------------------------------------------------------print rand number
                      $s_count=0;
                      $limit=1;
                       //---------------------------------------------------------------------------------------------------------session to call variable to next page


                   
                      
//$query = "SELECT T.*, COUNT(C.id) as count FROM tbl_images T, checkout C ORDER BY p_cost desc" ;  
                      $query = "SELECT * FROM tbl_images WHERE id=".$_GET["id"]."" ;  
                      $result = mysqli_query($connect, $query); 

                     

                      //echo "<table border='2'>";
                while($row = mysqli_fetch_array($result))  
                {  $p_type=$row['p_type'];
                  if($s_count<$limit)
                  {
                    if($s_count==0)
                    {

                      echo "<table><tr>";

                    }
                    echo '

                   
                        <center><div class="displaypage" >
                          <td></td>
                          
                          <td><br><br><br><br><p1 style="margin-right:100px; position:relative; left:60%; font-size:26px;"><strong>'.$row['p_name'].' '.$row['p_type'].'</strong></p1><br>
                            <p style="position:relative; left:60%; font-size:10px; "></p>

                          <div class="Star" style="position:relative;left:60%;">
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star"></span>
                          </div>


                          <p style="position:relative; left:60%; color:green;"><strong> In Stock</strong></p>
                          
                          <h4 class="text-danger" style="position:relative; left:60%; color:red; font-size:30px;">Rs.'.$row['p_cost'].'</h4>
                          


                          
                          <div class="panel-footer" style="position:absolute; left:49.5%;"> <p2 ><button class="btn next-btn"><a  href="checkout.php?id='.$row['id'].'" style="color:#fff;">ADD To CART</a></button></p2></div>     <br>
                          <br><br><br><br>
                          <p style="position:relative; left:60%;"><strong>Catagory: '.$row['p_type'].' </strong></p>
                          <p style="position:relative; left:60%; color:#000;"><strong>'.$row['p_name'].' is a Phantom trusted product <p1 style="font-size:25px;">&reg;</p1</strong></p>
                          
<br>


                        <div class="a" style=" font-size:12px; position:absolute; left:53.5%;">
                        <img src="nc.png" alt="aa" height="40" width="60" style="background:#fff;"><br><br>
                        <p1 style="">No-Contact</p1><br>
                        <p11 style="">Delivery</p11>
                        </div>

                        <div class="b" style=" font-size:12px; position:absolute; left:58.5%;">
                        <img src="dlv.png" height="40" width="60" style="background:#fff;"><br><br>
                        <p2 style="">Phantom</p2><br>
                        <p22 style="">Delivered</p22><br>

                        </div>




                        <div class="c" style=" font-size:12px;position:absolute; left:63.5%;">
                        <img src="ret.png" height="40" width="60" style="background:#fff;"><br><br>
                        <p3 style="">7-Days</p3><br>
                        <p33 style="">Replacement</p33><br>

                        </div>



                        <div class="d" style=" font-size:12px;position:absolute; left:68.5%;">
                        <img src="wnt.png" height="40" width="60" style="background:#fff;"><br><br>
                        <p4 style="">1-Year</p4><br>
                        <p44 style="">Warrenty</p44><br>

                        </div>


<br><br><br><br><br>

<br><div class="line" style="border: 1px solid black;background-color: #12D1EC; width:122%;position:relative; left:35%;"> </div>
<br><br><div class="feture" style="position:relative; left:-20%;">
                        <p00 style="position:relative; left:68%; font-size:27px;"><strong><u><b> Product Details </b></u></strong></p00><br><br>
                        
                        <p01 style="position:relative; left:70%;font-size:20px;"><li> '.$row['f1'].' </li></p01><br>
                        <p02 style="position:relative; left:70%;font-size:20px;"><li>'.$row['f2'].' </li></p02><br>
                        <p03 style="position:relative; left:70%;font-size:20px;"><li>'.$row['f3'].' </li></p03><br>
                        <p04 style="position:relative; left:70%;font-size:20px;"><li>'.$row['f4'].' </li></p04><br>
                        <p05 style="position:relative; left:70%;font-size:20px;"><li>'.$row['f5'].' </li></p05></td>
                 </div>       




<div class="row">
  <div class="column">
    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="400" width="400" style="cursor:pointer; position:absolute; top:27%; left:23%; border: 4px solid #000;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="data:image/jpeg;base64,'.base64_encode($row['img2'] ).'" height="70" width="70" style="cursor:pointer; position:absolute;left:17%; top:27.5%;border: 2px solid #000;"  onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="data:image/jpeg;base64,'.base64_encode($row['img3'] ).'" height="70" width="70" style="cursor:pointer;position:absolute;left:17%;top:34%;border: 2px solid #000;"  onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="data:image/jpeg;base64,'.base64_encode($row['img4'] ).'" height="70" width="70"  style="cursor:pointer;position:absolute;left:17%;top:40.5%;border: 2px solid #000;"  onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>


<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="data:image/jpeg;base64,'.base64_encode($row['img2'] ).'" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="data:image/jpeg;base64,'.base64_encode($row['img3'] ).'" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="data:image/jpeg;base64,'.base64_encode($row['img4'] ).'" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)" style="left:0%;">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


 <div class="column">
      <img class="demo cursor" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="data:image/jpeg;base64,'.base64_encode($row['img2'] ).'" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="data:image/jpeg;base64,'.base64_encode($row['img3'] ).'" style="width:100%" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" src="data:image/jpeg;base64,'.base64_encode($row['img4'] ).'"style="width:100%" onclick="currentSlide(4)" >
    </div>
  </div>
</div>











                        </center><div class="line" style="border: 2px solid black;background-color: #000; width:80%;position:relative; left:0%;"> </div>
                     </div>   
                     



                     </tr></table><br><br> 






                  ';?>                                              


<script>
      function PrintStars() {

          var _count = document.getElementById("etext").value;
          var count = parseInt(_count);
          document.getElementById("TableArea").innerHTML = "<br>" + count;
          var star = '';
          for (var i = 0; i < count; i++) {

              star += '<img src="star.png" width="30px;" height="30px;">';

          }

          document.getElementById("spandisplay").innerHTML = star;



      }

  </script>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<?php
                  }
                  else
                  {
                    $s_count=0;
                    echo "";
                    echo '<table ><tr>

                   

                        <center><div class="displaypage" >
                          <th><div class="disp_img" style="background-color:#fff;"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="300" width="300" class="img-thumnail" style="margin-right:95px;  margin-left:60px; margin-bottom:50px;" /> </div>
                          
                          <td><br><br><p1 style="margin-right:100px; position:relative; left:60%;"><strong>'.$row['p_name'].'</strong></p1>
                          <p style="position:relative; left:60%;"><strong>'.$row['p_type'].' </strong></p>
                          <h4 class="text-danger" style="position:relative; left:60%; color:red;">Rs.'.$row['p_cost'].'</h4>
                          <br><br><br><br><br>
                          <div class="panel-footer" style="position:relative; left:30%;"> <p2 ><button class="btn next-btn"><a  href="checkout.php?id='.$row['id'].'" style="color:#fff;">ADD To CART</a></button></p2></div>    <br><br> </td>

                          

   

                        </center><div class="line" style="border: 2px solid black;background-color: #12D1EC; width:70%;position:relative; left:5%;"> </div>
                     </div>   
                     



                     </tr></table><br><br> 




                    ';
                    
                  }
   echo '<br><br><br><div class="line" style="border: 2px solid black;background-color: #000; width:100%;position:relative; "> </div>';
                  $s_count++;
                }
                echo "</tr></table";

                }

                     


else
{
  echo '<script type="text/javascript">';
                echo'alert("!!!!  Error in adding item to cart...!!!");';
                echo 'window.location.href="displaypage.php";';
                echo'</script>';

}



                
            ?> 


<!-- The Modal -->
   
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");

var img2 = document.getElementById("myImg2");
var modalImg2 = document.getElementById("img02");

var img3 = document.getElementById("myImg3");
var modalImg3 = document.getElementById("img03");

var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</table>
</center>
    

</form><br><br>
<h1 style="position: relative;left: 20%; font-size: 20px;">Related Products</h1>
<form>
    <center>
    <table class="table table-bordered" align="center">  



                <?php  
                      $connect = mysqli_connect("localhost", "root", "", "rmart");
                      
                      $rand_num=rand(1,4);   //-------------------------------------------------------------------------------------------------------------------print rand number
                      $s_count=0;
                      $limit=1;
                       //---------------------------------------------------------------------------------------------------------session to call variable to next page


                   
                      
//$query = "SELECT T.*, COUNT(C.id) as count FROM tbl_images T, checkout C ORDER BY p_cost desc" ;  
                      $query = "SELECT * FROM tbl_images WHERE p_type='$p_type' " ;  
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
                          <th><a  href="detail_display.php?id='.$row['id'].'" style="color:#fff;"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="300" width="300" class="img-thumnail" style="margin-right:100px; margin-bottom:50px;" /> </a>
                          
                          <td><br><br><a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:40%; font-size:27px;"><strong>'.$row['p_name'].'&nbsp'.$row['p_type'].'</strong></p1></a>
                          <p style="position:relative; left:40%; color:green;"><strong> In Stock</strong></p>
                          <h4 class="text-danger" style="position:relative; left:40%; color:red;font-size:25px;">Rs.'.$row['p_cost'].'</h4>
                          

                          <a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:35%; font-size:20px;"><li>'.$row['f1'].'</li></p1></a>
                          <br>
                          <a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:35%; font-size:20px;"><li>'.$row['f2'].'</li></p1></a>
                          <p style="position:relative; left:60%;"><strong> </strong></p>
                          <br>
                          <a  href="detail_display.php?id='.$row['id'].'" style="color:#000;"><p1 style="margin-right:100px; position:relative; left:45%; font-size:20px;">Check more features <p2 style="color:blue;">here</p2></p1></a>

                          <br><br><br>
                          <div class="panel-footer" style="position:relative; left:30%;"> <p2 ><button class="btn next-btn"><a  href="checkout.php?id='.$row['id'].'" style="color:#fff;">ADD To CART</a></button></p2></div>    <br><br> </td>

                          

   

                        </center><div class="line" style="border: 1px solid black;background-color: #12D1EC; width:70%;position:relative; left:5%;"> </div>
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
                          <p style="position:relative; left:40%; color:green;"><strong> In Stock</strong></p>
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
      echo '<div class="line" style="border: 1px solid black;background-color: #12D1EC; width:70%;position:relative; left:5%;"> </div>';
                  $s_count++;
                }
                echo "</tr></table";
                
            ?> 

</table>
</center>
    

</form>
</body>  
<br><br><br><br><br><br><br>
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
