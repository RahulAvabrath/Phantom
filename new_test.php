<?php
  $pro_id = $_COOKIE['product_id'];   
  $pro_id = explode(',', $pro_id);
  $qua = 1;
  foreach ($pro_id as $val) {
    $ans = "SELECT * FROM wm_products WHERE pro_id='$val'";
    $result = $conn->query($ans);
    while($row = $result->fetch_assoc()){
    ?>
      <tr class="cart_item">
        <td>
          <a href="single-product.html"><img src="products_images/<?php echo $row['pro_img']; ?>" alt="" width="180" height="180"></a>
        </td>
        <td>
          <a href="single-product.html"><?php echo $row['pro_name']; ?></a>
        </td>
        <td>
          <span class="amount">Rs. <?php echo $row['pro_price']; ?></span>
        </td>
        <td>
          <div class="quantity buttons_added">
          <form action="" method="post">
            <input type="submit" class="minus" name="minus" value="-">        
            <input type="text" size="4" class="input-text qty text" title="Qty" value="<?php echo $qua;?>" name="" max="29" min="0" step="1" >
            <input type="submit" class="plus" name="plus" value="+">
          </form>         
          </div>
        </td>
        <td>
          <span class="amount">Rs. <?php echo number_format($row['pro_price'] * $qua); ?></span>
        </td>
        <td>
          <a class="remove remove_cart" href="#" dataid="<?php echo $row['pro_id']; ?>">×</a>
        </td>
      </tr>
    <?php 
    }                                   
  }
?>