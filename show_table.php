<!DOCTYPE html>
<html>
<head>
	<title>JMH</title>
</head>
<?php include('includes.php');?>
<link rel="stylesheet" type="text/css" href="w3.css">
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script>
	$(document).ready(function(){
		$('#btn_del').click(function(){
			if (confirm("Are you sure you want to delete this?")) {
				var id = [];
				$(':checkbox:checked').each(function(i){
					id[i] = $(this).val();
				});
				if (id.length === 0) {
					alert("Select one");
				}else{
					$.ajax({
						method: 'POST',
						url: 'delete.php',
						dataType: 'text',
						data:{id:id},
						success:function(){
							for(var i=0; i<id.length; i++){
								$('tr#'+id[i]+'').css('background-color','#ccc');
								$('tr#'+id[i]+'').fadeOut('slow');
							}
						}
					});
				}
			}else{
				return false;
			}
		});
	});
</script>
<body>
<center>
	<div style="width: 75%;">
		<table class="w3-table-all">
			<thead>
				<tr>
					<th>Location</th>
					<th colspan="4">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<?php
					$sql = mysqli_query($con, "SELECT * FROM region, province, city, barangay WHERE region.r_id=province.r_id AND province.p_id=city.p_id AND city.c_id=barangay.c_id");
					//$count = 0;
					//$rid = 0;
					if ($check = mysqli_num_rows($sql)>0) {					
						while ($row = mysqli_fetch_array($sql)) {
				?>
						<tr id="<?php echo''.$row['r_id'].'';?>"><td><?=$row['r_name'];?></td>
							<td><button><a href="delete.php?d4=<?=$row['r_id']?>" style="text-decoration: none;">X</a></button></td></tr>
						<tr id="<?php echo''.$row['p_id'].'';?>"><td><?php echo'^-'.$row['p_name'].''?></td>
							<td><button><a href="delete.php?d3=<?=$row['p_id']?>" style="text-decoration: none;">X</a></button></td></tr>
						<tr id="<?php echo''.$row['c_id'].'';?>"><td><?php echo'^--'.$row['c_name'].''?></td>
							<td><button><a href="delete.php?d2=<?=$row['c_id']?>" style="text-decoration: none;">X</a></button></td></tr>
						<tr id="<?php echo''.$row['b_id'].'';?>"><td><?php echo'^---'.$row['b_name'].''?></td>
							<td><button><a href="delete.php?d1=<?=$row['b_id']?>" style="text-decoration: none;">X</a></button></td>
						<td><button><a href="index.php" style="text-decoration: none;">ADD</a></button>
						<button><a href="edit.php?er=<?=$row['r_name'];?>&&ep=<?=$row['p_name'];?>&&ec=<?=$row['c_name'];?>&&eb=<?=$row['b_name'];?>" style="text-decoration: none;">EDIT</a></button>
						<button><a href="view.php?er=<?=$row['r_name'];?>&&ep=<?=$row['p_name'];?>&&ec=<?=$row['c_name'];?>&&eb=<?=$row['b_name'];?>" style="text-decoration: none;"></a></button></td></tr>
				<?php	}
					}else{?>
						<tr><td><?php echo'None'; ?></td>
						<td><button><a href="index.php" style="text-decoration: none;">ADD</a></button></td></tr>
				<?php 	}	?>
				</tr>
			</tbody>
		</table>
	</div>
</center>
</body>
</html>