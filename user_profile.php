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
 
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script src="http://maps.googleapis.com/maps/api/js"></script>
  
 
 </head>
 <style>
 
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

    nav{
      margin-bottom: 0px;
    }

    #img{
      float:right;
      margin-right: 100px;
      margin-bottom: 8px;
    }
    

 </style>
 
 <body>

 <nav class="navbar navbar-inverse">
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

      <li><a href="interview_invitation.php"><span class="glyphicon glyphicon-envelope"></span> Invitation</a></li>

      <li><a href="upload_cv.php"><span class="glyphicon glyphicon-plus-sign"></span> CV</a></li>
      
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
        
      <div class='jumbotron'>
       
        <div class='container text-center'>
            <h1>Hi, <?php echo $_SESSION['username']; ?></h1><p>Member of Jobsite.com</p>
          </div>
        </div>

 <h3 class="al">Profile</h3>
 <div class="row content">
   <div id="img"><img src="userImage/<?php echo $_SESSION['username'];?>.jpg" height="300px" width="250px"/> </div>
 
 <div class="col-sm-8" id="ala2">
<div class="cotainer text-center">
 <?php echo"<h3>".$_SESSION['username']."</h3>"; ?>
  <p><em>Welcome to JOB Site</em></p>
  <p>You are a member of this system.
  Whenever you need any service you should login first and do stuff as regarding.You can here Apply for  your desire JOB.</p>
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

