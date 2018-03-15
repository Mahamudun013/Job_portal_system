<?php
  include('functions.php');
  session_start();
  if(!isset($_SESSION['username'])){
    session_unset();
    session_destroy();
    header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .jobs_link a{
      text-decoration:none;
    }
    .jumbotron h5{
        color: #333333; 
        font-family: Arial, Helvetica, sans-serif;
    }
    
  </style>

</head>
<body>

 <nav class="navbar navbar-inverse" style="border-radius: 0">
  <div class="container">
    
    <div class="navbar-header" style="margin-top: 5px;">

      <img src="job.png" alt="Unload" width="40" height="40"/>
    </div>

    <div class="navbar-header">

      <a class="navbar-brand" href="#">JOBSITE.COM</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">JOBS</a></li>
      <li><a href="#"></a></li>

        <form class="navbar-form navbar-left">   
          <div class="input-group">
             <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
         </div>    
      </form>
    

    </ul>


    <ul class="nav navbar-nav navbar-right">

      

      <li><a href="user_home.php"><span class="glyphicon glyphicon-search"></span> Apply Job</a></li>
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" 
        href="#"><?php echo $_SESSION['username'];?> &nbsp<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="user_profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
          <li><a href="functions.php?emp_username=<?php echo $_SESSION['username'];?> "><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="jumbotron">
        <div class="form_head">
          <h3>Application Form</h3>
        </div>
        <hr>
        <div class="form_body">
          <?php
          //  apply job
              if (isset($_GET['job_id'])) {
                $applicant=$_GET['app_name'];
                $job_id=$_GET['job_id'];

                
              $sql="SELECT * FROM all_jobs WHERE all_jobs_id=$job_id";


             $select =mysqli_query($connect,$sql);

       
            if (mysqli_num_rows($select) > 0) {

             // output data of each row
             while($row = mysqli_fetch_assoc($select)){
              
          ?>
           <form class="form-horizontal" action="#" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-4">Account Name:</label>
              <div class="col-sm-6">
                <?php echo $applicant ?>
                <input type="hidden" name="applicant" value="<?php echo $applicant ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4">Company:</label>
              <div class="col-sm-6">          
                <?php echo $row["company_name"] ?>
                <input type="hidden" name="company" value="<?php echo $row["company_name"] ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4">Position Name:</label>
              <div class="col-sm-6">
                <?php echo $row["position_name"] ?>
                <input type="hidden" name="position" value="<?php echo $row["position_name"] ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4">Expected Salary:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter monthly expected Salary" name="expected_salary" required>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-4 col-sm-6">
                <button type="submit" class="btn btn-primary" name="job_apply">Apply</button>
              </div>
            </div>
          </form>
          <?php }
        }
      }?>
          
        </div>

      </div>
    
    </div>
  </div>
  <?php
    if (isset($_POST['job_apply'])) {
      $applicant=$_POST['applicant'];
      $company=$_POST['company'];
      $position=$_POST['position'];
      $Salary=$_POST['expected_salary'];

      // echo $applicant."<br>".$company."<br>".$position."<br>".$Salary;
      $query="INSERT INTO apply_table(applicant_name,company_name,position_name,expected_salary) VALUES('$applicant','$company','$position','$Salary')";
      $run=mysqli_query($connect,$query);
      if(!$run){
        echo "<script>alert('Application Not Submitted')</script>";
        echo "<script>location='user_home.php'</script>";
      }else{
        echo "<script>alert('Application Successfully Submitted')</script>";
        echo "<script>location='user_home.php'</script>";
      }

    }


  ?>
  <?php include ("footer.php"); ?>
  
</body>
</html>