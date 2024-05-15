<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 
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

p {
    color:white;

}
</style>

</head>
<body>
<body bgcolor="black">

 
<div id="main">

    <h1><img src="https://images.vexels.com/media/users/3/128044/isolated/preview/94f0b955807b088de5dc109c019b6fc9-health-care-medical-sign-by-vexels.png" style="width:11%">E-HEALTHCARE ONLINE CONSULTATION AND MEDICAL SUBSCRIPTION</h1>
  
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
  <img src="https://www.portea.com/static/3b1e73010878fbf1890d579b9b3eff55/d8826/banner-img-eldercare.jpg"style="width:105%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://www.portea.com/static/3b1e73010878fbf1890d579b9b3eff55/d8826/banner-img-eldercare.jpg" style="width:105%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://www.portea.com/static/3b1e73010878fbf1890d579b9b3eff55/d8826/banner-img-eldercare.jpg" style="width:105%">
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
<button type="button" class="collapsible"><center><b>BOOK A APPOINTMENT CALL ON ☎️1800 121 2323</b></center></button>
<h2><center> FAQ's</center></h2><hr>
<h1> Q – What are the responsibilities of e-healthcare Attendant? <br>
A – Ehealthcare’s trained attendants will help you with administering oral medication, managing feeding tubes, assistance in ambulation, monitoring vitals or patients, personal grooming for the patient and more.</h1><br><br><hr>

<h1>Q – Will the trained attendant wash clothes and utensils for the family? <br>
A – No, our attendant will only help the patient to perform their daily living activities.</h1><br><br><hr>

<h1>Q – Are e-healthcare trained attendants medically qualified? <br>
A – No, our trained attendants are not medical professionals. However, we do train our attendants for daily living assistance and basic medical assistance.</h1><br><br> <hr>

<h1>Q – Are e-healthcare trained attendants reliable?<br> 
A – Yes, we do a complete background check of our attendants before recruiting. Also, we provide them thorough training prior to appointing them to a patient.</h1><br><br><hr>

<h1>Q – How long will a trained attendant stay at my home?<br> 
A – You can avail long term or short term care for your loved one. You can opt for 12-hr or 24-hr trained attendant service as per the requirement.</h1><br><br><hr>

<h1>Q –The E-healthcare is affordable or not?<br> 
A – Yes.the E-healthcare is affordable for all.</h1><br><br>
 
 </style>
</head>
<body>
 
</script>

</body>
</html>
