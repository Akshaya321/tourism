<html><body>
<input type="hidden" readonly value="<?php session_start(); $userid=$_SESSION['userid']; echo $userid; ?>">
<style>
    body{
        background-image: url("../images/bg8.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
        
    </style>

</body></html>
<?php


$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$district=$_POST['district'];
$password=$_POST['password'];


$host="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tourism";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
//$conn = new mysqli("localhost","root","","alf");#connect database password and all

if (mysqli_connect_error()) {
		die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
	}
else{
	$sql="UPDATE registration SET `name`='$name', `address`='$address', mobile='$mobile', `district`='$district', `password`='$password' WHERE `userid`='$userid'";
	if ($conn->query($sql)) {
		echo "record is updated successfully";	
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}
	$conn->close();
}



?>
<button><a  href="user_profile.php">GO TO PROFILE</a></button>