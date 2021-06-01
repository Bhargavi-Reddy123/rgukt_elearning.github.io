<?php
       session_start();
        define('SITEURL','http://localhost/mini-project/');
        $conn=mysqli_connect('localhost','root','')or die(mysqli_error());
        $db_select=mysqli_select_db($conn,'mini') or die(mysqli_error());
        
        
?>