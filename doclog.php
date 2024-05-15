<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body {font-family: georgia;}
* {box-sizing: border-box;} 

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 40px;
  padding: 0 10px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0);
}

.container {
  padding: 0 16px;
   color: white;

}


.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
  text-decoration: none;
}
 

.title {
  color: white;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color:  DodgerBlue;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color:  DodgerBlue;
}
.button1{
  border: none;
  outline: 0;
  display: inline-block;
  padding: 20px;
  color: white;
  background-color:  #072F5F;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button1:hover {
  background-color: #072F5F;
}

  

</style>

<style type='text/css'>
  body {
    background-color:black;
  }
  
  h1 {
    color:#45b6fe;
  }

   h2 {
    color:white;
  }
  
   * {box-sizing: border-box;}
body {font-family:georgia;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1200px;
  position: relative;
  margin: auto;
  max-width: 1800px;
  padding:1200;
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
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: BLACK;
  background-color: rgba(0,0,0, 0.8);
  overflow-x: hidden;
  transition: 4s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color:WHITE;
  display: block;
  transition: 0.5s;
}

.overlay a:hover, .overlay a:focus {
  color: lightgreen;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
</head>
 
   
 
 
 
 
<h1><CENTER><img src="https://images.vexels.com/media/users/3/128044/isolated/preview/94f0b955807b088de5dc109c019b6fc9-health-care-medical-sign-by-vexels.png" style="width:11%">E-HEALTHCARE ONLINE CONSULTATION AND MEDICAL SUBSCRIPTION</CENTER></h1> 
<button class="button1" onclick ="document.location='lo2.php'"><B>ADD SEMINARS</B> </a></button>
<button class="button1" onclick ="document.location='abcd15.php'"><B>VIEW ENROLLMENTS</B> </a></button>
<button class="button1" onclick ="document.location='abcd12.php'"><B>VIEW REVIEWS FROM PATIENTS</B> </a></button>

  
 
  

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

<h1><CENTER><b>VIEW DOCTOR</b></h1></CENTER><BR><BR>
<button class="button1"></a></button>
 
</head>
<body>

   
   
 

  
<div class="row">
  <div class="column">
    <div class="card">


      <img src="male.jpg" alt="Arav" style="width:100%">
      <div class="container">
        <center>
        <h2>Dr. Arav Joshi</h2>
        <p class="title"> Cardiology Specalits</p>
      </center>
       
           <button class="button" onclick ="document.location='arav.php'">VIEW PROFILE </a></button>

          
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">


      <img src="male.jpg" alt="Abhijeet" style="width:100%">
      <div class="container">
        <center>
        <h2>Dr. Abhijeet Agashe</h2>
        <p class="title">Orthopedics Specalits</u></p>
      </center>

 <button class="button" onclick ="document.location='abhijeet.php'">VIEW PROFILE </a></button>
       
      
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="female.jpg" alt="Aruna" style="width:100%">
      <div class="container">
        <center>
        <h2>Dr. Aruna Pawar</u></h2>
        <p class="title">Dermatologist Specalits</p>
       
        </center>

      <button class="button" onclick ="document.location='aruna.PHP'">VIEW PROFILE </a></button> <br><br>
          
         
 
      </div>
    </div>
  </div>

 <button class="button1"></a></button>
  <div class="row">
  <div class="column">
    <div class="card">
      <img src="female.jpg" alt="Madhuri" style="width:100%">
      <div class="container">
        <center>
        <h2>Dr. Madhuri Bhosale</h2>
        <p class="title">SKIN Specalits</p>
      </center>
         <button class="button" onclick ="document.location='madhuri.PHP'">VIEW PROFILE </a></button> 
          
       
          
          
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="female.jpg" alt="Neelam" style="width:100%">
      <div class="container">
        <center>
        <h2>Dr. Neelam Jaiswal</h2>
        <p class="title">Dentist Specalits</p>
      </center>
       
       <button class="button" onclick ="document.location='neelam.PHP'">VIEW PROFILE </a></button> 
          
       
      </div>
    </div>
  </div>
 
  <div class="column">
    <div class="card">
      <img src="male.jpg" alt="Swapnil" style="width:100%">
      <div class="container">
        <center>
        <h2>Dr. Swapnil Joshi</h2>
        <p class="title">Cardiology Specalits</p>
      </center>
       
         <button class="button" onclick ="document.location='swapnil.PHP'">VIEW PROFILE </a></button>
            
      

      </div>
    </div>
  </div>
   <button class="button1"></a></button>
  <div class="row">
  <div class="column">
    <div class="card">
      <img src="male.jpg" alt="Pratik" style="width:100%">
      <div class="container">
        <center>
        <h2>Dr. Pratik Patil</h2>
        <p class="title">Dermatologist Specalits</p>
      </center>
       
        <button class="button" onclick ="document.location='pratik.PHP'">VIEW PROFILE </a></button> 
            
          
          
          
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="female.jpg" alt="Kajal" style="width:100%">
      <div class="container">
        <center>
        <h2>Dr. Kajal Salunke</h2>
        <p class="title">Orthopaedics Specalist</p>
        </center>
        <button class="button" onclick ="document.location='kajal.PHP'">VIEW PROFILE </a></button> 
            
       </div>
    </div>
  </div>
 
  <div class="column">
    <div class="card">
      <img src="female.jpg" alt="Ashwini" style="width:100%">
      <div class="container">
        <center>
        <h2>Dr. Ashwini Shinde</h2>
        <p class="title">SKIN Specalits</p>
        </center>
       
 <button class="button" onclick ="document.location='ashwini.PHP'">VIEW PROFILE </a></button> 
            
          
          
      </div>
    </div>
  </div>
 
    </div>
  </div>
 
    </div>
  </div>
 
      </div>
    </div>
  </div>
 
</div>

</body>
</html>