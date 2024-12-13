<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOG_IN</title>
    <link rel="stylesheet" type="text/css" href="css/Login.css">
</head>
<body style="background-image: url(d.jpg);">
    <div class="container">

        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class=box2>

        <div class="box1">  
             <input type="text" name="Uname" id="Uname" placeholder="Directorate USER NAME" value="">
        </div>

        <div class="box1">     
             <input type="password" name="Pass" id="Pass" placeholder="PASSWORD" value="">
        </div>
        
             <input class="button" type="submit" name="log" id="log" value="LOG IN">
           </div>     
        </form>
    </div>   
</body>
</html>
<?php
include 'admin_log_session.php';
?>