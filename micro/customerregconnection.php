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

$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$district = $_POST['district'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO registration (`name`, `address`, mobile, district, email, `password`)
VALUES ('$name', '$address', '$mobile', '$district', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>
<button><a  href="index.html">GO TO INDEX</a></button>