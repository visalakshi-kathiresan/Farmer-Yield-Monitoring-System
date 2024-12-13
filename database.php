<?php
    $s="localhost";
    $un="root";
    $pas="";
    $db="farmer";
    $cc=new mysqli($s,$un,$pas,$db);
    if($cc->connect_error)
    {
        echo"con";
    }
?>