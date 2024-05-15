<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: teal;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: teal;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: white;
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
  <img src="https://cdn.shopify.com/s/files/1/0252/0904/5067/articles/Diabetes-Page_Source-File_800x.png?v=1586841529"style="width:105%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://cdn.shopify.com/s/files/1/0252/0904/5067/articles/Diabetes-Page_Source-File_800x.png?v=1586841529" style="width:105%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfNFcOedw-QDQCcuZ6e749aJEZDTTnm8ebL3dOnY8POYRy7euZFMwc9h2FG-JTm8LbtTk&usqp=CAU" style="width:105%">
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


</style>
</head>
<body>
 <button type="button" class="collapsible"><center><b>For Homevisit Call On ☎️1800 121 2323</b></center></button>
<h2><center>TABLE OF CONTENTS</center></h2>

 <button type="button" class="collapsible"> Our Diabetes Care Program Plan</button>
<div class="content">
  <p> 
 Diabetes Care Program is created with a vision to help people manage their Diabetes in a natural and comfortable way. Our expert counselors will work with you to help you track, manage and lower your blood sugar levels. Your counselor will create your personalized diet plan depending on your preferences and lifestyles.<br><br>

Our team of Diabetic nurses and nutritionists work closely (on phone) with every patient to help them on a range of issues, with the overarching aim to increase blood sugar levels.<br><br></p>
</div>

 
<button type="button" class="collapsible">Our Offering Diabetes Care Packs</button>
<div class="content">
  <p> <b> Our Offering Diabetes Care Packs</b><br><br>
India’s first comprehensive diabetes management program is designed to help diabetics to manage their blood sugar levels to lead a healthy life. The program is designed in consultation with our knowledge partners Belle Sante, who have served thousands of patients across 32 countries. We’ll work with you for 1 Year to help you become self-sufficient in managing your diabetes.<br><br>

<b>DIABETES CARE PACKAGE</b><br><br> 
OneTouch Select Plus Simple (SPS) Glucometer<br>
Personal Health Coach<br>
35 Testing Strips<br>
OneTouch Select Plus Simple Glucometer is a blood glucose monitoring system that has been designed to be simple and hassle free with no setups, no coding and no buttons. It gives a proper understanding and reassurance with its color and sound quality.<br>
It helps to monitor the blood glucose level with comfort at home and helps in keeping diabetes and related issues in check.<br>
Personal Health Coach: A dedicated Health Coach is assigned to you, who will work with you to design your diet and exercise plan to achieve the best results within a month.<br>
35 Testing Strips: strips, to help you get started<br>

 
DIABETES STATISTICS<br><br>
1 out of every 10 people in India is either Diabetic or Pre-Diabetic<br>
1 out of 2 adults with Diabetes is undiagnosed<br>
50 million people suffer from type-2 diabetes.<br>
An estimated 3.4 million deaths are caused due to high blood sugar<br><br>
</p>
</div>
 
 
 <button type="button" class="collapsible"> Why Choose E-HEALTHCARE?
</button>
<div class="content">
 
<b>CERTIFIED ICU NURSES & ICU DOCTOR</b><br><br>
With extensive hands on experience, professional certifications and training our specialists ICU Doctors ensure quality care.<br>
<br>


<b>BEST IN CLASS ICU DEVICES</b><br><br>

We offer a wide range of products for all patients needs across an affordable price range.<br><br>


<b>COST ADVANTAGE</b><br><br>

Complete expenses of the critical care services come at a fraction of cost of the same services at a hospital.<br><br>


<b>WORKING WITH THE TREATING PHYSICIAN</b><br><br>

We involve your own physician in the care plan design and share patient data periodically with him/ her.<br><br>


<b>CONTINUOUS MONITORING</b><br><br>
Our trained specialists monitor patient progress and recovery data from our state of the art devices.<br>
<br>


<b>LOWER RISK OF INFECTION</b><br><br>

Home ICU setups not only save time, money but also substantially reduce the risk of infections for the patient.<br>


 
</div>
<button class="button1" onclick ="document.location='lo3.php'"><B>ENROLL TO THIS SERVICE</B> </a></button>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
</html>
