<?php $p_code=$_GET['pcode'];
$query = 'select * from product where product_code='.'"'.$p_code.'"';
$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
?>
<?php  echo'<div class="main">
    <div class="wrap">
        <div class="preview-page">
            <div class="section group">
                <div class="cont-desc span_1_of_2">
                    <ul class="back-links">
                        <li><a href="index.php">Home</a> ::</li>
                        <li><a href="display.php?cat='.$row['pro_cat'].'">'.$row['pro_cat'].'</a> ::</li>
                        <li>'.$row['product_name'].'</li>
                        <div class="clear"> </div>
                    </ul>
                    <div class="product-details">
                        <div class="grid images_3_of_2">
                            <ul id="etalage">
                                <li>
                                        <img class="etalage_thumb_image" src="'.$row['big_img1'].'" />
                                        <img class="etalage_source_image" src="'.$row['big_img1'].'" title="" />
                                </li>
                                <li>
                                    <img class="etalage_thumb_image" src="'.$row['big_img2'].'" />
                                    <img class="etalage_source_image" src="'.$row['big_img2'].'" title="" />
                                </li>
                            </ul>
                        </div>
                        <div class="desc span_3_of_2">
                            <h2>'.$row['product_name'].'</h2>
                            <p>'.$row['description'].'</p>
                            <div class="price">
                                <p>MRP : <s>₹'.$row['price'].'</p></s>
                                <p>Offer Price : <span>₹'.$row['offer_price'].'</span></p>
                                <p>You Save : <span>₹'.$row['save'].'</span></p>
                            </div>
                            <div class="available">
                                <ul>
                                    <li><span>Model :</span> &nbsp; '.$row['model'].'</li>
                                    <li><span>Shipping Time :</span>&nbsp; '.$row['shipping_time'].'</li>
                                </ul>
                            </div>
                            <div class="share-desc">
                              <form method="post" action="addtocart.php">
                              <input type="hidden" name="code" value="'.$row['product_code'].'">
                                <div class="share">
                                    <p>Number of units :</p><input type="number" class="text_box" value="1" min="1" name="unit" />
                                </div>
                                <div class="button"><input type="submit" value="Add to Cart"/></div>
                                <div class="clear"></div>
                              </form>
                            </div>
                            <div class="wish-list">
                                <ul>
                                    <li class="wish"><a href="#">Add to Wishlist</a></li>
                                    <li class="compare"><a href="#">Add to Compare</a></li>
                                </ul>
                            </div>
                            <div class="colors-share">
                                <div class="social-share">
                                    <h4>Share Product</h4>
                                    <ul>
                                        <li>
                                            <a class="share-face" href="#"> </a>
                                        </li>
                                        <li>
                                            <a class="share-twitter" href="#"> </a>
                                        </li>
                                        <li>
                                            <a class="share-google" href="#"> </a>
                                        </li>
                                        <li>
                                            <a class="share-rss" href="#"> </a>
                                        </li>
                                        <div class="clear"> </div>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>



                    <!-- PRODUCT DESCRIPTION!! -->


                   <div class="product_desc">
                        <div id="horizontalTab">
                            <ul class="resp-tabs-list">
                                <li>Specifications</li>
                                <div class="clear"></div>
                            </ul>
                            <div class="resp-tabs-container">
                                <div class="product-specifications">
                                    <ul>
                                        <li><span class="specification-heading">Product Name</span> <span>'.$row['product_name'].'</span>
                                            <div class="clear"></div>
                                        </li>
                                        <li><span class="specification-heading">Price</span> <span>'.$row['offer_price'].'</span>
                                            <div class="clear"></div>
                                        </li>
                                        <li><span class="specification-heading">Brand</span> <span>'.$row['brand'].'</span>
                                            <div class="clear"></div>
                                        </li>
                                        <li><span class="specification-heading">Category</span> <span>'.$row['category'].'</span>
                                            <div class="clear"></div>
                                        </li>
                                        <li><span class="specification-heading">Features</span> <span>'.$row['features'].'</span>
                                            <div class="clear"></div>
                                        </li>
                                        <li><span class="specification-heading">Model</span> <span>'.$row['model'].'</span>
                                            <div class="clear"></div>
                                        </li>
                                        <li><span class="specification-heading">Waranty</span> <span>'.$row['waranty'].'</span>
                                            <div class="clear"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';

?>
<div class="rightsidebar span_3_of_1 sidebar">
       <h3>Popular Products</h3>
       <ul class="popular-products">
<?php
$query = 'select product_name,price,offer_price,product_code,image from product order by rand() limit 3';
$result = mysqli_query($con, $query);
while($row=mysqli_fetch_array($result))
    {
      echo '<li>
    <h4><a href="preview.php?pcode='.$row['product_code'].'">'.$row['product_name'].'</a></h4>
    <a href="preview.php?pcode='.$row['product_code'].'"><img src="'.$row['image'].'" style="height:150px; width:auto;" alt="" /></a>
    <div class="price-details">
        <div class="price-number">
            <p><span class="rupees line-through">₹'.$row['price'].'</span> &nbsp; <span class="rupees">₹'.$row['offer_price'].'</span></p>
        </div>
        <div class="add-cart">
            <h4><a href="preview.php?pcode='.$row['product_code'].'">More Info</a></h4>
        </div>
        <div class="clear"></div>
    </div>
</li>';}
?>

                       </ul>
                       </div>
                </div>
            </div>
        </div>
    </div>
