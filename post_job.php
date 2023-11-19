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
  <title>Job Post Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
 <style>
   .error {color: #FF0000;}

  </style>

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
      <li><a href="my_post.php">My Post</a></li>    
    </ul>

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

     
  $position_name=$company_name=$job_category=$vacancy=$job_responsibility=$job_nature=$job_requirements
  =$educational_requirements=$experience_requirements=$last_date_Of_application=$job_location=$salary_range="";


$position_nameErr=$company_nameErr=$job_categoryErr=$vacancyErr=$job_responsibilityErr=$job_natureErr=
$job_requirementsErr=$educational_requirementsErr=$experience_requirementsErr=$last_date_Of_applicationErr
=$job_locationErr=$salary_rangeErr="";


   
   if(isset($_POST["submit"]))
   {

    include('database.php');  //$connect database
        
        
         $position_name = test_input($_POST["position_name"]);
          

         $company_name = test_input($_POST["company_name"]);
       

         
        $job_category = test_input($_POST["job_category"]);
        

         
        $vacancy = test_input($_POST["vacancy"]);
        
    
     //  $job_responsibility = test_input($_POST["job_responsibility"]);
    $job_responsibility =mysqli_real_escape_string($connect, $_POST['job_responsibility']);
    

         
        $job_nature = test_input($_POST["job_nature"]);
      

        
     // $job_requirements = test_input($_POST["job_requirements"]);
      $job_requirements =mysqli_real_escape_string($connect, $_POST['job_requirements']);
        
     
        $educational_requirements = test_input($_POST["educational_requirements"]);
        

        $experience_requirements = test_input($_POST["experience_requirements"]);
        

        $last_date_Of_application = test_input($_POST["last_date_Of_application"]);
      

         $job_location = test_input($_POST["job_location"]);
        

         $salary_range = test_input($_POST["salary_range"]);
    
}


   function test_input($data) 
   {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


?>

<?php 

if(isset($_POST["submit"]))
{
      
      include('database.php');  //$connect database


  if($connect)
  {

     // echo "Database Connected"."<br><br>";
    
       $sql="INSERT INTO all_jobs(position_name,company_name,job_category,vacancy,job_responsibility,job_nature,
       job_requirments,educational_requirements,experience_requirement,last_date_of_apply,job_location,salary_rang) VALUES('$position_name','$company_name','$job_category','$vacancy','$job_responsibility','$job_nature',
       '$job_requirements','$educational_requirements','$experience_requirements','$last_date_Of_application',
        '$job_location','$salary_range') ";


  
        $insert=mysqli_query($connect,$sql);
 




  
          if($insert)
          {
               
               echo '<script>alert("Congrates ! Job posted Successfully.") </script>';
          }
          else
          {

              echo '<script>alert("Sorry ! Submission Unsuccessfully.") </script>';
          }
  
  }


  mysqli_close($connect);

}

?>



<div class="container">
    <h1 class="well">Job Post Form</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <form  method="post">
          <div class="col-sm-12">

            <div class="form-group">
             <label>Position Name</label><span class="error">* <?php echo $position_nameErr;?></span>
             <input type="text" placeholder="Enter Position Name Here.." class="form-control" 
             name="position_name" required>
             </div>    
            <div class="form-group">
              <label>Company Name</label><span class="error">* <?php echo $company_nameErr;?></span>
              <input type="text" placeholder="Enter Company Name Here.." class="form-control" 
              name="company_name"  required>
            </div> 

            <div class="form-group">
              <label>Job Category<small> (select one)</small></label><span class="error">* <?php echo $job_categoryErr;?></span>
             <select class="form-control" id="select" placeholder="Enter Job Type Here.."  
              name="job_category"  required>
                <option></option>
                <option>Bank</option>
                <option>IT</option>
                <option>Engineering</option>
                <option>Garments</option>
                <option>Industry</option>
                <option>Hospital</option>
                <option>NGO</option>
                <option>Education</option>
                <option>Commercial</option>
                <option>Accounting</option>
                <option>Support</option>
                <option>Marketing</option>
                <option>Others</option>
                
              </select>
             </div> 



             <div class="form-group">
             <label>Vacancy</label><span class="error">* <?php echo $vacancyErr;?></span>
             <input type="text" placeholder="Enter Vacancy Here.." class="form-control" 
             name="vacancy"  required>
             </div>


              <div class="form-group">
              <label>Job Responsibility</label><span class="error">* <?php echo $job_responsibilityErr;?></span>
              <textarea placeholder="Enter Job Responsibility Here.." rows="3" class="form-control" 
              name="job_responsibility"></textarea>
            </div>


             <div class="form-group">
             <label>Job Nature</label><span class="error">* <?php echo $job_natureErr;?></span>
             <input type="text" placeholder="Enter Job Nature Here.." class="form-control" 
             name="job_nature" required>
             </div>

            <div class="form-group">
              <label>Job Requirements</label><span class="error">* <?php echo $job_requirementsErr;?></span>
              <textarea placeholder="Enter Job Requirements Here.." rows="3" class="form-control"
               name="job_requirements"></textarea>
            </div>

            

            <div class="form-group">
             <label>Educational Requirements</label><span class="error">* <?php echo $educational_requirementsErr;?></span>
             <input type="text" placeholder="Enter Educational Requirements Here.." class="form-control" 
             name="educational_requirements" required>
             </div>  

            <div class="form-group">
              <label>Experience Requirements</label><span class="error">* <?php echo $experience_requirementsErr;?></span>
              <input type="text" placeholder="Enter Experience Requirements Here.." class="form-control" 
              name="experience_requirements"  required>
            </div>  

            <div class="form-group">
              <label>Last Date Of Application</label><span class="error">* <?php echo $last_date_Of_applicationErr;?></span>
              <input type="date" placeholder="Enter Last Date Of Application Here.." class="form-control" 
              name="last_date_Of_application">
            </div>  



            <div class="form-group">
              <label>Job Location</label><span class="error">* <?php echo $job_locationErr;?></span>
              <input type="text" placeholder="Enter Job Location Here.." class="form-control" 
              name="job_location" required>
            </div>  

            <div class="form-group">
              <label>Salary Range</label><span class="error">* <?php echo $salary_rangeErr;?></span>
              <input type="text" placeholder="Enter Salary Range Here.." class="form-control" 
              name="salary_range" required>
            </div>

             <button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp&nbsp&nbsp&nbsp
             <button type="reset" class="btn btn-danger" name="reset">Reset</button>    
          </div>
        </form> 
        </div>
  </div>
  </div>
  <?php include('footer.php'); ?> 
</body>
</html>