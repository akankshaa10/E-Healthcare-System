 <?php 

    require_once("connection10.php");
    $query = " select * from kaj ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>View patients</title>
</head>
 <style type='text/css'>
   
  
  h1 {
    color:pink;
}

h2 {
    color:WHITE;
;
}


<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'georgia';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
                    .button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: green;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: green;
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
</head>
   
   
</style>
 

  <h1><img src="https://images.vexels.com/media/users/3/128044/isolated/preview/94f0b955807b088de5dc109c019b6fc9-health-care-medical-sign-by-vexels.png" style="width:10%">E HEALTHCARE ONLINE CONSULTATION AND MEDICAL SUBSCRIPTION</h1>
  
 <center><h1>VIEW PATIENTS</h1><center>
   <button class="button" onclick ="document.location='con7.php'">NEXT<< </a></button>

  <body>
    <section> <!-- TABLE CONSTRUCTION-->
        <table>
                            <tr> 
                                <td> Username </td> 
                                <td> Mobile no</td> 
                                <td>Appointment Date</td> 
                            </tr>
              <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $username = $row['username'];
                                        $mobile = $row['mobile'];
                                       
                                        $des = $row['des'];
                                         
                            ?>
                                    <tr>
                                        <td><?php echo $username ?></td>
                                        <td><?php echo $mobile ?></td>
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