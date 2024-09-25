<?php  
 $connect = mysqli_connect("localhost", "root", "", "rmart");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $p_name=$_POST['p_name'];
      $p_type=$_POST['p_type'];
      $p_cost=$_POST['p_cost'];
      $query = "INSERT INTO tbl_images(name,p_name,p_type,p_cost) VALUES ('$file','$p_name','$p_type','$p_cost')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      } 
      else{
        echo '<script>alert("Image cannot be inserted into Database")</script>';
      } 
 }  
 ?>  



 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>ADMIN</title>  

      </head>  
      <body>  
        <center>
           <br /><br />  

           <div class="container" style="width:500px; ">  
                <h3 align="center">Product Entry</h3>  
                <br />  


                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  <br /> 
                     <input type="text" name="p_name"  placeholder="Product Name" />  <br /> 
                     <input type="text" name="p_type"  placeholder="Product Type" />  <br /> 
                     <input type="text" name="p_cost"  placeholder="Product Cost" />  <br /> <br>

                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br /> <br />  
                 
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 