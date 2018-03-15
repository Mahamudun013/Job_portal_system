<?php
	require_once("database.php");

	

//user login acceptance: 

  	if (isset($_POST["login"])) {
    	$uname=$_POST["username"];
    	$password=$_POST["password"];  

    	session_start();
    	if (!empty($_POST["username"])) {
     		$query= "SELECT * FROM user_table WHERE username='$uname' AND password='$password'";
      		$result= mysqli_query($connect,$query);
      		$row= mysqli_fetch_array($result);
      		if(!empty($row['username'] AND !empty($row['password']))){
        	$_SESSION['username']= $_POST["username"];
        		echo "<script>location='user_home.php'</script>";
      		}
      		else{
                echo "<script>alert('Sorry ! You enter wrong Username and Password. Please Retry... ')</script>";
				echo "<script>location='index.php'</script>";
      		}
    	}
    	elseif (empty($_POST["username"])) {
     		echo "<script>alert('Username empty !!!!')</script>";
      		session_unset();
      		session_destroy();
      		echo "<script>location='index.php'</script>";
    	}
    }


//employer login acceptance: 

    if (isset($_POST["signin"])) {
      $uname=$_POST["username"];
      $password=$_POST["password"];  

      session_start();
      if (!empty($_POST["username"])) {
        $query= "SELECT * FROM employer_table WHERE username='$uname' AND password='$password'";
          $result= mysqli_query($connect,$query);
          $row= mysqli_fetch_array($result);
          if(!empty($row['username'] AND !empty($row['password']))){
          $_SESSION['employer']= $_POST["username"];
            echo "<script>location='employer_home.php'</script>";
          }
          else{
                echo "<script>alert('Sorry ! You enter wrong Username and Password. Please Retry... ')</script>";
        echo "<script>location='index.php'</script>";
          }
      }
      elseif (empty($_POST["username"])) {
        echo "<script>alert('Username empty !!!!')</script>";
          session_unset();
          session_destroy();
          echo "<script>location='index.php'</script>";
      }
    }

    // logout
    if (isset($_GET['emp_username'])) {
      session_unset();
      session_destroy();
      header("Location:index.php");
    }


    // delete an applicant apllication form by employer

    if (isset($_GET['applicant_id'])) {
      $id=$_GET['applicant_id'];
      $q="DELETE FROM apply_table WHERE id='$id'";
      $r=mysqli_query($connect,$q);
      // echo $id;
      if(!$r){
        echo "<script>alert('Not Deleted')</script>";
        echo "<script>location='employer_home.php'</script>";
      }else{
        // echo "<script>alert('Application Deleted')</script>";
        echo "<script>location='employer_home.php'</script>";
      }
    }



    //admin login
    if (isset($_POST["adminLogin"])) {
      $aname=$_POST["admin"];
      $password=$_POST["pwd"];  

      session_start();
      if (!empty($_POST["admin"])) {
        $query= "SELECT * FROM admin_table WHERE adminName='$aname' AND password='$password'";
          $result= mysqli_query($connect,$query);
          $row= mysqli_fetch_array($result);
          if(!empty($row['adminName'] AND !empty($row['password']))){
          $_SESSION['adminName']= $_POST["admin"];
            echo "<script>location='admin_home.php'</script>";
          }
          else{
                echo "<script>alert('Sorry ! You enter wrong Username and Password. Please Retry... ')</script>";
        echo "<script>location='admin.php'</script>";
          }
      }
      elseif (empty($_POST["admin"])) {
        echo "<script>alert('Username empty !!!!')</script>";
          session_unset();
          session_destroy();
          echo "<script>location='admin.php'</script>";
      }
    }

     // Admin logout
    if (isset($_GET['adminName'])) {
      session_unset();
      session_destroy();
      header("Location:index.php");
    }

// delete job post from all jobs

    if (isset($_GET['j_id'])) {
      $id=$_GET['j_id'];
      $q="DELETE FROM all_jobs WHERE all_jobs_id='$id'";
      $r=mysqli_query($connect,$q);
      // echo $id;
      if(!$r){
        echo "<script>alert('Not Deleted')</script>";
        echo "<script>location='admin_home.php'</script>";
      }else{
        // echo "<script>alert('Application Deleted')</script>";
        echo "<script>location='admin_home.php'</script>";
      }
    }
?>