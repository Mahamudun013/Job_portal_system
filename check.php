<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   .error {color: #FF0000;}
  </style>

</head>
<body>
<?php include('navbar.php'); ?>

<?php


 if(isset($_POST["submit"]))
   {      
   	   //$username=$_POST['username'];

        $file=$_FILES['file'];




   // echo $username;
    echo $file;

        // $proImage=$_FILES['file']['name'];
        // $fileTmpName=$_FILES['file']['tmp_name'];
        // $imageSize=$_FILES['file']['size'];
        // $fileExt=explode(".", $proImage);
        // $fileActualExt=strtolower(end($fileExt));

        // $valitExt=array('jpg','jpeg','png','gif');

        // if(in_array($fileActualExt, $valitExt)){
        //  if($imageSize < 200000){

        //   $newImageName=$username.".".$fileActualExt;
        //    $fileDes='proimage/'.$newImageName;
        //    move_uploaded_file($fileTmpName, $fileDes);


        //  }

        //  else{

        //   echo "<script> alert('Image size is too big.')</script>";

        //  }


        // }

        // else{
        //   echo "<script> alert('Please, Upload valid image formate.')</script>";
        // }



}


 ?>
     <div class="container">
    <h1 class="well">User Registration Form</h1>
  <div class="col-lg-12 well">
    <div class="row">
    	<form action="#" method="post">
          <div class="col-sm-12">

            <div class="form-group">
                <label>Username</label><span class="error">*</span>
                <input type="text" placeholder="Enter Username Here.." class="form-control" 
                name="username" required>
              </div>


   	     <div class="form-group">
              <label>Profile Picture</label><span class="error">* (jpg, jpeg, png, gif)</span>
              <input type="file" class="form-control" name="file" >
            </div> 

            <input type="checkbox" value="" name="check1" required> I agree to the Jobsite.com <font color="blue" > Terms of use.</font><br><br>
            <!-- <input type="checkbox" value="" name="check2"> Subscribe to Jobsite Newsletter. <br><br> -->

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp&nbsp&nbsp&nbsp&nbsp
            <button type="reset" class="btn btn-danger" name="reset">Reset</button>      
          </div>
        </form> 
 
 </div>
</div>
</div>





</body>
</html>