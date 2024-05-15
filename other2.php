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
  <img src="https://cdn.nextgov.com/media/img/cd/2020/04/17/NGcriticalcare20200417/860x394.jpg?1618372526"style="width:105%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://www.portea.com/static/bab2b4c7f7ee6f862a4e2f173635feb6/d8826/banner-img-attendant.jpg" style="width:105%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://149550756.v2.pressablecdn.com/wp-content/uploads/2020/09/icu-nurse-listening-to-patients-heart-750x350-1.jpg" style="width:105%">
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

 <button type="button" class="collapsible"> <b>Critical Care At Home</b></button>
<div class="content">
  <p> 
   
 Critical Care At Home<br><br>
Home is where healing happens best. Portea ICU@Home services are for Patients who are no longer in the acute phase of their illness but still require intensive care.<br><br>

ICU@Home services include the care and supervision of highly trained critical care therapists, experts and nurses and at a significantly lower price than that of a hospital stay.<br><br>

Our clinical procedures have been developed in consultation with leading hospitals and renowned experts, ensuring the highest quality medical care. Six ways in which we make critical care at home a great choice for the patient and her family.<br><br></p>
</div>

 
<button type="button" class="collapsible"><b>When Do You Need Critical Care?</b></button>
<div class="content">
  When Do You Need Critical Care?<br><br>
When a family member needs long term ICU care, a lot of doctors and hospitals advise for such care to be provided at home if possible, in case there are no active interventions to be done.<br><br>

The patient is happier at home and healing can happen without the threat of hospital acquired infections. This is financially easier for the family as well considering such care at home comes at least 30% cheaper than in a hospital.<br><br>

We have provided this service to a lot of patients with respiratory or neurological disease who take a long time to recover and need adequate device support and specialised care through trained nurses.<br><br> 
</p>
</div>
  <button type="button" class="collapsible"><b> Why Choose E-HEALTHCARE?</b>
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
 
 <button type="button" class="collapsible"> <b> Critical Care Packages</b>
</button>
<div class="content">
 
 Critical Care Packages<br><br>
Care plans are personalized for patient needs and are designed to deliver high quality, affordable, and easy to implement health services.<br><br>

CRITICAL PACKAGE<br><br> 
Clinical team<br><br>
2 ICU trained nurses – 12 hours each<br><br>
2 Nursing assistants – 12 hours each<br><br>
Physiotherapist (as advised by primary physician)<br><br>
Respiratory therapist (1-2 visits/week)<br><br>
ICU consumables<br><br>
Weekly clinical quality audits<br><br>
ICU Infrastructure<br><br>
Ventilator<br><br>
Infusion pumps<br><br>
DVT Pump<br><br>
Other equipment as per clinical assessment by  doctor<br><br>
Home visit reports<br><br>
E-Monitoring<br><br>
On condition<br><br>

GCS: 8 or less | Vitals: Unstable | Mobility: Restricted | Ventilation: Dependent<br><br>

STEP-DOWN PACKAGE<br><br>
Clinical team<br><br>
2 ICU trained nurses-12 hours each<br><br><br><br>
2 Nursing assistants – 12 hours each<br><br>
Physiotherapist (as advised by primary physician)<br><br>
Respiratory therapist (1-2 visits/week)<br><br><br><br>
ICU consumables<br><br>
Weekly clinical quality audits<br><br>
ICU Infrastructure<br><br>
BiPAP<br><br>
Infusion pumps<br><br>
DVT Pump<br><br>
Other equipment as per clinical assessment by doctor<br><br>
Home visit report<br><br>
E-Monitoring<br><br>
SUPPORTIVE PACKAGE<br><br>
Clinical team<br><br>
2 ICU trained nurses – 12 hours each<br><br>
2 Nursing assistants – 12 hours each<br><br>
Physiotherapist (as advised by primary physician)<br><br>
Respiratory therapist (1-2 visits/week)<br><br>
Weekly clinical quality audits<br><br>
ICU Infrastructure<br><br>
Oxygen concentrator<br><br>
Other equipment as per clinical assessment by doctor<br><br>
Home visit reports<br><br>
E-Monitoring<br><br>


 
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
