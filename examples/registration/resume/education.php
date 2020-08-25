<?php

session_start();
error_reporting(0);
include('config.php');







if(strlen($_SESSION['email'])==0)
	{	
header('location:login.php');
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
	
	
	
	
	$email=$_SESSION['email'];
	/*$first_name=$_POST['first'];
	$last=$_POST['last'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$email=$_POST['email'];
	$pin=$_POST['pin'];
	//$personal=$_POST['personal'];
	
	
	$personal="null";



*/

	$x_name=$_POST['x_name'];
$x_board=$_POST['x_board'];
$x_percentage=$_POST['x_percentage'];
$x_completion=$_POST['x_completion'];
$xii_name=$_POST['xii_name'];
$xii_stream=$_POST['xii_stream'];
$xii_board=$_POST['xii_board'];
$xii_percentage=$_POST['xii_percentage'];
$xii_completion=$_POST['xii_completion'];
$be_stream=$_POST['be_stream'];
$college_name=$_POST['college_name'];
$uni_name=$_POST['uni_name'];
$be_percentage=$_POST['be_percentage'];
$be_completion=$_POST['be_completion'];
$me_stream=$_POST['me_stream'];
$me_name=$_POST['me_name'];
$me_uni_name=$_POST['me_uni_name'];
$me_percentage=$_POST['me_percentage'];
$me_completion=$_POST['me_completion'];




	$msg="error!!! Try Again...";
	
	
	
	
	

	
	
	
		//$ret=mysqli_query($con,"INSERT INTO `resume_detail`(`email`, `first_name`) VALUES ('$email','$first_name'  ) ");
		
	
	

	
if($ret=mysqli_query($con,"INSERT INTO `resume_education`(`email`, `x_school`, `x_board`, `x_percentage`, `x_year_complete`,`12_stream`, `12_school`, `12_board`, `12_percentage`, `12_year_complete`,`be_course`, `be_school`, `be_board`, `be_percentage`, `be_year_complete`,`me_course`, `me_school`, `me_board`, `me_percentage`, `me_year_complete`) VALUES ('$email','$x_name','$x_board','$x_percentage','$x_completion','$xii_stream','$xii_name','$xii_board','$xii_percentage','$xii_completion','$be_stream','$college_name','$uni_name','$be_percentage','$be_completion','$me_stream','$me_name','$me_uni_name','$me_percentage','$me_completion')")){
	
	
	$msg="done";
	
	 echo "<script type='text/javascript'>alert('$msg');</script>";
	
	header("Location: work.php");
	
	
	
}else{
	$dummy=mysqli_query($con,"SELECT form FROM `students_user` WHERE email='$email' ");
	$num=mysqli_num_rows($dummy);
	
	
	if($num>0){
		$msg="Data existed";
		
		 echo "<script type='text/javascript'>alert('$msg');</script>";
		
			header("Location: work.php");
		
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
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

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
                    <h2 class="title">Education Details</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name" >10th School Name</div>
                            <div class="value">
                                <input  class="input--style-6" type="text" name="x_name">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" >10th Board(eg:CBSE, SSC)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="x_board">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" >10th Percentage</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="x_percentage">
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name" >Year of Completion </div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="x_completion">
                            </div>
                        </div>
						
						
						
					
						
						
						
						<div class="form-row">
                            <div class="name" >12th / Diploma</div>
                            <div class="value">
                              
						<input class="input--style-6" type="text" name="xii_stream">
								
                            </div>
                        </div>
						
						
						
						
						 <div class="form-row">
                            <div class="name" >School Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="xii_name">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" >Board(eg:CBSE, HSC)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="xii_board">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" > Percentage</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="xii_percentage">
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name" > Year of Completion </div>
                            <div class="value">
                                <input class="input--style-6" type="text"  name="xii_completion">
                            </div>
                        </div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						<div class="form-row">
                            <div class="name" >Bachelor Degree Stream</div>
                            <div class="value">
                              
								
								<div class="value">
                                <input class="input--style-6" type="text" name="be_stream">
                            </div>
								
								
                            </div>
                        </div>
						
						
						
						
						 <div class="form-row">
                            <div class="name" >College Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="college_name">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" >University Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="uni_name">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" > Percentage</div>
                            <div class="value">
                               <input class="input--style-6" type="text" name="be_percentage">
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name" > Year of Completion </div>
                            <div class="value">
                                <input class="input--style-6" type="text"  name="be_completion">
                            </div>
                        </div>
						
						
						
						
						
						
						<div class="form-row">
                            <div class="name" >if dont have master degree dont fill it</div>
								
								
                          
                        </div>
						
							<div class="form-row">
                            <div class="name" >Master Degree Stream</div>
								
								
                            <div class="value">
                              
								
								<div class="value">
                                <input class="input--style-6" type="text" name="me_stream">
                            </div>
								
								
                            </div>
                        </div>
						
						
						
						
						 <div class="form-row">
                            <div class="name" >College Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="me_name">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" >University Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="me_uni_name">
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name" > Percentage</div>
                            <div class="value">
                               <input class="input--style-6" type="text"  name="me_percentage">
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="name" > Year of Completion </div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="me_completion">
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