<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="tourism";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email=$_POST['email'];
$password = $_POST['password'];

$sql = "select *from registration where email = '$email' and password = '$password'";  
$result = mysqli_query($conn, $sql);  
$fetch = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result);  
  
if($count > 0){
  session_start();
  $_SESSION['userid']=$fetch['userid'];
  //echo $_SESSION['userid'];
  header('LOCATION:cushome.php');
}
else{
  echo "<h1>Login failed .Invalid username or password </h1> ";
}

?>