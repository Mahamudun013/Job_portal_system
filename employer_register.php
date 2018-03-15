<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employer Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

   <script>tinymce.init({ selector:'textarea' });</script>


  <style>
   .error {color: #FF0000;}
  </style>

</head>
<body>


<?php include('navbar.php');  ?>

<!-- Form validation section -->

<?php

     
    $name=$username=$password=$confirmpassword=$companyname=$companycategory=$address=$city=$zip=$phonenumber=$email=$website="";

    $nameErr=$usernameErr=$passwordErr=$confirmpasswordErr=$companynameErr=$companycategoryErr=$addressErr=$cityErr=$zipErr=$phonenumberErr=$emailErr=$websiteErr="";
      
    
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


       if (empty($_POST["companyname"]))
         {
           $companynameErr = "Company name is required";
         } 
        else 
        {
           $companyname = test_input($_POST["companyname"]);
        }

        if (empty($_POST["companycategory"]))
         {
           $companycategoryErr = " Company category is required";
         } 
        else 
        {
           $companycategory = test_input($_POST["companycategory"]);
        }


        if (empty($_POST["address"]))
         {
           $addressErr = "Address is required";
         } 
        else 
        {
           $address = test_input($_POST["address"]);
        }

        if (empty($_POST["city"]))
         {
           $cityErr = "City is required";
         } 
        else 
        {
           $city = test_input($_POST["city"]);
        }

        if (empty($_POST["zip"]))
         {
           $zipErr = "Zip is required";
         } 
        else 
        {
           $zip = test_input($_POST["zip"]);
        }


        if (empty($_POST["phonenumber"]))
         {
           $phonenumberErr = "Phonenumber is required";
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

         if (empty($_POST["website"]))
         {
           $websiteErr = "Website is required";
         } 
        else 
        {
           $website = test_input($_POST["website"]);
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

      echo "Database Connected"."<br><br>";
    
       $sql="INSERT INTO employer_table(name,username,password,confirm_password,company_name,company_category,address,city,zip,phone_number,email,website) VALUES('$name','$username','$password','$confirmpassword','$companyname','$companycategory','$address','$city','$zip','$phonenumber','$email','$website') ";


     $insert=mysqli_query($conn,$sql);
  
    if($insert)
    {
          echo "Data Inserted"."<br>";
    }
    else
    {

       echo "Data NOT inserted"."<br>";
    }
  
  
  }


  mysqli_close($conn);

}

?>


<div class="container">
    <h1 class="well">Employer Registration Form</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <form action="#" method="post">
          <div class="col-sm-12">
            
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Name</label><span class="error">* <?php echo $nameErr;?></span>
                <input type="text" placeholder="Enter Name Here.." class="form-control" name="name">
              </div>


              <div class="col-sm-6 form-group">
                <label>Username</label><span class="error">* <?php echo $usernameErr ;?></span>
                <input type="text" placeholder="Enter Username Here.." class="form-control" name="username">
              </div>
            </div> 


            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Password</label><span class="error">* <?php echo $passwordErr;?></span>
                <input type="password" placeholder="Enter Password Here.." class="form-control" name="password">
              </div>

              <div class="col-sm-6 form-group">
                <label>Confirm Password</label><span class="error">* <?php
                 echo $confirmpasswordErr ;?></span>
                <input type="password" placeholder="Enter Confirm Password Here.." class="form-control" name="confirmpassword">
              </div>
            </div> 



            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Company Name</label><span class="error">* <?php echo $companynameErr;?></span>
                <input type="text" placeholder="Enter Company Name Here.." class="form-control" name="companyname">
              </div>    
             
              <div class="col-sm-6 form-group">
                <label>Company Category<small> (select one)</small></label><span class="error">* <?php echo $companycategoryErr ;?></span>
             <select class="form-control" id="select" placeholder="Enter Company category Here.."  name="companycategory">
                <option></option>
                <option>Bank</option>
                <option>IT</option>
                <option>Garments</option>
                <option>Industry</option>
                <option>Engineering</option>
                <option>University</option>
                <option>School</option>
              </select>
             </div>  

            </div>


            <div class="form-group">
              <label>Address</label><span class="error">* <?php echo $addressErr;?></span>
              <textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="address"></textarea>
            </div>  

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>City</label><span class="error">* <?php echo $cityErr;?></span>
                <input type="text" placeholder="Enter City Name Here.." class="form-control" name="city">
              </div>  

        
              <div class="col-sm-6 form-group">
                <label>Zip</label><span class="error">* <?php echo $zipErr;?></span>
                <input type="text" placeholder="Enter Zip Code Here.." class="form-control" name="zip">
              </div>  

            </div>


            <div class="form-group">
             <label>Phone Number</label><span class="error">* <?php echo $phonenumberErr;?></span>
             <input type="text" placeholder="Enter Phone Number Here.." class="form-control" name="phonenumber">
             </div>    
            <div class="form-group">
              <label>Email Address</label><span class="error">* <?php echo $emailErr;?></span>
              <input type="email" placeholder="Enter Email Address Here.." class="form-control" name="email">
            </div>  
            <div class="form-group">
              <label>Website</label><span class="error">* <?php echo $websiteErr;?></span>
              <input type="text" placeholder="Enter Website Name Here.." class="form-control" name="website">
            </div>

            <button type="submit" class="btn btn-default" name="submit">Submit</button>         
          </div>
        </form> 
        </div>
  </div>
  </div>


</body>
</html>