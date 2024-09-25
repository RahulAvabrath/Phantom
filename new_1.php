  <link rel="stylesheet" type="text/css" href="new_1.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
  <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
              <th style="width:50%">Product</th>
              <th style="width:10%">Price</th>
              <th style="width:8%">Quantity</th>
              <th style="width:22%" class="text-center">Subtotal</th>
              <th style="width:10%"></th>
            </tr>
          </thead>
          <tbody>
<div class="table_data" style="color: #fff;">

                <?php
/*                  if($darkmode_color=="true")
                  {
                    $color="#fff";
                  }
                  else
                  {
                    $color="#000";
                  }  */


                      $connect = mysqli_connect("localhost", "root", "", "rmart");
                      
                      $rand_num=rand(1,4);   //-------------------------------------------------------------------------------------------------------------------print rand number
                      $s_count=0;
                      $limit=1;
                      
                      
                      $query = "SELECT *  FROM checkout " ;  
                      $result = mysqli_query($connect, $query); 

                     

                      //echo "<table border='2'>";
                while($row = mysqli_fetch_array($result))  
                {  
                  if($s_count<$limit)
                  {
                    if($s_count==0)
                    {
                      echo '<tr>';

                    }
                     echo '<td>
               
                  <div class="displaypage" style="text-align:center;">
                  
                  <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" " /> 
                  </td>
                  <td style="text-align:center;">
                  <p1 ><strong><a >'.$row['p_name'].'</a></strong></p1>
                  <p style="text-align:center;" ><strong><a style="text-align:center;" >'.$row['p_type'].' </a></strong></p>
                  </td>
                    <td>
                  <h4 class="text-danger" style="text-align:center;">Rs.'.$row['p_cost'].'</h4>
                  </td>
                  <td  style="text-align:center;">
                  <p2 ><a href="check.php?id='.$row['id'].'" class="btn btn-success">Delete</a></p2>
                  
                  
                  </div></td>



                  ';
                  }
                  else
                  {
                    $s_count=0;
                    echo "</tr><tr>";
                    echo '<td>

                    <div class="displaypage" style="text-align:center;">
                    
                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" /> 
                    </td>
                    <td style="text-align:center;">
                    <p1><strong ><a >'.$row['p_name'].'</a></strong></p1>

                    <p style="text-align:center;"><strong><a style="text-align:center;">'.$row['p_type'].' </a></strong></p>
                    </td>
                    <td>
                    <h4 class="text-danger" style="text-align:center;">Rs.'.$row['p_cost'].'</h4>
                    </td>
                    <td  style="text-align:center;">
                    <p2 ><a href="check.php?id='.$row['id'].'" class="btn btn-success">Delete</a></p2>
                   
                    
                    </div></td>



                    ';
                    
                  }
                  $s_count++;
                }

   
                echo "</tr></table";

                echo "-------------------------------------------------------------";
                
                 
                
            ?> 
            <?php 

  $q="SELECT SUM(p_cost) as total FROM checkout " ;  
  $result = mysqli_query($connect, $q); 

  while($row = mysqli_fetch_array($result))  
                {   $total=$row['total'];
              
            }


?>

                          <tr>  
                               <td colspan="2" align="right" style="font-size: 25px;"><b>Total Price=</b></td>  
                               <td align="right" style="text-align: center; font-size: 25px; color: red;"><b>Rs. <?php echo number_format($total, 2); ?></b></td>  
                               <td></td>  
                          </tr>  
                         



</table>   <br><br><br> 
</div>
          </tbody>
          <tfoot>
            <tr class="visible-xs">
              <td class="text-center"><strong>Total 1.99</strong></td>
            </tr>
            <tr>
              <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
              <td colspan="2" class="hidden-xs"></td>
              <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
              <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
          </tfoot>
        </table>
</div>