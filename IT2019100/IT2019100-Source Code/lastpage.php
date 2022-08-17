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

<script> 
            function validateForm() { 
        
				
            var x=document.forms["regForm"]["name"].value;
			if (x==null || x=="")
			{
			alert("Please enter the Name!!");
			return false;
			}
              
			 var x=document.forms["regForm"]["email"].value;
			if (x==null || x=="")
			{
			alert("Email must be filled out");
			return false;
			}
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			{
			alert("Not a valid e-mail address");
			return false;
			
            }
			
			var x=document.forms["regForm"]["subject"].value;
			if (x==null || x=="")
			{
			alert("Please enter the subject!!");
			return false;
			}
			
			
			
			}			
        </script> 

<div style="margin-left:-105px;">
 <form name="regForm" action="thankyou.php" style="margin-left:630px; margin-top:-530px; " method="post" onsubmit="return validateForm()" >
 
<p style="color:black; font-size:20px; margin-top:-70px;"><b>Guest Information</b></p>
<br><br>

 <input type="text" name="name" id="name" placeholder="Name*" style="margin-right:10px; width:200px; padding:8px; background-color:white; color: black;"> 
 
 <input type="text" name="contactnumber" id="contactnumber" placeholder="Contact Number" style="margin-right:10px; width:200px; padding:8px; background-color:white; color: black;" > <br/><br/>
 
 <input type="text" name="email" placeholder="Email*" id="email" style="margin-right:10px; width:200px; padding:8px; background-color:white; color: black;"> 
 
 <br>
 <br>
 <input type="text" name="message" placeholder="Special Requests" id="message" style="margin-right:10px; width:415px; padding:25px; background-color:white; color: black;"><br/><br/>
 
 
 <br><br>
 <input type="submit" value="Confirm and Book" style="margin-left:130px; background-color:#ff8533; color:white; padding:7px;"/>
 
  </form>
  </div>

	   


</body>
</html>
	