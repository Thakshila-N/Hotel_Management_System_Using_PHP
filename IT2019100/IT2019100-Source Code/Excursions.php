<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>


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

/*multiple div*/

.panel, .flip {
  font-size: 16px;
  padding: 10px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
  border: solid 1px #a6d8a8;
  margin: left;
}

.panel {
  display: none;
}

}





</style>
</head>
<body>

<!--Headr part-->

<div class="container">
  <img src="tiger.jpg" alt="background-image" style="width:1500px; height:700px;">
  
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
	
	
	
	
    <p style="font-size:60px; margin-left:520px; margin-top:170px;">EXCURSIONS</p>
  </div>
</div>

<!--Body-->
<h1 style="margin-top:50px; margin-left:220px; font-size:42px; color:#333333; font-weight: lighter;"> GUIDED TOURS TO THE ANCIENT, HISTORICAL AND  </h1>
<h1 style="margin-top:-34px; margin-left:320px; font-size:42px; color:#333333; font-weight: lighter;"> RELIGIOUS SITES IN ANURADHAPURA </h1>

<p style="color:#a1a178; margin-left:220px;"> Cavani hotel offers many tailor-made excursion programmes ranging from field trips and full-day trips to bicycle tours. Our local tour guides will make sure that</p>
<p style="color:#a1a178; margin-left:260px;"> you gain the most value from the various customised tour packages by ensuring that you become a part of the local culture and the history itself.</p>




<!--Bordr-->
<div class="none" style="background:#f5f5ef; height:550px; ">

<img src="ele.png" alt="border1"  style="width:21%; margin-top:85px; margin-left:1000px;">
<h1 style="margin-top:-420px; margin-left:450px; font-size:42px; color:#333333; font-weight: lighter;"> 
TRAVEL ANURADHAPURA </h1>

<p style="margin-left:200px; margin-right:600px; margin-top:100px; color:#a1a178; font-size:25px;">In addition to the buffet of historical sites, 
Cavani Hotel provides travellers with the opportunity to take in some of the natural marvels of the ancient city. 
With over 40 sq. kilometres of places to go and sites of natural beauty to take in, Cavani Hotel will provide you with 
facilities including specialist transportation to make your experience even more enjoyable.</p>
</div>

<!--multiple div-->

<p style="padding: 10px; text-align: center; background-color: #e0e0d1 ; color: black; border: solid 1px #a6d8a8;"  onclick="myFunction()"><b>Cycling around the Lake >><b></p>

<div id="panel" style="
 
  padding: 10px;
  text-align: center;
  background-color: #e0e0d1;
  color: black;
  border: solid 1px #a6d8a8;
  display: none">
  <h1>Cycling around the Lakes</h1>
  <p style="text-align: center; margin-right:400px; margin-left:400px;">The lakes in Anuradhapura are ready to welcome visitors on cycles as well as on foot with their scenic water life and cool and shady environment. They are also ideal for small picnics in the grassy banks with sounds of water birds and smells of water lillies.</p>
  <img src="lakes-1.png" alt="Lakes"  style="width:40%; margin-top:; margin-left:;">
</div>

<!--second-->

<p style="padding: 10px; text-align: center; background-color: #e0e0d1 ; color: black; border: solid 1px #a6d8a8;"onclick="myFunction1()"><b>Cycling in the Heritage Site >><b></p>
  


<div id="pane2" style="padding: 10px; text-align: center; background-color: #e0e0d1; color: black; border: solid 1px #a6d8a8; display: none">
 
   
  <h1>Cycling in the Heritage Site</h1>
  <p style="text-align: center; margin-right:400px; margin-left:400px;">All the special archaeological sites in Anuradhapura are situated in walking distance from each other or a small distance on a tuk-tuk. Renting a bicycle and cycling around is the easiest way to visit most of the places, as it reduces traffic and can take shady small paths.</p>
  <img src="heritage-site.png" alt="Lakes"  style="width:40%; margin-top:; margin-left:;">
</div>

<!--Thired-->

<p style="padding: 10px; text-align: center; background-color: #e0e0d1 ; color: black; border: solid 1px #a6d8a8;"onclick="myFunction2()"><b>Climbing the thousand steps of Mihintale >><b></p>
  


<div id="pane3" style="padding: 10px; text-align: center; background-color: #e0e0d1; color: black; border: solid 1px #a6d8a8; display: none">
 
   
  <h1>Climbing the thousand steps of Mihintale</h1>
  <p style="text-align: center; margin-right:400px; margin-left:400px;">Mihintale is a hill in the plains of the North East of Sri Lanka. The Mihintale Monastery is built in the top of the hill, and the 1840 steps leading to the monastery are still there paving the way. Half of these steps can be avoided with a bi-route, but it’s a daring climb to enjoy a 360֯ view.</p>
  <img src="mihintale.png" alt="Lakes"  style="width:40%; margin-top:; margin-left:;">
</div>

<!--Fourth-->

<p style="padding: 10px; text-align: center; background-color: #e0e0d1 ; color: black; border: solid 1px #a6d8a8;"onclick="myFunction3()"><b>Camping at Wilpattu >><b></p>
  


<div id="pane4" style="padding: 10px; text-align: center; background-color: #e0e0d1; color: black; border: solid 1px #a6d8a8; display: none">
 
   
  <h1>Camping at Wilpattu</h1>
  <p style="text-align: center; margin-right:400px; margin-left:400px;">Wilpattu National Park offers not just safaris for the morning, evening or full day, but also ideal sites to camp with tents, or bungalows for nights inside the park. It is whole another experience to spend the night in front of a camp fire among the sounds of the jungle.</p>
  <img src="wilpatthu.png" alt="Lakes"  style="width:40%; margin-top:; margin-left:;">
</div>


<script>
function myFunction() {
  document.getElementById("panel").style.display = "block";
}
function myFunction1() {
  document.getElementById("pane2").style.display = "block";
}
function myFunction2() {
  document.getElementById("pane3").style.display = "block";
}
function myFunction3() {
  document.getElementById("pane4").style.display = "block";
}
</script>





<p style="margin-top:-200px;"></p>


<!--Footer-->

<?php
	include 'footer.php';
?>


</body>
</html>