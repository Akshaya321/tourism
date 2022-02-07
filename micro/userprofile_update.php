<html>
<head>
<title>update profile</title>
<style>
    body{
        background-image: url('./feedimg.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
<a href="cushome.php"><p align="right">HOME</p></a>
</head>

<body>
<h1><center>POFILE UPDATE</center></h1>

<form action="userprofile_updateconn.php" method="post">
<table align="center">
<center><tr><th></th><td><input type="hidden" name="userid" autofocus required readonly value=<?php session_start(); $userid = $_SESSION['userid']; echo $userid; ?></td></tr></center>
<tr><td>Name:</td>
<td><input type="text" name="name" required autofocus></td></tr>
<tr><td>Address:</td>
<td><textarea type="text" name="address" required></textarea></td></tr>
<tr><td>Mobile:</td>
<td><input type="text" name="mobile" pattern="[0-9]+" maxlength="10" minlength="10" required></td></tr>
<tr><td>District:</td>
<td><input type="text" name="district" required autofocus></td></tr>
<tr><td>Password:</td>
<td><input type="text" name="password" minlength="6" required autofocus></td></tr>


<!---<tr><td>Gender:</td>
<td><input type="radio" value="male"/>M
    <input type="radio" value="female"/>F</td></tr>-->
</table>
<center><input type="submit" value="UPDATE"></center>
</form>
</body>
</html>