  <?php 

    require_once("connec5.php");
    $query = " select * from denter";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
</style>
</head>
 
   

  <h1><img src="https://images.vexels.com/media/users/3/128044/isolated/preview/94f0b955807b088de5dc109c019b6fc9-health-care-medical-sign-by-vexels.png" style="width:10%">E HEALTHCARE ONLINE CONSULTATION AND MEDICAL SUBSCRIPTION</h1>
  
<center><h1>VIEW PATIENTS</h1><center>
 
  <body>
    <section> <!-- TABLE CONSTRUCTION-->
        <table><div class="row">
  <div class="column">
    <div class="card">

                            <tr> 
                                <td><b>Name</b></td> 
                                 
                                <td><b>Service name</b></td> 
                            </tr>
                          </div>
                        </div>
                      </div>
              <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $username = $row['username'];
                                        
                                       
                                        $des = $row['des'];
                                         
                            ?>
                                    <tr>
                                        <td><?php echo $username ?></td>
                                         
                                        <td><?php echo $des ?></td>
                                        
                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   
 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>