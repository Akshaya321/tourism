<html>
    <body align="top_left">
<button><a href="cushome.php">HOME</a></button>
<style>
    body{
        background-image: url("./img3.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
</body></html>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tourism";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "<table>";
    echo "<tr>";
    echo "<th>BOOKING ID</th>";
    echo "<th>PACKAGE ID</th>";
    echo "<th>DATE</th>";
    echo "</tr>";
 session_start(); $userid=$_SESSION['userid']; 
    $result = mysqli_query($con,"SELECT * FROM booking where userid=$userid");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["bookid"]. "</td>";
        echo "<td>" .$row["packageid"]. "</td>";
        echo "<td>" .$row["calender"]. "</td>";
        echo "</tr>";
    $i++;
    }
echo "</table>";
    }
    else{
    echo "No result found";
    }

    $con->close();
    ?>
