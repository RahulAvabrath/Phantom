<?php
  session_start();    // ---------------------------------------------------------------------------------------------------------------------------------------to call the variable to next page
  
  ini_set('display_errors',0);// to hide the warnings
  $cartcount=$_SESSION["cartcount"];
  //$fname=$_SESSION["name"];
  $username=$_SESSION["username"];
?>
<!-- Start of mic rec thing working-->
<!-- position:fixed;-->
    <style>
      *{
overflow-x: hidden;
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
            <form id="labnol" method="post" action="pchatmainpage.php">
       
                  
      
          </form>
    </div>



      <a href="test22.php" class="acc">
        <input type="submit" name="account" value="Account" style="width:100px; height: 50px; transform: translate(450%,-250%);">
      </a>
            <span class="accname" style="color:#fff ; font-size: 30px; position: absolute; right: 21.0%; top: 7%; text-transform:uppercase;"><b><?php echo "$username";?><b></span>



    <a href="check.php" class="notification">
        <img   src="cart.png"      style="width:100px ;height:50px;" />
        <span class="badge"><?php echo "$cartcount" ?></span>
    </a>
    
    
</center><br><br>

        <div class="clogo" style="width: 15%; height: 15%; position: absolute; top: -0.5%; left: 25%;">
            <a href="displaypage.php"><img src="phantom6.jpg"></a>
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
  <b1 ><u>Hello <a1111 style="text-transform:uppercase;"><?php echo "$username";?></a1111></u></b1>
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P-CHATROOM</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
	<!--<a href="chat.php?id='2'" class="btn btn-success">Rahul gn</a>-->

<style>
	body{
		background-color: #EBF3B9;
	}
</style>




<!--chat codes-->



<?php  
session_start();
error_reporting(E_ALL);
ini_set('display_errors',0);// to hide the warnings




  $cartcount=$_SESSION["cartcount"];
  $username1=$_SESSION["username"];
  $username2=$_SESSION["username2"];

$name=$username1;
$name2=$username2;

?>

	<a style="font-size: 40px; position: absolute; top: 15%;text-transform: uppercase; width: 100%;background-color: #61F616; "><b><?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp To : ".$username2;?></b></a>




<?php
	 $connect = mysqli_connect("localhost", "root", "", "echat");  

      $data1=$_POST['gn'];
ini_set('display_errors',0);// to hide the warnings
	session_start();
	  $cartcount=$_SESSION["cartcount"];
	  $username1=$_SESSION["username"];
	  $username2=$_SESSION["username2"];

	$name=$username1;
	$name2=$username2;

	$dbname = 'echat';
	$tb1="$name2$name";
	$tb2="$name$name2";

		








if(isset($_POST['btn']))
{





	if (!mysql_connect('localhost', 'root', '')) {
	    echo 'Could not connect to mysql';
	    exit;
	}

	$sql = "SHOW TABLES FROM $dbname";
	$result = mysql_query($sql);

	if (!$result) {
	    echo "DB Error, could not list tables\n";
	    echo 'MySQL Error: ' . mysql_error();
	    exit;
	}

	while ($row = mysql_fetch_row($result)) {
	    echo "Table: {$row[0]}\n"; 
	   
	    if($tb1 == $row[0])
 		{				echo "11";	
                        
                       


                       



                        $query03 = "SELECT * from ".$name2.''.$name." ";  
                        $result03 = mysqli_query($connect, $query03);

                        $query02 = "INSERT into ".$name2.''.$name."(".$name.") values('". $data1."')";  
                        $result02 = mysqli_query($connect, $query02); 
                              while($row = mysqli_fetch_array($result03)) 
                              {
                              	if((!empty($row[$name2])) || (!empty($row[$name])))
                              	{

                                    if(empty($row[$name])) 
                                    {

                                    }
                                    else
                                    {   	
                                         ?><p style="position: relative; left:60%;font-size: 20px;"><?php echo"" .$row[$name]; ?><br></p><?php
                                    }


                                    if(empty($row[$name2]))
                                   {

                                   }
                                   else
                                   {
                                         ?><p style="position: relative; left: 35%;font-size: 20px;"><?php echo""  .$row[$name2]; ?><br></p><?php
                                    }
                                   
                                }
                              }

                               ?><p style="position: relative; left:35%;font-size: 20px;"><?php echo"" .$data1; ?><br></p><?php
                              break;

                        
	    }
	    elseif ($tb2 == $row[0]) 
		    { echo "22"; 
								
		                       
		                       
		                    


		                        $query4 = "SELECT * from ".$name.''.$name2." ";  
		                        $result4 = mysqli_query($connect, $query4);
		                         $query3 = "INSERT into ".$name.''.$name2."(".$name.") values('". $data1."')";  
		                        $result3 = mysqli_query($connect, $query3); 

		                              while($row = mysqli_fetch_array($result4)) 
		                              {
		                              	if((!empty($row[$name])) || (!empty($row[$name2])))
		                              	{


		                                   if(empty($row[$name]))
		                                   {

		                                   }
		                                   else
		                                   {
		                                         ?><p style="position: relative; left: 60%;font-size: 20px;"><?php echo""  .$row[$name]; ?><br></p><?php
		                                    }
		                                    

		                                    if(empty($row[$name2])) 
		                                    {

		                                    }
		                                    else
		                                    {   	
		                                         ?><p style="position: relative; left:35%; font-size: 20px;"><?php echo  "".$row[$name2]; ?><br></p><?php
		                                    }
		                                   
		                                }
		                              }
		                                  ?><p style="position: relative; left:35%;font-size: 20px;"><?php echo"" .$data1; ?><br></p><?php
		                        break;
		    	}
	    else
		    { echo"33";
			    	 	
			    	 	$query222 = "CREATE TABLE ".$name2.''.$name." (id int(10), ".$name2." varchar(225), ".$name." varchar(225))";  
			       			$result222 = mysqli_query($connect, $query222);
							
							$query002 = "INSERT into ".$name2.''.$name."(".$name.") values('". $data1."')";  
		                    $result002 = mysqli_query($connect, $query002); 


		                  $query0004 = "SELECT * from ".$name2.''.$name." ";  
		                   $result0004 = mysqli_query($connect, $query0004);            
							

		                     while($row0004 = mysqli_fetch_array($result0004)) 
		                              {
		                              	if((!empty($row[$name])) || (!empty($row[$name2])))
		                              	{


		                                   if(empty($row[$name]))
		                                   {

		                                   }
		                                   else
		                                   {
		                                         ?><p style="position: relative; left: 60%;font-size: 20px;"><?php echo""  .$row[$name]; ?><br></p><?php
		                                    }
		                                    

		                                    if(empty($row[$name2])) 
		                                    {

		                                    }
		                                    else
		                                    {   	
		                                         ?><p style="position: relative; left:35%; font-size: 20px;"><?php echo  "".$row[$name2]; ?><br></p><?php
		                                    }
		                                   
		                                }
		                              }
			       			
							
							
		                    
		                           
		                              
		                              
							?><p style="position: relative; left:35%;font-size: 20px;"><?php echo"" .$data1; ?><br></p><?php		                        
		                    
		                    break;
		   		}
		   		 echo "<br>";	
	}

	mysql_free_result($result);
}
?>


<center>
<div class="msg_area">
<form action="test_chat_2.php" method="post" style=" width: 100%;background-color: #61F616; " >
<input type="text" name="gn" placeholder="   Type your message here" style="width: 25%; height: 5%;" >

<!--<p2 ><a href="chat.php?id='2'" class="btn btn-success">send</a></p2>-->
 <input type="submit" name="btn" class="btn btn-success" value="Send" style="height: 6%;">
</form>
</div>
</center> 

</body>
</html>
