
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="tourism";

$conn = mysqli_connect($servername,$username,$password,$database_name);

    $userid=$_POST['userid'];
	$con = mysqli_connect("localhost","root","","tourism");
	if (!$con)
	{
		echo "<br>";
		die('Could not connect: ' . mysqli_error());
	}
	
	$db=mysqli_select_db($con,"tourism");
	if (!$db)
	{
		die('Could not find database: ' . mysqli_error());
	}
	$query="delete from registration where userid='$userid'";
	$data=mysqli_query($con,$query);
    header('Location:index.html');
	if(!$data)
	{
		echo " table error";
	}

?>