
<?php
if(isset($_POST['btn']))
{
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
	   
	    if($tb1== $row[0])
 	{				echo "11";	
                        $query01 = "CREATE TABLE ".$name2.''.$name." (id int(10), ".$name2." varchar(225), ".$name." varchar(225))";  
                        $result01 = mysqli_query($connect, $query01); 
                       
                        $query02 = "INSERT into ".$name2.''.$name."(".$name.") values('". $data1."')";  
                        $result02 = mysqli_query($connect, $query02); 
                              
                              
                        
                        
                        $query03 = "SELECT * from ".$name2.''.$name." ";  
                        $result03 = mysqli_query($connect, $query03);
                              while($row = mysqli_fetch_array($result03)) 
                              {
                              	if((!empty($row[$name2])) || (!empty($row[$name])))
                              	{


                                   if(empty($row[$name2]))
                                   {

                                   }
                                   else
                                   {
                                         ?><p style="position: relative; left: 60%;"><?php echo""  .$row[$name2]; ?><br></p><?php
                                    }
                                    

                                    if(empty($row[$name])) 
                                    {

                                    }
                                    else
                                    {   	
                                         ?><p style="position: relative; left:35%;"><?php echo"" .$row[$name]; ?><br></p><?php
                                    }
                                   
                                }
                              }
                              break;
	    }
	    elseif ($tb2== $row[0]) 
		    {  echo "22"; $query = "CREATE TABLE ".$name.''.$name2." (id int(10), ".$name." varchar(225), ".$name2." varchar(225))";  
		                        $result = mysqli_query($connect, $query); 
		                       
		                        $query3 = "INSERT into ".$name.''.$name2."(".$name.") values('". $data1."')";  
		                        $result3 = mysqli_query($connect, $query3); 
		                              
		                              
		                        
		                        
		                        $query4 = "SELECT * from ".$name.''.$name2." ";  
		                        $result4 = mysqli_query($connect, $query4);
		                              while($row = mysqli_fetch_array($result4)) 
		                              {
		                              	if((!empty($row[$name])) || (!empty($row[$name2])))
		                              	{


		                                   if(empty($row[$name]))
		                                   {

		                                   }
		                                   else
		                                   {
		                                         ?><p style="position: relative; left: 60%;"><?php echo""  .$row[$name]; ?><br></p><?php
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
		                              break;
		    	}
	    else
		    { echo"33";
			    	 		$query222 = "CREATE TABLE ".$name2.''.$name." (id int(10), ".$name2." varchar(225), ".$name." varchar(225))";  
			       			$result222 = mysqli_query($connect, $query222);
							
							$query002 = "INSERT into ".$name2.''.$name."(".$name.") values('". $data1."')";  
		                    $result002 = mysqli_query($connect, $query002); 
		                              
		                              
		                        
		                        
		                        $query003 = "SELECT * from ".$name2.''.$name." ";  
		                        $result003 = mysqli_query($connect, $query003);
		                              while($row = mysqli_fetch_array($result003)) 
		                              {
		                              	if((!empty($row[$name2])) || (!empty($row[$name])))
		                              	{


		                                   if(empty($row[$name2]))
		                                   {

		                                   }
		                                   else
		                                   {
		                                         ?><p style="position: relative; left: 60%;"><?php echo""  .$row[$name2]; ?><br></p><?php
		                                    }
		                                    

		                                    if(empty($row[$name])) 
		                                    {

		                                    }
		                                    else
		                                    {   	
		                                         ?><p style="position: relative; left:35%;"><?php echo"" .$row[$name]; ?><br></p><?php
		                                    }
		                                   
		                                }
		                              }
		                              break;
		   		}
		   		 echo "<br>";	
	}

	mysql_free_result($result);
}
?>


<center>
<form action="chat2.php" method="post" style=" width: 100%;background-color: #61F616; " >
<input type="text" name="gn" placeholder="   Type your message here" style="width: 25%; height: 5%;" >

<!--<p2 ><a href="chat.php?id='2'" class="btn btn-success">send</a></p2>-->
 <input type="submit" name="btn" class="btn btn-success" value="Send" style="height: 6%;">
</form>
</center> 