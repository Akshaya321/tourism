<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "tourism";

$conn = mysqli_connect($servername, $username, $password, $dbname);

  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  

$packagename =$_POST['packagename'];
$location =$_POST['location'];
$price =$_POST['price'];
$features=$_POST['features'];
$details =$_POST['details'];
$image=$_POST['image'];

$sql = "INSERT INTO addpackage (`packagename`, `location`, price, features, details, `image`)
VALUES ('$packagename', '$location', '$price', '$features', '$details', '$image')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('LOCATION:home.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>