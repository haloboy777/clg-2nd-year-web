<?php
$query = "select distinct pro_cat from product";
$result = mysqli_query($con, $query);
echo
'<div class="content_bottom">
  <div class="wrap">
    <div class="content-bottom-left">
      <div class="categories">
        <ul>
          <h3>Browse All Categories</h3>';
while($row=mysqli_fetch_array($result))
    {echo '<li><a href="display.php?cat='.$row['pro_cat'].'">'.$row['pro_cat'].'</a></li>';
}

echo '</ul>
      </div>

    </div>
    <div class="content-bottom-right">
      <h3>Featured Products</h3>';
echo '<div class="section group">';

$query = "select product_name,price,product_code,image from product order by rand() limit 16";
$result = mysqli_query($con, $query);
while($row=mysqli_fetch_array($result))
    {
    $pro_name=$row['product_name'];
    $pro_price=$row['price'];
    $p_code=$row['product_code'];
    echo '<div class="grid_1_of_4 images_1_of_4">
      <h4><a href="preview.php?pcode='.$p_code.'">'.$pro_name.'</a></h4>
      <a href="preview.php?pcode='.$p_code.'"><img src="'.$row['image'].'" alt="" style="height: 120px; width: auto";/></a>
      <div class="price-details">
        <div class="price-number">
          <p><span class="rupees">₹'.$pro_price.'</span></p>
        </div>
        <div class="add-cart">
          <h4><a href="preview.php?pcode='.$p_code.'">More Info</a></h4>
        </div>
        <div class="clear"></div>
      </div>
    </div>';
  }
echo '</div>';
?>
<?php
echo '
    </div>
    <div class="clear">
    </div>
  </div>
</div>
' ?>
