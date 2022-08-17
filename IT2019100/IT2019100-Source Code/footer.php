<!DOCTYPE html>
<head>

	




</head>
<html>
<body>





<footer   class="footer" style="background: black; margin-top:200px; height:400px; opacity:0.9;">
  <p style="color:white; font-size:25px; margin-left:200px; padding-top:40px; font-family:Serif;">Contact Details </p>
  <hr size="6" width="50px;" color="#bfbfbf" style="margin-left:200px;" >
  <br><br>
  <p style="color:white; font-size:15px; margin-left:200px; font-family:Serif; margin-top:-10px;"> <i style='font-size:15px;' class="fas">&#xf3c5;</i>  395, Gangarama Road, Anuradhapura.</p>
  
  <br><br>
  <p style="color:white; font-size:15px; margin-left:200px; font-family:Serif; margin-top:-10px;"> <i style="font-size:15px;" class="fa">&#xf095;</i>  +94 (0) 77 203 0000</p>
  
  
  <br><br>
  <p style="color:white; font-size:15px; margin-left:200px; font-family:Serif; margin-top:-10px;"> <i style="font-size:15px;" class="fa">&#xf0e0;</i>  thakshilan98@gmail.com</p>
  


<p style="color:white; font-size:25px; margin-left:620px; margin-top:-285px; padding-top:40px; font-family:Serif;">Quick Links </p>
<hr size="6" width="50px;" color="#bfbfbf" style="margin-left:622px;" >
<br>

<a href="home.php" style="  text-decoration: none; color:white; margin-left:620px;"> Home</a>
<br>
<br>

<a href="aboutus.php" style="  text-decoration: none; color:white; margin-left:620px;">About Us</a>
<br>
<br>

<a href="rooms.php" style="  text-decoration: none; color:white; margin-left:620px;">Rooms & Dining</a>
<br>
<br>

<a href="Excursions.php" style="  text-decoration: none; color:white; margin-left:620px;">Excursions</a>
<br>
<br>

<a href="wedding.php" style="  text-decoration: none; color:white; margin-left:620px;">Wedding</a>
<br>
<br>

<a href="ContactUs.php" style="  text-decoration: none; color:white; margin-left:620px;">Contact Us</a>
<br>
<br>

<a href="book1.php" style="  text-decoration: none; color:white; margin-left:620px;">Book Online</a>
<br>
<br>

<p style="color:white; font-size:25px; margin-left:920px; margin-top:-375px; padding-top:40px; font-family:Serif;">Make an Inquiry Today.. </p>
<hr size="6" width="50px;" color="#bfbfbf" style="margin-left:920px;" >
<br>

<p style="color:white; margin-left:920px; margin-top:-10px; margin-right:50px;">Fill out this form and we will be in touch to discuss your requirements.</p>

<script> 
            function validateForm() { 
        
				
            var x=document.forms["regForm"]["Name"].value;
			if (x==null || x=="")
			{
			alert("Please enter the Name!!");
			return false;
			}
              
			 var x=document.forms["regForm"]["Email"].value;
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
			
			var x=document.forms["regForm"]["Subject"].value;
			if (x==null || x=="")
			{
			alert("Please enter the subject!!");
			return false;
			}
			
			var x=document.forms["regForm"]["Message"].value;
			if (x==null || x=="")
			{
			alert("Please enter the message!!");
			return false;
			}
			
			}			
        </script> 


<div>
<form name="regForm" onsubmit="return validateForm()" action="homeconnect.php" method="post" style="margin-left:920px; padding-right:10px;"  > 
 <input type="text" name="Name" id="Name" placeholder="Name" style="margin-right:10px; width:200px; padding:8px; background-color:#adad85; color: #f5f5f0;"> 
 
 <input type="text" name="ContactNumber" placeholder="Contact Number" style="margin-right:10px; width:200px; padding:8px; background-color:#adad85; color: #f5f5f0;" > <br/><br/>
 
 <input type="text" name="Email" placeholder="Email" style="margin-right:10px; width:200px; padding:8px; background-color:#adad85; color: #f5f5f0;"> 
 
 <input type="text" name="Subject" placeholder="Subject" style="margin-right:10px; width:200px; padding:8px; background-color:#adad85; color: #f5f5f0;"><br/><br/>
 
 <input type="text" name="Message" placeholder="Message" style="margin-right:10px; width:415px; padding:25px; background-color:#adad85; color: #f5f5f0;"><br/><br/>

 <input type="submit" value="Inquiry Now" style="margin-left:330px; background-color:#ff8533; color:white; padding:7px;"/>
</form> 
</div>

</footer>

</body>
</html>
