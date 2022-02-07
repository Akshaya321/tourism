<html>
<head>
<title>Delete Package</title>
<style>
	body{
		background: url('./deleimg.jpg');
		background-repeat:no-repeat;
        background-size:cover;
        font-size: large;
        color: beige;
		font-weight: bold;
	}
</style>
</head>
<body>

       
<a href="home.html">
    <p align="left">HOME</p>
    </a>
<form align='center' style='color:black;margin-top:250px'method="POST" action="">
Package ID:<input type="text" name="packageid" ><br><br>
<button name="submit" value="submit">Submit</button><br>
</form>
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="tourism";

$conn = mysqli_connect($servername,$username,$password,$database_name);
if(isset($_POST['submit']))
{
	$packageid=$_POST['packageid'];
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
	$query="DELETE FROM `addpackage` WHERE packageid= '$packageid'";
	$data=mysqli_query($con,$query);
	if(!$data)
	{
		echo " table error";
	}
	

    

}
?>
</body>

</html>