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

    $nameErr=$usernameErr=$passwordErr=$confirmpasswordErr=$jobcategoryErr=$genderErr=$phonenumberErr=$emailErr="";
      
    
//if($_SERVER["REQUEST_METHOD"] == "POST")
   
   if(isset($_POST["submit"]))
   {
        
        if (empty($_POST["name"]))
         {
           $nameErr = "Name is required";
         } 
        else 
        {
           $name = test_input($_POST["name"]);
        }
		


         if (empty($_POST["username"]))
         {
           $usernameErr = "Username is required";
         } 
        else 
        {
           $username = test_input($_POST["username"]);
        }

         if (empty($_POST["password"]))
         {
           $passwordErr = " Password is required";
         } 
        else 
        {
           $password = test_input($_POST["password"]);
        }

         if (empty($_POST["confirmpassword"]))
         {
           $confirmpasswordErr = " Confirm password is required";
         } 
        else 
        {
           $confirmpassword = test_input($_POST["confirmpassword"]);
        }


        if (empty($_POST["jobcategory"]))
         {
           $jobcategoryErr = " Job catagory is required";
         } 
        else 
        {
           $jobcategory = test_input($_POST["jobcategory"]);
        }
		
		  if (empty($_POST["gender"]))
		  {
           $genderErr = "Gender is required";
         } 
		 else
	     {
           $gender = test_input($_POST["gender"]);
       }


        if (empty($_POST["phonenumber"]))
         {
           $phonenumberErr = "Phone number is required";
         } 
        else 
        {
           $phonenumber = test_input($_POST["phonenumber"]);
        }


         if (empty($_POST["email"]))
         {
           $emailErr = "Email is required";
         } 
        else 
        {
           $email = test_input($_POST["email"]);
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

      //echo "Database Connected"."<br><br>";
    
       $sql="INSERT INTO user_table( name,username,password,confirm_password,job_category,gender,phone_number,email) VALUES('$name','$username','$password','$confirmpassword','$jobcategory','$gender','$phonenumber','$email')";

  
     $insert=mysqli_query($conn,$sql);
  
    if($insert)
    {
        //  echo "Data Inserted"."<br>";
    }
    else
    {

       //echo "Data NOT inserted"."<br>";
    }
  
  
  }


  mysqli_close($conn);

}
?>




<div class="container">
    <h1 class="well">User Registration Form</h1>
  <div class="col-lg-12 well">
    <div class="row">
       <form action="#" method="post">
          <div class="col-sm-12">

              <div class="form-group">
                <label>Name</label><span class="error">* <?php echo $nameErr;?></span>
                <input type="text" placeholder="Enter Name Here.." class="form-control" name="name">
              </div>


              <div class="form-group">
                <label>Username</label><span class="error">* <?php echo $usernameErr ;?></span>
                <input type="text" placeholder="Enter Username Here.." class="form-control" name="username">
              </div>
            


            
              <div class="form-group">
                <label>Password</label><span class="error">* <?php echo $passwordErr;?></span>
                <input type="password" placeholder="Enter Password Here.." class="form-control" name="password">
              </div>

              <div class="form-group">
                <label>Confirm Password</label><span class="error">* <?php
                 echo $confirmpasswordErr ;?></span>
                <input type="password" placeholder="Enter Confirm Password Here.." class="form-control" name="confirmpassword">
              </div>
                       
                
      <div class="form-group">
                <label>Job Category<small> (select one)</small></label><span class="error">* <?php echo $jobcategoryErr ;?></span>
          <select class="form-control" id="select" placeholder="Enter Job catagory Here.."  name="jobcategory">
                <option></option>
                <option>Accounting</option>
        				<option>Bank</option>
        				<option>Education</option>
        				<option>Engineer</option>
        				<option>Garments</option>
        				<option>Management</option>
        				<option>IT</option>
        			
          </select>
        </div>  
              
			  
			  <div class="form-group">
                <label>Gender </label><span class="error">* <?php echo $genderErr;?></span>
                <br>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
              </div>
            

            <div class="form-group">
             <label>Phone Number</label><span class="error">* <?php 
             echo $phonenumberErr;?></span>
             <input type="text" placeholder="Enter Phone Number Here.." class="form-control" name="phonenumber">
             </div>  

            <div class="form-group">
              <label>Email Address</label><span class="error">* <?php echo $emailErr;?></span>
              <input type="email" placeholder="Enter Email Address Here.." class="form-control" name="email">
            </div>  

            <input type="checkbox" value="" name="check1" required> I agree to the Jobsite.com <font color="blue" > Terms of use.</font><br>	
            <input type="checkbox" value="" name="check2"> Subscribe to Jobsite Newsletter. <br><br>

            <button type="submit" class="btn btn-default" name="submit">Submit</button>         
          </div>
        </form> 
        </div>
  </div>
</div>



<?php
/*


        echo  "Name:".$name."<br>";
        echo  "Name:".$username."<br>";
        echo  "Name:".$password."<br>";
        echo  "Name:".$confirmpassword."<br>"; 
        echo  "Name:".$jobcategory."<br>";
        echo  "Name:".$gender."<br>";
        echo  "Name:".$phonenumber."<br>";
        echo  "Name:".$email."<br>";
       */ 

?>


</body>
</html>