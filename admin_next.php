<?php
session_start();
  
  ini_set('display_errors',0);// to hide the warnings

?>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "rmart");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $p_name=$_POST['p_name'];
      $p_type=$_POST['p_type'];
      $p_cost=$_POST['p_cost'];
      $time_req=$_POST['time_req'];

      $img2 = addslashes(file_get_contents($_FILES["img2"]["tmp_name"]));  
      $img3 = addslashes(file_get_contents($_FILES["img3"]["tmp_name"]));  
      $img4 = addslashes(file_get_contents($_FILES["img4"]["tmp_name"]));
      $f1=$_POST['f1'];
      $f2=$_POST['f2'];
      $f3=$_POST['f3'];
      $f4=$_POST['f4'];
      $f5=$_POST['f5'];  

      $query = "INSERT INTO tbl_images(name,p_name,p_type,p_cost,time_req,img2,img3,img4,f1,f2,f3,f4,f5) VALUES ('$file','$p_name','$p_type','$p_cost','$time_req','$img2','$img3','$img4','$f1','$f2','$f3','$f4','$f5')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      } 
      else{
        echo '<script>alert("Image cannot be inserted into Database")</script>';
      } 
 }  
 ?>  

  <style>
      *{

      }
          body{
      background-image:linear-gradient(rgba(0,0,0,0.0),rgba(0,0,0,0.0)),url(lbg.jpg); height: 100vh;
      color: #000;
    }
      .speech {
        background-color: #000;#F6B46F;#000;
      
        width:100%;
        padding:0;
        margin:0;
        top: 0%;

      }

      .speech input {
        border:10;

        width:360px;
        display:inline-block;
        height:75px;
        font-size: 25px;



      }


      .speech img {
      
        width:75px;
        height: 74.5px;
        transform: translate(-12%,39%);
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
        transform: translate(500%,-128%);
      }

      .notification:hover {
        background: white;
        border-radius: 100%;
      }

      .notification .badge {
        position: absolute;
        top: 5px;
        right: 27 px;
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


   
      <div class="speech" style="width: 100%; height: 15%; ">
            <form id="labnol" method="post" action="search.php">
                  <h1 style="color: #fff; position: absolute; top: 4%; left: 40%;"><span><b>Phatom's  &nbsp  Admin-Zone</b></span></h1>
      
          </form>
    </div>




</center><br><br>

        <div class="clogo" style="width: 15%; height: 15%; position: absolute; top: -1%; left: 25%;">
            <a href="displaypage.php"><img src="phantom6.jpg"></a>
        </div>






<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: #fff;
}
.container {
    padding: 50px;
  background-color: #111;
  position: absolute;
  top: 25%;
  left: 33%;
  border-radius: 20px;
  height: 115%;
  



}

input[type=text], input[type=password], textarea, select{
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password], select:focus {
  background-color: orange;
  outline: none;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #111;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
</style>
</head>
<body>

  <title>Phantom.com</title>



   <div class="container" style="width:700px; color: #fff;">  
                <h3 align="center">Product Entry</h3> <hr style="width: 60%;"> 
                <br />  


                <form action="admin_next.php" method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  <br /> <br>
                     <input type="text" name="p_name"  placeholder="Product Name" />  <br /> 
                     <input type="text" name="p_type"  placeholder="Product Type" />  <br /> 
                     <input type="text" name="p_cost"  placeholder="Product Cost" />  <br />
                     <input type="text" name="time_req"  placeholder="Time required in days" />  <br />
                     <input type="file" name="img2" id="image" />  <br /> <br>
                     <input type="file" name="img3" id="image" />  <br /> <br>
                     <input type="file" name="img4" id="image" />  <br /> <br>

                     <input type="text" name="f1"  placeholder="Product Name"  />  <br /> 
                      <input type="text" name="f2"  placeholder="Product Name" />  <br /> 
                       <input type="text" name="f3"  placeholder="Product Name" />  <br /> 
                        <input type="text" name="f4"  placeholder="Product Name" />  <br /> 
                         <input type="text" name="f5"  placeholder="Product Name" />  <br /> 


                    






                     <br><br>

                     <p style="position: absolute;left: 40%;  "> <input type="submit" name="insert" id="insert" value="  Insert  " class="btn btn-info" />  </p>
                </form>  
                <br /> <br />  <br><br>
                 
           </div> 

          <div class="clogo" style="width: 15%; height: 15%; position: absolute; top: -1%; left: 25%;">
            <a href="displaypage.php"><img src="phantom6.jpg"></a>
        </div>
<br>

      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           var image_name2 = $('#img2').val(); 
           var image_nam3 = $('#img3').val(); 
           var image_name4 = $('#img4').val(); 
           if((image_name == '') || (image_name2 == '') || (image_name3 == '') || (image_name4 == '') ) 
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 
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
  <b1 ><u>Hello <a1111 style="text-transform:uppercase;"><?php echo "ADMIN";?></a1111></u></b1>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  <a href="#"onclick="myFunction()">Light/Dark Mode</a>
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






