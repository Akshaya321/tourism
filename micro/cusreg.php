<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "tourism";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}
$Id = $_POST["Id"];
$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$district = $_POST["district"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirmpass = $_POST["confirmpassword"];

$sql = "INSERT INTO customer (name,address,email,mobile,district,username,password,confirmpass) 
VALUES ('$name', '$address', '$email', '$mobile', '$district',  '$username',  '$password', '$confirmpass', '$address')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		if(window.confirm('Registration succsesfully'))
		{
			window.location.href='index.html';
		};</script>
	<?php
}
else{
	?>
	<script>
		if(window.confirm('Oops!!!!!  Registration  failed '))
		{
			window.location.href='index.html';
		};</script>
	<?php
}


?>