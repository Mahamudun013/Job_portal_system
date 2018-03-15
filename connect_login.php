<?php
    require_once("database.php");
    
    function SignIn(){
        
        $username=$_POST["username"];
        $password=$_POST["password"];
        
        session_start();

        if(!empty($_POST["username"])){
            $query = "SELECT * FROM user_table where username='$username' AND password = '$password' ";
            $result=mysqli_query($connect,$query);
            $row = mysqli_fetch_array($result);
            if(!empty($row['username']) AND !empty($row['password'])){ 
                
				$_SESSION['username'] = $_POST["username"];
                header("Location: employer_home.php");
            }
            
            else{
                echo "<script> alert('SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...')</script>";
            }
        }
        elseif (empty($_POST["username"])){
                header("Location: index.php");
                echo '<script type="text/javascript">'; 
                echo 'alert("You need to login first!")'; 
                echo '</script>';
                session_unset();
                session_destroy();
                header("Location: index.php");
        }
    } 
    if(isset($_POST["submit"])){
        SignIn();
        
    }
    // mysqli_close($connect);

?>
