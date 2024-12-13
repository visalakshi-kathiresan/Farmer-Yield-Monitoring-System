<?php
if(isset($_POST['admin']))
{
 header('location:admin_login.php');
}
if(isset($_POST['farmer']))
{
	header('location:farmer_login.php');
	//include 'login_session.php';
}
?>	