<?php include'session_admin.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Home</title>
	<link rel="stylesheet" href="my.css">

<style>
	#name
	{
		width: 20px;
	}
</style>
</head>
<body style="background-image: url(h.jpg);">
	<div><a href="logout.php" class="btn btn-primary btn-lg" class="but">logout</a>
<input type="button" class="but" name="solved" id="solved" value="SOLVED_QUESTIONS" onclick="window.location.href='updateddb.php'">
<input type="button" class="but" name="solved" id="solved" value="PENDING" onclick="window.location.href='pending.php'">
</div>
</body>
</html>
