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
      <li><a href="#">My Post</a></li>

      
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

     
    $position_name=$company_name=$job_category=$vacancy=$job_responsibility
    =$job_nature=$job_requirements=$educational_requirements=$experience_requirements=$last_date_Of_application=$job_location=$salary_range="";


$position_nameErr=$company_nameErr=$job_categoryErr=$vacancyErr=$job_responsibilityErr
=$job_natureErr=$job_requirementsErr=$educational_requirementsErr=
$experience_requirementsErr=$last_date_Of_applicationErr=$job_locationErr=$salary_rangeErr="";



    
    
//if($_SERVER["REQUEST_METHOD"] == "POST")
   
   if(isset($_POST["submit"]))
   {
        
        if (empty($_POST["position_name"]))
         {
           $position_nameErr = "Position name is required";
         } 
        else 
        {
           $position_name = test_input($_POST["position_name"]);
        }


         if (empty($_POST["company_name"]))
         {
           $company_nameErr = "Company name is required";
         } 
        else 
        {
           $company_name = test_input($_POST["company_name"]);
        }


         if (empty($_POST["job_category"]))
         {
           $job_categoryErr = "Job category is required";
         } 
        else 
        {
           $job_category = test_input($_POST["job_category"]);
        }

         if (empty($_POST["vacancy"]))
         {
           $vacancyErr = " Vacancy is required";
         } 
        else 
        {
           $vacancy = test_input($_POST["vacancy"]);
        }


        if (empty($_POST["job_responsibility"]))
         {
           $job_responsibilityErr = " Job responsibility is required";
         } 
        else 
        {
           $job_responsibility = test_input($_POST["job_responsibility"]);
        }

         if (empty($_POST["job_nature"]))
         {
           $job_natureErr = "Job nature is required";
         } 
        else 
        {
           $job_nature = test_input($_POST["job_nature"]);
        }

        if (empty($_POST["job_requirements"]))
         {
           $job_requirementsErr = " Job requirements is required";
         } 
        else 
        {
           $job_requirements = test_input($_POST["job_requirements"]);
        }


        if (empty($_POST["educational_requirements"]))
         {
           $educational_requirementsErr = "Educational requirements is required";
         } 
        else 
        {
           $educational_requirements = test_input($_POST["educational_requirements"]);
        }


        if (empty($_POST["experience_requirements"]))
         {
           $experience_requirementsErr = "Experience requirements is required";
         } 
        else 
        {
           $experience_requirements = test_input($_POST["experience_requirements"]);
        }

        if (empty($_POST["last_date_Of_application"]))
         {
           $last_date_Of_applicationErr = "Last date Of application is required";
         } 
        else 
        {
           $last_date_Of_application = test_input($_POST["last_date_Of_application"]);
        }


        if (empty($_POST["job_location"]))
         {
           $job_locationErr = "Job location is required";
         } 
        else 
        {
           $job_location = test_input($_POST["job_location"]);
        }


         if (empty($_POST["salary_range"]))
         {
           $salary_rangeErr = "Salary range is required";
         } 
        else 
        {
           $salary_range = test_input($_POST["salary_range"]);
        }


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


 $conn= mysqli_connect("localhost","root","","job_site");

  if($conn)
  {

     // echo "Database Connected"."<br><br>";
    
       $sql="INSERT INTO all_jobs(position_name,company_name,job_category,vacancy,job_responsibility,job_nature,job_requirments,educational_requirements,experience_requirement,last_date_of_apply,job_location,salary_rang) VALUES('$position_name','$company_name','$job_category','$vacancy','$job_responsibility','$job_nature','$job_requirements','$educational_requirements','$experience_requirements','$last_date_Of_application','$job_location','$salary_range') ";


  
     $insert=mysqli_query($conn,$sql);





  
    if($insert)
    {
         // echo "Data Inserted"."<br>";
    }
    else
    {

       //echo "Data NOT inserted"."<br>";
    }



    if(!$insert){

        echo "<script>alert('Job Post Not Submitted')</script>";
       
      }
      else
      {
        echo "<script>alert('Posted  Successfully')</script>";
      }
  
  
  }


  mysqli_close($conn);

}
?>





