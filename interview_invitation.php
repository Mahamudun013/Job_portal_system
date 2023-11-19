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
  <title>Interview Invitation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .jobs_link a{
      text-decoration:none;
    }
    .jumbotron{
      min-height: 500px;
      margin-top: 0px;
      margin-bottom: 0px;
    }
    
    table th,td,tr{
      text-align:center;
    }
    nav{
      margin-bottom: 0px;
    }
    h3#head{
      color: blue;
      text-align: center;
      margin-top: 0px;
    }
  </style>
</head>
<body>

 <nav class="navbar navbar-inverse" style="border-radius: 0;margin-bottom: 0px;">
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

  <br>
 
<div class="container">

   <div class="col-md-10 col-md-offset-1">
    <div class="jumbotron">
      <h3 id="head">Interview Call</h3>
      <table class="table table-hover table-bordered">
        <thead >
          <th>Serial</th>
          <th>Company Name</th>
          <th>Position</th>
          <th>Applicant Name</th>
          <th>Action</th>
        </thead>
    
      <?php

      $userName=$_SESSION['username'];

        $sql="SELECT * FROM interview_table WHERE applicant_name='$userName' ";


          $select =mysqli_query($connect,$sql);

     
        if (mysqli_num_rows($select) > 0) {
          $i=1;

         // output data of each row
         while($row = mysqli_fetch_assoc($select)) 
          {
        ?>
        <tbody>
      
          <tr class="success">
            <td><?php  echo $i++; ?></td>
            <td><?php echo $row['company_name']; ?></td>
            <td><?php echo $row['position_name']; ?></td>
            <td><?php echo $row['applicant_name']; ?></td>
            <td>

              <a href="functions.php?interview_id=<?php echo $row['iview_id'] ?>" class="btn btn-danger" onclick=" return confirm('Are you sure to delete ?')"><span class="glyphicon glyphicon-trash"></span></a>

            </td>
          </tr>
        </tbody>

        <?php

             }
           }

      ?>
    </table>
  </div>
  
</div>

</div>

<br>

<?php include('footer.php'); ?>

</body>
</html>
