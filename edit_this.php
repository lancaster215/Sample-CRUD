<?php
include('includes.php');
if (isset($_POST['edit1'])) {
	$region = mysqli_real_escape_string($con, $_POST['rid']);
	$rrid = mysqli_real_escape_string($con, $_POST['rrid']);
	$sql1 = mysqli_query($con, "UPDATE region SET r_name='$region' WHERE r_id='$rrid'");
	echo '<script>
			alert("Sucessfully Updated!");
			window.location.href="show_table.php";
		</script>';
}else if (isset($_POST['edit2'])) {
	$prov = mysqli_real_escape_string($con, $_POST['pid']);
	$ppid = mysqli_real_escape_string($con, $_POST['ppid']);
	$sql2 = mysqli_query($con, "UPDATE province SET p_name='$prov' WHERE p_id='$ppid'");
	echo '<script>
			alert("Sucessfully Updated!");
			window.location.href="show_table.php";
		</script>';
}else if (isset($_POST['edit3'])) {
	$city =  mysqli_real_escape_string($con, $_POST['cid']);
	$ccid = mysqli_real_escape_string($con, $_POST['ccid']);
	$sql3 = mysqli_query($con, "UPDATE city SET c_name='$city' WHERE c_id='$ccid'");
	echo '<script>
			alert("Sucessfully Updated!");
			window.location.href="show_table.php";
		</script>';
}else if(isset($_POST['edit4'])){
	$bara = mysqli_real_escape_string($con, $_POST['bid']);
	$bbid = mysqli_real_escape_string($con, $_POST['bbid']);
	$sql4 = mysqli_query($con, "UPDATE barangay SET b_name='$bara' WHERE b_id='$bbid'");
	echo '<script>
			alert("Sucessfully Updated!");
			window.location.href="show_table.php";
		</script>';
}
?>