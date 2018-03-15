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
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
           // applicant_cv_view.php//

           -->
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

  
  <div class="container">

   <div class="col-md-10 col-md-offset-1">
    <div class="jumbotron">
      <table class="table table-hover table-bordered">
        <thead >
          <th>Serial</th>
          <th>Applicant Name</th>
          <th>Position</th>
          <th>Expected Salary</th>
          <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Action</th>
        </thead>
        
       <?php
          $empName=$_SESSION['employer'];
          $q="SELECT company_name FROM employer_table WHERE username='$empName'";
          $run=mysqli_query($connect,$q);
        
          
          if (mysqli_num_rows($run) > 0) {

           // output data of each row
            $i=1;
           while($row = mysqli_fetch_assoc($run)){
            $company_name= $row['company_name'];

            $sql="SELECT * FROM apply_table WHERE company_name='$company_name'";
            $select =mysqli_query($connect,$sql);
            if (mysqli_num_rows($select) > 0) {

             // output data of each row
             while($row = mysqli_fetch_assoc($select)){
      ?>  

          <tbody>
      
          <tr class="success">
            <td><?php  echo $i++; ?></td>
            <td><?php echo $row['applicant_name']; ?></td>
            <td><?php echo $row['position_name']; ?></td>
            <td><?php echo $row['expected_salary']; ?></td>
            <td>
              <a href="applicant_cv_view.php?appicant_username=<?php echo $row['applicant_name'] ?> & applicant_view_id=<?php echo $row['id'] ?>" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | 

               <a href="check.php?interviewer_id=<?php echo $row['id'] ?>& emp_name=<?php echo $_SESSION['employer']; ?> " class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span></a> | 

              <a href="functions.php?applicant_id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick=" return confirm('Are you sure to delete ?')"><span class="glyphicon glyphicon-trash"></span></a>



            </td>
          </tr>
        </tbody>
      
      <?php
        }
      }
    }
  }
      ?>
      </table>
    </div>
     
   </div>
  
  </div>


</body>
</html>
