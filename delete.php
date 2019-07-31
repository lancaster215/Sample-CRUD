<?php
session_start();
include('includes.php');

if (isset($_GET['d1'])) {
	$del = $_GET['d1'];
	$sql = mysqli_query($con, "DELETE FROM barangay WHERE b_id = '$del'");
	echo'<script>
		alert("This Item has been deleted!");
		window.location.href="show_table.php";
	</script>';
}
if (isset($_GET['d2'])) {
	$del = $_GET['d2'];
	$sql = mysqli_query($con, "DELETE FROM city WHERE c_id = '$del'");
	echo'<script>
		alert("This Item has been deleted!");
		window.location.href="show_table.php";
	</script>';	
}
if (isset($_GET['d3'])) {
	$del = $_GET['d3'];
	$sql = mysqli_query($con, "DELETE FROM province WHERE p_id = '$del'");
	echo'<script>
		alert("This Item has been deleted!");
		window.location.href="show_table.php";
	</script>';	
}
if (isset($_GET['d4'])) {
	$del = $_GET['d4'];
	$sql = mysqli_query($con, "DELETE FROM region WHERE r_id = '$del'");
	echo'<script>
		alert("This Item has been deleted!");
		window.location.href="show_table.php";
	</script>';	
}
?>