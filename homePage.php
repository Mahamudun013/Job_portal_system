<!DOCTYPE html>
<html lang="en">
<head>
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
      background-color: #f5eef8 ;
    }
    h3
    {
   color:#191069 ;
    }
    h4{
      color:#F0F3F4  ;
    }
    p{
      color: black;
    }

    .container_text-center{
      background-color: black;
      color: white;
    }
    .row{
      background-color: #f5eef8 ;

    }
    .section-seperator{
      background-color:blue;
    }
    .carousel-caption{
      /*background-color:yellow;*/
    }

    .myCarousel{
      background-color: blue;
    }
    #img5 {
    width:100%;
    height: 600px;
}
    #img2 {
    width:100%;
    height: 600px;
}
    #img4 {
    width:100%;
    height: 600px;
}
    #img6 {
    width:100%;
    height: 600px;
}
    #img5:hover {
    height: 650px;
    transition:5s;
}
    #img2:hover {
    height: 650px;
    transition:5s;
}
   #img4:hover {
    height: 650px;
    transition:5s;
}
   #img6:hover {
    height: 650px;
    transition:5s;
}

.carousel-inner{
      width: 100%; /* Set width to 100% */
      height: 600px;
      margin: auto;
      /*min-height:100px;*/
      background-color:red;
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
<nav class="navbar navbar-inverse ">
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








<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
     
      <div class="item active">
        <img id="img2" src="http://localhost/jobsite_project/job_portal/image/slideImage2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>     
        </div>      
      </div>
       <div class="item">
        <img id="img4" src="http://localhost/jobsite_project/job_portal/image/slideImage4.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
      <div class="item">
        <img id="img6" src="http://localhost/jobsite_project/job_portal/image/slideImage6.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
      <div class="item">
        <img id="img5" src="http://localhost/jobsite_project/job_portal/image/slideImage5.jpg" alt="Image" >
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container_text-center">   
<marquee scrollamount="5"><h4>* Available Banking job is 50 * Available Engineering job is 70 * Available IT job is 60 * Available Garments job is 100 * Available Customer Support job is 70 * Available Textile job is 80 * Available Marketing job is 150 * Others Available job is 20 *</h4></marquee> <br>
 <center><h2>Job Catagory</h2></center> 
 
  <div class="row">
    <div class="col-sm-4">
  <ul>
  <li><a href="http://localhost:8084/myphp/job_portal/bankingTable.php"><h3>Bank</h3></a></li>
  <li><a href="http://localhost:8084/myphp/job_portal/engineering.php"><h3>Engineering</h3></a></li>
  <li><a href="default.asp"><h3>IT Sector</h3></a></li>
  <li><a href="default.asp"><h3>Garments</h3></a></li>
  </ul>
     
    </div>
<div class="col-sm-4"> 
  <ul>
  <li><a href="default.asp"><h3>Customer Support</h3></a></li>
  <li><a href="default.asp"><h3>Textile</h3></a></li>
  <li><a href="default.asp"><h3>Marketing</h3></a></li>
  <li><a href="default.asp"><h3>Others</h3></a></li>
  </ul>
         
</div>
    <div class="col-sm-4">
      <div class="well">
       <p>Have you ever recruited an entirely new role and never mentioned that in the job description? 
       If you are, you’re missing out on a golden opportunity to make the business look dynamic and look like it’s really growing
       </p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

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