<?php
include 'dbconnection.php';?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/style0.css">
  <link rel="stylesheet" href="css/padding.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  <title>Click-Kart</title>
</head>
<body>
<?php include 'menu.php';?>
<?php echo '

<div class="center-it-all">
<div class="center-it">
<h3>'.$_GET['cat'].'</h3>
  <div class="section group">';

$query = "select product_name,price,product_code,image from product where pro_cat='".$_GET['cat']."'";
//var_dump($query);
$result = mysqli_query($con, $query);
//var_dump($result);
while($row=mysqli_fetch_array($result))
    {
    $pro_name=$row['product_name'];
    $pro_price=$row['price'];
    $p_code=$row['product_code'];
    echo '<div class="grid_1_of_4 images_1_of_4">
      <h4><a href="preview.php?pcode='.$p_code.'">'.$pro_name.'</a></h4>
      <a href="preview.php?pcode='.$p_code.'"><img src="'.$row['image'].'" style="height:120px; width:auto;" alt="" /></a>
      <div class="price-details">
        <div class="price-number">
          <p><span class="rupees">₹'.$pro_price.'</span></p>
        </div>
        <div class="add-cart">
          <h4><a href="preview.php?pcode='.$p_code.'">More Info</a></h4>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    ';
  }
echo '
</div>
</div>
</div>
<div style="clear:both">
</div>'; ?>
<?php include 'slider.preview.php'; ?>
<?php include 'footer.php';?>
  <!--Scripts-->

  <script type="text/javascript">
  $(document).ready(function() {
  $().UItoTop({
    easingType: 'easeOutQuart'
  });

  });
  </script>
  <a href="#" id="toTop"> </a>
  <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
  <script src="js/jquery.openCarousel.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/navigation.js"></script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
