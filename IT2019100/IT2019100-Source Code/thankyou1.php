<!DOCTYPE html>
<html>

<style>
	
	.container {
  position: relative;
  text-align: center;
  color: black;
  font-size:30px;
}
.centered {
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<body>

<div class="container">
  <img src="background.jpg"  style="width:99%;">
  <div class="centered">
<?php


	$con=mysqli_connect("localhost:3308","root","","phpproject"); 
// Check connection 
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
	} 

	

	$sql = mysqli_query($con, "SELECT * FROM guestinfo ORDER BY id DESC LIMIT 1 ");
	
	$print_data = mysqli_fetch_row($sql);
	
	
	
	
	echo "Thank you!!";
	echo " ";
	echo $print_data[1];
	echo "<br>";
	echo $print_data[3];
	echo "<br>";
	echo "We received your Reservation.. ";
	echo "<br>";echo "<br>";
	echo "<span style='font-size:20px;'> <a href='home.php'>Click here to go back to home..</a> </span>";
	
	
	
$con->close();
?>

</div>
</div>
</body>
</html>