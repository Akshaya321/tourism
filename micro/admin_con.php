<?php
	session_start();

	$conn=mysqli_connect("localhost", "root", "", "tourism");

	if(!$conn){
		die("Error: Failed to connect to database!");
	}

		$email = $_POST['email'];
		$password = $_POST['password'];
    $result=  ("SELECT * FROM `admin` WHERE `username`='$email' && `password`='$password'");

		$query = mysqli_query($conn,$result);
		$fetch=mysqli_fetch_array($query);
		$count=mysqli_num_rows($query);

		if($count > 0){
			$_SESSION['users_id']=$fetch['users_id'];
     		header('Location:home.html');
			$_SESSION['user']=$fetch['firstname'];
			//$_SESSION['users_id']=$row['users_id'];
		}

		else{
			$_SESSION['tmp']="Invalid username or password!";
			header('Location: adminlog.php');
		  }
?>