 <?php
  include('functions.php');
  session_start();
  if(!isset($_SESSION['employer'])){
    session_unset();
    session_destroy();
    header("Location:index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employer Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

 <nav class="navbar navbar-inverse ">
  <div class="container">
    
    <div class="navbar-header" style="margin-top: 5px;">
      <img src="job.png" alt="Unload" width="40" height="40"/>
    </div>

    <div class="navbar-header">
       <a class="navbar-brand" href="#">JOBSITE.COM</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">My Post</a></li>

      
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Profile</a></li> -->
      <li><a href="post_job.php"><span class="glyphicon glyphicon-search"></span> Post Job</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Receive CV</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" 
        href="#"><?php echo $_SESSION['employer'];?> &nbsp<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="employer_profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
          <li><a href="functions.php?emp_username=<?php echo $_SESSION['employer'];?> "><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </li>

    </ul>


  </div>
</nav>

  
  <div class="container">

   <div class="col-md-10 col-md-offset-1">
    <div class="jumbotron">
      <?php
       //  applicant  information show

          
         /* if (isset($_GET['applicant_view_id'])) {
            $id=$_GET['applicant_view_id'];
            $q="SELECT applicant_name FROM apply_table WHERE id='$id'";
            $r=mysqli_query($connect,$q);
            // cv show from database

          */



            if (isset($_GET['appicant_username'])) {
            $username=$_GET['appicant_username'];
            $q="SELECT * FROM cv_table WHERE username='$username'";
            $r=mysqli_query($connect,$q);
            // cv show from database


          
          if (mysqli_num_rows($r) > 0) 
          {

             // output data of each row
 
              while($row = mysqli_fetch_assoc($r))
             {

    ?>      <h2 style="text-align: center;color: blue;"> Applicant Details Info</h2> ";
      
             <h2 style="">Username:</h2>
             <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['username']; ?><br></h3>
             <h2>Name:</h2>
             <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['full_name']; ?><br></h3>
             
             <h2>University Info:</h2>
             <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['university_info']; ?><br></h3>
             
             <h2>HSC Info:</h2>
             <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['hsc_info']; ?><br></h3>
             
             <h2>SSC Info:</h2>
             <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['ssc_info']; ?><br></h3>
             

             <h2>Skill:</h2>
             <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['skill_info']; ?><br></h3>
          <?php    


            }
          }


          }

      ?>
    </div>
  </div>
  </div>
</body>
</html>