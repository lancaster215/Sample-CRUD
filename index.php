<!DOCTYPE html>
<html>
<head>
	<title>JMH</title>
</head>
<?php include('includes.php');?>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script>
	$(document).ready(function(){
		$('#reg').change(function(){
			var r_id = $(this).val();
			$.ajax({
				method: 'POST',
				url: 'option.php',
				dataType: 'text',
				data:{
					r:r_id
				},
				success:function(data){
					$('#pro').html(data);
				}
			});
		});
		$('#pro').change(function(){
			var p_id = $(this).val();
			$.ajax({
				method: 'POST',
				url: 'option.php',
				dataType: 'text',
				data:{
					p:p_id
				},
				success:function(data){
					$('#cit').html(data);
				}
			});
		});
	});
</script>
<body>
<center>
	<form method="POST" action="add.php">
		<h1>Input Region:</h1>
		<input type="text" name="region" id="region"><br>
		<input type="submit" name="submit1" value="ADD">
		<h1>Input Province of 
			<select id="reg" name="reg" >
				<option>Select Region:</option>
				<?php
					$sql = mysqli_query($con, "SELECT * FROM region ORDER BY r_name");
					while ($r = mysqli_fetch_array($sql)) {
						echo '<option value="'.$r['r_id'].'">'.$r['r_name'].'</option>';
					}
				?>
			</select>
		:</h1>
		<input type="text" name="prov" id="prov"><br>
		<input type="submit" name="submit2" value="ADD">
		<h1>Input Municipality/City of 
			<select id="pro" name="pro">
				<option>Select Province:</option>
			</select>
		:</h1>
		<input type="text" name="city" id="city"><br>
		<input type="submit" name="submit3" value="ADD">
		<h1>Input Barangay of 
			<select id="cit" name="cit">
				<option>Select Municipality/City:</option>
			</select>
		:</h1>
		<input type="text" name="bar" id="bar"><br>
		<input type="submit" name="submit4" value="ADD">
	</form>
</center>
</body>
</html>