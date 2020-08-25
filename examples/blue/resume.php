<?php


session_start();
error_reporting(0);
include('config.php');


	if(strlen($_SESSION['email'])==0)
	{	
header('location:../registration/login.php');
}
else{
	
	$user_email=$_SESSION['email'];

	$personal=mysqli_query($con,"select * from resume_detail where email= '$user_email' ");
	$personal=mysqli_fetch_array($personal);
	
	$education=mysqli_query($con,"select * from resume_education where email= '$user_email' ");
	$education=mysqli_fetch_array($education);
	
	$work=mysqli_query($con,"select * from resume_work_exp where email= '$user_email' ");
	//$work=mysqli_fetch_array($work);
	
	$project=mysqli_query($con,"select * from resume_projects where email= '$user_email' ");
	//$project=mysqli_fetch_array($project);
	
	$skill=mysqli_query($con,"select * from resume_skill where email= '$user_email' ");
	$skill=mysqli_fetch_array($skill);
	
	$additional=mysqli_query($con,"select * from resume_additional where email= '$user_email' ");
	//$additional=mysqli_fetch_array($additional);
	

	$certifiates=mysqli_query($con,"select * from resume_certificate where email= '$user_email' ");
	//$certifiates=mysqli_fetch_array($certifiates);
	
	
	
	
	
	
	
}





