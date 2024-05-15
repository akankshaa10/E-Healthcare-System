     <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  * {
  box-sizing: border-box;
}
  

.container {
  position:center;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: center;}

.container .content {
  position:absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 50%;
  padding: 0px;
}

input[type=text],input[type=number] {
  width: 100%;
  padding: 10px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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

.imgcontainer {
  text-align: center;
  margin: 200px  150px 0;
}

img.avatar {
  width: 30%;
  border-radius: 40%;
}

.container {
  padding: 10px;
}

span.psw {
  float: center;
  padding-top: 10px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: center;
  }
  .cancelbtn {
     width: 100%;
  }
}
.error {color: #FF0000;}
</style>
</head>
<body>
 
  <div class="container">
  <img src="ALzlCK.JPG" height="100%", alt="Notebook" style="width:100%;">
  <div class="content">
</head>
  <body>

  
<div class="bg-img"> 
<body bgcolor="Black">

   


 <form name="f1" action = "auth10.php" onsubmit = "return validation()" method = "POST">  
 
  <div class="imgcontainer">
    <img src="avatardefault_92824.png" alt="Avatar" class="avatar">
  </div>


<p><CENTER><B></B></P></CENTER>
  <div class="container">
    <label for="pname"><b>Patient name</b></label>
    <input type="text" placeholder="Enter Username" name="pname" required><BR><BR>

    
    
      
    <label for="riew"><b>Review</b></label>
    <input type="text" placeholder="Type Your Experience About Doctor" name="riew" required><BR><BR>

     <label for="dname"><b>Doctor name</b></label>
      <select name="dname" id="dname" input type="text" width="500%" style="padding: 1%">
              <option value="selec">Please Select</option>
              <option value=" Arav Joshi"> Dr. Arav Joshi</option>
              <option value=" Abhijeet Agashe"> Dr. Abhijeet Agashe</option>
              <option value=" Aruna Pawar"> Dr. Aruna Pawar</option>
              
               <option value=" Madhuri Bhosale"> Dr. Madhuri Bhosale</option>
                <option value=" Neelam Jaiswal"> Dr. Neelam Jaiswal</option>
 <option value=" Swapnil Joshi">  Dr. Swapnil Joshi</option>
  <option value=" Pratik Patil">  Dr. Pratik Patil</option> 
 <option value=" Kajal Salunke">  Dr. Kajal Salunke</option>
  <option value=" Ashwini Shinde">  Dr. Ashwini Shinde</option>
            </select>
    <button type="submit"> <B>  
     POST</B> </a></button>
</button></button>  <button class="button1" onclick ="document.location='abcd12.php'"><B>VIEW REVIEWS FROM OTHER PATIENTS</B> </a></button>

   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   
</form>
 
</body>
</html>






