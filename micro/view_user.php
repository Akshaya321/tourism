<html>
<head>
<style>
    body{
        background-image: url('./img3.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
<center><button><a href=home.html>HOME</a></button></center>
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
    echo "<th>USER NAME</th>";
    echo "<th>ADDRESS</th>";
    echo "<th>MOBILE</th>";
    echo "<th>DISTRICT</th>";
    echo "<th>EMAIL</th>";
    



    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM registration");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["userid"]. "</td>";
        echo "<td>" .$row["name"]. "</td>";
        echo "<td>" .$row["address"]. "</td>";
        echo "<td>" .$row["mobile"]. "</td>";
        echo "<td>" .$row["district"]. "</td>";
        echo "<td>" .$row["email"]. "</td>";
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
