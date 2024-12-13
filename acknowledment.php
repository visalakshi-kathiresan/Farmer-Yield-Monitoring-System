<?php include 'session.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ACKNOWLEDMENT</title>
	<link rel="stylesheet" href="my.css">
	<style>
		#up
		{
			margin-left: 220px;
		}
		.left
		{
	padding-left: 105px;
	padding-right: 0px;
	width: 200px;
	float: left;
	line-height: 20px;
		}
		.right
		{
			  padding-right: 640px;
	width: 350px;
	float: right;
		}
	</style>
</head>
<body style= "background-image: url(h.jpg);">
<?php
$b=$_SESSION["id"];
include 'database.php';
$vi="select*from farmer_reg where user_name='$b'";
	$r=$cc->query($vi);
	if($r->num_rows>0)
	{
		while($row=$r->fetch_assoc())
		{ 
			$s=$row['Sno'];
			$a=$row['name'];
			$aa=$row['mobile_no'];
			$aaa=$row['aadhar_no'];
			$aaaa=$row['area'];
		}
	}
	?>
<input type="button" class="but" name="fquestion" id="fquestion" onclick="window.location.href='farmer_questions.php'" value="For Ask Question">
<input type="button" class="but" name="question" id="question" onclick="window.location.href='question.php'" value="Your_questions">
<input type="button" class="but" name="logout" id="logout" onclick="window.location.href='logout.php'" value="Log Out">
<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
	<div class="full">
		<div class="left" >
		<label>FARMER NAME :</label><br>
		<label>AADHAR NUMBER :</label><br>
		<label>AREA :</label><br>
		<label>MOBILE NO :</label>
		</div>
		<div class="right">
			<input type="text" name="fname" value="<?php echo $a ; ?>" readonly><br>
			<input type="text" name="aanum" value="<?php echo $aaa ; ?>"><br>
			<input type="text" name="area" value="<?php echo $aaaa ; ?>"><br>
			<input type="text" name="mob" value="<?php echo $aa ; ?>"><br>
		</div>
		<input type="submit" class="but" name="update" value="Update your Detail" id="up">
</div>
		
</form>
</body>
</html>
<?php 
if (isset($_POST['update'])) 
{
	$fname=$_POST['fname'];
	$aanum=$_POST['aanum'];
	$area=$_POST['area'];
	$mob=$_POST['mob'];
	$u="UPDATE `farmer_reg` SET `name`='$fname',`mobile_no`='$mob',`aadhar_no`='$aanum',`area`='$area' WHERE Sno='$s'";
	if ($cc->query($u)) 
	{

		header('Refresh:0');
	}
}
?>
