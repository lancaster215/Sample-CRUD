<?php
session_start();
include('includes.php');
if (isset($_POST['r'])) {
	$sql = mysqli_query($con, "SELECT * FROM province WHERE r_id = '".$_POST['r']."'");
	echo '<option>Select Province: </option>';
	while ($r = mysqli_fetch_array($sql)) {
		echo '<option value="'.$r['p_id'].'">'.$r['p_name'].'</option>';
	}
}
if (isset($_POST['p'])) {
	$sql = mysqli_query($con, "SELECT * FROM city WHERE p_id = '".$_POST['p']."'");
	echo '<option>Select Municipality/City: </option>';
	while ($r = mysqli_fetch_array($sql)) {
		echo '<option value="'.$r['c_id'].'">'.$r['c_name'].'</option>';
	}
}
?>