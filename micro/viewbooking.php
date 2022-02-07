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
    $dbname = "tourism";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "<table>";
    echo "<tr>";
    echo "<th>USER ID</th>";
    echo "<th>PACKAGE ID</th>";
    echo "<th>CALENDER</th>";
    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM booking");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["userid"]. "</td>";
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
