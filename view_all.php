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

    .container h5{

      margin-bottom:20px;
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
      <li class="active"><a href="user_home.php">JOBS</a></li>
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
    <div class="col-md-10 col-md-offset-1">
      <?php
        if (isset($_GET['job_id'])) {
          $job_id=$_GET['job_id'];
          $sql="SELECT * FROM all_jobs WHERE all_jobs_id=$job_id";


             $select =mysqli_query($connect,$sql);

       
          if (mysqli_num_rows($select) > 0) {

           // output data of each row
           while($row = mysqli_fetch_assoc($select)){
      ?>  
         <div class="jumbotron">
          <h3 style="color: blue"><?php echo $row["position_name"] ?></h3>
          <br>
          <h3 style="color: green"><?php echo $row["company_name"] ?></h3>
          <br>
          <h4>Vacancy</h4>
          <h5 > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["vacancy"] ?></h5>
          <h4>Job Responsibility</h4>
          <h5 >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo htmlspecialchars_decode(stripslashes($row["job_responsibility"])) ?></h5>
          <h4>Job Nature</h4>
          <h5 >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["job_nature"] ?></h5>
          <h4>Educational Requirements</h4>
          <h5 >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["educational_requirements"] ?></h5>
          <h4>Experience Requirements</h4>
          <h5 >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["experience_requirement"] ?></h5>
          <h4>Job Requirements</h4>
          <h5 >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo htmlspecialchars_decode(stripslashes($row["job_requirments"])) ?></h5></h5>
          <h4>Job Location</h4>
          <h5>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["job_location"] ?></h5>
          <h4>Salary Range</h4>
          <h5>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["salary_rang"] ?></h5>
          <h4>Application Deadline</h4>
          <h5 >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["last_date_of_apply"] ?></h5>


          <a href="apply_form.php?app_name=<?php echo $_SESSION['username'] ?>&job_id=<?php echo $row['all_jobs_id'] ?>" class="btn btn-success" type="button"> Apply Now </a>
         
        <?php
        }
      }
    }
      ?>


      </div>


    </div>
  </div>
 <?php include ("footer.php"); ?>
  
</body>
</html>