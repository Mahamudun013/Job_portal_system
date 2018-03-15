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
  
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>
 

 </head>
 <style>
 
  .navbar {
      /*font-family: Montserrat, sans-serif;*/
      margin-bottom: 0;
      background-color: black;
      border-radius: 0;
      border: 0;
      opacity: 0.9;
  }
  
  .al{
	  border:1px solid black;
	  text:center;
	  background-color:#485E73;
	  padding:5px;
	  text-align:center;
	  color:white;
  }
  #ala{
	  width:550px;
	  border:2px;
	  padding:25px;
	  margin:30px; 
  }
  #ala2{
	  width:550px;
	  border:2px;
	  padding:25px;
	  margin:30px; 
  }
  .jumbotron {
      margin-bottom: 0;
    }
	.modal-header, .a, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-body{
  color:black;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
 </style>
 
 <body>

 <nav class="navbar navbar-inverse ">
  <div class="container">
    
    <div class="navbar-header" style="margin-top: 5px;">
      <img src="job.png" alt="Unload" width="40" height="40"/>
    </div>

    <div class="navbar-header">
       <a class="navbar-brand" href="#">JOBSITE.COM</a>
    </div>

    
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Profile</a></li> -->
      <li><a href="post_job.php"><span class="glyphicon glyphicon-search"></span> Post Job</a></li>
      <li><a href="employer_home.php"><span class="glyphicon glyphicon-envelope"></span> Receive CV</a></li>
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
  <?php
        echo "<div class='jumbotron'>
        <div class='container text-center'>
             <h1>Hi,".$_SESSION['employer']."</h1><p>Member of Jobsite.com</p></div></div>";
  ?>

 <h3 class="al">Profile</h3>
 <div class="row content">
 
 <div class="col-sm-8" id="ala2">
<div class="cotainer text-center">
 <?php echo"<h3>".$_SESSION['employer']."</h3>"; ?>
  <p><em>Welcome to JOB Site</em></p>
  <p>You are a member of this system.
  Whenever you need any servicenyou
  should login first and do stuff as regarding.You can post here for your company.</p>
</div>
</div>
</div>
	<div class="jumbotron">
		<div class="container">
			<div class="row">
					 This site is built for helping Job seekers and Employers.
			</div>
		</div>
	</div>

   

  <br>

  <?php include('footer.php') ?>
 </body>

