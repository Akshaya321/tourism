<html>
<head>
<style>
    body{
        background-image: url('./img3.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
<left><button><a href=home.html>HOME</a></button></left>
</head>
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
echo "<table>";
echo "<tr><th style='border : solid 1px black;'>USER ID</th>
<th style='border : solid 1px black;'>FIRST NAME</th>
<th style='border : solid 1px black;'>LAST NAME</th>
<th style='border : solid 1px black;'>EMAIL</th>
<th style='border : solid 1px black;'>MOBILE NO</th>
<th style='border : solid 1px black;'>MESSAGE</th></tr>";
$sql = "SELECT *from feedback";  
$result = mysqli_query($conn, $sql);  
      while($row=mysqli_fetch_assoc($result)){
          echo "<tr><td style='border : solid 1px black;'>".$row['fid']."</td>";
          echo "<td style='border : solid 1px black;'>".$row['fname']."</td>";
          echo "<td style='border : solid 1px black;'>".$row['lname']."</td>";
          echo "<td style='border : solid 1px black;'>".$row['email']."</td>";
          echo "<td style='border : solid 1px black;'>".$row['mobile']."</td>";
          echo "<td style='border : solid 1px black; width:50%'>".$row['msg'].".</td></tr>";
      }
      echo "</table>";

?>