<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mycss.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet"
href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/
4.7.0/css/font-awesome.min.css">

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

.bordered {
    width: 200px;
    height: 100px;
    padding: 20px;
    border: 10px solid yellowgreen;
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




?>

<?php

	include 'bordertest.php';

?>


<div class="bordered">


	 <form action="booktest2.php" style="margin-left:630px; margin-top:-530px; " method="post" >
  <label for="arrival" style="color:black; font-size:24px; margin-left:-60px;"><b>Arrival:<b></label><br>
  
  
  <input type="date" style="height:30px; margin-left:-60px;" name="arrival" >  <br><br>
  
  <div style="margin-top:-73px; margin-left:100px;">
  <label for="departure:" style="color:black; font-size:24px; margin-left:30px; margin-top:-70px;"><b>Nights:<b></label><br>
<input id="demoInput" type="number" name="nights" style="margin-left:30px;" placeholder="0" min=1 max=50>
  </div>
  <br><br>
  
    <label for="departure:" style="color:black; font-size:24px; margin-left:-60px;"><b>Departure:<b></label><br>
  
  <input type="date" style="height:30px; margin-left:-60px;" name="departure" >  
  <br><br><br>

<select name="room" style="width:90px; height:25px; margin-left:-60px;">
            
            <option value="1room">1 Room</option>
            <option value="2room">2 Room</option>
            <option value="3room">3 Room</option>
			<option value="4room">4 Room</option>
			<option value="5room">5 Room</option>
			<option value="6room">6 Room</option>
          </select>
  
 <select name="adult" style="width:90px; height:25px; margin-left:;">
            
            <option value="1adult">1 Adult</option>
            <option value="2adult">2 Adult</option>
            <option value="3adult">3 Adult</option>
			<option value="4adult">4 Adult</option>
			<option value="5adult">5 Adult</option>
			<option value="6adult">6 Adult</option>
			<option value="7adult">7 Adult</option>
			<option value="8adult">8 Adult</option>
          </select>
		  
		  
		  <select name="children" style="width:90px; height:25px; margin-left:;">
            
            <option value="0children">0 Children</option>
            <option value="1children">1 Children</option>
            <option value="2children">2 Children</option>
			<option value="3children">3 Children</option>
			
          </select>
<br><br><br>
  <input type="submit" name="availability" style="background-color:orange; color:white; height:30px; margin-left:100px; " id="availability" value="Check Availability" />
  
 
  
  
</form>
</div>  
	   


</body>
</html>
	