<?php

$conn=mysqli_connect("localhost","root","","jobsite");
if($conn)
{

	#sql="SELECT *FROM job_table;";
	$select=mysqli_query($conn,$sql);
	While($row=mysqli_fetch_assoc($select))
	{
		echo 
	}

}
else{
	echo "not connect";
}


?>