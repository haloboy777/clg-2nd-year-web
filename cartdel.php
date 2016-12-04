<?php

	include 'dbconnection.php';

	$query="delete from shopping_cart where product_code='".$_GET['code2']."'";
	$rs=mysqli_query($con, $query);
//var_dump($query);
//var_dump($rs);

	if($rs)
	{
		header('location:cart.php' );
	}

?>
