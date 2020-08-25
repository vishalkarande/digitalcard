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

	


$ret=mysqli_query($con,"SELECT * FROM `resume_education` WHERE email= '$user_email' ");
												$row=mysqli_fetch_array($ret);



if(isset($_POST['submit']))
{

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





				$msg="abc";
	


	
	if($ret=mysqli_query($con,"UPDATE `resume_education` SET `x_school`='$x_name',`x_board`='$x_board',`x_percentage`='$x_percentage',`x_year_complete`='$x_completion',`12_stream`='$xii_stream',`12_school`='$xii_name',`12_board`='$xii_board',`12_percentage`='$xii_percentage',`12_year_complete`='$xii_completion',`be_course`='$be_stream',`be_school`='$college_name',`be_board`='$uni_name',`be_percentage`='$be_percentage',`be_year_complete`='$be_completion',`me_course`='$me_stream',`me_school`='$me_name',`me_board`='$me_uni_name',`me_percentage`='$me_percentage',`me_year_complete`='$me_completion'  WHERE email='$user_email' ")){
		
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
          <li class="active">
            <a href="./education.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Education Details</p>
            </a>
          </li>
          <li >
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
          <li >
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
                  <a class="dropdown-item" href="change_pass.php">Change Password</a>
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
                <h5 class="title">Education</h5>
              </div>
              <div class="card-body">
				  
				  
				  
				 

				  
				  
				  
				  
                <form method="post">
                 
		
					
					 <h4>10TH</h4>
						 <div class="row">
                
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Xth School Name</label>
                        <input type="text" name="x_name" class="form-control" placeholder="" value="<?php echo htmlentities($row['x_school']);    ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Year of Complete</label>
                        <input type="text" name="x_completion" class="form-control" placeholder="" value="<?php echo htmlentities($row['x_year_complete']);    ?>">
                      </div>
                    </div>
                  </div>
					
					
					 <div class="row">
                
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Xth Board</label>
                        <input type="text" name="x_board" class="form-control" placeholder="" value="<?php echo htmlentities($row['x_board']);    ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Xth Percentage</label>
                        <input type="text" name="x_percentage" class="form-control" placeholder="" value="<?php echo htmlentities($row['x_percentage']);    ?>">
                      </div>
                    </div>
                  </div>
					
					
					
					
					
					
				
                 
					
				
				  
				  <br>
				  
				 
                 <h4>12TH/ Diploma</h4>
						
                <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>12th Stream</label>
                        <input type="text" name="xii_stream" class="form-control"  placeholder="" value="<?php echo htmlentities($row['12_stream']);    ?>">
                      </div>
                    </div>
                  
                  </div>
                 
					
					
						 <div class="row">
                
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>12th School Name</label>
                        <input type="text" name="xii_name" class="form-control" placeholder="" value="<?php echo htmlentities($row['12_school']);    ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Year of Complete</label>
                        <input type="text" name="xii_completion" class="form-control" placeholder="" value="<?php echo htmlentities($row['12_year_complete']);    ?>">
                      </div>
                    </div>
                  </div>
					
					
					 <div class="row">
                
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>12th Board</label>
                        <input type="text" name="xii_board" class="form-control" placeholder="" value="<?php echo htmlentities($row['12_board']);    ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">12th Percentage</label>
                        <input type="text" name="xii_percentage" class="form-control" placeholder="" value="<?php echo htmlentities($row['12_percentage']);    ?>">
                      </div>
                    </div>
                  </div>
					
				
					
					
              
				  
				  <!-- 12th end -->
				  
				  <!-- bachelor start -->
				  	 <h4>Bachelor Degree</h4>
				   <br>
				
                 
						
                <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Bachelor Course Type</label>
                        <input type="text" name="be_stream" class="form-control"  placeholder="" value="<?php echo htmlentities($row['be_course']);    ?>">
                      </div>
                    </div>
                  
                  </div>
                 
					
					
						 <div class="row">
                
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Bachelor Collage Name</label>
                        <input type="text" name="college_name" class="form-control" placeholder="" value="<?php echo htmlentities($row['be_school']);    ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Year of Complete</label>
                        <input type="text" name="be_completion" class="form-control" placeholder="" value="<?php echo htmlentities($row['be_year_complete']);    ?>">
                      </div>
                    </div>
                  </div>
					
					
					 <div class="row">
                
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Bachelor University</label>
                        <input type="text" name="uni_name" class="form-control" placeholder="" value="<?php echo htmlentities($row['be_board']);    ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Bachelor Percentage</label>
                        <input type="text" name="be_percentage" class="form-control" placeholder="" value="<?php echo htmlentities($row['be_percentage']);    ?>">
                      </div>
                    </div>
                  </div>
					
				
					
					
          
				  
				    <!-- bachelor end -->
				  
				   <br>
				  
				    <!-- Post Graduation start -->
				  
				
				  
                  <h4>Post Graduation</h4>
						
                <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Post Graduation Course Type</label>
                        <input type="text" name="me_stream" class="form-control"  placeholder="" value="<?php echo htmlentities($row['me_course']);    ?>">
                      </div>
                    </div>
                  
                  </div>
                 
					
					
						 <div class="row">
                
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Post Graduation Collage Name</label>
                        <input type="text" name="me_name" class="form-control" placeholder="" value="<?php echo htmlentities($row['me_school']);    ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Year of Complete</label>
                        <input type="text" name="me_completion" class="form-control" placeholder="" value="<?php echo htmlentities($row['me_year_complete']);    ?>">
                      </div>
                    </div>
                  </div>
					
					
					 <div class="row">
                
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Post Graduation University</label>
                        <input type="text" name="me_uni_name" class="form-control" placeholder="" value="<?php echo htmlentities($row['me_board']);    ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Post Graduation Percentage</label>
                        <input type="text" name="me_percentage" class="form-control" placeholder="" value="<?php echo htmlentities($row['me_percentage']);    ?>">
                      </div>
                    </div>
                  </div>
					
					
					 <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        
                        <input name="submit" type="submit" style="width:100px;margin:10px;height:35px; background-color:#ffb870;border-radius: 10px;" value="Update" >
                      </div>
                    </div>
                  </div>
					
				
					
					
                </form>
				  <!-- Post Graduation end -->
				  
				  
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