<?php
include('includes.php');
if (isset($_POST['rd'])) {
	$sql = mysqli_query($con, "SELECT * FROM region WHERE r_id='".$_POST['rd']."'");
	while ($r = mysqli_fetch_array($sql)) {
		echo '<br><input type="text" name="rid" value="'.$r['r_name'].'">
		<input type="hidden" name="rrid" value="'.$_POST['rd'].'">';
	}
}
if (isset($_POST['pd'])) {
	$sql = mysqli_query($con, "SELECT * FROM province WHERE p_id='".$_POST['pd']."'");
	while ($r = mysqli_fetch_array($sql)) {
		echo '<br><input type="text" name="pid" id="pd1" value="'.$r['p_name'].'">
		<input type="hidden" name="ppid" value="'.$_POST['pd'].'">';
	}
}
if (isset($_POST['cd'])) {
	$sql = mysqli_query($con, "SELECT * FROM city WHERE c_id='".$_POST['cd']."'");
	while ($r = mysqli_fetch_array($sql)) {
		echo '<br><input type="text" name="cid" id="cd1" value="'.$r['c_name'].'">
		<input type="hidden" name="ccid" value="'.$_POST['cd'].'">';
	}
}
if (isset($_POST['bd'])) {
	$sql = mysqli_query($con, "SELECT * FROM barangay WHERE b_id='".$_POST['bd']."'");
	while ($r = mysqli_fetch_array($sql)) {
		echo '<br><input type="text" name="bid" id="bd1" value="'.$r['b_name'].'">
		<input type="hidden" name="bbid" value="'.$_POST['bd'].'">';
	}
}
?>