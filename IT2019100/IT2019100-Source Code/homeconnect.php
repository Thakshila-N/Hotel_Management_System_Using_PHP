<html>
<body>



<?php 
$con=mysqli_connect("localhost:3308","root","","phpproject"); 
// Check connection 
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
	} 
	
	
	
	
	
	$sql="INSERT INTO inquire (Name,ContactNumber,Email,Subject,Message) 
	VALUES ('$_POST[Name]', '$_POST[ContactNumber]', '$_POST[Email]' , '$_POST[Subject]' , '$_POST[Message]')"; 
	if (!mysqli_query($con,$sql)) { 
	die('Error: ' . mysqli_error($con)); 
	} 
	include 'displayinquire.php'; 
	
	
	?>
	
	
	</body>
</html>