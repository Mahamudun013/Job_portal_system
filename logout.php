<?php
session_start();
session_destroy();
header('Location:jobsite_home.php');
?>