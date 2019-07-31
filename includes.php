<?php
	$con = mysqli_connect("localhost", "root", "", "jmh") or die ("Could not connect to Database!");
	mysqli_select_db($con, "jmh");
?>