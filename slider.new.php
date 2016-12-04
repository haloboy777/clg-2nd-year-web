<?php
$query = "select product_code, product_name,image from product order by rand() limit 12";
$result = mysqli_query($con, $query);
echo '<div class="content_top">
  <div class="wrap">
    <h3>Latest Products</h3>
  </div>
  <div class="line"> </div>
  <div class="wrap">
    <div class="ocarousel_slider">
      <div class="ocarousel example_photos" data-ocarousel-perscroll="3">
        <div class="ocarousel_window">';
while($row=mysqli_fetch_array($result))
    {
    $pro_name=$row['product_name'];
    $p_code=$row['product_code'];
    echo '<a href="preview.php?pcode='.$p_code.'" title="img1"> <img src="'.$row['image'].'" style="height:100px; width:auto;" alt="" />
      <p>'.$pro_name.'</p>
    </a>';

?>


<?php }
echo '</div>
<span>
      <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
      <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
     </span>
</div>
</div>
</div>
</div>
'; ?>