?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Resume</title>
<link type="text/css" rel="stylesheet" href="css/blue.css" />
<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/cufon.yui.js"></script>
<script type="text/javascript" src="js/scrollTo.js"></script>
<script type="text/javascript" src="js/myriad.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image
          <img class="portrait" src="images/image.jpg" alt="John Smith" /> -->
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name"><?php echo $personal['first_name']. " " .$personal['last_name']; ?><br />
              <span>Interactive Designer</span></h1>
            <ul>
              <li class="ad"><?php echo $personal['address'] ?></li>
              <li class="mail"><?php echo $personal['email'] ?></li>
              <li class="tel"><?php echo $personal['phoneno.'] ?></li>
             <!-- <li class="web">www.businessweb.com</li> -->
            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
              <li><a class='north' href="#" title="Download .pdf"><img src="images/icn-save.jpg" alt="Download the pdf version" /></a></li>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="images/icn-print.jpg" alt="" /></a></li>
              <li><a class='north' id="contact" href="contact/index.html" title="Contact Me"><img src="images/icn-contact.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="Follow me on Twitter"><img src="images/icn-twitter.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="My Facebook Profile"><img src="images/icn-facebook.jpg" alt="" /></a></li>
            </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        <div class="entry">
          <h2>About Me</h2>
          <p><?php echo $personal['personal_profile'] ?></p>
        </div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <div class="entry">
          <h2>EDUCATION</h2>
          <div class="content">
            <h3>10th</h3>
            <p><?php echo $education['x_school']; ?> (<?php echo $education['x_board']; ?>) <br />
              Percentage : <?php echo $education['x_percentage']; ?>
              <em>Year of Completion : <?php echo $education['x_year_complete']; ?></em>
			  </p>
          </div>
			
			<div class="content">
            <h3>12th</h3>
            <p><?php echo $education['12_school']; ?> (<?php echo $education['12_board']; ?>) <br />
              Stream : <?php echo $education['12_stream']; ?>  <br />
              Percentage : <?php echo $education['12_percentage']; ?>
              <em>Year of Completion : <?php echo $education['12_year_complete']; ?></em>
			  </p>
          </div>
			
		<div class="content">
            <h3>Graduation Degree</h3>
            <p><?php echo $education['be_school']; ?> (<?php echo $education['be_board']; ?>) <br />
              Stream : <?php echo $education['be_course']; ?>  <br />
              Percentage : <?php echo $education['be_percentage']; ?>
              <em>Year of Completion : <?php echo $education['be_year_complete']; ?></em>
			  </p>
          </div>
		  
			<?php if(isset($education['me_school'] ) && $education['me_school']!="na" && $education['me_school']!= "NA" && $education['me_school']!="Na"){
	
	
			
			?>
			
		  <div class="content">
            <h3>Post Graduation </h3>
            <p><?php echo $education['me_school']; ?> (<?php echo $education['me_board']; ?>) <br />
              Stream : <?php echo $education['me_course']; ?>  <br />
              Percentage : <?php echo $education['me_percentage']; ?>
              <em>Year of Completion : <?php echo $education['me_year_complete']; ?></em>
			  </p>
          </div>
			
			<?php
	
				}
				?>
		
		
			
          
        </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
		 <?php 
		 $num=mysqli_num_rows($work);
													if($num>0)
														{
			
				?>
		  
        <div class="entry">
          <h2>EXPERIENCE</h2>
			<?php
				  
				  while($row=mysqli_fetch_array($work)){
				  
				  
				  ?>
          <div class="content">
            <h3><?php echo $row['designation'] ?></h3>
            <p><?php echo $row['company_name'] ?> <br />
              <em><?php echo $row['company_location'] ?></em></p>
            <ul class="info">
              <li>EXP : <?php echo $row['duration_year'] ?> Yrs <?php echo $row['duration_month'] ?> Months</li>
              <li>Role : <?php echo $row['role'] ?></li>
            </ul>
          </div>
          <?php } ?>
        </div>
		    <?php } ?>
		  
		  
		   <?php 
		 $num=mysqli_num_rows($project);
				if($num>0)
									{
			
				?>
		  
        <div class="entry">
          <h2>Projects</h2>
			<?php
				  
				  while($row=mysqli_fetch_array($project)){
				  
				  
				  ?>
          <div class="content">
            <h3><?php echo $row['title'] ?></h3>
            <p><?php echo $row['domain'] ?> <br />
              <em>Skills : <?php echo $row['skills'] ?></em></p>
            <ul class="info">
              <li>Time Required : <?php echo $row['time_year'] ?> Yrs <?php echo $row['time_month'] ?> Months</li>
              <li>Details : <?php echo $row['project_detail'] ?></li>
            </ul>
          </div>
          <?php } ?>
        </div>
		    <?php } ?>
		  
		   <div class="entry">
          <h2>Skill</h2>
          <div class="content">
            <h3><?php echo "Skill"; ?></h3>
            <p><?php echo $skill['skill'] ?> <br />
              </p>
            
          </div>
          
        </div>
		  
		  <!-- additional details -->
		  
		     <?php 
		 $num=mysqli_num_rows($additional);
				if($num>0)
									{
			
				?>
		  
		  <div class="entry">
          <h2>Additional Details</h2>
			  <?php while($row=mysqli_fetch_array($additional)){ ?>
          <div class="content">
            <h3><?php echo "Details"; ?></h3>
           
			  <ul class="info">
              <li><?php echo $row['adittional'] ?> </li>
              
            </ul>
         
			  
            
          </div>
            <?php } ?>
        </div>
		    <?php } ?>
		  
		  
		  <!-- certificates -->
		  
		   <?php 
		 $num=mysqli_num_rows($certifiates);
				if($num>0)
									{
			
				?>
		  
		   <div class="entry">
          <h2>Certificates</h2>
			    <?php while($row=mysqli_fetch_array($certifiates)){ ?>
          <div class="content">
            <h3><?php echo $row['certificate_domain'] ?></h3>
            <p><?php echo $row['detail'] ?> <br />
              <em><?php echo $row['link'] ?></em></p>
            
          </div>
              <?php } ?>
        </div>
		      <?php } ?>
		  
		  
		   
		  
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
      <!-- skill part <div class="entry">
          <h2>SKILLS</h2>
          <div class="content">
            <h3>Software Knowledge</h3>
            <ul class="skills">
              <li>Photoshop</li>
              <li>Illustrator</li>
              <li>InDesign</li>
              <li>Flash</li>
              <li>Fireworks</li>
              <li>Dreamweaver</li>
              <li>After Effects</li>
              <li>Cinema 4D</li>
              <li>Maya</li>
            </ul>
          </div>
          <div class="content">
            <h3>Languages</h3>
            <ul class="skills">
              <li>CSS/XHTML</li>
              <li>PHP</li>
              <li>JavaScript</li>
              <li>Ruby on Rails</li>
              <li>ActionScript</li>
              <li>C++</li>
            </ul>
          </div>
        </div>
-->
        <!-- End 4th Row -->
         <!-- Begin 5th Row 
        <div class="entry">
        <h2>WORKS</h2>
        	<ul class="works">
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        	</ul>
        </div> -->
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>
</html>
