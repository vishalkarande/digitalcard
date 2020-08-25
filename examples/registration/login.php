
<?php

session_start();
error_reporting(0);
include('config.php');








if(isset($_SESSION['email'])!=0)
	{	
	
	$email=$_SESSION['email'];
	
	$dummy=mysqli_query($con,"SELECT form FROM `students_user` WHERE email='$email' ");
	$ret= mysqli_fetch_array($dummy);
	
	if($ret['form']=="done"){
		
		header("Location: ../index.php");
		
		
		
	}else{
		header('location:resume/personalinfo.php');
		
		
	}
	
	
	

}else {

if(isset($_POST['submit']))
{
	

	$email= $_POST['email'];
	
	$password=$_POST['password'];
	$pass=md5($password);
	
	$dummy=mysqli_query($con,"SELECT * FROM `students_user` WHERE email='$email' ");
	$ret= mysqli_fetch_array($dummy);
	
	

	
	if($pass==$ret['password']){
			$_SESSION['email']=$_POST['email'];
		echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
		
	
		header("Location: resume/personalinfo.php");
		
			/*$extra="resume/index.php";
			$_SESSION['email']=$_POST['email'];
			//$_SESSION['id']=$num['id'];
			$host=$_SERVER['HTTP_HOST'];
			$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
			//header("location:http://$host$uri/$extra");
			header("location:http://$host$uri/$extra");*/
		
			exit();
		
		
		
		
		
	}else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
	
	
		
		
		//$msg=$ret['email'];
	
	
	
	
	
	
	
		
		
	
	
	
	
	
	
	
	
		
		
}



}





?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>student Login</h2>
                       
						
						<div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" required />
                        </div>
						
						
                    
                    
						
						
						  <div class="form-group">
                            <label for="pincode">Password :</label>
                            <input type="password"   minlength="8"  name="password" id="pincode">
                        </div>
						
						
                     
                      
                       
                     
                        <div class="form-submit">
                         
                            <input type="submit" value="Login" class="submit" name="submit" id="submit" />
						<a href="register.php">	<input type="button" value="Register" class="submit" name="submit" id="submit" ></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>