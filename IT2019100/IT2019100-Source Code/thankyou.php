<html>
<body>



<?php 
$con=mysqli_connect("localhost:3308","root","","phpproject"); 
// Check connection 
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
	} 
	
	
	
	
	
	$sql="INSERT INTO guestinfo (name,contactnumber,email,message) 
	VALUES ('$_POST[name]', '$_POST[contactnumber]', '$_POST[email]' , '$_POST[message]')"; 
	if (!mysqli_query($con,$sql)) { 
	die('Error: ' . mysqli_error($con)); 
	} 
	include 'thankyou1.php'; 
	
	
	?>
	
	
	</body>
</html>