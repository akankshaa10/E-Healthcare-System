 <!DOCTYPE html>
<html>

<head>
<title>Insert Page page</title>
</head>

<body>
<center>
<?php
  
 
$conn = mysqli_connect("localhost", "root", "", "visi");

// Check connection
if($conn === false){
die("ERROR: Could not connect. "
. mysqli_connect_error());
}

 
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
 $address = $_REQUEST['address'];
 $dtype = $_REQUEST['dtype'];
$mobile= $_REQUEST['mobile'];
  

$sql = "INSERT INTO logs VALUES ('$username',
'$password','$address',$dtype','$mobile')";

if(mysqli_query($conn, $sql)){

echo '<script>alert("YOU ARE LOG IN SUCCESSFULLY.NOW YOU ARE MEMBER OF THIS SYSTEM.❤.") </script>';require 'boo2.php';
 
} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
</center>
</body>

</html>