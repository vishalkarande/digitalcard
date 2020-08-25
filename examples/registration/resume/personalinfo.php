<?php

session_start();
error_reporting(0);
include('config.php');






if(strlen($_SESSION['email'])==0)
	{	
header('location:../login.php');
}
else{
	
	$email=$_SESSION['email'];
	
	$dummy=mysqli_query($con,"SELECT form FROM `students_user` WHERE email='$email' ");
	$ret= mysqli_fetch_array($dummy);
	
	if($ret['form']=="done"){
		
		header("Location: ../../index.php");
		
		
		
	}else{
	
	


if(isset($_POST['submit']))
{
	
	
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






	$msg="error!!! Try Again... With Email ID same as Login Id";
	
	
	
		//$ret=mysqli_query($con,"INSERT INTO `resume_detail`(`email`, `first_name`) VALUES ('$email','$first_name'  ) ");
		
	
	  
	
	

	
if($ret=mysqli_query($con,"INSERT INTO `resume_detail`(`email`, `first_name`, `last_name`, `phoneno.`, `address`, `pincode`, `city`, `state`, `personal_profile`) VALUES ('$email','$first_name','$last','$phone','$address','$pin', '$city','$state','$personal'  ) ")){
	
	
	$_SESSION['id']=$email;
	$msg= "added";
	

	
	header("Location:personal.php");
	
	
	
}else{
	
	$dummy=mysqli_query($con,"SELECT form FROM `students_user` WHERE email='$email' ");
	$num=mysqli_num_rows($dummy);
	
	
	if($num>0){
		$msg="Data existed";
		
		 echo "<script type='text/javascript'>alert('$msg');</script>";
		
			header("Location:personal.php");
		
	}
	
	
	 echo "<script type='text/javascript'>alert('$msg');</script>";
	
	
}
		
		
	

}
		
		
		}


}





?>





<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title>Apply for job by Colorlib</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Personal Details</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name" >First Name</div>
                            <div class="value">
                                <input  class="input--style-6" type="text" name="first">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" >Last Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="last">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" >Address</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="address">
                            </div>
                        </div>
						
						
						
						<div class="form-row">
                            <div class="name" >State</div>
                            <div class="value">
								
								
                              
								
								 <select name="state" id="state">
										
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
										<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
										<option value="Arunachal Pradesh">Arunachal Pradesh</option>
										<option value="Assam">Assam</option>
										<option value="Bihar">Bihar</option>
										<option value="Chandigarh">Chandigarh</option>
										<option value="Chhattisgarh">Chhattisgarh</option>
										<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
										<option value="Daman and Diu">Daman and Diu</option>
										<option value="Delhi">Delhi</option>
										<option value="Lakshadweep">Lakshadweep</option>
										<option value="Puducherry">Puducherry</option>
										<option value="Goa">Goa</option>
										<option value="Gujarat">Gujarat</option>
										<option value="Haryana">Haryana</option>
										<option value="Himachal Pradesh">Himachal Pradesh</option>
										<option value="Jammu and Kashmir">Jammu and Kashmir</option>
										<option value="Jharkhand">Jharkhand</option>
										<option value="Karnataka">Karnataka</option>
										<option value="Kerala">Kerala</option>
										<option value="Madhya Pradesh">Madhya Pradesh</option>
										<option value="Maharashtra">Maharashtra</option>
										<option value="Manipur">Manipur</option>
										<option value="Meghalaya">Meghalaya</option>
										<option value="Mizoram">Mizoram</option>
										<option value="Nagaland">Nagaland</option>
										<option value="Odisha">Odisha</option>
										<option value="Punjab">Punjab</option>
										<option value="Rajasthan">Rajasthan</option>
										<option value="Sikkim">Sikkim</option>
										<option value="Tamil Nadu">Tamil Nadu</option>
										<option value="Telangana">Telangana</option>
										<option value="Tripura">Tripura</option>
										<option value="Uttar Pradesh">Uttar Pradesh</option>
										<option value="Uttarakhand">Uttarakhand</option>
										<option value="West Bengal">West Bengal</option>
                                    </select>
                            </div>
                        </div>
						
						
						
					
						
						
						
						<div class="form-row">
                            <div class="name" >City</div>
                            <div class="value">
                              
						<input class="input--style-6" type="text" name="city">
								
                            </div>
                        </div>
						
						
						
						
						 <div class="form-row">
                            <div class="name" >PinCode</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="pin">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" >Contact Number</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="phone">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" > Email ID</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="email">
                            </div>
                        </div>
						
					
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						<div class="card-footer">
                    <input  class="btn btn--radius-2 btn--blue-2" name="submit"  type="submit" value="Next">
                </div>
					
					
                    </form>
                </div>
               
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->