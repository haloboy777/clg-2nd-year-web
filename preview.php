<?php
include 'dbconnection.php';
$code=isset($_GET['pcode']);?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/style0.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
  <link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  <title>Click-Kart</title>
</head>
<body>
<?php include 'menu.php';?>
<?php include 'product_d.php'; ?>
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
  <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
  <script src="js/jquery.mobile.custom.min.js"></script>
  <script src="js/jquery.openCarousel.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript" src="js/move-top.js"></script>
  <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
  <script type="text/javascript">
      $(document).ready(function() {
          $('#horizontalTab').easyResponsiveTabs({
              type: 'default', //Types: default, vertical, accordion
              width: 'auto', //auto or any width like 600px
              fit: true // 100% fit in a container
          });
      });
  </script>
  <link rel="stylesheet" href="css/etalage.css">
  <script src="js/jquery.etalage.min.js"></script>
  <script>
      jQuery(document).ready(function($) {

          $('#etalage').etalage({
              thumb_image_width: 300,
              thumb_image_height: 400,
              source_image_width: 900,
              source_image_height: 1200,
              show_hint: true,
              click_callback: function(image_anchor, instance_id) {
                  alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
              }
          });

      });
  </script>
  <a href="#" id="toTop"> </a>
  <script type="text/javascript" src="js/navigation.js"></script>
  <script src="js/jquery.mobile.custom.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
