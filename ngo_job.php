<!DOCTYPE html>
<html lang="en">
<head>
  <title>NGO/Development Jobs</title>
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
    .jumbotron:hover{
      background: #fffbc7;
      

    }
    #bdy{
      min-height: 550px;
    }

     
  </style>
  
</head>
<body>

<?php include('navbar.php'); ?>
<br> 


<div id="bdy" class="container">
  <div class="col-md-10 col-md-offset-1">
    
      <?php

      include('database.php');

        $sql="SELECT * FROM all_jobs WHERE job_category='NGO' ";


          $select =mysqli_query($connect,$sql);

     
        if (mysqli_num_rows($select) > 0) {

         // output data of each row
         while($row = mysqli_fetch_assoc($select)) 
          {
        ?>
        <div  class="jobs_link">
          <a style="text-decoration: none;"  href="view_details.php?job_id=<?php echo $row['all_jobs_id'] ?>" 
            target="_blank">
            
            <div class="jumbotron">
              <h3 style="color: green"><?php echo $row["company_name"] ?></h3>
              <h3 style="color: purple"><?php echo $row["position_name"] ?></h3>
              <table>
                <tr>
                  <td><h5 style="font-weight: bold;">Education</h5></td>
                  <td>:</td>
                  <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["educational_requirements"] ?></td>
                </tr>
                <tr>
                  <td><h5 style="font-weight: bold;">Experience</h5></td>
                  <td>:</td>
                  <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["experience_requirement"] ?></td>
                </tr>
              </table>
            </div>
          </a>
          
        </div>

        <?php

             }
           }

      ?>
    
  </div>
  
</div>

<?php include('footer.php');  ?> 

</body>
</html>



