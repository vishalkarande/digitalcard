
<?php

session_start();
error_reporting(0);
include('config.php');









if(isset($_POST['submit']))
{
	
	
	if($_POST['password']==$_POST['repass']){
	
		$email=$_POST['email'];
		$msg="paswword match";
		
	
		$dummy=mysqli_query($con,"SELECT * FROM `students_user` WHERE email='$email'");
		
		
		$ret= mysqli_fetch_array($dummy);
		$msg=$ret['email'];
		
		//echo "<script type='text/javascript'>alert('$msg');</script>";
		
		if(empty($msg)){
			
			
			
			
			$first_name=$_POST['first'];
	$last=$_POST['last'];
	$phone=$_POST['phone'];
	
	$email=$_POST['email'];
			
			$pass= md5($_POST['password']);
			$status="yes";
			
			
			
			if($ret=mysqli_query($con,"INSERT INTO `students_user`(`first_name`, `last_name`, `email`, `password`, `mobile`, `sub_status`, `sub_amount`) VALUES ('$first_name','$last','$email','$pass','$phone','$status','1000') ")){
				
				
				$msg="sucess register";
				
				
				
				
				 echo "<script type='text/javascript'>alert('$msg');</script>";
					header("Location: login.php");
				
				
				
				
			}else{
				
				$msg="fail register";
				
				 echo "<script type='text/javascript'>alert('$msg');</script>";
				
			}
			
			
			
			
			
		}else{
			
			
			
			
			$msg="Account Already Exist. please Login";
			echo "<script type='text/javascript'>alert('$msg');</script>";
			
			
				header("Location: login.php");
			
			
		}
	
	
	/*
	$first_name=$_POST['first'];
	$last=$_POST['last'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$email=$_POST['email'];
	$pin=$_POST['pin'];
	//$personal=$_POST['personal'];
	
	
	$personal="null";






	$msg="error!!! Try Again...";
	
	
	
		//$ret=mysqli_query($con,"INSERT INTO `resume_detail`(`email`, `first_name`) VALUES ('$email','$first_name'  ) ");
		
	
	  
	
	

	
if($ret=mysqli_query($con,"INSERT INTO `resume_detail`(`email`, `first_name`, `last_name`, `phoneno.`, `address`, `pincode`, `city`, `state`, `personal_profile`) VALUES ('$email','$first_name','$last','$phone','$address','$pin', '$city','$state','$personal'  ) ")){
	
	
	$_SESSION['id']=$email;
	
	
	header("Location: resume/personal.php");
	
	
	
}else{
	
	 echo "<script type='text/javascript'>alert('$msg');</script>";
	
	
}
		
		*/
	

		
		}else{
		$msg="paswword does not match";
	
	
	 echo "<script type='text/javascript'>alert('$msg');</script>";
	
	
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
                        <h2>student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">First Name :</label>
                                <input type="text" name="first" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name :</label>
                                <input type="text" name="last" id="father_name" required/>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" required />
                        </div>
						
						
                        <div class="form-group">
                            <label for="address">Mobile Number :</label>
                            <input type="tel" name="phone" id="address" required/>
                        </div>
                      
                    
						
						
						  <div class="form-group">
                            <label for="pincode">Password :</label>
                            <input type="password"   minlength="8"  name="password" id="pincode">
                        </div>
						
						
                        <div class="form-group">
                            <label for="birth_date">Re-Enter Password:</label>
                            <input type="password" name="repass" id="phone">
                        </div>
                      
                       
                     
                        <div class="form-submit">
                         
                            <input type="submit" value="Register" class="submit" name="submit" id="submit" />
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