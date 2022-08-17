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

</style>
</head>
<body>

<!--Headr part-->

<div class="container">
  <img src="ppol1.jpg" alt="background-image" style="width:100%;  margin-top:px;">
  
  <div style="margin-top:-550px;" class="content" >
    
	
	
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
	
	
	
	
    <p style="font-size:60px; margin-left:560px; margin-top:170px;">ABOUT US</p>
  </div>
</div>

<h1 style="margin-top:50px; margin-left:340px; font-size:42px; color:#333333; font-weight: lighter;"> 
BEST DWELLING IN THE HEART OF SRI LANKA’S CULTURAL CAPITAL – ANURADHAPURA.  </h1>
<h1 style=" margin-left:480px; font-size:32px; color: #595959; font-weight:100; font-family:Garamond;"> A FAMILY OWNED LUXURY HOTEL</h1>
<hr size="8" width="200px;" color="#cc5200;" >

<br>

<p style="margin-left:200px;margin-right:200px; text-align: center; color:#a1a178;">The history of Cavani Hotel Anuradhapura dates back to the 1970s as a 100 room property. Situated in a two-acre area amongst the serene ancient city of Anuradhapura, the hotel, now refurbished, opens its doors to discerning travelers looking to experience the resplendence of a by-gone era while enjoying the most modern luxuries.

Due to its close proximity to most of the iconic ancient sites and the pristine beauty of its surroundings, Rajarata hotel Anuradhapura has become the most ideal place to kick back and relax at be it after a long day of touring the ancient historical sites or whether you’re simply looking for the perfect getaway.</p>




<!--Footer-->

<?php
	include 'footer.php';
?>


</body>
</html>