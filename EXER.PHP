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
    color:teal;
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
</style>
</head>
 
   
 
 
 
 
<h1><CENTER><img src="https://images.vexels.com/media/users/3/128044/isolated/preview/94f0b955807b088de5dc109c019b6fc9-health-care-medical-sign-by-vexels.png" style="width:11%">E-HEALTHCARE ONLINE CONSULTATION AND MEDICAL SUBSCRIPTION</CENTER></h1>
<H1><CENTER>DAILY EXERCISE</CENTER></H1>
 
  <DIV CLASS="container">
  <div class="slideshow-container">
<center>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://images.everydayhealth.com/images/cs-exercise-modifications-for-rheumatoid-arthritis-1440x810.jpg?sfvrsn=6eef70c2_1" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src=" https://images.everydayhealth.com/images/ra-stregth-training-ways-to-make-exercise-fun-1440x810.jpg?sfvrsn=232458f_1" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrW7WZ9pAmjXAdOBHlBwbq5LuXJ9OvHgFSRpd-TD4EPJG0p7kNGEfv8Fro1nmWS2WM_Eo&usqp=CAU" style="width:100%">
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

<h1><CENTER><b>EXERCISE</b></h1></CENTER><BR><BR>
<button class="button1"></a></button>

</head>
<body>

   
   
 

  
<div class="row">
  <div class="column">
    <div class="card">


      <img src="arthritis.jpg" alt="Arav" style="width:100%">
      <div class="container">
        <center>
        <h2>ARTHRITIST EXERICISE</h2>
        
      </center>
       
           <button class="button" onclick ="document.location='ARTHITIST.PHP'">VIEW PROFILE </a></button>

          
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">


      <img src="BACKPAIN.JFIF" alt="Abhijeet" style="width:100%">
      <div class="container">
        <center>
        <h2>BACKPAIN EXERCISE</h2>
       </center>

 <button class="button" onclick ="document.location='BACKPAIN.PHP'">VIEW PROFILE </a></button>
       
      
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="ZUMBA.jpg" alt="Aruna" style="width:100%">
      <div class="container">
        <center>
        <h2>ZUMBA WORKOUT</u></h2>
        
        </center>

      <button class="button" onclick ="document.location='ZUMBA.PHP'">VIEW PROFILE </a></button> <br><br>
          
         
 
      </div>
    </div>
  </div>

 <button class="button1"></a></button>
  <div class="row">
  <div class="column">
    <div class="card">
      <img src="KIDS.jFIF" alt="Madhuri" style="width:100%">
      <div class="container">
        <center>
        <h2>KIDS WORKOUT</h2>
       
      </center>
         <button class="button" onclick ="document.location='KIDS.PHP'">VIEW PROFILE </a></button> 
          
       
          
          
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="weight.jFIF" alt="Neelam" style="width:100%">
      <div class="container">
        <center>
        <h2>WEIGHTGAIN EXERCISE</h2>
       
      </center>
       
       <button class="button" onclick ="document.location='weightgain.PHP'">VIEW PROFILE </a></button> 
          
       
      </div>
    </div>
  </div>
 
  <div class="column">
    <div class="card">
      <img src="WIGHTGAIN.JFIF" alt="Swapnil" style="width:100%">
      <div class="container">
        <center>
        <h2>WEIGHTLOSS EXERCISE</h2>
        
      </center>
       
         <button class="button" onclick ="document.location='exercise.PHP'">VIEW PROFILE </a></button>
            
      
 
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