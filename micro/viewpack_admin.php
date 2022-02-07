<html><body>

<a href=update_package.php>UPDATE......</a>
<a href=delete.php>DELETE.....</a>
<a href=home.html>HOME</a>

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
    echo "<th>PACKAGE ID</th>";
    echo "<th>PACKAGE NAME</th>";
    echo "<th>LOCATION</th>";
    echo "<th>PRICE</th>";
    echo "<th>FEATURES</th>";
    echo "<th>DETAILES</th>";
    echo "<th>IMAGE</th>";
    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM addpackage");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["packageid"]. "</td>";
        echo "<td>" .$row["packagename"]. "</td>";
        echo "<td>" .$row["location"]. "</td>";
        echo "<td>" .$row["price"]. "</td>";
        echo "<td>" .$row["features"]. "</td>";
        echo "<td>" .$row["details"]. "</td>";
        
        $pathx= "../images/";
        
        $file=$row["image"];
        echo "<td>";
        echo '<img src="'.$pathx.$file.'" height=100 width=100>';
        echo "</td>";

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