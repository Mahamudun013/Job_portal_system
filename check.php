<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

 if(isset($_GET['interviewer_id'])){

 	$interviewer=$_GET['interviewer_id'];
 	$emp_details=$_GET['emp_name'];

 	echo  "Name:".$interviewer."<br>";
 	echo "Emp:".$emp_details;
 }

 ?>
</body>
</html>