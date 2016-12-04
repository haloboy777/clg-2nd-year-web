<?php session_start();
include 'dbconnection.php';?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/style0.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">-->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  <title>Click-Kart</title>
</head>
<body>
<?php include 'menu.php';?>
<?php include 'big-product.php'; ?>
<div class="content main">
  <?php include 'slider.new.php'; ?>
  <?php include 'content-bottom.php'; ?>
</div>
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
