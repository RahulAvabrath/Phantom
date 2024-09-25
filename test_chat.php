<?php
   $connect = mysqli_connect("localhost", "root", "", "echat");  

      $data1="hello";
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

$query222 = "CREATE TABLE ".$name2.''.$name." (id int(10), ".$name2." varchar(225), ".$name." varchar(225))";  
                  $result222 = mysqli_query($connect, $query222);
              
          

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
                                             ?><p style="position: relative; left: 60%;font-size: 20px;"><?php echo""  .$row[$name2]; ?><br></p><?php
                                        }
                                        


                                        if(empty($row[$name])) 
                                        {

                                        }
                                        else
                                        {     
                                             ?><p style="position: relative; left:35%;font-size: 20px;"><?php echo"" .$row[$name]; ?><br></p><?php
                                        }
                                       
                                    }
                                  }












?>