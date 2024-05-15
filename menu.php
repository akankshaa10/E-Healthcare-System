 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: GEORGIA;
  transition: background-color 0.9s;
}

 
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;

}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 35px;
  color: #818181;

  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 65px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
  color: WHITE;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 25px;}
}

button {
  background-color:  orange;
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

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: WHITE;
}

* {box-sizing: border-box;}
body {font-family:georgia;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  max-width: 1700px;
}

 
/* The dots/bullets/indicators */
.dot {
  height: 20px;
  width: 20px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.2s;
  animation-name: fade;
  animation-duration: 2.2s;

}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
body
{
   overflow-x: hidden; /* Hide horizontal scrollbar */
}
</style>
<style type='text/css'>
  
  h1 {
    color:teal;
}

h2 {
    color:teal;

}
</style>

</head>
<body>
<body bgcolor="BLACK">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="reg.php"><b>LOGIN🔐</a></b><br>
  
  <a href="abcd13.php">VIEW SEMINARS🧘🏻‍♀️</a><BR>
  <a href="LAB.php">LAB TESTS 🔬</a><BR>
  <a href="med.php">BUY MEDICIENES💊</a><BR>
  <a href="healthcaretips.php">HEALTHCARE TIPS❤</a>
  <a href="EXER.php">DAILY EXERCISE🧘🏻‍♀️</a> 
 <a href="faq.php">FAQ'S📝❓</a><BR>
 
</div>

<div id="main">

    <h1><img src="https://images.vexels.com/media/users/3/128044/isolated/preview/94f0b955807b088de5dc109c019b6fc9-health-care-medical-sign-by-vexels.png" style="width:11%">E-HEALTHCARE ONLINE CONSULTATION AND MEDICAL SUBSCRIPTION</h1>
 <MARQUEE><B>WELCOME TO E-HEALTHCARE ONLINE CONSULTATION AND MEDICAL SUBSCRIPTION.😷STAY SAFE ❤ STAY AT HOME😷</B></MARQUEE>
    
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;<b>MENU</b></span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "400px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "black";
}
</script>
<DIV CLASS="container">
  <div class="slideshow-container">
<center>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://i.pinimg.com/originals/ee/35/ce/ee35ceb92fa5c45a6334d2be056ea44d.jpg" style="width:105%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="12.jpg" style="width:105%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="13.png" style="width:105%">
  <div class="text"></div>
</div>
</center>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</DIV>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

    
  <center><H1><B>OUR OTHER SERVICES</B></H1></center>
   <button type="submit"> 
   </a></button>  
<CENTER> 
<a href="http://localhost/ehealthcare/other2.php">
   <img src="1.jpeg" width="300" height="200"/></a>
<a href="http://localhost/ehealthcare/other2.php">

  <a href="http://localhost/ehealthcare/other3.php">
   <img src="2.jpeg" width="300" height="200"/></a>
<a href="http://localhost/ehealthcare/other3.php">


  <a href="http://localhost/ehealthcare/other4.php">
   <img src="3.jpeg" width="300" height="200"/></a>
<a href="http://localhost/ehealthcare/other4.php"><br>


   

  <a href="http://localhost/ehealthcare/other4.php">
   <img src="6.jpeg" width="300" height="200"/></a>
<a href="http://localhost/ehealthcare/other4.php">


  <a href="http://localhost/ehealthcare/other.php">
   <img src="7.jpeg" width="300" height="200"/></a>
<a href="http://localhost/ehealthcare/other.php">

 


  <a href="http://localhost/ehealthcare/other5.php">
   <img src="9.jpeg" width="300" height="200"/></a>
<a href="http://localhost/ehealthcare/other5.php">
  <button type="submit"> 
   </a></button>  
        
   </CENTER><br>

  <CENTER> <h1>PROTECT YOUR COMMUNITY FROM COVID</h1></CENTER>
<center>  <img src="covid.jpg"  height="40%", alt="Notebook" style="width:40%;">   
       <button class="button" onclick ="document.location='covid-19.php'">KNOW MORE</a></button> 
   </a></button> </center>  
     <CENTER><img src="11.jpeg" width="40%" height="40%"/></a></CENTER> 
      <button class="button" onclick ="document.location='covid.php'">KNOW MORE</a></button> 
   </a></button> </center>    
</body>
</html> 
