<?php
  session_start();    // ---------------------------------------------------------------------------------------------------------------------------------------to call the variable to next page
  
  ini_set('display_errors',0);// to hide the warnings
  $cartcount=$_SESSION["cartcount"];
   //$fname=$_SESSION["name"];
  $username=$_SESSION["username"];

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


    </style>


<center>


   
      <div class="speech" style="width: 100%; height: 15%; ">
            <form id="labnol" method="post" action="search.php">
                  <input type="text" name="search" id="transcript" placeholder="         Say Something" style="transform: translate(-1%,47%);" />
                  <img onclick="startDictation()" src="https://i.imgur.com/cHidSVu.gif"  />
      
          </form>
    </div>



      <a href="test22.php" class="acc">
        <input type="submit" name="account" value="Account" style="width:100px; height: 50px; transform: translate(450%,-190%);">
      </a>
            <span class="accname" style="color:#fff ; font-size: 30px; position: absolute; right: 21.0%; top: 7%; text-transform:uppercase;"><b><?php echo "$username";?><b></span>



    <a href="check.php" class="notification">
        <img   src="cart.png"      style="width:100px ;height:50px;" />
        <span class="badge"><?php echo "$cartcount" ?></span>
    </a>
    
    
</center><br><br>

        <div class="clogo" style="width: 15%; height: 15%; position: absolute; top: -0.5%; left: 25%;">
            <a href="displaypage.php"><img src=""></a>
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


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <b1 ><u>Hello <a1111 style="text-transform:uppercase;"><?php echo "$username";?></a1111></u></b1>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="orders.php">Orders</a>
  <a href="#">Light/Dark Mode</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>


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
<body>

  <form>
    <center>

    <table class="table table-bordered" align="center">  
      <style>
        
        table {
              border-collapse: collapse;
              }

        table, td {
              border: 0.1px solid black;
              }
      </style>


                <?php  
                      $connect = mysqli_connect("localhost", "root", "", "rmart");
                      
                      $rand_num=rand(1,4);   //-------------------------------------------------------------------------------------------------------------------print rand number
                      $s_count=0;
                      $limit=2;
                       //---------------------------------------------------------------------------------------------------------session to call variable to next page


                   
                      
//$query = "SELECT T.*, COUNT(C.id) as count FROM tbl_images T, checkout C ORDER BY p_cost desc" ;  
                      $query = "SELECT * FROM tbl_images ORDER BY p_cost desc" ;  
                      $result = mysqli_query($connect, $query); 

                     

                      //echo "<table border='2'>";
                while($row = mysqli_fetch_array($result))  
                {  
                  if($s_count<$limit)
                  {
                    if($s_count==0)
                    {
                      echo "<tr>";

                    }
                  echo '<td>
                  
                  <div class="displaypage">
                  
                  <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" style="margin-right:100px; margin-bottom:50px; margin-left:100px;" /> 
                  </td><center>
                  <td >
                  <p1 style="margin-right:100px;"><strong><a >'.$row['p_name'].'</a></strong></p1>
                  <p><strong><a >'.$row['p_type'].' </a></strong></p>
                  <h4 class="text-danger">Rs.'.$row['p_cost'].'</h4>
                  <br><br><br>
                  <p2 style="background-color:red;"><a href="checkout.php?id='.$row['id'].'" class="btn btn-success">ADD To CART</a></p2>
                  
                  </div></td>
                  </center>



                  ';
                  }
                  else
                  {
                    $s_count=0;
                    echo "</tr><tr>";
                    echo '<td>

                    <div class="displaypage">
                    
                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" style="margin-right:100px; margin-bottom:50px;" /> 
                    </td>
                    <td >
                    <p1 style="margin-right:100px;"><strong><a >'.$row['p_name'].'</a></strong></p1>
                    <p><strong><a >'.$row['p_type'].' </a></strong></p>
                    <h4 class="text-danger">Rs.'.$row['p_cost'].'</h4>
                    <br><br><br>
                    <p2 ><a href="checkout.php?id='.$row['id'].'" class="btn btn-success">ADD To CART</a></p2>
                    
                    </div></td>



                    ';
                    
                  }
   
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






             .footer-main .f-socialmedias{
              bottom: 20%;
              right:10%;
              position: absolute;
              text-align: center;
             }



            .footer-main .bot{
         
        
      
              bottom: 0%;
              left: 44%;
              position: absolute;
              text-align: center;
             }


           </style>


           <div class="footer-main">
              <td><div class="f-details">
                        <div class="applogo" style="width: 30%; height: 30%; position: absolute; bottom: 8%; left: 03%;   ">
                            <a0><img src=""></a0>
                        </div></div></td>
              <td><div class="f-logo">
                        <div class="clogo" style="width: 30%; height: 30%; position: absolute; bottom: 50%; left: 37%;">
                            <a href="displaypage.php"><img src=""></a>
                        </div>
              </div></td>
              <td><div class="f-socialmedias">

                    <div class="facebook" style="font-size: 30px;"> <img src="fb3.png" style="width: 90px;height: 90px;  " >   Facebook</div><br>
                    <div class="instagram" style="font-size: 30px;"> <img src="insta.jpg" style="width: 50px;height: 50px; " >   Instagram</div><br>
                    <div class="twitter" style="font-size: 30px;"> <img src="tw.png" style="width: 50px;height: 50px; " > Twitter</div>
                        </div></td>

           
             <div class="bot">&copy;  Phantom.com | Created by RR Brothers</div>
           </div>
  </div>
</html>        


<!-- cart quantity-->
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
