<?php
  include('functions.php');
  session_start();
  if(!isset($_SESSION['username'])){
    session_unset();
    session_destroy();
    header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CV Uploads</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .jobs_link a{
      text-decoration:none;
    }
    .jumbotron{
      min-height: 600px;
      margin: 0px;
      width: 80%;
      margin: 0px auto;
    }
    nav{
      
    }
  </style>
</head>
<body>

 <nav class="navbar navbar-inverse" style="border-radius: 0;margin-bottom: 0px; ">
  <div class="container">
    
    <div class="navbar-header" style="margin-top: 5px;">

      <img src="job.png" alt="Unload" width="40" height="40"/>
    </div>

    <div class="navbar-header">

      <a class="navbar-brand" href="#">JOBSITE.COM</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="user_home.php">JOBS</a></li>
      <li><a href="#"></a></li>

        <form class="navbar-form navbar-left">   
          <div class="input-group">
             <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
         </div>    
      </form>
    

    </ul>


    <ul class="nav navbar-nav navbar-right">

      <li><a href="interview_invitation.php"><span class="glyphicon glyphicon-envelope"></span> Invitation</a></li>

      <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span> CV</a></li>
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" 
        href="#"><?php echo $_SESSION['username'];?> &nbsp<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="user_profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
          <li><a href="functions.php?emp_username=<?php echo $_SESSION['username'];?> "><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>   

           <div class="jumbotron"> 
            <h2 style="color: blue; text-align: center;">Welcome to CV Bank of JOBSITE.COM</h2>

           
        <div class="container">    
        <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Upload Your CV Here..</div>
                      
                    </div>     


                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" method="post" role="form" action="" 
                        enctype="multipart/form-data" >
                                    
                            <div style="margin-bottom: 25px" class="input-group">

                                  <p style="color:red;">Please,only upload pdf file...</p>
                                        <input id="login-username" type="hidden" class="form-control" name="cv_username" value="<?php echo $_SESSION['username']; ?>" placeholder="" required>  
                                                                           
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                                        <input id="upload-file" type="file" class="form-control" name="file" placeholder="">
                                    </div>

                                    <input type="submit"  id="btn-login" name="submit" class="btn btn-success" value="Upload">

                            
                        </form> 

                        </div>                     
                    </div>  
        </div>
              
                
</div>
</div>
    
<?php  

   if(isset($_POST['submit'])){

      $cvUsername=$_POST['cv_username'] ;
     $file=$_FILES['file'];
     $fileName=$_FILES['file']['name'];
     $fileTmpName=$_FILES['file']['tmp_name'];
     $fileSize=$_FILES['file']['size'];

     $fileExt=explode(".", $fileName);
     $fileActualExt=strtolower(end($fileExt));
     $checkExt="pdf";

     if($fileActualExt==$checkExt){

          if($fileSize< 1000000){

              $fileNewName=$cvUsername.".".$fileActualExt;


              $fileDes='uploads/'.$fileNewName;
              if(move_uploaded_file($fileTmpName, $fileDes)){

                 echo '<script>alert("CV uploaded successfully !")</script>';

              }

              

             }

             else{

              echo '<script> alert("Sorry ! file  is too big !")</script>';

              
             }

     }


     elseif(empty($fileName))
     {
         echo '<script>alert("Please, Upload file. !")</script>';

     }

     else
     {
         echo '<script>alert("Please, Upload pdf file only. !")</script>';

     }

        

             

                
   }
             
                    
?>
<br>

<?php include('footer.php'); ?>

</body>
</html>