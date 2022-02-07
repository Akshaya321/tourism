<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="tourism";

$conn = new mysqli($servername, $username, $password, $dbname);

if(! $conn)
{
	die('could not connect: ' . mysqli_error());
}
$packageid=$_POST['packageid']
$packagename=$_POST['packagename'];
$location=$_POST['location'];
$price=$_POST['price'];
$features=$_POST['features'];
$details=$_POST['details'];

$sql = "INSERT INTO addpackage (`packageid`, `packagename`, `location`, price, features, details)
VALUES (`$packageid',`$packagename', '$location', '$price', '$features', '$details')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>


