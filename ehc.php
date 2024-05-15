 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

  * {
  box-sizing: border-box;
}
  

.container {
  position:absolute;
  max-width: 1300px;
  margin: 0 auto;
}

.container img {vertical-align: center;}

.container .content {
  position:fixed;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0); /* Black background with 0.5 opacity */
  color:WHITE;
  width: 96%;
  padding: 9px;
  margin-left: 30px

}


body {
  font-family: 'georgia';
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
body {
  overflow-y: hidden; /* Hide vertical scrollbar */
  overflow-x: hidden; /* Hide horizontal scrollbar */
}
.glow {
  font-size: 38px;
  color: white;
  text-align: center;
  animation: glow 10s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 20px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 40px #e60073, 0 0 50px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 20px #ff4da6, 0 0 30px #ff4da6, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6;
  }
}
button {
  background-color:  DodgerBlue;
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
  background-color: DodgerBlue;
}
</style>
</head>
<body>
  
  <form action="menu.php">
    <audio autoplay loop>
      <source src="http://localhost/ehealthcare/Voice%20008-1-1.m4a"/>
      <source src="http://localhost/ehealthcare/Voice%20008-1-1.ogg"/>
    </audio>
<div class="container">
  <img src="https://static.vecteezy.com/system/resources/previews/000/558/627/non_2x/vector-abstract-background-technology-network-design.jpg" height="100%", alt="Notebook" style="width:250%;">
  <div class="content">
 
  
<div class="bg-img"> 
<body bgcolor="Black">

 
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="reg.php"><b>LOGIN🔐</a></b><br>
     
     <a href="lo.php"><b>PATIENT REVIEWS FOR DOCTORS📝</a></b><br>
    <a href="aboutus.php"><b>ABOUT US✏️</a></b><br>
    <a href="contactus.php"><b>CONTACT US📞</a></b><br>
    <a href="https://forms.gle/hUzCFuYoraQ137Xn7"><b>FEEDBACK📝</a></b><br>
     <a href="terms.php"><b>TERMS AND CONDITIONS📝</a></b><br>

  </div>
</div>
<style type='text/css'>
  body {
    background-color: black
  }
  
  h1 {
    color:pink;
}

h2 {
    color:WHITE;
;
}



   
   
</style>
 

  <h1><img src="https://images.vexels.com/media/users/3/128044/isolated/preview/94f0b955807b088de5dc109c019b6fc9-health-care-medical-sign-by-vexels.png" style="width:10%">E HEALTHCARE ONLINE CONSULTATION AND MEDICAL SUBSCRIPTION</h1>
 
 
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


</script>
  
 
<h2>  
 
E-healthcare system Benefits To User/Citizen.
The E consultation system is an end user support and online consultation project. Here we propose a system that connects patients to available doctors for online consultation and also allows subscriptions to patient. 

The proposed application aims to create a friendly working environment for any health care centres.<BR>
<center><b>OUR FACILITIES:</b></center>
1:Get consultation online from specialist doctors.<br>
2:At critucal situation call on EMERGENCY NUMBER to get primary consultation at 24 x 7.<br>
3:Affordable Lab Tests.<br>
4:Affordable medicienes<br>
5:Healthcare Tips<br>
6:Free online seminars<br>
7:Home isolation patient management<br>
8:Buy or rent the medical equipment and Many more....<br><br><center> 👇click on this button to view our other services.👇</center>
 
</h2>
  <button type="submit">OUR OTHER SERVICES  
   </a></button>   
       
</body>

</html>
