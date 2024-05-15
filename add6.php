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

   


 <form name="f1" action = "index7.php" onsubmit = "return validation()" method = "POST">  
<div class="col-md-2 float-right text-white">
        <a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
  <div class="imgcontainer">
    <img src="avatardefault_92824.png" alt="Avatar" class="avatar">
  </div>


<p><CENTER><B></B></P></CENTER>
  <div class="container">
    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><BR><BR>

    <label for="Mobile"><b>Mobile no</b></label>
    <input type="number" placeholder="Enter mobile no" name="mobile" required>

      
    <label for="des"><b>Date</b></label>
    <input type="text" placeholder="enter date" name="des" required><BR><BR>

    
    <button type="submit">   
     LOGIN</a></button>
</button></button><BR><BR><BR><BR><BR><BR><BR><BR>
    
      
</form>
 
</body>
</html>






