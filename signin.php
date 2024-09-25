<?php

session_start();  
ini_set('display_errors',0);// to hide the warnings


error_reporting(E_ALL);
	$email=$_POST['email'];
	$password=$_POST['password'];



	$email=stripcslashes($email);
	$password=stripcslashes($password);
	$email=mysql_real_escape_string($email);
	$password=mysql_real_escape_string($password);


	mysql_connect("localhost","root","");
	mysql_select_db("rmart");


	$result=mysql_query("select * from register where email ='$email' and password ='$password'")
		or die("Failed to querry database".mysql_error());
 
		$row=mysql_fetch_array($result);





		// empty data
		if (empty($_POST['email']) || empty($_POST['password'])) 
		{
               echo '<script type="text/javascript">';
               echo'alert("Enter both username and password ");';
               echo 'window.location.href="test22.php";';
               echo'</script>';

               
            
               
		 }



		 // Correct data
        elseif ($row['email']==$email && $row['password']==$password) 
		{	



                 echo '<script type="text/javascript">';
                echo'alert("Welcome !! ");';
                
                echo 'window.location.href="displaypage.php";';
                echo'</script>';

                 $_SESSION["username"]=$row['username'];


			
		}

		elseif("r@admin"==$email && "r123"==$password)
		{
			    echo '<script type="text/javascript">';
                echo'alert("Welcome !! ");';
                
                echo 'window.location.href="./admin";';
                echo'</script>';

                 $_SESSION["username"]="admin";
		}

			
		

		// incorrect data
		else
		{
               echo '<script type="text/javascript">';
               echo'alert("Incorrect data ");';
               echo 'window.location.href="test22.php";';
               echo'</script>';

		}



?>