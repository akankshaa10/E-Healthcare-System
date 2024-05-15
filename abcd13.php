 <?php 

    require_once("connec2.php");
    $query = " select * from sem";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>view seminars</title>
</head>
 <style type='text/css'>
    {
      background-color: teal;
    }
      
  h1 {
    color:pink;
}

h2 {
    color:WHITE;

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
            background-color: teal;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 20px;
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
button {
  background-color: teal;
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
   
   
</style>
 

  <h1><img src="https://images.vexels.com/media/users/3/128044/isolated/preview/94f0b955807b088de5dc109c019b6fc9-health-care-medical-sign-by-vexels.png" style="width:10%">E HEALTHCARE ONLINE CONSULTATION AND MEDICAL SUBSCRIPTION</h1>

  <center><h1>VIEW SEMINARS</h1><center>
    <button class="button1" onclick ="document.location='semlog.php'">
<B>ENROLL TO SEMINAR</a></button>

  
<button class="button1" onclick ="document.location='seminar.php'">
      <B>VIEW ANOTHER SEMINAR</a></button>
      
       
        <P><B>COPY LINK TO JOIN SEMINAR...!</B></P>
</button>
  <body>
    <section> <!-- TABLE CONSTRUCTION-->
        <table>
                            <tr> 
                                <td><b> SEMINAR NAME </b></td> 
                                <td> <b>SEMINAR DETAILS</b></td> 
                                <td> <b>SEMINAR LINK</b></td> 

                            </tr>
              <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $sname = $row['sname'];
                                        $det = $row['det'];
                                       
                                        $lin= $row['lin'];
                                         
                            ?>
                                    <tr>
                                        <td><?php echo $sname ?></td>
                                        <td><?php echo $det ?></td>
                                        <td><?php echo $lin ?></td>
                                        
                                        
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