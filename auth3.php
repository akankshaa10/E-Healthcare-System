 <?php     
    include('conn3.php');

    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from pawar where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<script>alert("LOGIN SUCCESSFULLY.NOW YOU ARE MEMBER OF THIS SYSTEM.❤")</script>';
              require 'abcd.php';  
        }
        else{  
                echo '<script>alert("Login failed. Invalid username or password.")</script>';   
        }  

        
?>  