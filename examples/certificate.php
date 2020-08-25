<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

<?php

session_start();
error_reporting(0);
include('config.php');


if(strlen($_SESSION['email'])==0)
	{	
header('location:registration/login.php');
}
else{
	
	$user_email=$_SESSION['email'];









$ret=mysqli_query($con,"select * from resume_certificate where email= '$user_email' ");
											//	$row=mysqli_fetch_array($ret);






if(isset($_POST['submit']))
{
	$certificate_domain=$_POST['certificate_domain'];
	$project_detail=$_POST['project_detail'];
	$link=$_POST['link'];
	

	


	
	if($ret=mysqli_query($con,"UPDATE `resume_certificate` SET `certificate_domain`='$certificate_domain',`detail`='$project_detail',`link`='$link'  WHERE email='$user_email' ")){
		$msg="Updated";
		echo "<script>alert('$msg');</script>"; 
	header("Refresh:0");
		
	}

}
	
		
	
	if(isset($_POST['delete']))
{
		$id=$_POST['id'];
		$mes="Deleted";
		
	if($row=mysqli_query($con,"DELETE FROM `resume_certificate` WHERE id= '$id'")){
		
		
	 echo "<script>alert('$mes');</script>"; 
		header("Refresh:0");
		
	}
	
	

}
	
	


}






?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Student Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
     
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class="now-ui-icons design_app"></i>
              <p>Personal Data</p>
            </a>
          </li>
          <li>
            <a href="./education.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Education Details</p>
            </a>
          </li>
          <li>
            <a href="./work_exp.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Work Experience</p>
            </a>
          </li>
          <li>
            <a href="./project.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>project</p>
            </a>
          </li>
          <li >
            <a href="./skill.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Skills</p>
            </a>
          </li>
          <li>
            <a href="./additional.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Additional Details</p>
            </a>
          </li>
          <li class="active">
            <a href="./certificate.php">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Certificates</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"><?php echo $_SESSION['email']; ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="change_pass.php">Change password</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
               
                </div>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Certificates</h5>
              </div>
              <div class="card-body">
				  
				  
				  
				 <?php  while($row=mysqli_fetch_array($ret)){ ?>
				  
                <form method="post">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Certificate Domain</label>
						    <input type="hidden" id="custId" name="id" value="<?php echo htmlentities($row['id']);?>">
                        <input type="text" name="certificate_domain" class="form-control" placeholder="Enter Domain" value="<?php echo htmlentities($row['certificate_domain']);    ?>">
                      </div>
                    </div>
                  
                  </div>
					
					
					
					
					<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Certificate Detail</label>
                        <textarea rows="4" cols="80" name="project_detail" class="form-control" placeholder="Write about Certificate in less than 250 words" value="Mike"><?php echo htmlentities($row['detail']);    ?></textarea>
                      </div>
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Certificate Link</label>
                        <textarea rows="4" cols="80" name="link" class="form-control" placeholder="Add Link" value="Mike"><?php echo htmlentities($row['link']);    ?></textarea>
                      </div>
                    </div>
                  </div>
					
					
					   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        
                        <input name="submit" type="submit" value="Update"  style="width:100px;margin:10px;height:35px; background-color:#ffb870;border-radius: 10px;" ><input name="delete" type="submit" value="Delete"  style="width:100px;margin:10px;height:35px; background-color:#ffb870;border-radius: 10px;" >
                      </div>
                    </div>
                  </div>
					
					
                </form>
				  
				  <?php } ?>
				  <br>
				  	<a  href="add_certificate.php">	  <button class="active" name="add" style="width:100px;margin:10px;height:35px; background-color:#1d3c60;border-radius: 10px;float:right;color: white;">Add New</button></a>
              </div>
            </div>
          </div>
			
			
			
        </div>
      </div>
     
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>