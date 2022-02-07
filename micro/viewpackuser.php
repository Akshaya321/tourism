<html><body>
<style>
    body{
        background-image: url('./img3.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
 <form action="bookingpack.php" method="POST">    
     
    <?php
    session_start();
    $userid=$_SESSION['userid'];
    ?>
    <input type="hidden" name="userid" value="<?php echo $userid; ?>" readonly>

 PACKAGE ID:<input type="text" name="packageid"autofocus/>
<input type="hidden" readonly value="<?php session_start(); $userid=$_SESSION['userid']; echo $userid; ?>">
 <input type="submit" value="BOOK">
 <button><a href="cushome.php">HOME</a></button>
</form>
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
    echo "<th>DETAILS</th>";
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


    $i++;
    }
echo "</table>";
    }
    else{
    die("No result found");
    }

    $con->close();
    ?>