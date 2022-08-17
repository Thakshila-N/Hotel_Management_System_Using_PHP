<!DOCTYPE html>
<html>

<body>

<?php

	$con=mysqli_connect("localhost:3308","root","","phpproject");
	
	if (mysqli_connect_errno()) 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}


		
	


 
 
 $sql="INSERT INTO bookroom (arrival, nights, departure, room, adult, children)
			VALUES('$_POST[arrival]','$_POST[nights]','$_POST[departure]' , '$_POST[room]' , '$_POST[adult]' , '$_POST[children]')";
			
			
 if ($con->query($sql) === TRUE) {
    header('Location:bookdone.php');
	}
 
 if (!mysqli_query($con,$sql)) { 
 
 
 
 
 die('Error: ' . mysqli_error($con)); } 


	






mysqli_close($con);


?>









</body>
</html>