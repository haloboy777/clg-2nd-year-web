<?php
$mysql_hostname = "localhost";
$mysql_user ="root";
$mysql_password ="";
$mysql_database ="click_kart";
$bd = ($con = mysqli_connect($mysql_hostname,  $mysql_user,  $mysql_password)) or die("oops !Could not connect database");
((bool)mysqli_query( $bd, "USE " . $mysql_database)) or die("opps! database not connected");

?>
