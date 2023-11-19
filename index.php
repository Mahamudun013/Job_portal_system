<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jobsite Home</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
   <script>tinymce.init({ selector:'textarea' });</script>

  <style>
    <!-- ****css ****-->


     .navbar {
      margin-bottom: 0;
      border-radius: 0;
      }
    

    .container_text-center{
        background-color: #1359B3;
        color: white;
    }


    .myCarousel{
      background-color: blue;
    }

   
    #img2 {
        width:100%;
        height: 500px;
      }

    #img4 {
        width:100%;
        height: 500px;
    }
      
    #img5 {
      width:100%;
      height: 500px;
     }
     
    #img6 {
          width:100%;
          height: 500px;
      }


    #img2:hover {
        height: 550px;
        transition:5s;
    }

   #img4:hover {
        height: 550px;
        transition:5s;
    }
      
  #img5:hover {
        height: 550px;
        transition:5s;
       }

   #img6:hover {
        height: 550px;
        transition:5s;
    }

.carousel-inner{
      width: 100%;       /* Set width to 100% */
      height: 500px;
      margin: auto;
      /*min-height:100px;*/

      background-color:red;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */

  @media (max-width: 500px) {
    .carousel-caption {
      display: none; 
    }

   .row ul a{
      list-style-type:none;
    }


    .row li a{
      list-style-type:none;
    }

body{
  min-height: 600px;
}
ul{
      list-style-type:none;
    }
  </style>

</head>
<body>

 <?php include('navbar.php'); ?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
      <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

    <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
     
       <div class="item active">
          <img id="img2" src="image/slideImage2.jpg" alt="Image">
          <div class="carousel-caption"> 
          </div>      
        </div>

        <div class="item">
         <img id="img4" src="image/slideImage4.jpg" alt="Image">
         <div class="carousel-caption">
         </div>      
        </div>

        <div class="item">
           <img id="img5" src="image/slideImage5.jpg" alt="Image" >
           <div class="carousel-caption">
         
           </div>      
        </div>

        <div class="item">
          <img id="img6" src="image/slideImage6.jpg" alt="Image">
           <div class="carousel-caption">
          
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

  
<div class="container_text-center" style="min-height: 90px;">   
<marquee scrollamount="5"><h3>** Available Banking job is 40 ** Available Engineering job is 50 ** Available IT job is 70 * Available Garments job is 100 ** Available Customer Support job is 70 ** Available Textile job is 80 ** Available Marketing job is 150 ** Others Available job is 20 **

</h3></marquee> <br>

 </div>


  <div class="job_category" style="background-color:#eee; margin: 10px 40px 20px 40px;">

     <div style="color: #186CD0;">
       <h3><span class="glyphicon glyphicon-th-list"></span>&nbspBROWSE CATEGORY</h3>
     </div>

    <div class="row">
        <div class="col-sm-4">
          <ul style="list-style-type: none;">
            <li><a href="accounting_job.php"><h3>>Accounting/Finance</h3></a></li>
            <li><a href="bank_job.php"><h3>>Bank/Non-bank</h3></a></li>
            <li><a href="commercial_job.php"><h3>>Commercial/Supply</h3></a></li>
            <li><a href="education_job.php"><h3>>Education/Training</h3></a></li>            
          </ul>        
        </div>


        <div class="col-sm-4"> 
           <ul style="list-style-type: none;">
              <li><a href="engineering_job.php"><h3>>Engineering</h3></a></li>
              <li><a href="it_job.php"><h3>>IT & Telecommunication</h3></a></li>
              <li><a href="marketing_job.php"><h3>>Marketing/Sales</h3></a></li>
              <li><a href="ngo_job.php"><h3>>NGO/Development</h3></a></li>                       
            </ul>               
        </div>


      <div class="col-sm-4">
          <ul style="list-style-type: none;">
              <li><a href="customer_support_job.php"><h3>>Customer support/Call center</h3></a></li>
              <li><a href="garments_job.php"><h3>>Garments/Textile</h3></a></li>
              <li><a href="industry_job.php"><h3>>Industry</h3></a></li>
              <li><a href="others_job.php"><h3>>Others</h3></a></li>
          </ul>             
      </div>

  </div>

</div>

<?php include('footer.php'); ?>

</body>
</html>


