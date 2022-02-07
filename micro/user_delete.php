<html>
<head>
<title>Deleteuser</title>
</head>
<body>
    <style>
    body{
        background-image: url('./feedimg.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
        
    </style>
       <br><br>
	<?php  $userid=$_GET['id']; ?>
<center><button><a href="cushome.php">HOME</a></button></center>
<form align='center'method="POST" action="user_delete_conform.php"><br>
<input type="text" name="userid" value="<?php echo $userid ?>" readonly  ><br><br>
<button name="submit" value="submit">CONFORM DELETE</button><br>
</form>

</body>

</html>


	
