<?php
  session_start();    // ---------------------------------------------------------------------------------------------------------------------------------------to call the variable to next page
?>
<!DOCTYPE html>
<html>
<head>
  <title>Retrive</title>
</head>
<body>

  <form>
    <table class="table table-bordered" align="center">  
                     <tr>  
                          <th>Image</th>  
                          
                     </tr>  


                <?php  
                      $connect = mysqli_connect("localhost", "root", "", "rmart");
                      $rand_num=rand(1,4);   //-------------------------------------------------------------------------------------------------------------------print rand number
                      $s_count=0;
                      $limit=2;
                       //---------------------------------------------------------------------------------------------------------session to call variable to next page


                   
                        //echo "<table border='1'>";

                      $query = "SELECT * FROM tbl_images ORDER BY 'p_cost' ASC" ;  
                      $result = mysqli_query($connect, $query); 

                     


                while($row = mysqli_fetch_array($result))  
                {  
                  /*  if($s_count<$limit)
                    {
                      if($s_count==0)
                      {
                        echo "<tr> ";
                      }*/
                       ?><table id='table'>
                           <tr>
                               <td>  <?php $temp_id=$row['id'];  

                                           echo '<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" /> ';
                                    ?>
                                   <?php $_SESSION['varname']=$temp_id; echo $temp_id;?>
                              
                                    


                               </td>  

                        
                          

                            
                              <td> <form action=""> <br> <?php echo nl2br("\n\n\n\n&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$row['p_name']."\n\n\n&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['p_type']."\n\n\n&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['p_cost']."\n\n\n\n---------------------------------------------------------------------------------------"); ?>  </td><br>
                              
                              <td><p><a href="checkout.php?id='. $row['id'] .'"  class="btn btn-success" value="Buy" style="height: 30px; width:80px; ";></a></p></form></td>

  
 
                           </tr>
                            
                        </table>  
                       <?php
                    /*   }
                       else
                       {
                        //echo "</tr><tr><td>oooo</td>";
                       }
                       $s_count++;
                       echo "</tr></table";*/
                     }



                
                
                ?>  
                              <script>
    
                var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("").value = this.cells[0].innerHTML;
                         document.getElementById("lname").value = this.cells[1].innerHTML;
                         document.getElementById("age").value = this.cells[2].innerHTML;
                    };
                }
    
         </script>

      
  </form>
 

</body>
</html>        

