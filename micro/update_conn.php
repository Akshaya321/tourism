<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourism";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$packageid=$_POST['packageid'];
$packagename=$_POST['packagename'];
$location=$_POST['location'];
$price=$_POST['price'];
$features=$_POST['features'];
$details=$_POST['details'];
$image=$_POST['image'];

$sql = "UPDATE addpackage SET `packagename`='$packagename', `location`='$location', `price`='$price', `features`='$features',`details`='$details', `image`='$image' WHERE packageid=$packageid";
 
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('LOCATION:viewpack_admin.php');
} 

else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>