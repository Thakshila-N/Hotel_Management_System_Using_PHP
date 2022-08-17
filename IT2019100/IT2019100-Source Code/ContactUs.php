<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>

* {
  box-sizing: border-box;
}

/*header_part*/

.container {
  position: relative;
  max-width: 100%;
  margin-top:-149px;
  
  
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
  margin-top:-100px;
}

/*navigation*/


.header {
  overflow: hidden;
  
  padding: 20px 10px;
  margin-top:;
  
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

/*footer*/

.footer {
  text-align: center;
  padding: 3px;
  background: rgba(255,255,255,0.1);
  color: white;
  
 
opacity:0.6;
filter:Alpha(opacity=60); /* IE8 and earlier */
margin-top: 2em;
float: left;
width: 800px;
height: 175px;
clear:both
margin-left: auto;
margin-right: auto;
line-height: 1.0em;
}

/*border*/

.none {border-style: none;
	height:700px;
}


/*inline image*/
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

 form { 
                margin: 0 auto; 
                width: 500px; 
				
            } 



	/*side by side form*/
.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}

</style>
</head>
<body>

<!--Headr part-->

<div class="container">
  <img src="cont.jpg" alt="background-image" style="width:1500px; height:700px;">
  
  <div style="margin-top:-570px;" class="content" >
    
	
	
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
	<a href="book1.php" style="font-family: elephant;">BOOK ONLINE <span style=" margin-left:18px; "></span></a>
  </div>
  
</div>
	
	<div style="margin-left:620px; margin-top:-55px;"> <a href="home.php">
    <img src="llo.png" alt="Logo" width="12.7%" height="12.7%" style="margin-top:-33px; padding-bottom:7px; ">
	</a>    
	</div>
	
	
	
	
    <p style="font-size:60px; margin-left:520px; margin-top:170px;">Contact Us</p>
  </div>
</div>



<!--body-->

<script> 
            function con() { 
                var name =  
                    document.forms["RegForm"]["Name"]; 
                var ContactNumber =  
                    document.forms["RegForm"]["ContactNumber"]; 
                var phone =  
                    document.forms["RegForm"]["Telephone"]; 
                var what =  
                    document.forms["RegForm"]["Subject"]; 
                var password =  
                    document.forms["RegForm"]["Password"]; 
                var address =  
                    document.forms["RegForm"]["Address"]; 
  
                if (name.value == "") { 
                    window.alert("Please enter your name."); 
                    name.focus(); 
                    return false; 
                } 
  
                if (ContactNumber.value == "") { 
                    window.alert("Please enter your contact number."); 
                    ContactNumber.focus(); 
                    return false; 
                } 
  
                if (email.value == "") { 
                    window.alert( 
                      "Please enter a valid e-mail address."); 
                    email.focus(); 
                    return false; 
                } 
  
                if (phone.value == "") { 
                    window.alert( 
                      "Please enter your telephone number."); 
                    phone.focus(); 
                    return false; 
                } 
  
                if (password.value == "") { 
                    window.alert("Please enter your password"); 
                    password.focus(); 
                    return false; 
                } 
  
                if (what.selectedIndex < 1) { 
                    alert("Please enter your course."); 
                    what.focus(); 
                    return false; 
                } 
  
                return true; 
            } 
        </script> 
		
		  <br>
		  <br>
		  <br>
		  <br>
		  
		  <div style="margin-left:300px;"> <a href="home.html">
    <img src="lo.png" alt="Logo" width="12.7%" height="12.7%" style="">
	</a>   
		<p style="font-size:20px;">CONTACT US</p>
		<p style="margin-left:-80px;">We are here 24/7 at your service. Contact us for reservation</p>
		<p style="margin-left:-30px;">details. Check-in Time: 14.00 Hours</p>
	</div>
		  
		  
        <form name="RegForm" action="homeconnect.php" 
              onsubmit="return con()" method="post" style="border-color: orange; margin-left:780px; margin-top:-280px;"> 
            <p style=""> <input type="text" 
                            size="49" style="height:50px; border-color: orange;" name="Name"  placeholder="Name"/></p> 
            <br /> 
			
            <p style=""> <input type="text" 
                               size="49" style="height:50px; border-color: orange;" name="ContactNumber" placeholder="Contact Number"/> 
          </p> 
            <br /> 
            <p> <input type="text" 
                            size="49" style="height:50px; border-color: orange;" name="Email" placeholder="Email"/></p> 
            <br /> 
            <p> <input type="text" 
                         size="49" style="height:50px; border-color: orange;" name="Subject" placeholder="Subject"/></p> 
            <br /> 
             
			 
			  
			<textarea placeholder="Message"  cols="50" name="Message" style="height:100px; border-color: orange; width:350px;"></textarea>
			 
			 
           
            <br />
            <p> 
                <input type="submit" 
                       value="inquire Now" name="Submit" style="color:white; background-color:orange;" /> 
                <input type="reset" 
                       value="Reset" name="Reset" style="color:white; background-color:red;" /> 
            </p> 
        </form> 




<img src="boder.png" alt="boder"  style="width:; height:; margin-top:-600px;">










<p style="margin-top:-200px;"></p>
<!--Footer-->

<?php
	include 'footer.php';
?>



</body>
</html>