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
 
$conn = mysqli_connect("localhost", "root", "", "review");

// Check connection
if($conn === false){
die("ERROR: Could not connect. "
. mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$pname = $_REQUEST['pname']; 
$dname= $_REQUEST['dname'];
 
$riew = $_REQUEST['riew'];
 


$sql = "INSERT INTO cus VALUES ('$pname',
 '$dname','$riew')";

if(mysqli_query($conn, $sql)){

echo '<script>alert("your review posted sucessfully.❤")</script>';require 'abcd12.php';  

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