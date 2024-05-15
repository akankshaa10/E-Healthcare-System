 <!DOCTYPE html>


 
<html>

<head>
<title>Insert Page page</title>
</head>

<body>
	<style>
	{
  background-color:black;
}</style>
<center>
<?php
 
$conn = mysqli_connect("localhost", "root", "", "enroll");

// Check connection
if($conn === false){
die("ERROR: Could not connect. "
. mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$name = $_REQUEST['name']; 
$se= $_REQUEST['se'];
 
 
 


$sql = "INSERT INTO semi VALUES ('$name',
 '$se')";

if(mysqli_query($conn, $sql)){

echo '<script>alert("Seminar updated Sucessfully.❤")</script>';require 'abcd14.php';  

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