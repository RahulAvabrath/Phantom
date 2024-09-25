<!--<?php
$dbname = 'echat';
$tb="adkiccha";

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
    
    if($tb== $row[0])
    {
    	echo"found";
    }

}

mysql_free_result($result);
?>-->




<center>
<form action="chattest.php" method="post" style=" ">
<input type="text" name="gn" placeholder="Type your message here" style="width: 25%; height: 5%;" >

<!--<p2 ><a href="chat.php?id='2'" class="btn btn-success">send</a></p2>-->
 <input type="submit" name="btn" class="btn btn-success" value="Send" style="height: 5%;">
</form>
</center> 

</body>
</html>
<!-- to check the tabe exists or not-->
<?php
  ini_set('display_errors',0);// to hide the warnings
$name2="rahul";
$name="nikhil";
$taa="$name$name2";
echo "to->".$name2;
$dbname = 'echat';
$tb1="$name2$name";
$tb2="$name$name2";

if(isset($_POST['btn'])){
$data1=$_POST['gn'];
$connect = mysqli_connect("localhost", "root", "", "echat");  
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
    
    if($tb1== $row[0])
 		{	echo "11";
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
                                         ?><a style="position: relative; left: 30%;"><?php echo  $row[$name2]; ?><br></a><?php
                                    }
                                    

                                    if(empty($row[$name])) 
                                    {

                                    }
                                    else
                                    {   	
                                         ?><a1><?php echo  "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row[$name]; ?><br></a1><?php
                                    }
                                   
                                }
                              }
 		}
    if($tb2== $row[0])
    {echo "222";
    	 $query = "CREATE TABLE ".$name.''.$name2." (id int(10), ".$name." varchar(225), ".$name2." varchar(225))";  
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
                                         ?><a style="position: relative; left: 30%;"><?php echo  $row[$name]; ?><br></a><?php
                                    }
                                    

                                    if(empty($row[$name2])) 
                                    {

                                    }
                                    else
                                    {   	
                                         ?><a1><?php echo  "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row[$name2]; ?><br></a1><?php
                                    }
                                   
                                }
                              }
    }

}

mysql_free_result($result);
}
?>
<!--end-->