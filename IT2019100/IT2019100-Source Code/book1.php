<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mycss.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>


<style>

* {
  box-sizing: border-box;
}

/*header_part*/

.container {
  position: relative;
  max-width: 100%;
  margin: 0 auto;
  
  
}

.container img {vertical-align: top;}

.container .content {
  position: absolute;
  
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
  height:150px;
}

/*navigation*/


.header {
  overflow: hidden;
  
  padding: 20px 10px;
  
}

.header a {
  float: left;
  color: #d9d9d9;
  
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 14px; 
  line-height: 25px;
  border-radius: 4px;
   
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  
  text-decoration: underline;
  -webkit-text-decoration-color: red; /* Safari */  
  text-decoration-color: orange;
  
}

.header a.active {
   
 
}

.header-left {
  float: left;
}

.header-right {
  float: right;
}



@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
 /*Font*/
 @font-face {
  font-family: myFirstFont;
  src: url(sansation_light.woff);
}
 .fon{
	font-family: myFirstFont;
 }

/*boder*/
p.none1 {
border-style: none;
background:#ff9999;
}


/*Login button*/
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

</style>
</head>
<body>

<!--Headr part-->

<div class="container">
  <img src="ee1.jpg" alt="background-image" style="width:100%;  margin-top:-10px;">
  
  <div style="margin-top:-850px;" class="content" >
    
	
	
	<div class="header">
  
  
  
  <div class="header-left" style="margin-left:100px; margin-top:20px;">
   <a href="home.php" style="font-family: elephant; font-width: 50%">HOME  <span style=" margin-left:18px; ; width:0.1px;">&#124;</span> </a>  

    <a href="aboutus.php" style="font-family: elephant;">ABOUT US <span style=" margin-left:18px;  width:0.1px;">&#124;</span> </a>
	
    <a href="rooms.php" style="font-family: elephant;">ROOMS & DINING <span style=" margin-left:18px; "></span> </a>

  </div>
  
  <div class="header-right" style=" margin-top:20px; ">
    <a href="Excursions.php" style="font-family: elephant;">EXCURSIONS <span style=" margin-left:18px; width:1px;">&#124;</span></a>
    <a href="wedding.php" style="font-family: elephant;">WEDDINGS <span style=" margin-left:18px; ">&#124;</span></a>
    <a href="ContactUs.php" style="font-family: elephant;">CONTACT US <span style=" margin-left:18px; ">&#124;</span> </a>
	<a href="book.php" style="font-family: elephant;">BOOK ONLINE <span style=" margin-left:18px; "></span></a>
  </div>
  
</div>
	
	<div style="margin-left:620px; margin-top:-55px;"> <a href="home.php">
    <img src="llo.png" alt="Logo" width="12.7%" height="12.7%" style="margin-top:-33px; padding-bottom:7px; ">
	</a>    
	</div>
	
	
	
	<?php

	$con=mysqli_connect("localhost:3308","root","","phpproject");
	
	if (mysqli_connect_errno()) 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}


if(!isset($_POST["login"]) && !isset($_POST["create"]))   {
$error = "Username or Password is invalid";

?>
	 <img  src="avatar.png" alt="Avatar" style="width: 10%;
  border-radius: 50%; margin-left:650px; margin-top:50px;">


	   <form name="frmUser" method="post" action="book1.php" align="center" style="color:black;">

<h3 align="center" style="font-size:30px;">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="uname" style="width:300px; height:34px;" placeholder="Enter Username" pattern="[a-zA-Z0-9]+" required />
 <br>
 Password:<br>
<input type="password" name="passwd" style="width:300px; height:34px;"  placeholder="Enter Password" required />
<br>
Sellect the Nationality:<br>

<select name="national" style="width:300px; height:34px;">
            <option value=" ">Select your nationality</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Ammerica">Ammerica</option>
            <option value="China">China</option>
			<option value="Japan">Japan</option>
			<option value="Australia">Australia</option>
			<option value="Other">Other</option>
          </select>

<br><br>

<input type="submit" name="login" id="login" value="Login" style="background-color:orange; color: white; padding: 7px 10px; width:300px;" />

<br><br>
<input type="reset" style="background-color:red; margin-left:-245px;"><br>
<div style=" margin-top:-23px;">
<input type="submit" name="create" id="create" value="Create New" style="background-color:green; margin-left:210px; margin-top:-100px;" /> 
</div>
</form>
	   
	   
  </div>
</div>
<?php
}
else {
	
	$uname = $_POST["uname"]; 	
	$passwd = $_POST["passwd"];	
	$national =$_POST["national"];
	
	
	
if (isset($_POST["login"])){
		
			$sql = "SELECT * FROM loginpage WHERE username='$uname' AND password = '$passwd'";
			$result = $con->query ($sql);
			
			if ($result -> num_rows > 0){
				while($row = $result -> fetch_assoc()){
				    echo "Welcome" . "" . $row["username"] . "<br>";
					
					header('Location:book2.php');
				}
				
			}else {
						echo"<br/>";
						echo"<br/>";echo"<br/>";echo"<br/>";echo"<br/>";echo"<br/>";echo"<br/>";echo"<br/>";
						echo"<span style='font-size:70px; margin-left:400px; color:red;'>&#9888;</span>";
						echo "<span style='color:black; font-size:20px; margin-left50px; margin-top:800px; font-weight: 1000; text-align:center;'>Opss!!! You are not a valid user.. Please try again. <a href='book1.php'>Click here to try again..</a> </span>";
						
				}
		}
	
       
        //echo '<span style="color:#AFA;text-align:center;">Request has been sent. Please wait for my reply!</span>';


if(isset($_POST['create'])) { 
	$sql = "INSERT INTO loginpage(username, password, national)
			VALUES('$uname','$passwd','$national')";

	if ($con->query($sql) === TRUE) {
    header('Location:book2.php');
	} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
	}
	
$con->close(); 		
}

?>


</body>
</html>
	