<?php include'session_admin.php';?>
<?php
//if(isset($_POST['sub']))
$a=$_POST['name'];
//echo $a;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit problem status</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 

</head>
<body>
<a href="logout.php" class="btn btn-primary btn-lg">logout</a>
<a href="pending.php" class="btn btn-primary btn-lg">Back</a>
<form action="" method="post" enctype="multipart/form-data">
	<label for="no">CASE NO</label>
	<input type="text" name="no" id="no" value="<?php echo $a ;?>"><br>
	<textarea id="update" name="update"  class="btn btn-primary btn-lg" rows="5" cols="50"></textarea>
	<div class="mt-4 pt-2">
        <input class="btn btn-primary btn-lg" type="submit" id='submit' name="submit" value="Update_the_Answer" />
    </div>
</form>
</body>
<?php
if (isset($_POST['submit']))
{
	$a=$_POST['no'];
	$ans=$_POST['update'];
	 //echo $a.$ans;
	include'database.php';
	 $sql="UPDATE `farmer_question` SET `status`='$ans' WHERE `sno`='$a'";
	 $result=mysqli_query($cc,$sql);
if($result==true)
{
	//echo $a.$ans;
   header('location:view_problem.php');
}
	 
	// code...
}
?>
</html>