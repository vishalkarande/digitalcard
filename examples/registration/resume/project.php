

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
	





$email=$_SESSION['email'];

if(isset($_POST['submit']))
{
	
	
	$project=$_POST['project'];
	$domain=$_POST['domain'];
	$detail=$_POST['detail'];
	$durM=$_POST['durM'];
	$durY=$_POST['durY'];
	$skill=$_POST['skill'];
	
	
	

	






	






	$msg="error!!! Try Again...";
	
	
	
		//$ret=mysqli_query($con,"INSERT INTO `resume_detail`(`email`, `first_name`) VALUES ('$email','$first_name'  ) ");
		
	
	  
	
	$personal=$_POST['message'];

	
if($ret=mysqli_query($con,"INSERT INTO `resume_projects`(`email`, `title`, `domain`, `time_month`, `time_year`, `project_detail`, `skills`) VALUES ('$email','$project','$domain','$durM','$durY','$detail','$skill' )")){
	
	
	
	header("Location: additional.php");
	
	
	
}else{
	
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
                    <h2 class="title">Project Details</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name" >Project Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="project">
                            </div>
                        </div>
						
						
						 <div class="form-row">
                            <div class="name" >Project Domain</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="domain">
                            </div>
                        </div>
						
						
				
						
					
						<div class="form-row">
                            <div class="name" >Duration of Project(Year)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="durY">
                            </div>
							
                        </div>
						
						<div class="form-row">
                            <div class="name" >Duration of Project(Month)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="durM">
                            </div>
							
                        </div>
						
						
						
					
						
						
                        <div class="form-row">
                            <div class="name">Project Details</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="detail" placeholder="write in less than 250 words"></textarea>
                                </div>
                            </div>
                        </div>
						
						
						
						 <div class="form-row">
                            <div class="name">Skills Used</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="skill" placeholder="write in less than 250 words"></textarea>
                                </div>
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