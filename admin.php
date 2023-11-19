<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/Google-Fit-Icon.png">
    <!-- font awesomee -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Arsenal' rel='stylesheet'>
  <!-- CSS -->

  <style type="text/css">
 /*login and registration css*/
.login_box{
  width: 325px;
  min-height: auto;
  margin: 100px auto;
  padding: 20px;
  border-radius: 5px;
  box-shadow: inset 0 0 5px gray;
  background:  #E1E1E1;

}
.login_head{
  text-align: center;
}
.login_head img{
  border-radius: 50%;
  width: 150px;
  height: 150px;
}


.login_body{
  margin-top: 30px;
  text-align: center;
}
.login_box .input{
  padding: 8px;
  width: 270px;
  margin-bottom: 20px;
  border: 1px solid gray;
  border-radius: 5px;
}
.login_box .input:focus{
  box-shadow: 0 0 5px #638E9B;
}
.login_box .btn{
  width: 290px;
  padding: 8px;
  background: #1670B9;
  cursor: pointer;
  color: #fff;
  font-size: 17px;
  border-radius: 5px;
  border: 1px solid #638E9B;
}
.login_box .btn:hover{
  color: #000;
  background: darkgreen;
}
.login_box a{
  color: rgb(104, 145, 162);
  padding-left: 17px;
}
.login_box a:hover{
  color: green;
}
body{
  background-color: #A65656;
}
</style>
</head>

<body class="custom">
  
  <div class="cbody">
    <div class="login_box">
      <div class="login_head" >
        <!-- <h2>Login</h2> -->
        <!-- <hr> -->
        <img src="image/login_icon.png">
      </div>
      <div class="login_body">
        <form action="functions.php" method="post">
          <input type="text" name="admin" class="input" placeholder="Admin Username"> <br>
          <input type="password" name="pwd" class="input" placeholder="Admin Password">
          <button class="btn" name="adminLogin">Login</button>
        </form>
      </div>
      <br>
    
    </div>
    
  </div>


</body>
</html>