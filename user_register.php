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

<!-- Form validation section -->

<?php

     
    $name=$username=$password=$confirmpassword=$jobcategory=$gender=$phonenumber
    =$email="";

      
   
   if(isset($_POST["submit"]))
   {
        
       
           $name = test_input($_POST["name"]);
         
           $username = test_input($_POST["username"]);
       
           $password = test_input($_POST["password"]);
        
           $confirmpassword = test_input($_POST["confirmpassword"]);  

           if($password===$confirmpassword){

           }else{
             echo "<script> alert('Two password are not matched!')</script>";
                   echo '<script>location="user_register.php"</script>';
                   die();

           }


           $jobcategory = test_input($_POST["jobcategory"]);
		  	  
           $gender = test_input($_POST["gender"]);
       
           $phonenumber = test_input($_POST["phonenumber"]);

           $email = test_input($_POST["email"]);
        

        $file=$_FILES['image'];

        $proImage=$_FILES['image']['name'];
        $fileTmpName=$_FILES['image']['tmp_name'];
        $imageSize=$_FILES['image']['size'];

             
        $fileExt=explode(".", $proImage);
        $fileActualExt=strtolower(end($fileExt));
        $newImageName=$username.".".$fileActualExt;
        $fileDes='userImage/'.$newImageName;

        $valitExt=array('jpg');

        if(in_array($fileActualExt, $valitExt) && $imageSize < 2000000)
        {

            move_uploaded_file($fileTmpName, $fileDes);


        }
        else{
                   echo "<script> alert('Please, upload valid image format !')</script>";
                   echo '<script>location="user_register.php"</script>';
                   die();

        }



  }


   function test_input($data) 
   {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }


 
    include('database.php');  // connect database

    if(isset($_POST["submit"]))
    {


    if($connect)
    {

        $checkName=$username;
        $check=" SELECT * FROM user_table WHERE username='$checkName' " ;

        $find=mysqli_query($connect,$check);
        
        if(mysqli_num_rows($find)>0){

          echo '<script>alert("Sorry ! This username already exist. Use another one.") </script>';
          echo '<script> location="user_register.php"</script>';
        }
        

    
       $sql="INSERT INTO user_table( name,username,password,confirm_password,job_category,gender,phone_number,email,user_pic) VALUES('$name','$username','$password','$confirmpassword','$jobcategory','$gender','$phonenumber','$email','$fileDes')";

  
     $insert=mysqli_query($connect,$sql);
  
    if($insert)
    {
          echo '<script>alert("Congratulations ! Successfully Registered.") </script>';
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
    <h1 class="well">User Registration Form</h1>
  <div class="col-lg-12 well">
    <div class="row">
       <form action="#" method="post" enctype="multipart/form-data">
          <div class="col-sm-12">

              <div class="form-group">
                <label>Name</label><span class="error">*</span>
                <input type="text" placeholder="Enter Name Here.." class="form-control" name="name" required>
              </div>


              <div class="form-group">
                <label>Username</label><span class="error">*</span>
                <input type="text" placeholder="Enter Username Here.." class="form-control" 
                name="username" required>
              </div>
            


            
              <div class="form-group">
                <label>Password</label><span class="error">*</span>
                <input type="password" placeholder="Enter Password Here.." class="form-control"
                 name="password" required>
              </div>

              <div class="form-group">
                <label>Confirm Password</label><span class="error">*</span>
                <input type="password" placeholder="Enter Confirm Password Here.." class="form-control" name="confirmpassword" required>
              </div>
                       
                
      <div class="form-group">
                <label>Job Category<small> (select one)</small></label><span class="error">*</span>
          <select class="form-control" id="select" placeholder="Enter Job catagory Here.."  
          name="jobcategory"  required>
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
        			
          </select>
        </div>  
              
			  
			  <div class="form-group">
                <label>Gender </label><span class="error">*</span>
                <br>
                    <input type="radio" name="gender" value="male" required> Male
                    <input type="radio" name="gender" value="female" required> Female
              </div>
            

            <div class="form-group">
             <label>Phone Number</label><span class="error">*</span>
             <input type="text" placeholder="Enter Phone Number Here.." class="form-control" 
             name="phonenumber" required>
             </div>  

            <div class="form-group">
              <label>Email Address</label><span class="error">*</span>
              <input type="email" placeholder="Enter Email Address Here.." class="form-control" 
              name="email" required>
            </div>

            <div class="form-group">
              <label>Profile Picture</label><span class="error">* (only upload format: JPG)</span>
              <input type="file" placeholder=" " class="form-control" name="image" >
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

  <?php include('footer.php');  ?> 
</body>
</html>