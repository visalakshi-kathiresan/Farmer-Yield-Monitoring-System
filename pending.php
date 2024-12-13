<?php include'session_admin.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pending</title>

<style>
	#name
	{
		width: 20px;
	}
</style>
</head>
<body>
	<a href="logout.php" class="btn btn-primary btn-lg">logout</a>
	<input type="button" name="Home" id="Home" onclick="window.location.href='view_problem.php'" value="Home">
<?php
include 'database.php';
$vi="select*from farmer_question where status='PENDING'";
	$r=$cc->query($vi);
	if($r->num_rows>0)
	{ ?>
	<table border="10" style="text-align: center;">
		<tr>
			<th>sno</th>
		<th>Farmer Name</th>
		<th>Phone_No</th>
		<th>Area</th>
		<th>Type of Crop</th>
		<th>Soil Condition</th>
		<th>Surface</th>
		<th>Duration_of_Crop</th>
		<th>Current Duration</th>
		<th>Previous Crop</th>
		<th>Previous Fertilizer Used</th>
		<th>Crop Problem</th>
		<th>Image</th>
		<th>Status</th>
	</tr>
	<?php 
		while($row=$r->fetch_assoc())
		{  ?><tr>
			<form action="edit.php" method="post" enctype="multipart/form-data">
			<td><input type="text" name="name" id="name" readonly value="<?php echo $row['sno'];?>"></td>
			<td><?php echo $row['farmer_name'];?></td>
			<td><?php echo $row['phone_no'];?></td>
			<td><?php echo $row['area'];?></td>
			<td><?php echo $row['type_of_crop'];?></td>
			<td><?php echo $row['soil_conditon'];?></td>
			<td><?php echo $row['surface'];?></td>
			<td><?php echo $row['duration_of_crop'];?></td>
			<td><?php echo $row['current_duration'];?></td>
			<td><?php echo $row['previous_crop'];?></td>
			<td><?php echo $row['previous_fertilizer_used'];?></td>
			<td><?php echo $row['question'];?></td>
			<td><img src="<?php echo $row['photo'];?>" height='100' width='100'></td>
			<td><input type="submit" name="sub" id="sub" value="<?php echo $row['status'];?>"></td>
		</tr>
	</form>
		<?php 
			
		}
	}
	else
	{ ?>
		<script language="JavaScript">
			alert("You Dont have any question");
			history.back();
		</script>
	<?php }
	
	?>
</body>
</html>
