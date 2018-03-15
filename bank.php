<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bank Jobs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' }); </script>
  <style>
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
</head>

<body>

<?php include('navbar.php'); ?>


<div class="container">

<div class="col-md-10 col-md-offset-1">
 <div class="jumbotron" style="margin-top: 20px;">

 <?php


     $conn= mysqli_connect("localhost","root","","job_site");

    if($conn)
    {
 
           //echo "Database Connected"."<br><br>";

           $sql="SELECT * FROM all_jobs WHERE job_category='Bank' ";


           $select =mysqli_query($conn,$sql);

     
        if (mysqli_num_rows($select) > 0) {

         // output data of each row
         while($row = mysqli_fetch_assoc($select)) 
          {

?> 
           <div>

               <h3 style="color: blue "> <?php echo $row["position_name"] ?> </h3><br>
               <h2 style="color: green "><?php echo $row["company_name"] ?> </h2><br>
        <?php
               echo "<b>Job Category:</b><br>"."&nbsp&nbsp&nbsp&nbsp&nbsp".$row["job_category"]."<br>";
               echo "<b>Vacancy:</b><br>". " &nbsp&nbsp&nbsp&nbsp&nbsp".$row["vacancy"]."<br>";
              
               echo "<b>Job Responsibility:</b>";
               echo htmlspecialchars_decode(stripslashes($row["job_responsibility"]));
               echo "<b>Job Nature:</b><br>".$row["job_nature"]."<br>";

               echo "<b>Job Requirments:</b>";
               echo htmlspecialchars_decode(stripslashes($row["job_requirments"]));

               echo "<b>Educational Requirements:</b><br>";
               echo  "&nbsp&nbsp&nbsp&nbsp&nbsp".$row["educational_requirements"]."<br>";
               echo "<b>Experience Requirement:</b><br>";
               echo  "&nbsp&nbsp&nbsp&nbsp&nbsp".$row["experience_requirement"]."<br>";
               

               echo "<b>Job Location:</b><br>"."&nbsp&nbsp&nbsp&nbsp&nbsp".$row["job_location"]."<br>";
               echo "<b>Salary Range:</b><br>"." &nbsp&nbsp&nbsp&nbsp&nbsp".$row["salary_rang"]."<br>";
               echo "<b>Last Date of Apply:</b><br>"."&nbsp&nbsp&nbsp&nbsp&nbsp".$row["last_date_of_apply"]."<br>";
               ?>

              </div>
<?php 
  
              }
            }
    }
           
         
      mysqli_close($conn);




   ?>

</div>

 </div>
</div>

<?php include('footer.php');  ?> 





</body>
</html>



