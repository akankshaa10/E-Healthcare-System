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
  <img src="https://images.theconversation.com/files/322739/original/file-20200324-155702-1vnmfgy.jpg?ixlib=rb-1.1.0&rect=30%2C290%2C5061%2C2527&q=45&auto=format&w=668&h=324&fit=crop" style="width:105%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://www.ppic.org/wp-content/uploads/eldery-woman-caregiver-nursing-home-senior.jpg" style="width:105%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQBM638SI5xlsH8oJYvlN-POHlOpLvE29nxSZCKX-Uzo2iQO_ffLwz-kEwZgoOV2VraR4&usqp=CAU" style="width:105%">
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

 <button type="button" class="collapsible"><b>What Home Nursing Care Means?</b></button>
<div class="content">
  <p>Home nursing services encompasses a wide range of healthcare services that can be easily administered at your home. Home care nursing services are usually cheaper than hospitals and nursing homes, while being just as effective as the medical care offered in a hospital or nursing home.<br><br>

An in-home nursing service offers personalized nursing care at home as offered in a typical hospital while being more compassionate towards the patient and gets integrated into the patient’s family and develops an emotional bond with the patient and their family.<br><br>

The services offered by home care nursing are provided by registered nurses, physiotherapists and occupational therapists among others. And as such you need not worry on the quality of service offered by the home nurse.<br><br>

In the past, the phrases In-Home Care, Home Care and Home Health Care were used interchangeably. Today however, people have developed a better understanding towards Home Health Care or In-Home nursing service which is basically skilled nursing care whereas the term In-Home Care refers to non-medical care services like personal care and companionship and supervision.<br><br></p>
</div>

 
<button type="button" class="collapsible"><b>When Do You Need Us?</b></button>
<div class="content">
  <p>The main goal of home nursing service is to treat an illness or injury. The home nursing services usually entails wound care for pressure sores or surgical wound, patient and care – giver education, Intravenous or nutrition therapy, injections, rehabilitation therapies and monitoring serious illness and unstable health status.<br><br>

Vaccination:<br><br>

Get vaccinated at home and stay safe from infectious diseases. We provide vaccination for H1N1, Typhoid, Pneumonia, Hepatitis and more by qualified nurses at home.<br><br>


Post Surgical Care:<br><br>

Post-surgical care is critical, and includes everything from pain management & feeding to respiratory management & fluid management. Get well sooner under the care of our nurses, who will help you with all of this in the comfort of your home.<br><br>


Urinary Catheterisation Care:<br><br>

Our nurses are well trained and can help you with the process of Urine catheterization care at your home; be it catheter insertion, catheter removal or bladder wash<br><br>


Wound Dressing:<br><br>

Did you know that the healing process varies depending on the wound type? Our nurses are experienced in handling varied types of wounds-post-operation surgical wounds, infected wounds and pressure sores and will accordingly provide appropriate wound care for a faster recovery.<br><br>


Oxygen Administration:<br><br>

Oxygen administration is required in both acute and chronic conditions like trauma, haemorrhage, shock, breathlessness, pulmonary disease, and more. Don’t panic if you require one. Call a Portea nurse home and sit back, while she does the needful.<br><br>


Injection:<br><br>

Save yourself the trouble of travel and long hospital hour for a minor process like injection administration or IV infusion. Just book with us a home nurse and an experienced and registered nurse will come visit you at home to administer the required injection or IV infusion.<br><br>
</p>
</div>
<button type="button" class="collapsible"><b>How Can We Help? And Why Choose Our Trained Attendants Service?</b>
</button>
<div class="content">
  <p><b> How Can We Help?</b><br><br>
Our trained attendants provide care to those in need, in the comfort of their homes. They can help with personal grooming, feeding, mobility, oral medication, monitoring of vitals and more. As per your requirement, you can hire the services of a trained attendant for 12 hours or 24 hours.<br><br>

<b>Why Choose Our Trained Attendants Service?</b><br><br>
 
Our attendants are supervised by senior nurses and doctors<br><br>
Our attendants are well trained and their backgrounds are checked<br><br>
We assign you an attendant in such a way that he or she speaks a language you are comfortable with
We’re the recommended homecare partner for leading hospitals<br><br>
We’re affordable, accountable and accessible</p>
</div>
 
<button type="button" class="collapsible"> Why Choose E-HEALTHCARE?
</button>
<div class="content">
 
<b>CERTIFIED ICU NURSES & ICU DOCTOR</b><br>
With extensive hands on experience, professional certifications and training our specialists ICU Doctors ensure quality care.<br>
<br>


<b>BEST IN CLASS ICU DEVICES</b><br>

We offer a wide range of products for all patients needs across an affordable price range.<br>


<b>COST ADVANTAGE</b><br>

Complete expenses of the critical care services come at a fraction of cost of the same services at a hospital.<br>


<b>WORKING WITH THE TREATING PHYSICIAN</b><br>

We involve your own physician in the care plan design and share patient data periodically with him/ her.<br>


<b>CONTINUOUS MONITORING</b>
Our trained specialists monitor patient progress and recovery data from our state of the art devices.<br>
<br>


<b>LOWER RISK OF INFECTION</b><br>
<br>

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
