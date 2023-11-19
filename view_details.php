<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jobs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <style type="text/css">

    .jobs_link a{
      text-decoration: none;
    }
    #link a{
      
      text-decoration:none;

    }
  

     
  </style>
  
</head>
<body>

<?php include('navbar.php'); ?>
<br> 


<div class="container">
    <div class="col-md-10 col-md-offset-1">
      <?php
       include('database.php');

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


         
        <?php
        }
      }
    }
      ?>


      </div>


    </div>
  </div>

<?php include('footer.php');  ?> 

</body>
</html>



