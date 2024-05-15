 <?php 

    require_once("connec.php");
    $query = " select * from cus ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>view reviews</title>
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

  <center><h1>REVIEWS OF PATIENTS</h1><center>
  
  <body>
    <section> <!-- TABLE CONSTRUCTION-->
        <table>
                            <tr> 
                                <td> Patient name </td> 
                                <td> Doctor name</td> 
                                <td> Review</td> 
                            </tr>
              <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $pname = $row['pname'];
                                        $dname = $row['dname'];
                                       
                                        $riew= $row['riew'];
                                         
                            ?>
                                    <tr>
                                        <td><?php echo $pname ?></td>
                                        <td><?php echo $dname ?></td>
                                        <td><?php echo $riew ?></td>
                                        
                                        
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