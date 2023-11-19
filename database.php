<?php
 	require_once("config.php");

    $connect= mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   	if(!$connect){
    	die("Database connection failed !");
    }
?>