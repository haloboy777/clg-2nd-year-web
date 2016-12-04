<?php
include 'dbconnection.php';?>

<?php if($_SERVER['REQUEST_METHOD']=='POST')
{
	$query="insert into feedback(name,email,subject,msg) values('".$_POST['userName']."','".$_POST['userEmail']."','".$_POST['usersubject']."','".$_POST['userMsg']."')";
	$result=mysqli_query($con,$query);
	var_dump($query);
	var_dump($result);
	if($result){
			echo "<script>alert('Your Response has been Successfully recorded!')</script>";
			header('location:index.php' );
	}
	else {
echo "<script>alert('Something went wrong!')</script>";
	}
}
else {
	include 'contact-body.php';
	include 'footer.php';
}?>
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
