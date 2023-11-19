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

  <style type="text/css">
    table th,td,tr{
      text-align: center;
    }
    .jumbotron{
      min-height: 500px;
      margin-bottom: 0px;
    }
    #bdy{
      min-height: 550px;
    }
  </style>
</head>
<body>



  
  <div id="bdy" class="container">

    <?php

           if(isset($_GET["cv_username"]))  { 

           $cvUname=$_GET["cv_username"];

           $Ext=".pdf";

           $filename="uploads/".$cvUname.$Ext;
           

             header('Content-type:application/pdf');
             header('Content-disposition: inline; filename="'.$filename.'"');
             header('content-Transfer-Encoding:binary');
             header('Accept-Ranges:bytes');
            @ readfile($filename);


            





            }


               



 ?>




     
    


  
  </div>

<?php include('footer.php') ?>

</body>
</html>
