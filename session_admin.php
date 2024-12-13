<?php  
session_start();  
  
if(!$_SESSION["id"])  
{  
  
 header("Location: admin_login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?> 
