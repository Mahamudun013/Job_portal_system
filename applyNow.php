<!DOCTYPE html>
<html lang="en">
<head>
<?php

     
$position_name=$company_name=$job_category=$message="";
$position_nameErr=$company_nameErr=$job_categoryErr=$messageErr="";
$validForm = false;


if (isset($_POST['action'])) {
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
           $job_categoryErr = " Job type is required";
         } 
        else 
        {
           $job_category = test_input($_POST["job_category"]);
        } 
if (empty($_FILES['myfile']['name'])) {
        $messageErr = "Please upload a file";
    } 
else {
        $fileName = $_FILES['myfile']['name'];
        $newFileName = time() . "_" . $fileName;
        $target_file = "uploads/".$newFileName;
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
            $message="The file " . basename($_FILES["myfile"]["name"]) . " has been uploaded.";
            $validForm = true;
            
        } 
        else {
            $messageErr =  "Sorry, there was an error uploading your file.";
        }
    }
    if($validForm){
        $conn = mysqli_connect("localhost", "root", "", "job_site");
        if($conn){
            $name = $_POST['name'];
            $sql = "INSERT INTO apply_now (position_name, company_name,job_category,uploaded_cv) VALUES ('$position_name','$company_name','$job_category',
            '$newFileName') ";
            $result = mysqli_query($conn, $sql);
            if($result){
                $messageErr = "Form successfully addedd";
            }
        }
        
        mysqli_close($conn);
    }
    
    
    unset($_POST['action']);
}



   function test_input($data) 
   {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


?>


  <title>Job Site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      position: relative;
      background-color:black;
      padding: 25px;
      height:150px;

    }
    .innerFooter{
      height: 95%;
      width: 80%;
      background-color:black;
      color: white;
    }
    .innerFooter:hover {
         background-color:#F5EEF8;
         opacity:0.5;
         color:#191069;
          }
    body{
      background-color:#f5eef8;
    }
    h2{
      color: blue;
    }
   
    .error {color: #FF0000;}

.carousel-inner{
      top: 50px;
      width: 100%; /* Set width to 100% */
      height: 800px;
      margin: auto;
      border-left:200px solid gray; 
      border-right:200px solid gray; 
      /*min-height:200px;*/
      /*background-color:red;*/
  }
   @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }

</style>
</head>
<body>
<div>
<nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">JOBSITE.COM</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
      <li class="active"><a href="#">JOBS</a></li>

        <!--This is a comment.
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" 
        href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li> -->

      <li><a href="#"></a></li>


      <form class="navbar-form navbar-left">
       <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
       <button type="submit" class="btn btn-default">Submit</button>
    </form>


    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="empregiatration.php"><span class="glyphicon glyphicon-user"></span>Employer Register</a></li>
      <li><a href="empregiatration.php"><span class="glyphicon glyphicon-user"></span>User Register</a></li>
      
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Employer Login</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> User Login</a></li>
    </ul>
  </div>
</nav>


    <div class="carousel-inner" role="listbox">
    <center><h2>Apply Now</h2></center>
             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
          <div class="col-sm-12">
          <br>   
          <br> 
          <br> 
          <br>
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
              </select>
             </div> 
              <div class="form-group">
             <label>Upload your CV</label><span class="error">* <?php echo $messageErr;?>
             </span>
             <input type="file"class="form-control" name="myfile" >
             </div> 
             <div class="form-group">
             <input type="hidden" name="action" value="abc">
            </div>  
           <button type="submit" class="btn btn-default" name="submit">Submit</button>
           <br>   
           <br> 
           <br> 
           <br>
           <br>   
           <br> 
           <br> 
           <br>  
          </div>
        </form>
    </div>

  
</div>
  


<footer class="container-fluid text-center">

<center>
<div class="innerFooter">

<b>Join the Largest Job Site of Bangladesh</b>

<h3>Call for help 1623</h3>
</div>
</center>   
</footer>
</div>
</body>
</html>
