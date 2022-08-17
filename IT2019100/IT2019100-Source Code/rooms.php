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
  margin-top:-159px;
  
  
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
  margin-top:-120px;
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

/*OneLineImage*/

.column {
  float: left;
  width: 100px;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/*border*/

.none {border-style: none;
	height:400px;
}


</style>
</head>
<body>

<!--Headr part-->

<div class="container">
  <img src="room1.jpg" alt="background-image" style="width:1500px; height:700px; margin-top:px;">
  
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
	
	
	
	
    <p style="font-size:60px; margin-left:560px; margin-top:120px;">Rooms <span style ="font-family: Baskerville, Goudy Old Style, Palatino, Book Antiqua, serif; font-style: italic; font-weight: normal;"> & </span> Dining</p>
  </div>
</div>

<h1 style="margin-top:50px; margin-left:480px; font-size:42px; color:#333333; font-weight: lighter;"> 
OUR DINING EXPERIENCE  </h1>
<h1 style=" margin-left:600px; font-size:32px; color: #595959; font-weight:100; font-family:Garamond;"> HOTEL CAVANI</h1>
<hr size="8" width="200px;" color="#cc5200;"  style="margin-left:610px;">

<br>

<p style="margin-left:200px;margin-right:200px; text-align: center; color:#a1a178;">

Transcending from the ancient royal roots, the dining experience at Rajarata Hotel equals that to a 
royal experience. The three restaurants are made just to answer the cravings of your taste buds in both local and international cuisine.
We have a host of 
fine dining options for you to satisfy your cravings for either breakfast, lunch or dinner.</p>

<p style="margin-left:200px;margin-right:200px; text-align: center; color:#a1a178;">

The three restaurants Tranquil, Escape Bar and Sweet Crib Lounge welcome you all for the delights of an authentic cuisine,
 a relaxing bar and lounge and a lounge for the guilty pleasures of sweets and authentic Ceylon tea.</p>

<br>
<br>
<!--OneLineImage-->
<div class="row">
  <div class="column">
    <img src="q.jpg" alt="food1" style="width:32%; height:340px; ">
  </div>
  <div class="column" style="margin-top:-343px;">
    <img src="food2.jpg" alt="food2" style="width:32%; margin-left:496px; height:340px;  " >
  </div>
  <div class="column" style="margin-top:-344px;">
    <img src="food3.jpg" alt="food3" style="width:32%; margin-left:995px; height:340px; ">
  </div>
</div>


<!--border-->

<div class="none" style="background:#f5f5ef; height:400px; ">
<img src="border1.png" alt="border1"  style="width:27%; margin-top:85px; margin-left:200px;">
<h1 style="margin-top:-260px; margin-left:650px; font-size:42px; color:#333333; font-weight: lighter;"> 
TRANQUIL RESTAURANT  </h1>
<img src="line.png" style="margin-left:650px; margin-top:-25px;">

<p style="margin-left:650px; margin-right:200px;  color:#a1a178;">Tranquil, the hotel’s main restaurant, serves international and 
local cuisine. Enjoy the daily continental breakfast buffet or a pick from a wide variety of fine dining options including cuisine from Asia,
 including both Sri Lanka and India all the way to the Mediterranean.</p>
 
 <p style="margin-left:650px; margin-right:200px;  color:#a1a178;">We also have a more than generous selection 
 of the finest wines and foreign liqueurs along with special homemade 
 ice-creams in a range of flavours that can satisfy the palates of the entire family.</p>
 
</div>


<div class="none" style=" height:400px; ">
<img src="border2.png" alt="border2"  style="width:27%; margin-top:95px; margin-left:900px;">
<h1 style="margin-top:-260px; margin-left:630px; font-size:42px; color:#333333; font-weight: lighter;"> 
ESCAPE BAR  </h1>
<img src="line.png" style="margin-left:650px; margin-top:-25px;">

<p style="margin-left:200px; margin-right:200px;  color:#a1a178;">Walk into the escape bar and enjoy a wide range of 
international and local brands of wine, beer and spirits.</p>
 
 <p style="margin-left:200px; margin-right:600px;  color:#a1a178;">beer and spirits.

Delicious cocktails and refreshing mock-tails are served as per your request throughout the day. The Escape 
bar is the ideal place to sit back and let the day fade into darkness as you throw back a few shots.</p>
 
</div>


<div class="none" style="background:#f5f5ef; height:400px; ">
<img src="border3.png" alt="border3"  style="width:27%; margin-top:85px; margin-left:200px;">
<h1 style="margin-top:-260px; margin-left:650px; font-size:42px; color:#333333; font-weight: lighter;"> 
SWEET CRIB LOUNGE</h1>
<img src="line.png" style="margin-left:650px; margin-top:-25px;">

<p style="margin-left:650px; margin-right:200px;  color:#a1a178;">Tranquil, the hotel’s main restaurant, serves international and 
local cuisine. Enjoy the daily continental breakfast buffet or a pick from a wide variety of fine dining options including cuisine from Asia,
 including both Sri Lanka and India all the way to the Mediterranean.</p>
 
 <p style="margin-left:650px; margin-right:200px;  color:#a1a178;">We also have a more than generous selection 
 of the finest wines and foreign liqueurs along with special homemade 
 ice-creams in a range of flavours that can satisfy the palates of the entire family.</p>
 
</div>



<!--Footer-->

<?php
	include 'footer.php';
?>


</body>
</html>