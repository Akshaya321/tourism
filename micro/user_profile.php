<html><body>
<input type="hidden" readonly value="<?php session_start(); $userid=$_SESSION['userid']; echo $userid; ?>">
<style>
    body{
        background-image: url('./feedimg.jpg');
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
    echo "<th>USER ID</th>";
    echo "<th>USER NAME</th>";
    echo "<th>ADDRESS</th>";
    echo "<th>MOBILE</th>";
    echo "<th>DISTRICT</th>";
    echo "<th>EMAIL</th>";



    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM registration where userid=$userid");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["userid"]. "</td>";
        $z=$row["userid"];
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
<html>
    <body align="center">
<button><a href="userprofile_update.php">UPDATE PROFILE</a></button>
<button><a href="user_delete.php?id=<?php echo $z ?>">DELETE ME</a></button>
<button><a href="cushome.php">HOME</a></button>
</body></html>