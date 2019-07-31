<?php
include('includes.php');

if (isset($_GET['er'])) {
	$er = $_GET['er'];
}
if (isset($_GET['ep'])) {
	$ep = $_GET['ep'];
}
if (isset($_GET['ec'])) {
	$ec = $_GET['ec'];
}
if (isset($_GET['eb'])) {
	$eb = $_GET['eb'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>JMH</title>
</head>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<!--<script>
	$(document).ready(function(){
		$('#rd').change(function(){
			var rd = $(this).val();
			$.ajax({
				method: 'POST',
				url: 'this.php',
				dataType: 'text',
				data:{
					rd:rd
				},success:function(data){
					$('#rd1').html(data);
				}
			});
		})
		$('#pd').change(function(){
			var pd = $(this).val();
			$.ajax({
				method: 'POST',
				url: 'this.php',
				dataType: 'text',
				data:{
					pd:pd
				},success:function(data){
					$('#pd1').html(data);
				}
			});
		})
		$('#cd').change(function(){
			var cd = $(this).val();
			$.ajax({
				method: 'POST',
				url: 'this.php',
				dataType: 'text',
				data:{
					cd:cd
				},success:function(data){
					$('#cd1').html(data);
				}
			});
		})
		$('#bd').change(function(){
			var bd = $(this).val();
			$.ajax({
				method: 'POST',
				url: 'this.php',
				dataType: 'text',
				data:{
					bd:bd
				},success:function(data){
					$('#bd1').html(data);
				}
			});
		})
	});
</script>-->
<body>
<div>
	<center>
		<form action="edit_this.php" method="POST">
			<!--<select name="rd" id="rd">
				<option>Select Region:</option>-->
				<h3>Edit Region:</h3>
				<?php
					$sql = mysqli_query($con, "SELECT * FROM region WHERE r_name = '".$er."'");
					while ($r = mysqli_fetch_array($sql)) {
						echo'<input type="hidden" name="rrid" value="'.$r['r_id'].'"></input>
						<input type="text" name="rid" value="'.$r['r_name'].'"></input>';
					}
				?>
			<!--</select>
			<div id="rd1"></div>-->
			<input type="submit" name="edit1" value="Save Changes"><br><br>
			<!--<select name="pd" id="pd">
				<option>Select Province: </option>-->
				<h3>Edit Province:</h3>
				<?php
					$sql = mysqli_query($con, "SELECT * FROM province WHERE p_name = '".$ep."'");
					while ($r = mysqli_fetch_array($sql)) {
						echo'<input type="hidden" name="ppid" value="'.$r['p_id'].'"></input>
						<input type="text" name="pid" value="'.$r['p_name'].'"></input>';
					}
				?>
			<!--</select>
			<div id="pd1"></div>-->
			<input type="submit" name="edit2" value="Save Changes"><br><br>
			<!--<select name="cd" id="cd">
				<option>Select City: </option>-->
				<h3>Edit City:</h3>
				<?php
					$sql = mysqli_query($con, "SELECT * FROM city WHERE c_name = '".$ec."'");
					while ($r = mysqli_fetch_array($sql)) {
						echo'<input type="hidden" name="ccid" value="'.$r['c_id'].'"></input>
						<input type="text" name="cid" value="'.$r['c_name'].'"></input>';
					}
				?>
			<!--</select>
			<div id="cd1"></div>-->
			<input type="submit" name="edit3" value="Save Changes"><br><br>
			<!--<select name="bd" id="bd">
				<option>Select Barangay: </option>-->
				<h3>Edit Barangay:</h3>
				<?php
					$sql = mysqli_query($con, "SELECT * FROM barangay WHERE b_name = '".$eb."'");
					while ($r = mysqli_fetch_array($sql)) {
						echo'<input type="hidden" name="bbid" value="'.$r['b_id'].'"></input>
						<input type="text" name="bid" value="'.$r['b_name'].'"></input>';
					}
				?>
			<!--</select>
			<div id="bd1"></div>-->
			<input type="submit" name="edit4" value="Save Changes"><br><br>
			<button><a href="show_table.php" style="text-decoration: none;">Cancel</a></button>
		</form>
	</center>
</div>
</body>
</html>