<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'digital_card');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection

if($con){
	

	
	
		$email="vishalkarande6@gmail.com";
	$first_name="jack";
	
	
				
	//$ret=mysqli_query($con,"INSERT INTO `resume_detail`(`email`, `first_name`) VALUES ('$email','$first_name'  ) ");
		
		
	//	$dummy=mysqli_query($con,"SELECT * FROM `students_user` WHERE email='$email'");
	
	
	//$row=mysqli_fetch_array($dummy);
	
	//	echo $row['email'];

		
	//	echo "connected";
		

												
	

	
	
	
	
	
	

	
	
	
	
	
}
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>