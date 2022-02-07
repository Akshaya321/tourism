<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update</title>
<body align="top_left">
<button><a href="home.html">HOME</a></button>
<style>
    body{
        background-image: url('./pack.jpg');
        background-repeat:no-repeat;
        background-size:cover;
        font-size: large;
        color: beige;
    }
    .h1{
        color: red;
    }
</style>    
</head>

<body>
<form action="update_conn.php" method="post" >
<div class="h1"><br>
<h1><center>UPDATE PACKAGE</center></h1></div><br>
<table align="center" border="0">
<tr><td>Package Id: </td><br>
<td><input type="text" name="packageid" required autofocus/></td></tr>
<tr><td>Package Name: </td>
<td><br><input type="text" name="packagename" required /></td></tr>
<tr><td>Location: </td>
<td><br><input type="text" name="location"/></td></tr>
<tr><td>Price: </td>
<td><br><input type="number" name="price"/></td></tr>
<tr><td>Features: </td>
<td><br><input type="text" name="features"/></td></tr>
<tr><td></td>
<tr><td>Details: </td>
<td><br><input type="text" name="details"/></td></tr>
<tr><td></td>
<tr><td>Image: </td>
<td><br><input type="file" name="image"required autofocus /></td></tr>
</table>
<center><br><input type="submit" value="UPDATE" /></center>
</form>
</body>
</html>