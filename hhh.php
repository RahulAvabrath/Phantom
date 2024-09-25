<?php
  session_start();    // ---------------------------------------------------------------------------------------------------------------------------------------to call the variable to next page
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Display Selected HTML Table TR Values In Input Text</title>
        
        <style>
            table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
            }
            table tr:not(:first-child):hover{background-color: #ddd;}
        </style>
        
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
                       ?>
        First Name:<input type="text" name="fname" id="fname"><br><br>
        Last Name:<input type="text" name="lname" id="lname"><br><br>
        Age:<input type="text" name="age" id="age"><br><br>
                       <table id='table'>
                           <tr>
                                <th><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" /> ' ;?></th>
                                <th><?php echo $row['p_name'];?></th>
                                <th><?php echo $row['p_type'];?></th>
                                <th><?php echo $row['p_cost'];?></th>


  
 
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



                
                
                ?>  </form>
                              <script>
    
                var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("fname").value = this.cells[0].innerPHPL;
                         document.getElementById("lname").value = this.cells[1].innerHTML;
                         document.getElementById("age").value = this.cells[2].innerHTML;
                    };
                }
    
         </script>

      
  
 

</body>
</html>        

