<head>
<link rel="stylesheet" href="my.css">
	<style>
	.bg
	{
		background-color: #adff2fd1;
	}
	#name
	{
		width: 20px;
	}
</style>
</head>
<?php
include 'session.php';
$b=$_SESSION["id"];
include 'database.php';
$vi="select*from farmer_reg where user_name='$b'";
	$r=$cc->query($vi);
	if($r->num_rows>0)
	{
		while($row=$r->fetch_assoc())
		{ 
			$a=$row['name'];
		}
	}
	?>
	<h1>HAI <?php echo $a; ?></h1>
<?php
$sql="select*from farmer_question where farmer_name='$a'";
$r=$cc->query($sql);
	if($r->num_rows>0)
	{ ?>
	<table border="3" style="text-align: center;">
		<tr>
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
		{ ?><tr>
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
			<td><?php echo $row['status'];?></td>
		</tr>
		<?php }
	}
	else{
		?>
		<script language="JavaScript">
			alert("You Dont have any question")
		</script>
	<?php }
	?>	
	<body class=bg>
	<input type="button" class=but name="Home" id="Home" onclick="window.location.href='acknowledment.php'" value="Home">
	<input type="button" class=but name="fquestion" id="fquestion" onclick="window.location.href='farmer_questions.php'" value="For Ask Question">
<input type="button" class=but name="logout" id="logout" onclick="window.location.href='logout.php'" value="Log Out">
	</body>