<div class="container">
    <h1 class="well">Job Post Form</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <form action="" method="post">
          <div class="col-sm-12">



            <div class="form-group">
             <label>Position Name</label><span class="error">* <?php echo $position_nameErr;?></span>
             <input type="text" placeholder="Enter Position Name Here.." class="form-control" name="position_name">
             </div>    
            <div class="form-group">
              <label>Company Name</label><span class="error">* <?php echo $company_nameErr;?></span>
              <input type="text" placeholder="Enter Company Name Here.." class="form-control" name="company_name">
            </div> 

            <div class="form-group">
              <label>Job Category<small> (select one)</small></label><span class="error">* <?php echo $job_categoryErr;?></span>
             <select class="form-control" id="select" placeholder="Enter Job Type Here.."  name="job_category">
                <option></option>
                <option>Bank</option>
                <option>IT</option>
                <option>Garments</option>
                <option>Industry</option>
                <option>Hospital</option>
                <option>Education</option>
                <option>Engineering</option>
              </select>
             </div> 



             <div class="form-group">
             <label>Vacancy</label><span class="error">* <?php echo $vacancyErr;?></span>
             <input type="text" placeholder="Enter Vacancy Here.." class="form-control" name="vacancy">
             </div>


              <div class="form-group">
              <label>Job Responsibility</label><span class="error">* <?php echo $job_responsibilityErr;?></span>
              <textarea placeholder="Enter Job Responsibility Here.." rows="3" class="form-control" name="job_responsibility"></textarea>
            </div>


             <div class="form-group">
             <label>Job Nature</label><span class="error">* <?php echo $job_natureErr;?></span>
             <input type="text" placeholder="Enter Job Nature Here.." class="form-control" name="job_nature">
             </div>

            <div class="form-group">
              <label>Job Requirements</label><span class="error">* <?php echo $job_requirementsErr;?></span>
              <textarea placeholder="Enter Job Requirements Here.." rows="3" class="form-control" name="job_requirements"></textarea>
            </div>

            

            <div class="form-group">
             <label>Educational Requirements</label><span class="error">* <?php echo $educational_requirementsErr;?></span>
             <input type="text" placeholder="Enter Educational Requirements Here.." class="form-control" name="educational_requirements">
             </div>  

            <div class="form-group">
              <label>Experience Requirements</label><span class="error">* <?php echo $experience_requirementsErr;?></span>
              <input type="text" placeholder="Enter Experience Requirements Here.." class="form-control" name="experience_requirements">
            </div>  

            <div class="form-group">
              <label>Last Date Of Application</label><span class="error">* <?php echo $last_date_Of_applicationErr;?></span>
              <input type="date" placeholder="Enter Last Date Of Application Here.." class="form-control" name="last_date_Of_application">
            </div>  



            <div class="form-group">
              <label>Job Location</label><span class="error">* <?php echo $job_locationErr;?></span>
              <input type="text" placeholder="Enter Job Location Here.." class="form-control" name="job_location">
            </div>  

            <div class="form-group">
              <label>Salary Range</label><span class="error">* <?php echo $salary_rangeErr;?></span>
              <input type="text" placeholder="Enter Salary Range Here.." class="form-control" name="salary_range">
            </div>

             <button type="submit" class="btn btn-default" name="submit">Submit</button>    
          </div>
        </form> 
        </div>
  </div>
  </div>



<?php

    /*      echo  "Name: ".$position_name."<br>" ;
          echo  "Name: ".$company_name."<br>";
          echo  "Name: ".$job_category."<br>";
          echo  "Name: ".$vacancy."<br>";
          echo  "Name: ".$job_responsibility."<br>";
          echo  "Name: ".$job_nature."<br>";
          echo  "Name: ".$job_requirements."<br>";
          echo  "Name: ".$educational_requirements."<br>";
          echo  "Name: ".$experience_requirements."<br>";
          echo  "Name: ".$last_date_Of_application."<br>";
          echo  "Name: ".$job_location."<br>";
          echo  "Name: ".$salary_range."<br>";

*/

?>



</body>