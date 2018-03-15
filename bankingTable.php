<!DOCTYPE html>
<html lang="en">
<head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="job_site";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `all_jobs` WHERE job_category='Bank'";

$record=(mysqli_query($conn, $sql));

mysqli_close($conn);
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
    th{
      color: red;
    }
    td{
      color:blue;
    }

.carousel-inner{
      top: 50px;
      width: 100%; /* Set width to 100% */
      /*height: 600px;*/
      margin: auto;
      border-left:200px solid gray; 
      border-right:200px solid gray; 
      min-height:200px;
      /*background-color:red;*/
  }
  a{
    color: red;
  }


  /* Hide the carousel text when the screen is less than 600 pixels wide */
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
    <center><h1><b>Banking job</b></h1></center><br>
    <?php
    echo "<center>";
     while($data=mysqli_fetch_assoc($record)){
       echo "<h4>"."<b>";
       echo "position name:";
       echo"</h4>"."<b>";
       echo $data['position_name'];
       echo"<br>";
        echo "<h4>"."<b>";
       echo "company name:";
       echo"</h4>"."<b>";
       echo $data['company_name'];
       echo"<br>";
        echo "<h4>"."<b>";
       echo "job category";
       echo"</h4>"."<b>";
       echo $data['job_category'];
      
       echo"<br>";
        echo "<h4>"."<b>";
       echo "vacancy:";
       echo"</h4>"."<b>";
       echo $data['vacancy'];
       echo"<br>";
        echo "<h4>"."<b>";
       echo "job responsibility:";
       echo"</h4>"."<b>";
       echo $data['job_responsibility'];
       echo"<br>";
        echo "<h4>"."<b>";
       echo "job nature:";
       echo"</h4>"."<b>";
       echo $data['job_nature'];
       echo"<br>";
        echo "<h4>"."<b>";
       echo "job requirment:";
       echo"</h4>"."<b>";
       echo $data['job_requirments'];
       echo "<br>";
         echo "<h4>"."<b>";
       echo "educational requirement:";
       echo "</h4>"."<b>";
       echo $data['educational_requirements'];
       echo "<br>";
        echo "<h4>"."<b>";
       echo "experience requirement:";
       echo "</h4>"."<b>";
       echo $data['experience_requirement'];
       echo "<br>";
        echo "<h4>"."<b>";
       echo "last date of apply:";
       echo"</h4>"."<b>";
       echo $data['last_date_of_apply'];
       echo "<br>";
        echo "<h4>"."<b>";
       echo "job location:";
       echo"</h4>"."<b>";
       echo $data['job_location'];
       echo"<br>";
        echo "<h4>"."<b>";
       echo "salary rang:";
       echo"</h4>"."<b>";
       echo $data['salary_rang'];
       echo"<br>";
        
       echo "<a href='http://localhost:8084/myphp/job_portal/applyNow.php'>";
       echo "Apply Now";
       echo "</a>";
       echo"<br>";
       echo "<br>";
       echo "<br>";
       echo "***********************************************************************************************************************************************************";
       echo "<br>";
       echo"<br>";
       }
    echo "</center>";
    ?>
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