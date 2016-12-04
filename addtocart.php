<?php
	include 'dbconnection.php';
  var_dump($_POST['code']);
  var_dump($_POST['unit']);
	$query="insert into shopping_cart(product_code,quantity) values('".$_POST['code']."',".$_POST['unit'].")";
	$rs=mysqli_query($con, $query);
  var_dump($rs);
	if($rs)
	{
		header('location:cart.php' );
	}

?>
