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

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$msg = $_POST['msg'];



$sql = "INSERT INTO feedback (`fname`, `lname`, `email`, `mobile`, `msg`)
VALUES ('$fname', '$lname', '$email', '$mobile', '$msg')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('LOCATION:cushome.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>