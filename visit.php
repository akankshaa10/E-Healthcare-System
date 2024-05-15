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
  padding: 10px;
}

input[type=text], input[type=password] {
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

   
   

<form action="visitauthentication.php">

  <div class="imgcontainer">
    <img src="avatardefault_92824.png" alt="Avatar" class="avatar">
  </div>
<p><CENTER><B>DOCTOR LOGIN</B></P></CENTER>
  <div class="container">
     <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><BR><BR>

    <label for="Password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><BR><BR>

    
     <label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required><BR><BR>

    
    <label for="dtype"><b>Doctor type</b></label>
    <input type="text" placeholder="doctor Type" name="dtype" required>


    <label for="mobile"><b>Mobile no</b></label>
    <input type="number" placeholder="Enter mobile no" name="mobile" required>

    


    <button type="submit">LOGIN</a></button>
</button>

      
</form>

</body>
</html>
