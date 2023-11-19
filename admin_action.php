<?php
	require_once("database.php");


	// delete employers

    if (isset($_GET['emp_name'])) {
      $uname=$_GET['emp_name'];
      $q="DELETE FROM employer_table WHERE username='$uname'";
      $r=mysqli_query($connect,$q);
      // echo $id;
      if(!$r){
        echo "<script>alert('Not Deleted')</script>";
        echo "<script>location='employer_list.php'</script>";
      }else{
        // echo "<script>alert('Application Deleted')</script>";
        echo "<script>location='employer_list.php'</script>";
      }
    }



 // delete users

    if (isset($_GET['user_name'])) {
      $user_name=$_GET['user_name'];
      $q="DELETE FROM user_table WHERE username='$user_name' ";
      $r=mysqli_query($connect,$q);
      // echo $id;
      if(!$r){
        echo "<script>alert('Not Deleted')</script>";
        echo "<script>location='user_list.php'</script>";
      }else{
        
        echo "<script>location='user_list.php'</script>";
      }
    }


// delete users

    if (isset($_GET['apply_id'])) {
      $app_id=$_GET['apply_id'];
      $q="DELETE FROM apply_table WHERE id='$app_id' ";
      $r=mysqli_query($connect,$q);
      // echo $id;
      if(!$r){
        echo "<script>alert('Not Deleted')</script>";
        echo "<script>location='applied_history.php'</script>";
      }else{
         
        echo "<script>location='applied_history.php'</script>";
      }
    }




?>
