  <!DOCTYPE html>
<html>

<head>
<title>Insert Page page</title>
</head>

<body>
<center>
<?php
 
// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "", "denter");

// Check connection
if($conn === false){
die("ERROR: Could not connect. "
. mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$username = $_REQUEST['username']; 
$password= $_REQUEST['password'];
 
$des = $_REQUEST['des'];
 


$sql = "INSERT INTO enter VALUES ('$username',
 '$password','$des')";

if(mysqli_query($conn, $sql)){

echo '<script>alert("service added sucessfully.❤")</script>';require 'abcd16.php';  

//echo nl2br("\n$fname\n $mob\n "
//. "$passw\n $cpassw\n $eml"."$cty\n $stat\n $pinc\n $fadd");
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