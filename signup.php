<!-- for creating new acc -->
<?php
session_start();  
error_reporting(E_ALL);
ini_set('display_errors',0);// to hide the warnings
 //$rr=$_POST['s'];

      $connect = mysqli_connect("localhost", "root", "", "rmart");
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $phoneno=$_POST['phoneno'];
      $email=$_POST['email'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      
      $address=$_POST['address'];

      $date=date("d-m-Y");
    
      if($connect->connect_error)
         {
            	die('Connection Failed:'-$conn->connnect_error);
         }


      elseif (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['phoneno']) || empty($_POST['email'])  || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['address']) ) 
          {
               
                echo '<script type="text/javascript">';
                echo'alert("Enter all attributes");';
                echo 'window.location.href="test22.php";';
                echo'</script>';
            
               
           }
        else{       
				$query = "INSERT into register(fname,lname,phoneno,email,username,password,address) values('". $fname."', '".$lname."','".$phoneno."' ,'".$email."', '".$username."','".$password."',  '".$address. "')" ;  
   				 $result = mysqli_query($connect, $query);
    



   
              	echo '<script type="text/javascript">';
                echo'alert("Account created successfully!!");';
                echo 'window.location.href="test22.php";';
                echo'</script>';
    }            

                
              
       
    

?>
<?php
$check="checkout";


   				 $qu2="CREATE TABLE ".$username." (id int(11),name longblob,p_name varchar(225),p_type varchar(225),p_cost int(11),time_req int(100), day varchar(225), del_date int(100), img2 longblob, img3 longblob, img4 longblob, f1 varchar(225), f2 varchar(225), f3 varchar(225), f4 varchar(225), f5 varchar(225))";
   				 $r = mysqli_query($connect, $qu2);
?>
<?php


           $qu3="CREATE TABLE ".$username.''.$check." (id int(11),name longblob,p_name varchar(225),p_type varchar(225),p_cost int(11),time_req int(100), day varchar(225), del_date int(100), img2 longblob, img3 longblob, img4 longblob, f1 varchar(225), f2 varchar(225), f3 varchar(225), f4 varchar(225), f5 varchar(225))";
           $r3 = mysqli_query($connect, $qu3);


?>