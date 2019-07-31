<?php
session_start();
include('includes.php');
if (isset($_POST['submit1'])) {
	$reg = mysqli_real_escape_string($con, $_POST['region']);

	if(!empty($reg)){
		$sql = "INSERT INTO region(r_id, r_name) VALUES ('','$reg')";
		mysqli_query($con, $sql);
		header("Location: show_table.php?add=success");
		exit;
	}else{
		header("Location: index.php?error=empty");
		exit;
	}
}

if (isset($_POST['submit2'])) {
	$prov = mysqli_real_escape_string($con, $_POST['prov']);
	$rid = mysqli_real_escape_string($con, $_POST['reg']);

	if (!empty($prov) && !empty($rid)) {
		$sql = "INSERT INTO province(p_id, r_id, p_name) VALUES ('', '$rid','$prov')";
		mysqli_query($con, $sql);
		header("Location: show_table.php?add=success");
		exit;
	}else{
		header("Location: index.php?error=empty");
		exit;
	}
}
if (isset($_POST['submit3'])) {
	$city = mysqli_real_escape_string($con, $_POST['city']);
	$pid = mysqli_real_escape_string($con, $_POST['pro']);

	if (!empty($city) && !empty($pid)) {
		$sql = "INSERT INTO city(c_id, p_id, c_name) VALUES ('', '$pid','$city')";
		mysqli_query($con, $sql);
		header("Location: show_table.php?add=success");
		exit;
	}else{
		header("Location: index.php?error=empty");
		exit;
	}
}
if (isset($_POST['submit4'])) {
	$bar = mysqli_real_escape_string($con, $_POST['bar']);
	$cit = mysqli_real_escape_string($con, $_POST['cit']);

	if (!empty($bar) && !empty($cit)) {
		$sql = "INSERT INTO barangay(b_id, c_id, b_name) VALUES ('', '$cit','$bar')";
		mysqli_query($con, $sql);
		header("Location: show_table.php?add=success");
		exit;
	}else{
		header("Location: index.php?error=empty");
		exit;
	}
}
?>