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
    .jumbotron:hover{
      background: #fffbc7;
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

  <br>
  <br>
<div class="container">
  <div class="col-md-10 col-md-offset-1">
    
      <?php

        $sql="SELECT * FROM all_jobs";


           $select =mysqli_query($connect,$sql);

     
        if (mysqli_num_rows($select) > 0) {

         // output data of each row
         while($row = mysqli_fetch_assoc($select)) 
          {
        ?>
        <div  class="jobs_link">
          <a href="view_all.php?job_id=<?php echo $row['all_jobs_id'] ?>" target="_blank">
            
            <div class="jumbotron">
              <h3 style="color: green"><?php echo $row["company_name"] ?></h3>
              <h3 style="color: purple"><?php echo $row["position_name"] ?></h3>
              <table>
                <tr>
                  <td><h5 style="font-weight: bold;">Education</h5></td>
                  <td>:</td>
                  <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["educational_requirements"] ?></td>
                </tr>
                <tr>
                  <td><h5 style="font-weight: bold;">Experience</h5></td>
                  <td>:</td>
                  <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["experience_requirement"] ?></td>
                </tr>
              </table>
            </div>
          </a>
          
        </div>

        <?php

             }
           }

      ?>
    
  </div>
  
</div>

<?php include('footer.php'); ?>

</body>
</html>
