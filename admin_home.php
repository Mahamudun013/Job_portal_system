<?php
  include('functions.php');
  session_start();
  if(!isset($_SESSION['adminName'])){
    session_unset();
    session_destroy();
    header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    
#tbl1{
  border: 1px solid  #45AEF0;
  float: left;
  background-color: #45AEF0 ;
  min-height: 400px;
  margin-right: 20px;
}
#tbl1 a{
  text-decoration: none;
  padding: 0px;
  margin: 0px;
  font-size: 20px;
  color: white;
}
#tbl1 a:hover{
  /*color:red;*/
  color: #EA5200;
  display: inline-block;
  }
  
#tbl2{
  
  width: 80%;
}
table th,td,tr{
    text-align: center;
}
.jumbotron{
  min-height: 700px;
}
.active{
  color: white;
  background-color: #C84040;

}

#dash{
  color:#C01717;
}

</style>
</head>
<body>

 <nav class="navbar navbar-inverse ">
  <div class="container">
    
    <div class="navbar-header" style="margin-top: 5px;">
      <img src="job.png" alt="Unload" width="40" height="40"/>
    </div>

    <div class="navbar-header">
       <a class="navbar-brand" href="#">JOBSITE.COM</a>
    </div>
  

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" 
        href="#"><?php echo $_SESSION['adminName'];?> &nbsp<span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="functions.php?adminName=<?php echo $_SESSION['adminName'];?> "><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </li>

    </ul>

  </div>
</nav>

       
  <div class="container">
    <div class="jumbotron">

       <h2 style="text-align: center;color: blue;"> Admin Access Panel </h2>

      <h2 style="text-align: center;">Welcome ! <?php echo $_SESSION['adminName'];?> </h2><br>

            <table id="tbl1" width="15%" >
              <tr>
                <td valign="top">

                  <h3 id="dash">Dashboard</h3><hr>
                  <a href="admin_home.php" class="active">All Jobs</a><br>
                  <a href="employer_list.php">All Employers</a><br>
                  <a href="user_list.php">All Users</a><br>
      
                  <!-- <a href="functions.php?adminName=<?php //echo $_SESSION['adminName'];?> "><span class="glyphicon glyphicon-log-out"></span></a> <br>    -->

                </td>
                
              </tr>
             </table>



   <!-- <div class="col-md-10 col-md-offset-1"> -->

    
      <table id="tbl2" class="table table-hover table-bordered" width="50%">
        <thead >
          <th>Serial</th>
          <th>Company Name</th>
          <th>Position</th>
          <th>Application Deadline</th>
          <th>Action</th>
        </thead>
        
       <?php
          
          $q="SELECT * FROM all_jobs";
          $run=mysqli_query($connect,$q);
        
          
          if (mysqli_num_rows($run) > 0) {

           // output data of each row
            $i=1;
           while($row = mysqli_fetch_assoc($run)){
      ?>  

          <tbody>
      
          <tr class="success">
            <td><?php  echo $i++; ?></td>
            <td><?php echo $row['company_name']; ?></td>
            <td><?php echo $row['position_name']; ?></td>
            <td><?php echo $row['last_date_of_apply']; ?></td>
            <td>
              <a href="functions.php?j_id=<?php echo $row['all_jobs_id'] ?>" class="btn btn-danger" onclick=" return confirm('Are you sure to delete?')"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
          </tr>
        </tbody>
      
      <?php
        }
      }
      ?>

      </table>
    </div>
     
   <!-- </div> -->
  
  </div>


</body>
</html>
